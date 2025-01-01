
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Prima Kost | Website</title>
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('assets/css/adminlte.min.css?v=3.2.0') }}">
<script data-cfasync="false" nonce="8cd141a3-3959-44fe-abb6-cc85dacb4726">try{(function(w,d){!function(df,dg,dh,di){if(df.zaraz)console.error("zaraz is loaded twice");else{df[dh]=df[dh]||{};df[dh].executed=[];df.zaraz={deferred:[],listeners:[]};df.zaraz._v="5847";df.zaraz._n="8cd141a3-3959-44fe-abb6-cc85dacb4726";df.zaraz.q=[];df.zaraz._f=function(dj){return async function(){var dk=Array.prototype.slice.call(arguments);df.zaraz.q.push({m:dj,a:dk})}};for(const dl of["track","set","debug"])df.zaraz[dl]=df.zaraz._f(dl);df.zaraz.init=()=>{var dm=dg.getElementsByTagName(di)[0],dn=dg.createElement(di),dp=dg.getElementsByTagName("title")[0];dp&&(df[dh].t=dg.getElementsByTagName("title")[0].text);df[dh].x=Math.random();df[dh].w=df.screen.width;df[dh].h=df.screen.height;df[dh].j=df.innerHeight;df[dh].e=df.innerWidth;df[dh].l=df.location.href;df[dh].r=dg.referrer;df[dh].k=df.screen.colorDepth;df[dh].n=dg.characterSet;df[dh].o=(new Date).getTimezoneOffset();if(df.dataLayer)for(const dq of Object.entries(Object.entries(dataLayer).reduce(((dr,ds)=>({...dr[1],...ds[1]})),{})))zaraz.set(dq[0],dq[1],{scope:"page"});df[dh].q=[];for(;df.zaraz.q.length;){const dt=df.zaraz.q.shift();df[dh].q.push(dt)}dn.defer=!0;for(const du of[localStorage,sessionStorage])Object.keys(du||{}).filter((dw=>dw.startsWith("_zaraz_"))).forEach((dv=>{try{df[dh]["z_"+dv.slice(7)]=JSON.parse(du.getItem(dv))}catch{df[dh]["z_"+dv.slice(7)]=du.getItem(dv)}}));dn.referrerPolicy="origin";dn.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(df[dh])));dm.parentNode.insertBefore(dn,dm)};["complete","interactive"].includes(dg.readyState)?zaraz.init():df.addEventListener("DOMContentLoaded",zaraz.init)}}(w,d,"zarazData","script");window.zaraz._p=async cY=>new Promise((cZ=>{if(cY){cY.e&&cY.e.forEach((c$=>{try{const da=d.querySelector("script[nonce]"),db=da?.nonce||da?.getAttribute("nonce"),dc=d.createElement("script");db&&(dc.nonce=db);dc.innerHTML=c$;dc.onload=()=>{d.head.removeChild(dc)};d.head.appendChild(dc)}catch(dd){console.error(`Error executing script: ${c$}\n`,dd)}}));Promise.allSettled((cY.f||[]).map((de=>fetch(de[0],de[1]))))}cZ()}));zaraz._p({"e":["(function(w,d){})(window,document)"]});})(window,document)}catch(e){throw fetch("/cdn-cgi/zaraz/t"),e;};</script></head>

<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('assets/img/logo.png') }}" alt="logo" height="200" width="200">
</div>

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

<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/js/adminlte.min.js?v=3.2.0') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('assets/js/demo.js') }}"></script>

</body>
</html>
