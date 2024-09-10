

<footer class="footer">
<div class="footer_container">
<div class="container">
<div class="row">
<div class="col-lg-5 order-lg-1 order-3">
<div class="footer_image d-flex flex-column align-items-lg-start align-items-center justify-content-end">
<div><img src="images/footer.png" alt></div>
</div>
</div>
<div>

 @yield('about')

</div>

</div>
<div class="footer_bar">
<div class="container">
<div class="row">
<div class="col">
<div class="footer_bar_content d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-start">

<nav class="footer_nav ml-md-auto order-md-2 order-1">
<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
<li><a href="{{url('/')}}">Home</a></li>
<li><a href="team.html">The Team</a></li>
<li><a href="#">Tickets</a></li>
<li><a href="blog.html">News</a></li>
<li><a href="{{route('guest.contacts')}}">Contact</a></li>
</ul>
</nav>
</div>
</div>
</div>
</div>
</div>
</footer>