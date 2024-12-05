<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Kamar - Kost Prima</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #1a1a2e;
            color: #fff;
        }
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .room-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }
        .room-card {
            background-color: #2e2e3a;
            border-radius: 8px;
            overflow: hidden;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
            padding: 15px;
        }
        .room-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }
        .room-card h3 {
            margin: 10px 0;
        }
        .room-card p {
            margin: 5px 0;
        }
        .status {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            font-weight: bold;
            margin: 10px 0;
        }
        .dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            display: inline-block;
        }
        .dot.red {
            background-color: red;
        }
        .dot.green {
            background-color: green;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Status Kamar - Kost Prima</h1>
            <p>Kost minimalis dengan desain sederhana dan fungsional, cocok untuk kenyamanan Anda.</p>
        </div>
        <div class="room-grid">
            <?php
            // Data kamar dengan status detail
            $rooms = [
                ["Kamar 1", "3x5 lantai dasar", "Terisi", "https://i.pinimg.com/736x/2a/98/a6/2a98a6dd3479f95236f48367ac91fd89.jpg", "Oleh A1"],
                ["Kamar 2", "3x5 lantai dasar", "Kosong", "https://i.pinimg.com/736x/2a/98/a6/2a98a6dd3479f95236f48367ac91fd89.jpg", ""],
                ["Kamar 3", "3x5 lantai dasar", "Kosong", "https://i.pinimg.com/736x/2a/98/a6/2a98a6dd3479f95236f48367ac91fd89.jpg", ""],
                ["Kamar 4", "3x5 lantai dasar", "Terisi", "https://i.pinimg.com/736x/2a/98/a6/2a98a6dd3479f95236f48367ac91fd89.jpg", "Oleh B2"],
                ["Kamar 5", "3x5 lantai dasar", "Kosong", "https://i.pinimg.com/736x/2a/98/a6/2a98a6dd3479f95236f48367ac91fd89.jpg", ""],
                ["Kamar 6", "3x5 lantai dasar", "Kosong", "https://i.pinimg.com/736x/2a/98/a6/2a98a6dd3479f95236f48367ac91fd89.jpg", ""],
                ["Kamar 7", "3x5 lantai 2", "Kosong", "https://i.pinimg.com/736x/2a/98/a6/2a98a6dd3479f95236f48367ac91fd89.jpg", ""],
                ["Kamar 8", "3x5 lantai 2", "Terisi", "https://i.pinimg.com/736x/2a/98/a6/2a98a6dd3479f95236f48367ac91fd89.jpg", "Oleh C3"],
                ["Kamar 9", "3x5 lantai 2", "Kosong", "https://i.pinimg.com/736x/2a/98/a6/2a98a6dd3479f95236f48367ac91fd89.jpg", ""],
                ["Kamar 10", "3x5 lantai 2", "Kosong", "https://i.pinimg.com/736x/2a/98/a6/2a98a6dd3479f95236f48367ac91fd89.jpg", ""],
            ];

            // Menampilkan data kamar
            foreach ($rooms as $room) {
                echo '<div class="room-card">';
                echo '<img src="' . $room[3] . '" alt="Foto ' . $room[0] . '">';
                echo '<h3>' . $room[0] . '</h3>';
                echo '<p>Luas: ' . $room[1] . '</p>';
                echo '<div class="status">';
                if ($room[2] === "Terisi") {
                    echo '<span class="dot red"></span> ' . $room[2] . ' - ' . $room[4];
                } else {
                    echo '<span class="dot green"></span> ' . $room[2];
                }
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</body>
</html>
