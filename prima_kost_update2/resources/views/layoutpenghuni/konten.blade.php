
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AdminLTE 3 | Top Navigation</title>

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('assets/css/adminlte.min.css?v=3.2.0') }}">
{{-- <script data-cfasync="false" nonce="2829dbb2-106f-42eb-b94e-93b482eae4bf">try{(function(w,d){!function(j,k,l,m){if(j.zaraz)console.error("zaraz is loaded twice");else{j[l]=j[l]||{};j[l].executed=[];j.zaraz={deferred:[],listeners:[]};j.zaraz._v="5828";j.zaraz._n="2829dbb2-106f-42eb-b94e-93b482eae4bf";j.zaraz.q=[];j.zaraz._f=function(n){return async function(){var o=Array.prototype.slice.call(arguments);j.zaraz.q.push({m:n,a:o})}};for(const p of["track","set","debug"])j.zaraz[p]=j.zaraz._f(p);j.zaraz.init=()=>{var q=k.getElementsByTagName(m)[0],r=k.createElement(m),s=k.getElementsByTagName("title")[0];s&&(j[l].t=k.getElementsByTagName("title")[0].text);j[l].x=Math.random();j[l].w=j.screen.width;j[l].h=j.screen.height;j[l].j=j.innerHeight;j[l].e=j.innerWidth;j[l].l=j.location.href;j[l].r=k.referrer;j[l].k=j.screen.colorDepth;j[l].n=k.characterSet;j[l].o=(new Date).getTimezoneOffset();if(j.dataLayer)for(const t of Object.entries(Object.entries(dataLayer).reduce(((u,v)=>({...u[1],...v[1]})),{})))zaraz.set(t[0],t[1],{scope:"page"});j[l].q=[];for(;j.zaraz.q.length;){const w=j.zaraz.q.shift();j[l].q.push(w)}r.defer=!0;for(const x of[localStorage,sessionStorage])Object.keys(x||{}).filter((z=>z.startsWith("_zaraz_"))).forEach((y=>{try{j[l]["z_"+y.slice(7)]=JSON.parse(x.getItem(y))}catch{j[l]["z_"+y.slice(7)]=x.getItem(y)}}));r.referrerPolicy="origin";r.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(j[l])));q.parentNode.insertBefore(r,q)};["complete","interactive"].includes(k.readyState)?zaraz.init():j.addEventListener("DOMContentLoaded",zaraz.init)}}(w,d,"zarazData","script");window.zaraz._p=async mY=>new Promise((mZ=>{if(mY){mY.e&&mY.e.forEach((m$=>{try{const na=d.querySelector("script[nonce]"),nb=na?.nonce||na?.getAttribute("nonce"),nc=d.createElement("script");nb&&(nc.nonce=nb);nc.innerHTML=m$;nc.onload=()=>{d.head.removeChild(nc)};d.head.appendChild(nc)}catch(nd){console.error(`Error executing script: ${m$}\n`,nd)}}));Promise.allSettled((mY.f||[]).map((ne=>fetch(ne[0],ne[1]))))}mZ()}));zaraz._p({"e":["(function(w,d){})(window,document)"]});})(window,document)}catch(e){throw fetch("/cdn-cgi/zaraz/t"),e;};</script></head> --}}
<style>
    body {
    font-family: 'Source Sans Pro', sans-serif;
    background-color: #f8f9fa;
    }
    .hero {
    background-color: #212529;
    color: white;
    text-align: center;
    padding: 50px 20px;
    }
    .hero h1 {
    font-size: 2.5rem;
    margin-bottom: 20px;
    }
    .feature-icon {
    font-size: 2rem;
    color: #17a2b8;
    }
    .features {
    background-color: #fff;
    padding: 30px 20px;
    }
    .features h5 {
    font-weight: bold;
    }
    .image-overlay {
    position: relative;
    text-align: center;
    color: white;
    }
    .image-overlay img {
    width: 100%;
    opacity: 0.8;
    }
    .image-overlay .overlay-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 1.8rem;
    font-weight: bold;
    }
    .footer {
    background-color: #212529;
    color: white;
    padding: 30px 20px;
    text-align: center;
    }
</style>
</head>

<body class="hold-transition layout-top-nav">
<div class="wrapper">

<!-- Navbar -->
@include('layoutpenghuni.navbar')
<!-- /.navbar -->

<div class="content-wrapper">
    @yield('konten')

<!-- Main Footer -->
@include('layoutpenghuni.footer')
</div>

<!-- jQuery -->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/js/adminlte.min.js?v=3.2.0') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('assets/js/demo.js') }}"></script>
</body>
</html>
