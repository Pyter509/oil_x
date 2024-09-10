<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/sportsteam/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Sep 2024 08:22:38 GMT -->
<head>
<title>Sports Team</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Sports Team template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ asset('css/styles/bootstrap/bootstrap.min.css')}}">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/animate.css">
<link rel="stylesheet" type="text/css" href="{{ asset('css/styles/main_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('css/styles/responsive.css')}}">
<script nonce="ac76d4b9-4507-4cf3-8f41-8f22e96d29ae">try{(function(w,d){!function(j,k,l,m){if(j.zaraz)console.error("zaraz is loaded twice");else{j[l]=j[l]||{};j[l].executed=[];j.zaraz={deferred:[],listeners:[]};j.zaraz._v="5796";j.zaraz.q=[];j.zaraz._f=function(n){return async function(){var o=Array.prototype.slice.call(arguments);j.zaraz.q.push({m:n,a:o})}};for(const p of["track","set","debug"])j.zaraz[p]=j.zaraz._f(p);j.zaraz.init=()=>{var q=k.getElementsByTagName(m)[0],r=k.createElement(m),s=k.getElementsByTagName("title")[0];s&&(j[l].t=k.getElementsByTagName("title")[0].text);j[l].x=Math.random();j[l].w=j.screen.width;j[l].h=j.screen.height;j[l].j=j.innerHeight;j[l].e=j.innerWidth;j[l].l=j.location.href;j[l].r=k.referrer;j[l].k=j.screen.colorDepth;j[l].n=k.characterSet;j[l].o=(new Date).getTimezoneOffset();if(j.dataLayer)for(const w of Object.entries(Object.entries(dataLayer).reduce(((x,y)=>({...x[1],...y[1]})),{})))zaraz.set(w[0],w[1],{scope:"page"});j[l].q=[];for(;j.zaraz.q.length;){const z=j.zaraz.q.shift();j[l].q.push(z)}r.defer=!0;for(const A of[localStorage,sessionStorage])Object.keys(A||{}).filter((C=>C.startsWith("_zaraz_"))).forEach((B=>{try{j[l]["z_"+B.slice(7)]=JSON.parse(A.getItem(B))}catch{j[l]["z_"+B.slice(7)]=A.getItem(B)}}));r.referrerPolicy="origin";r.src="../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(j[l])));q.parentNode.insertBefore(r,q)};["complete","interactive"].includes(k.readyState)?zaraz.init():j.addEventListener("DOMContentLoaded",zaraz.init)}}(w,d,"zarazData","script");window.zaraz._p=async bv=>new Promise((bw=>{if(bv){bv.e&&bv.e.forEach((bx=>{try{const by=d.querySelector("script[nonce]"),bz=by?.nonce||by?.getAttribute("nonce"),bA=d.createElement("script");bz&&(bA.nonce=bz);bA.innerHTML=bx;bA.onload=()=>{d.head.removeChild(bA)};d.head.appendChild(bA)}catch(bB){console.error(`Error executing script: ${bx}\n`,bB)}}));Promise.allSettled((bv.f||[]).map((bC=>fetch(bC[0],bC[1]))))}bw()}));zaraz._p({"e":["(function(w,d){})(window,document)"]});})(window,document)}catch(e){throw fetch("/cdn-cgi/zaraz/t"),e;};</script></head>
<body>
<div class="super_container">

@include('./inc/header')

<div class="menu">
<div class="menu_background">
<div class="menu_container d-flex flex-column align-items-end justify-content-start">
<div class="menu_close">close</div>
<div class="menu_user_area">
<ul class="d-flex flex-row align-items-start justify-content-end">
<li><a href="{{ route('register') }}">Sign up</a></li>
<li><a href="{{ route('login') }}">Sign in</a></li>
</ul>
</div>
<nav class="menu_nav">
<ul class="text-right">
<li><a href="{{url('/')}}">HOME</a></li>
<li><a href="{{route('guest.about')}}">ABOUT GARAGE</a></li>
<li><a href="team.html">the team</a></li>
<li><a href="blog.html">NEWS</a></li>
<li><a href="{{route('guest.contacts')}}">CONTACTS</a></li>
</ul>
</nav>
<div class="menu_links">
<ul class="d-flex flex-row align-items-start justify-content-start">
<li><a href="#">GET Tickets</a></li>
<li><a href="#">Shop</a></li>
</ul>
</div>
</div>
</div>
</div>

<div class="home">

<div class="home_slider_container">
<div class="owl-carousel owl-theme home_slider">

<div class="home_slide">
<div class="background_image" style="background-image:url(images/index.jpg)"></div>
<div class="home_container">
<div class="container">
<div class="row">
<div class="col-lg-10">
<div class="home_content" data-animation-in="zoomInDown" data-animation-out="animate-out fadeOut">
<div class="home_text d-flex flex-row align-items-center justify-content-start">
<div>2</div>
<span>days until the next match</span>
</div>
<div class="next_match">
<div>
<div class="next_match_home">
<a href="#">The Tigers</a>
</div>
<div class="next_match_guest">
<a href="#">The Bears</a>
</div>
</div>
<div class="vs">vs</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="home_slide">
<div class="background_image" style="background-image:url(images/index.jpg)"></div>
<div class="home_container">
<div class="container">
<div class="row">
<div class="col-lg-10">
<div class="home_content" data-animation-in="zoomInDown" data-animation-out="animate-out fadeOut">
<div class="home_text d-flex flex-row align-items-center justify-content-start">
<div>2</div>
<span>days until the next match</span>
</div>
<div class="next_match">
<div>
<div class="next_match_home">
<a href="#">The Tigers</a>
</div>
<div class="next_match_guest">
<a href="#">The Bears</a>
</div>
</div>
<div class="vs">vs</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="home_slide">
<div class="background_image" style="background-image:url(images/index.jpg)"></div>
<div class="home_container">
<div class="container">
<div class="row">
<div class="col-lg-10">
<div class="home_content" data-animation-in="zoomInDown" data-animation-out="animate-out fadeOut">
<div class="home_text d-flex flex-row align-items-center justify-content-start">
<div>2</div>
<span>days until the next match</span>
</div>
<div class="next_match">
<div>
<div class="next_match_home">
<a href="#">The Tigers</a>
</div>
<div class="next_match_guest">
<a href="#">The Bears</a>
</div>
</div>
<div class="vs">vs</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="home_slider_nav">Next</div>
</div>
</div>

<div class="breaking_news d-flex flex-row align-items-start justify-content-start">
<div class="breaking_news_title text-right">Breaking News</div>
<div class="breaking_news_content">
<div class="breaking_news_slider_container">
<div class="owl-carousel owl-theme breaking_news_slider">

<div class="breaking_news_slide">Pellentesque enim nunc, vehicula in massa quis, consectetur tempus nulla</div>

<div class="breaking_news_slide">Enim nunc, vehicula in massa quis, consectetur tempus</div>

<div class="breaking_news_slide">Vehicula in massa quis, consectetur tempus nulla. Pellentesque enim nunc</div>
</div>
</div>
</div>
</div>

<div class="results">
<div class="container">
<div class="row">
<div class="col">
<div class="section_title_container">
<div class="section_title text-center"><h1>latest results</h1></div>
</div>
</div>
</div>
<div class="row results_row">
<div class="col">
<div class="results_title_container text-center">
<div class="results_title">great win in finals</div>
<div class="results_subtitle">Mon 25 Sept, Champions League</div>
</div>
<div class="results_container d-flex flex-row align-items-start justify-content-start">
<div class="result text-right">
<div class="result_content d-flex flex-row align-items-end justify-content-start">
<div class="team_image d-flex flex-column align-items-start justify-content-end"><img src="images/result_1.jpg" alt></div>
<div class="text-center">
<div class="result_num">2</div>
<div class="result_team">Bulls Club</div>
</div>
</div>
<div class="result_text text-left">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam accumsan dolor id enim lacinia, sed feugiat ex suscipit.</p>
</div>
</div>
<div class="result text-left">
<div class="result_content d-flex flex-row align-items-end justify-content-start">
<div class="text-center">
<div class="result_num">2</div>
<div class="result_team">Tigers Club</div>
</div>
<div class="team_image d-flex flex-column align-items-end justify-content-end"><img src="images/result_2.jpg" alt></div>
</div>
<div class="result_text text-right">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam accumsan dolor id enim lacinia, sed feugiat ex suscipit.</p>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col text-center">
<div class="button results_button"><a href="#">See More Info</a></div>
</div>
</div>
</div>
</div>

<div class="upcoming_latest">
<div class="container">
<div class="row">

<div class="col-xl-6">
<div class="section_title_container">
<div class="section_title light"><h1>upcoming events</h1></div>
<div class="section_subtitle">What's next this month</div>
</div>
<div class="custom_list_a">
<div class="upcoming_image"><img src="images/football_player.png" alt></div>
<ul>
<li class="d-flex flex-row align-items-center justify-content-start">
<div class="custom_list_image"><img src="images/upcoming_1.jpg" alt></div>
<div class="custom_list_title_container">
<div class="custom_list_title"><a href="blog.html">New T-shirts launch</a></div>
<div class="custom_list_date">August 25, 2018 / 17 UTC</div>
</div>
<div class="custom_list_link ml-auto"><a href="blog.html">See More</a></div>
</li>
<li class="d-flex flex-row align-items-center justify-content-start">
<div class="custom_list_image"><img src="images/upcoming_2.jpg" alt></div>
<div class="custom_list_title_container">
<div class="custom_list_title"><a href="blog.html">Team presentation</a></div>
<div class="custom_list_date">August 25, 2018 / 17 UTC</div>
</div>
<div class="custom_list_link ml-auto"><a href="blog.html">See More</a></div>
</li>
<li class="d-flex flex-row align-items-center justify-content-start">
<div class="custom_list_image"><img src="images/upcoming_3.jpg" alt></div>
<div class="custom_list_title_container">
<div class="custom_list_title"><a href="blog.html">Press Conference</a></div>
<div class="custom_list_date">August 25, 2018 / 17 UTC</div>
</div>
<div class="custom_list_link ml-auto"><a href="blog.html">See More</a></div>
</li>
<li class="d-flex flex-row align-items-center justify-content-start">
<div class="custom_list_image"><img src="images/upcoming_4.jpg" alt></div>
<div class="custom_list_title_container">
<div class="custom_list_title"><a href="blog.html">New T-shirts launch</a></div>
<div class="custom_list_date">August 25, 2018 / 17 UTC</div>
</div>
<div class="custom_list_link ml-auto"><a href="blog.html">See More</a></div>
</li>
</ul>
</div>
</div>

<div class="col-xl-6 custom_lists_col">
<div class="section_title_container">
<div class="section_title light"><h1>latest games</h1></div>
<div class="section_subtitle">Results</div>
</div>
<div class="custom_list_b">
<ul>
<li class="d-flex flex-row align-items-center justify-content-start">
<div class="d-flex flex-row align-items-center justify-content-start">
<div class="team_logo d-flex flex-column align-items-center justify-content-center"><img src="images/logo_1.png" alt></div>
<div class="team_name"><a href="team.html">The Alligators</a></div>
</div>
<div class="text-center">
<div>Football League</div>
<div>8 : 3</div>
<div>August 25, 2018 / 17 UTC</div>
</div>
<div class="d-flex flex-row align-items-center justify-content-end">
<div class="team_name text-right"><a href="team.html">The Tigers</a></div>
<div class="team_logo d-flex flex-column align-items-center justify-content-center"><img src="images/logo_2.png" alt></div>
</div>
</li>
<li class="d-flex flex-row align-items-center justify-content-start">
<div class="d-flex flex-row align-items-center justify-content-start">
<div class="team_logo d-flex flex-column align-items-center justify-content-center"><img src="images/logo_2.png" alt></div>
<div class="team_name"><a href="team.html">The Alligators</a></div>
</div>
<div class="text-center">
<div>Football League</div>
<div>8 : 3</div>
<div>August 25, 2018 / 17 UTC</div>
</div>
<div class="d-flex flex-row align-items-center justify-content-end">
<div class="team_name text-right"><a href="team.html">The Eagles</a></div>
<div class="team_logo d-flex flex-column align-items-center justify-content-center"><img src="images/logo_4.png" alt></div>
</div>
</li>
<li class="d-flex flex-row align-items-center justify-content-start">
<div class="d-flex flex-row align-items-center justify-content-start">
<div class="team_logo d-flex flex-column align-items-center justify-content-center"><img src="images/logo_3.png" alt></div>
<div class="team_name"><a href="team.html">Denver Pumas</a></div>
</div>
<div class="text-center">
<div>Football League</div>
<div>8 : 3</div>
<div>August 25, 2018 / 17 UTC</div>
</div>
<div class="d-flex flex-row align-items-center justify-content-end">
<div class="team_name text-right"><a href="team.html">The Tigers</a></div>
<div class="team_logo d-flex flex-column align-items-center justify-content-center"><img src="images/logo_2.png" alt></div>
</div>
</li>
<li class="d-flex flex-row align-items-center justify-content-start">
<div class="d-flex flex-row align-items-center justify-content-start">
<div class="team_logo d-flex flex-column align-items-center justify-content-center"><img src="images/logo_2.png" alt></div>
<div class="team_name"><a href="team.html">The Tigers</a></div>
</div>
<div class="text-center">
<div>Football League</div>
<div>8 : 3</div>
<div>August 25, 2018 / 17 UTC</div>
</div>
<div class="d-flex flex-row align-items-center justify-content-end">
<div class="team_name text-right"><a href="team.html">The Eagles</a></div>
<div class="team_logo d-flex flex-column align-items-center justify-content-center"><img src="images/logo_4.png" alt></div>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>

<div class="milestones">
<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/milestones.jpg" data-speed="0.8"></div>
<div class="container">
<div class="row milestones_row">

<div class="col-xl-3 col-md-6 milestone_col">
<div class="milestone d-flex flex-row align-items-start justify-content-start">
<div class="milestone_icon"><img src="images/icon_1.svg" alt="https://www.flaticon.com/authors/freepik"></div>
<div class="milestone_content">
<div class="milestone_counter" data-end-value="23" data-sign-after="k">0</div>
<div class="milestone_title">Team players</div>
<div class="milestone_subtitle">Lorem ipsum dolor sit amet,</div>
</div>
</div>
</div>

<div class="col-xl-3 col-md-6 milestone_col">
<div class="milestone d-flex flex-row align-items-start justify-content-start">
<div class="milestone_icon"><img src="images/icon_2.svg" alt="https://www.flaticon.com/authors/freepik"></div>
<div class="milestone_content">
<div class="milestone_counter" data-end-value="120">0</div>
<div class="milestone_title">Trophies</div>
<div class="milestone_subtitle">Lorem ipsum dolor sit amet,</div>
</div>
</div>
</div>

<div class="col-xl-3 col-md-6 milestone_col">
<div class="milestone d-flex flex-row align-items-start justify-content-start">
<div class="milestone_icon"><img src="images/icon_3.svg" alt="https://www.flaticon.com/authors/freepik"></div>
<div class="milestone_content">
<div class="milestone_counter" data-end-value="7">0</div>
<div class="milestone_title">Medals</div>
<div class="milestone_subtitle">Lorem ipsum dolor sit amet,</div>
</div>
</div>
</div>

<div class="col-xl-3 col-md-6 milestone_col">
<div class="milestone d-flex flex-row align-items-start justify-content-start">
<div class="milestone_icon"><img src="images/icon_4.svg" alt="https://www.flaticon.com/authors/freepik"></div>
<div class="milestone_content">
<div class="milestone_counter" data-end-value="36">0</div>
<div class="milestone_title">Kicks/Match</div>
<div class="milestone_subtitle">Lorem ipsum dolor sit amet,</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="player">
<div class="container">
<div class="row">
<div class="col-xl-6">
<div class="player_content">
<div class="section_title_container">
<div class="section_title"><h1>player of the month</h1></div>
<div class="section_subtitle">What's next this month</div>
</div>
<div class="player_name_container d-flex flex-row align-items-end justify-content-start">
<div class="player_num">83</div>
<div class="player_name">Michael Smith</div>
</div>
<div class="player_text">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam accumsan dolor id enim lacinia, sed feugiat ex suscipit. Nunc molestie malesuada pellentesque. Quisque mattis ante ut nisl tristique ornare. Aenean interdum dictum augue, quis egestas erat lacinia in. Proin dictum commodo nulla ut mattis. Pellentesque vel commodo nisi. Donec eget purus eget ex efficitur tristique. Nulla ut mollis justo.</p>
<p>Nam turpis nulla, ullamcorper volutpat faucibus ut, facilisis in elit. Nam blandit diam vel felis porta, vitae congue nulla feugiat. Vestibulum rhoncus odio elit, at aliquet sem posuere vel.</p>
</div>
</div>
</div>
<div class="col-xl-6">
<div class="player_images d-flex flex-row align-items-end justify-content-start">
<div class="player_image"><img src="images/player_1.png" alt></div>
<div class="player_image"><img src="images/player_2.png" alt></div>
</div>
</div>
</div>
</div>
</div>

<div class="news">
<div class="container">
<div class="row">
<div class="col">
<div class="section_title_container">
<div class="section_title"><h1>latest news</h1></div>
<div class="section_subtitle">What's next this month</div>
</div>
</div>
</div>
<div class="row news_row">

<div class="col-lg-4">
<div class="news_post">
<div class="news_post_image">
<img src="images/news_1.jpg" alt>
<div class="news_post_date">
<a href="#">
<div class="d-flex flex-column align-items-center justify-content-center">
<div>10</div>
<div>sept</div>
</div>
</a>
</div>
</div>
<div class="news_post_content">
<div class="tags">
<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
<li><a href="blog.html">News</a></li>
</ul>
</div>
<div class="news_post_title"><a href="blog.html">T-shirt release date</a></div>
<div class="news_post_text">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam accumsan dolor id enim lacinia, sed feugiat ex suscipit.</p>
</div>
</div>
</div>
</div>

<div class="col-lg-4">
<div class="news_post">
<div class="news_post_image">
<img src="images/news_2.jpg" alt>
<div class="news_post_date">
<a href="#">
<div class="d-flex flex-column align-items-center justify-content-center">
<div>10</div>
<div>sept</div>
</div>
</a>
</div>
</div>
<div class="news_post_content">
<div class="tags">
<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
<li><a href="blog.html">News</a></li>
</ul>
</div>
<div class="news_post_title"><a href="blog.html">Junior league Openings</a></div>
<div class="news_post_text">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam accumsan dolor id enim lacinia, sed feugiat ex suscipit.</p>
</div>
</div>
</div>
</div>

<div class="col-lg-4">
<div class="news_post">
<div class="news_post_image">
<img src="images/news_3.jpg" alt>
<div class="news_post_date">
<a href="#">
<div class="d-flex flex-column align-items-center justify-content-center">
<div>10</div>
<div>sept</div>
</div>
</a>
</div>
</div>
<div class="news_post_content">
<div class="tags">
<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
<li><a href="blog.html">News</a></li>
</ul>
</div>
<div class="news_post_title"><a href="blog.html">The summer transfers</a></div>
<div class="news_post_text">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam accumsan dolor id enim lacinia, sed feugiat ex suscipit.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="cta">
<div class="container">
<div class="row">
<div class="col">
<div class="cta_content d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-start">
<div class="cta_text">Would you like to join our <span>football club?</span></div>
<div class="cta_button button ml-md-auto"><a href="#">See More Info</a></div>
</div>
</div>
</div>
</div>
</div>


@include('./inc/footer')

</div>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="{{asset('css/styles/bootstrap-4.1.2/popper.js')}}"></script>
<script src="{{asset('css/styles/bootstrap-4.1.2/bootstrap.min.js')}}"></script>
<script src="{{asset('plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{asset('plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{asset('plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{asset('plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{asset('plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{asset('plugins/OwlCarousel2-2.3.4/owl.carousel.js')}}"></script>
<script src="{{asset('plugins/easing/easing.js')}}"></script>
<script src="{{asset('plugins/progressbar/progressbar.min.js')}}"></script>
<script src="{{asset('plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"8c05c5832f367930","version":"2024.8.0","serverTiming":{"name":{"cfExtPri":true,"cfL4":true}},"token":"cd0b4b3a733644fc843ef0b185f98241","b":1}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/sportsteam/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Sep 2024 08:22:52 GMT -->
</html>