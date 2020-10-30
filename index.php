<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- headタグの中にbootstrapのcss -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="./style.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Welcome to LIFE with flower</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">About us</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>

<!-- カルーセル -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./img/sample8.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./img/sample9.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./img/sample10.jpeg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<!-- カード -->
<div class="container">
  <div class="card" style="width: 18rem;">
  <img src="./img/sample4.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">title</h5>
    <p class="card-text">My favorite color</p>
    <a href="#" class="btn btn-primary">Choose</a>
  </div>
  </div>
  <div class="card" style="width: 18rem;">
  <img src="./img/sample4.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  </div>
  <div class="card" style="width: 18rem;">
  <img src="./img/sample4.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

</div>

<!-- フォーム -->
<div class="container form">
  <div class="box">
    <h2>お問い合わせフォーム</h2>
    <form method="POST" action="check.php">
      
      
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Name</label>
          <input type="text" name="name" class="form-control" id="inputEmail4" >
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail4">Email</label>
        <input type="text" name="email" class="form-control" id="inputEmail4" placeholder="    @gmail.com">
      </div>
      <div class="form-group">
        <label for="inputAddress2">Content</label><br>
        <textarea name="content" cols="40" rows="5"></textarea>
        <!-- <input type="text" name="address" class="form-control" id="inputAddress2" > -->
      </div>
      <!-- <div class="form-row">
        <div class="form-group col-md-4">
          <label for="inputState">Response required by</label>
          <select id="inputState" class="form-control">
            <option selected>email</option>
            <option>call</option>
            <option>letter</option>
          </select>
        </div>
        
      </div> -->
      <!-- <div class="form-group">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">
            Check me out
          </label>
        </div>
      </div> -->
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>

<!-- footer -->
<footer class="section footer-classic context-dark bg-image" style="background: #2d3246;">
  <div class="container">
    <div class="row row-30">
      <div class="col-md-4 col-xl-5">
        <div class="pr-xl-4">
          <p>We are an award-winning creative agency, dedicated to the best result in web design, promotion, business consulting, and marketing.</p>
          <!-- Rights-->
          <p class="rights"><span>©  </span><span class="copyright-year">2018</span><span> </span><span>Waves</span><span>. </span><span>All Rights Reserved.</span></p>
        </div>
      </div>
      <div class="col-md-4">
        <h5>Contacts</h5>
        <dl class="contact-list">
          <dt>Address:</dt>
          <dd>798 South Park Avenue, Jaipur, Raj</dd>
        </dl>
        <dl class="contact-list">
          <dt>email:</dt>
          <dd><a href="mailto:#">dkstudioin@gmail.com</a></dd>
        </dl>
        <dl class="contact-list">
          <dt>phones:</dt>
          <dd><a href="tel:#">https://karosearch.com</a> <span>or</span> <a href="tel:#">https://karosearch.com</a>
          </dd>
        </dl>
      </div>
      <div class="col-md-4 col-xl-3">
        <h5>Links</h5>
        <ul class="nav-list">
          <li><a href="#">About</a></li>
          <li><a href="#">Items</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Contacts</a></li>
          <li><a href="#">Photo gallery</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="row no-gutters social-container">
    <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-facebook"></span><span>Facebook</span></a></div>
    <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-instagram"></span><span>instagram</span></a></div>
    <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-twitter"></span><span>twitter</span></a></div>
    <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-youtube-play"></span><span>google</span></a></div>
  </div>
</footer>

  <!-- bodyの一番最後にJavaScript -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>