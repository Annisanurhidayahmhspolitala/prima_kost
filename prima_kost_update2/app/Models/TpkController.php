<?php

namespace App\Http\Controllers;

use App\Models\kamar;
use App\Models\Rating;
use Illuminate\Http\Request;

class TpkController extends Controller
{
    public function calculate()
    {
        // Kriteria dan Matriks Perbandingan Berpasangan untuk AHP
        $criteria = ["Kenyamanan", "Kebersihan", "Keamanan", "Rating"];
        $pairwiseMatrix = [
            [1, 3, 4, 7],
            [1 / 3, 1, 2, 5],
            [1 / 4, 1 / 2, 1, 3],
            [1 / 7, 1 / 5, 1 / 3, 1],
        ];

        // Normalisasi Matriks
        $sumColumns = array_map(function ($col) use ($pairwiseMatrix) {
            return array_sum(array_column($pairwiseMatrix, $col));
        }, array_keys($pairwiseMatrix[0]));

        $normMatrix = array_map(function ($row) use ($sumColumns) {
            return array_map(function ($value, $index) use ($sumColumns) {
                return $value / $sumColumns[$index];
            }, $row, array_keys($row));
        }, $pairwiseMatrix);

        // Hitung Eigen Vector (Bobot Kriteria)
        $eigenVector = array_map(function ($row) {
            return array_sum($row) / count($row);
        }, $normMatrix);

        // Konsistensi AHP
        $consistencyVector = array_map(function ($row, $index) use ($pairwiseMatrix, $eigenVector) {
            return array_sum(array_map(function ($value, $colIndex) use ($eigenVector) {
                return $value * $eigenVector[$colIndex];
            }, $row, array_keys($row)));
        }, $pairwiseMatrix, array_keys($pairwiseMatrix));

        $lambdaMax = array_sum(array_map(function ($value, $index) use ($eigenVector) {
            return $value / $eigenVector[$index];
        }, $consistencyVector, array_keys($eigenVector))) / count($eigenVector);

        $n = count($criteria);
        $ci = ($lambdaMax - $n) / ($n - 1);
        $randomIndex = [1 => 0.00, 2 => 0.00, 3 => 0.58, 4 => 0.90, 5 => 1.12];
        $ri = $randomIndex[$n];
        $cr = $ci / $ri;

        // Ambil data kamar dan rata-rata rating dari model Rating
        $ratings = Rating::with('kamar')
            ->selectRaw('id_kamar, 
                         AVG(kenyamanan) as kenyamanan, 
                         AVG(kebersihan) as kebersihan, 
                         AVG(keamanan) as keamanan, 
                         AVG(rating) as rating')
            ->groupBy('id_kamar')
            ->get();

        // Format data untuk SAW
        $alternatives = $ratings->map(function ($rating) {
            return [
                "Kamar" => $rating->kamar->nama_kamar ?? "Kamar {$rating->id_kamar}",
                "Kenyamanan" => $rating->kenyamanan,
                "Kebersihan" => $rating->kebersihan,
                "Keamanan" => $rating->keamanan,
                "Rating" => $rating->rating,
            ];
        })->toArray();

        // Normalisasi Data SAW
        $maxValues = array_reduce($alternatives, function ($carry, $alternative) {
            foreach ($alternative as $key => $value) {
                if ($key !== "Kamar") { // Abaikan kolom "Kamar"
                    $carry[$key] = max($carry[$key] ?? 0, $value);
                }
            }
            return $carry;
        }, []);

        $normalizedData = array_map(function ($alternative) use ($maxValues) {
            return array_map(function ($value, $key) use ($maxValues) {
                return $key === "Kamar" ? $value : $value / $maxValues[$key];
            }, $alternative, array_keys($alternative));
        }, $alternatives);

        // Hitung Nilai Preferensi
        // Hitung Nilai Preferensi
        $scores = array_map(function ($alternative) use ($eigenVector) {
            return array_sum(array_map(function ($value, $index) use ($eigenVector) {
                return $value * $eigenVector[$index]; // Kalikan nilai alternatif dengan bobot kriteria
            }, array_values(array_slice($alternative, 1)), array_keys($eigenVector)));
        }, $normalizedData);

        // Peringkat Alternatif
        $rankedAlternatives = array_map(null, array_keys($alternatives), $scores);
        usort($rankedAlternatives, function ($a, $b) {
            return $b[1] <=> $a[1]; // Urutkan berdasarkan skor tertinggi
        });


        return view('tpk.tampil', [
            "criteria" => $criteria,
            "eigenVector" => $eigenVector,
            "consistencyRatio" => $cr,
            "alternatives" => $alternatives,
            "scores" => $scores,
            "rankedAlternatives" => $rankedAlternatives,
        ]);
    }

    public function Beranda()
    {
        // Kriteria dan Matriks Perbandingan Berpasangan untuk AHP
        $criteria = ["Kenyamanan", "Kebersihan", "Keamanan", "Rating"];
        $pairwiseMatrix = [
            [1, 3, 4, 7],
            [1 / 3, 1, 2, 5],
            [1 / 4, 1 / 2, 1, 3],
            [1 / 7, 1 / 5, 1 / 3, 1],
        ];

        // Normalisasi Matriks
        $sumColumns = array_map(function ($col) use ($pairwiseMatrix) {
            return array_sum(array_column($pairwiseMatrix, $col));
        }, array_keys($pairwiseMatrix[0]));

        $normMatrix = array_map(function ($row) use ($sumColumns) {
            return array_map(function ($value, $index) use ($sumColumns) {
                return $value / $sumColumns[$index];
            }, $row, array_keys($row));
        }, $pairwiseMatrix);

        // Hitung Eigen Vector (Bobot Kriteria)
        $eigenVector = array_map(function ($row) {
            return array_sum($row) / count($row);
        }, $normMatrix);

        // Konsistensi AHP
        $consistencyVector = array_map(function ($row, $index) use ($pairwiseMatrix, $eigenVector) {
            return array_sum(array_map(function ($value, $colIndex) use ($eigenVector) {
                return $value * $eigenVector[$colIndex];
            }, $row, array_keys($row)));
        }, $pairwiseMatrix, array_keys($pairwiseMatrix));

        $lambdaMax = array_sum(array_map(function ($value, $index) use ($eigenVector) {
            return $value / $eigenVector[$index];
        }, $consistencyVector, array_keys($eigenVector))) / count($eigenVector);

        $n = count($criteria);
        $ci = ($lambdaMax - $n) / ($n - 1);
        $randomIndex = [1 => 0.00, 2 => 0.00, 3 => 0.58, 4 => 0.90, 5 => 1.12];
        $ri = $randomIndex[$n];
        $cr = $ci / $ri;

        // Ambil data kamar dari model Kamar
        $kamar = kamar::all();

        // Ambil data kamar dan rata-rata rating dari model Rating
        $ratings = Rating::with('kamar')
            ->selectRaw('id_kamar, 
                         AVG(kenyamanan) as kenyamanan, 
                         AVG(kebersihan) as kebersihan, 
                         AVG(keamanan) as keamanan, 
                         AVG(rating) as rating')
            ->groupBy('id_kamar')
            ->get();

        // Gabungkan data kamar dengan data rating
        $alternatives = $ratings->map(function ($rating) use ($kamar) {
            $kamarData = $kamar->find($rating->id_kamar);
            return [
                "Kamar" => $kamarData->nama_kamar ?? "Kamar {$rating->id_kamar}",
                "Kenyamanan" => $rating->kenyamanan,
                "Kebersihan" => $rating->kebersihan,
                "Keamanan" => $rating->keamanan,
                "Rating" => $rating->rating,
            ];
        })->toArray();

        // Normalisasi Data SAW
        $maxValues = array_reduce($alternatives, function ($carry, $alternative) {
            foreach ($alternative as $key => $value) {
                if ($key !== "Kamar") { // Abaikan kolom "Kamar"
                    $carry[$key] = max($carry[$key] ?? 0, $value);
                }
            }
            return $carry;
        }, []);

        $normalizedData = array_map(function ($alternative) use ($maxValues) {
            return array_map(function ($value, $key) use ($maxValues) {
                return $key === "Kamar" ? $value : $value / $maxValues[$key];
            }, $alternative, array_keys($alternative));
        }, $alternatives);

        // Hitung Nilai Preferensi
        $scores = array_map(function ($alternative) use ($eigenVector) {
            return array_sum(array_map(function ($value, $index) use ($eigenVector) {
                return $value * $eigenVector[$index];
            }, array_values(array_slice($alternative, 1)), array_keys($eigenVector)));
        }, $normalizedData);

        // Peringkat Alternatif
        $rankedAlternatives = array_map(null, $alternatives, $scores);
        usort($rankedAlternatives, function ($a, $b) {
            return $b[1] <=> $a[1];
        });

        // Ambil 3 kamar teratas
        $top3Kamar = array_slice($rankedAlternatives, 0, 3);

        return view('tpenghuni.berandapenghuni', [
            "criteria" => $criteria,
            "eigenVector" => $eigenVector,
            "consistencyRatio" => $cr,
            "alternatives" => $alternatives,
            "scores" => $scores,
            "rankedAlternatives" => $rankedAlternatives,
            "top3Kamar" => $top3Kamar, // Data kamar teratas
        ]);
    }
}
