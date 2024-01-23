<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/phpmvc/public/css/bootstrap.css">
</head>
<body>
    <!-- Navbar -->
    <header class="mb-5">
      <nav class="navbar navbar-expand-lg fw-bold p-3 fixed-top navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand align-items-center" href="#"> <img src="assets/Logo-GG-w200.png" alt="" /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end me-5" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="#">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">ABOUT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">SERVICE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">GALLERY</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">BLOG</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">CONTACT</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Navbar -->

      <!-- Jumbotron -->
      <div class="banner-image w-100 d-flex justify-content-center align-items-center">
        <div class="content text-center">
          <h1 class="text-white mb-2">Green View For Good Life</h1>
          <p class="text-white mb-3">Prepare your garden with our profesional</p>
          <a class="btn btn-outline-light btn-lg" href="#!" role="button" style="background-color: rgb(40, 182, 97)">Hire Our Profesional Now <img src="assets/arrow-right.png" alt="" /></a>
        </div>
      </div>
    </header>
    <section id="about" class="m-5">
      <div class="container">
        <div class="row text-center">
          <div class="col mb-4">
            <h1>Why should we?</h1>
            <p>Because we believe you are our boss and we serve you with passion</p>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-sm-3">
            <img src="assets/Icon-star.png" alt="" class="mb-4" />
            <h5>Good Reputation Since '89</h5>
            <p>vim no duis nulla prodesset,ad eos tale aliquid</p>
          </div>
          <div class="col-sm-3">
            <img src="assets/Icon-legal-company.png" alt="" class="mb-4" />
            <h5>Legal Company</h5>
            <p>vim no duis nulla prodesset, ad eos tale aliquid</p>
          </div>
          <div class="col-sm-3">
            <img src="assets/Icon-award.png" alt="" class="mb-4" />
            <h5>Focus On Quality</h5>
            <p>vim no duis nulla prodesset, ad eos tale`</p>
          </div>
          <div class="col-sm-3">
            <img src="assets/Icon-good-price.png" alt="" class="mb-4" />
            <h5>Good Price</h5>
            <p>vim no duis nulla prodesset, ad eos tale aliquid</p>
          </div>
        </div>
      </div>
    </section>
    <section id="carousel" class="mb-5">
      <div class="container">
        <div class="row text-center text-white align-items-center">
          <div class="col mt-4">
            <h1 class="mb-2">Our Best Boss</h1>
            <p>Our client is our best boss who believes on us</p>
          </div>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators justify-content-end">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
          </div>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="d-flex">
                <img src="assets/Client-1.jpeg" class="ms-3 me-3" alt="...">
                <div>
                  <h2>JEAN FOX JR</h2>
                  <p class="x">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque quas nihil facilis ea voluptas quisquam, eveniet voluptatem totam repellat facere.</p>
                </div>
              </div>
            </div>         
            <div class="carousel-item">
              <div class="d-flex">
                <img src="assets/Client-3.jpeg" class="ms-3 me-3" alt="...">
                <div>
                  <h2>JEAN FOX JR</h2>
                  <p class="x">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque quas nihil facilis ea voluptas quisquam, eveniet voluptatem totam repellat facere.</p>
                </div>
              </div>
            </div>         
            <div class="carousel-item">
              <div class="d-flex">
                <img src="assets/Client-4.jpeg" class="ms-3 me-3" alt="...">
                <div>
                  <h2>JEAN FOX JR</h2>
                  <p class="x">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque quas nihil facilis ea voluptas quisquam, eveniet voluptatem totam repellat facere.</p>
                </div>
              </div>
            </div>  
            <div class="carousel-item">
              <div class="d-flex">
                <img src="assets/Client-5.jpg" class="ms-3 me-3" alt="...">
                <div>
                  <h2>JEAN FOX JR</h2>
                  <p class="x">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque quas nihil facilis ea voluptas quisquam, eveniet voluptatem totam repellat facere.</p>
                </div>
              </div>
            </div>  
          </div>
        </div>
      </div>
    </section>
    <section id="card" class="m-5">
      <div class="container">
        <div class="row text-center mb-4">
          <div class="col">
            <h1>Our Special Service</h1>
            <p>to give you a diferent think about garden, make you feel comfortable</p>
          </div>
        </div>
        <div class="row mb-5 align-items-center ">
          <div class="col-sm-3">
            <div class="card" style="width: 16rem;">
              <img src="assets/Service-1.jpg" class="card-img-top img-fluid" alt="...">
              <div class="card-body text-center">
                <h5 class="card-title">Grass Cutting</h5>
                <p class="card-text">Nonumy imperdiet at eam, te altera animal usu</p>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card" style="width: 16rem;">
              <img src="assets/Service-5.jpeg" class="card-img-top img-fluid" alt="...">
              <div class="card-body text-center">
                <h5 class="card-title">Planting</h5>
                <p class="card-text">Nonumy imperdiet at eam, te altera animal usu.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card" style="width: 16rem;">
              <img src="assets/Service-3.jpeg" class="card-img-top img-fluid" alt="...">
              <div class="card-body text-center">
                <h5 class="card-title">Seed Provider</h5>
                <p class="card-text">Nonumy imperdiet at eam, te altera animal usu.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card" style="width: 16rem;">
              <img src="assets/Service-4.jpeg" class="card-img-top img-fluid" alt="...">
              <div class="card-body text-center">
                <h5 class="card-title">Prepare Land Garden</h5>
                <p class="card-text">SNonumy imperdiet at eam, te altera animal usu</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> 
    <section id="worker">
      <img src="assets/worker2.png" alt="" style="float: right; height: 57vh; width: auto;">
      <div class="transparan">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, quasi velit accusantium dolorem asperiores sit animi commodi ipsa sunt est.
      </div>
      <div class="img-back">
        <div class="content align-items-center p-5 text-white">
          <h1 class="mb-2">Lets make your garden awesome</h1>
          <p class="mb-2">with our profesional we make wonderfull garden in your yard</p>
          <a class="btn btn-outline-light btn-lg" href="#!" role="button" style="background-color: rgb(40, 182, 97)">Hire Our Profesional Now <img src="assets/arrow-right.png" alt="" /></a>
        </div>
      </div>
    </section>
    <section id="recent-project" style="background-color: #20343f; padding: 20px;" class="mb-5">
      <div class="container">
        <div class="row text-center text-white">
          <div class="col">
            <h1>Recent Project</h1>
            <p>we serve with integrity and detail</p>
            <div class="row mt-3 mb-5">
              <div class="col-sm-3">
                <div class="card" style="width: 16rem;">
                  <img src="assets/Project-4.jpeg" class="card-img-top" alt="">
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card" style="width: 16rem;">
                  <img src="assets/Project-1.jpeg" class="card-img-top" alt="">
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card" style="width: 16rem;">
                  <img src="assets/Project-3.jpeg" class="card-img-top" alt="">
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card" style="width: 16rem;">
                  <img src="assets/Project-2.jpeg" class="card-img-top" alt="" height="169">
                </div>
              </div>
            </div>
            <a class="btn btn-outline-light btn-lg" href="#!" role="button" style="background-color: rgb(40, 182, 97)">More Project <img src="assets/arrow-right.png" alt="" /></a>
          </div>
        </div>
      </div>
    </section>
    <section id="pricing" class="m-5">
      <div class="container">
        <div class="row text-center mb-5">
          <div class="col">
            <h1>Pricing Guide</h1>
            <p>Choose your pricing plan and we will make your garden beauty</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card text-white mb-3" style="background-color: #20343f;">
              <div class="card-header border-success text-center" style="border-width: 3px;"><h1>Basic</h1></div>
              <div class="card-body text-center">
                <h5 class="card-title">$<span style="font-size: 4rem;">10</span>68</h5>
                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto neque recusandae fugiat nobis molestiae explicabo repellendus illum, aspernatur totam pariatur?</p>
                <a class="btn btn-outline-light btn-lg m-5" href="#!" role="button" style="background-color: rgb(40, 182, 97)">Contact Now<img src="assets/arrow-right.png" alt="" /></a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card text-white mb-3" style="background-color: #20343f;">
              <div class="card-header border-success text-center" style="border-width: 3px;"><h1>Standart</h1></div>
              <div class="card-body text-center">
                <h5 class="card-title">$<span style="font-size: 4rem;">23</span>83</h5>
                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto neque recusandae fugiat nobis molestiae explicabo repellendus illum, aspernatur totam pariatur?</p>
                <a class="btn btn-outline-light btn-lg m-5" href="#!" role="button" style="background-color: rgb(40, 182, 97)">Contact Now<img src="assets/arrow-right.png" alt="" /></a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card text-white mb-3" style="background-color: #20343f;">
              <div class="card-header border-success text-center" style="border-width: 3px;"><h1>Premium</h1></div>
              <div class="card-body text-center">
                <h5 class="card-title">$<span style="font-size: 4rem;">47</span>98</h5>
                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto neque recusandae fugiat nobis molestiae explicabo repellendus illum, aspernatur totam pariatur?</p>
                <a class="btn btn-outline-light btn-lg m-5" href="#!" role="button" style="background-color: rgb(40, 182, 97)">Contact Now<img src="assets/arrow-right.png" alt="" /></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="worker">
      <img src="assets/worker4.png" alt="" style="float: right; height: 57vh; width: auto;" class="me-5">
      <div class="transparan">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, quasi velit accusantium dolorem asperiores sit animi commodi ipsa sunt est.
      </div>
      <div class="img-back1">
        <div class="row text-white">
        <div class="col-md-4 ms-5">
          <img class="mt-3 mb-3" src="assets/Logo-GG-w200.png" alt="">
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam explicabo nobis facilis quibusdam distinctio officiis dignissimos natus? Iste, rem explicabo.</p>
          <a class="text-success" href="#">Read More ></a>
        </div>
        <div class="col-md-4 ">
          <h3 class="mt-3">Contact Us : </h3>
          <p><img src="assets/Footer-icon-phone.png" alt=""> +1 178 829 73</p>
          <p><img src="assets/Footer-icon-envelope.png" alt=""> Hay@Greengarden.com</p>
          <p><img src="../ public/img/Footer-icon-marker.png" alt=""> 32040 Orange Ave, Kattleman City, CA 93239, United States</p>
          <p><img src="assets/Footer-icon-door-open.png" alt=""> Opening Hours : <br>Monday - Friday <br> 09:00 - 17:00 </p>
        </div>
        </div>
      </div>
    </section>
    <footer class="bg-dark">
      <div class="container d-flex justify-content-between align-items-center">
        <p class="text-white ms-5">&copy; 2023 Your Company Name. All rights reserved.</p>
        <div class="logo">
          <a class="me-2" href=""><img src="assets/Social-Media-facebook-square.png" alt=""></a>
          <a class="me-2" href=""><img src="="../public/img/Social-Media-google-plus-square.png" alt=""></a>
          <a class="me-2" href=""><img src="="../public/img/Social-Media-instagram.png" alt=""></a>
          <a class="me-2" href=""><img src="../public/img/Social-Media-linkedin.png" alt=""></a>
          <a class="me-5" href=""><img src="="../public/img/Social-Media-twitter-square.png" alt=""></a>
        </div>
      </div>
    </footer>
    
  </body>
</body>
</html>