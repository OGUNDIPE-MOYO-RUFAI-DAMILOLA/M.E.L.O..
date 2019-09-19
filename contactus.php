<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet">
    <link href="style1.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>

<!-- Main navigation -->
<header>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
    <div class="container-fluid">
      <a class="navbar-brand offset-md-1" href="index.php"><img src="logo.png" width="40" height="40"  class="d-inline-block align-top" alt="M.E.L.O logo">
        <strong>M.E.L.O</strong>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse offset-md-6" id="navbarSupportedContent-7">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Music</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->
  <!-- Full Page Intro -->
  <div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/89.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
    <!-- Mask & flexbox options-->
    <div class="mask rgba-indigo-strong d-flex justify-content-center align-items-center">
      <!-- Content -->
      <div class="container">
        <!--Grid row-->
        <div class="row pt-lg-5 mt-lg-5">
          <!--Grid column-->
          <div class="col-md-6 mb-5 mt-md-0 mt-5 white-text text-center text-md-left wow fadeInLeft" data-wow-delay="0.3s">
            <h1 class="display-4 font-weight-bold">Lorem ipsum</h1>
            <hr class="hr-light">
            <h6 class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem repellendus quasi fuga
            nesciunt dolorum nulla magnam veniam sapiente, fugiat! Commodi sequi non animi ea
            dolor molestiae, quisquam iste.</h6>
            <a class="btn btn-outline-white">Learn more</a>
          </div>
          <!--Grid column-->
          <!--Grid column-->
          <div class="col-md-6 col-xl-5 mb-4">
            <!--Form-->
            <div class="card wow fadeInRight" data-wow-delay="0.3s">
              <div class="card-body z-depth-2">
                <!--Header-->
                <div class="text-center">
                  <h3 class="dark-grey-text">
                    <strong>Write to us:</strong>
                  </h3>
                  <hr>
                </div>
                <!--Body-->
                <div class="md-form">
                  <i class="fa fa-user prefix grey-text"></i>
                  <input type="text" id="contact_name" class="form-control">
                  <label for="form3">Your name</label>
                </div>
                <div class="md-form">
                  <i class="fa fa-envelope prefix grey-text"></i>
                  <input type="text" id="contact_email" class="form-control">
                  <label for="form2">Your email</label>
                </div>
                <!--Textarea with icon prefix-->
                <div class="md-form">
                  <i class="fa fa-pencil-alt prefix grey-text"></i>
                  <textarea type="text" id="contact_mess" class="md-textarea form-control" rows="3"></textarea>
                  <label for="form8">Your message</label>
                </div>
                <div class="text-center mt-3">
                  <button class="btn btn-indigo" id="contact_send">Send</button>
                  <hr>
                  <fieldset class="form-check">
                    <input class="form-check-input" type="checkbox" id="checkbox1">
                    <label class="form-check-label" for="checkbox1" class="dark-grey-text">Subscribe me to the newsletter</label>
                  </fieldset>
                </div>
              </div>
            </div>
            <!--/.Form-->
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
      <!-- Content -->
    </div>
    <!-- Mask & flexbox options-->
  </div>
  <!-- Full Page Intro -->
</header>
<!-- Main navigation -->


<!--Footer requirement-->
<footer>
<?php require 'footer.php'; ?>
</footer>
<!--Footer requirement-->

       <!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/js/mdb.min.js"></script>
<script type="text/javascript" src="script.js"></script>
</body>
</body>
</html>