<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="css/index.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
      <script>
      $(document).ready(function(){
        $(".moveright").click(function(){
          $(".moveright").animate({left: '1000px'});
        });
      });

      function bigImg(x) {
        x.style.height = "auto";
        x.style.width = "700px";
      }

      function normalImg(x) {
        x.style.height = "auto";
        x.style.width = "500px";
      }
      </script>

      <title>Tree Exercise</title>

      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="50">

      <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="/">thisisthetree</a>

        <!-- Links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#section1">Welcome</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#section2">Move Right</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#section3">Hover</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#section4">Rotate</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#section6">Contact</a>
          </li>
        </ul>
      </nav>

      <div id="section1" class="container-fluid">
        <h1 class="center">Welcome</h1>
        <p class="center-text">Please look at the showcase of animations and the contact form below.</p>
      </div>

      <div id="section2" class="container-fluid">
        <h1>Move Right</h1>
        <p>This block showcases a jQuery onclick event. Click the image below to move it!</p>
        <div class="moveright">
           <img src="img/ladybird.jpg" alt="ladybird">
        </div>
      </div>
      <div id="section3" class="container-fluid">
        <h1>Hover</h1>
        <p>This block showcases two hover events. The image on the left is a CSS hover. The image on the right is a jQuery hover.</p>
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6">
              <img class="zoomcss" src="img/jaguar.jpg" alt="jaguar">
            </div>
            <div class="col-lg-6">
              <img class="zoomjquery" onmouseover="bigImg(this)" onmouseout="normalImg(this)" src="img/path.jpg" alt="path">
            </div>
          </div>
        </div>
      </div>
      <div id="section4" class="container-fluid">
        <h1>Rotate</h1>
        <p>This block showcases CSS3 animations. The first image is constantly rotating. The second image is constantly panning.</p>
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6">
              <img class="rotate" src="img/station.jpg" alt="">
            </div>
            <div class="col-lg-6">
              <img class="pan" src="img/station.jpg" alt"">
            </div>
          </div>
        </div>
      </div>
      <div id="section6" class="container-fluid">
        <div class="container">
        <h1>Contact Us</h1>
          <form action="contact.php" method="POST" class="was-validated">
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="name" class="form-control" id="name" placeholder="Enter name" name="name" required>
              <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
              <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea class="form-control" id="message" name="message" placeholder="Enter message" rows="4" cols="50" required></textarea>
              <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
    </body>
</html>
