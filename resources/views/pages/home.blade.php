@extends('layouts.layout')

@section('content')

<nav class="navbar navbar-expand-lg">
     <a class="navbar-brand mr-auto" href="#"><img src="/storage/img/pvc-logo.png" alt=""></a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
               <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
               <a class="nav-item nav-link" href="#">Courses</a>
               <a class="nav-item nav-link" href="#">Stories</a>
               <a class="nav-item nav-link" href="#">Partner</a>
               <a class="nav-item nav-link signup" href="/register">Register</a>
               <a class="nav-item nav-link signup" href="/login">Login</a>
          </div>
     </div>
</nav>
<header class="container-fluid p-0">
     <img src="/storage/img/bg.png" alt="" class="d-block m-0 p-0 img-fluid">
     <div class="hero-section text-center">
          <h1 class="text-center">Build Your Education.<br />
               Grow Together & Faster.</h1>
          <a href="http://" target="_blank" class="btn btn-primary">Explore</a>
          <img src="/storage/img/hero-img.png" alt="" class="d-block ml-auto mr-auto hero img-fluid">
          <img src="/storage/img/partner.png" alt="" class="d-block ml-auto mr-auto partner img-fluid">
     </div>
</header>
<div class="container">
     <div class="row">
          <div class="col-lg-6 col-md-5 col-sm-12 gallery mr-auto">
               <img src="/storage/img/gallery.png" alt="" class="img-fluid">
          </div>
          <div class="col-lg-6 col-md-5 col-sm-12 gallery-text px-5">
               <h3>We move education
                    one step forward.</h3>
               <div class="detail"><img src="/storage/img/green-dot.png" alt=""> Learn from home made more comfortable
               </div>
               <div class="detail"><img src="/storage/img/other-dot.png" alt="">Find the course based on your passion
               </div>
               <div class="detail"><img src="/storage/img/green-dot.png" alt="">Helping preparing the paperwork</div>
               <div class="detail"><img src="/storage/img/other-dot.png" alt="">24/7 Best teacher support</div>
               <div class="detail"><img src="/storage/img/green-dot.png" alt="">Trusted payment protection</div>
          </div>
     </div>
</div>
<div class="container-fluid feature">
     <h3 class="text-center">Our Feature Courses <br />
          That Might You Need</h3>
     <div class="card-group">
          <div class="card shadow-sm">
               <img src="/storage/img/card-img/card-1.png" class="card-img-top" alt="...">
               <div class="card-body">
                    <h5 class="card-title">User-Experience
                         Designer</h5>

                    <a href="http://" target="_blank" class="btn btn-primary mt-5">Learn More</a>
               </div>
          </div>
          <div class="card shadow-sm">
               <img src="/storage/img/card-img/card-2.png" class="card-img-top" alt="...">
               <div class="card-body">
                    <h5 class="card-title">Golang Developer</h5>

                    <a href="http://" target="_blank" class="btn btn-primary mt-5">Learn More</a>
               </div>
          </div>
          <div class="card shadow-sm">
               <img src="/storage/img/card-img/card-3.png" class="card-img-top" alt="...">
               <div class="card-body">
                    <h5 class="card-title">User-Interface
                         Designer</h5>

                    <a href="http://" target="_blank" class="btn btn-primary mt-5">Learn More</a>
               </div>
          </div>
          <div class="card shadow-sm">
               <img src="/storage/img/card-img/card-4.png" class="card-img-top" alt="...">
               <div class="card-body">
                    <h5 class="card-title">Python for
                         Data Scientist</h5>

                    <a href="http://" target="_blank" class="btn btn-primary mt-5">Learn More</a>
               </div>
          </div>
     </div>

</div>

<div class="newsletter container ml-auto mr-auto text-center">
     <h3 class="mt-5">Subscribe New Course</h3>
     <p class="text-muted mt-2">We promise never send you a spam</p>
     <form action="">
          <input type="text" placeholder="Type your email address...">
     </form>
</div>
@endsection