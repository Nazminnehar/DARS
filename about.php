



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link href="main.css" rel="stylesheet" type="text/css" />

    <title>About Us</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top shadow-lg">
      <div class="container-fluid mx-md-5">
        <a class="navbar-brand" href="index.html">
          <img src="https://iocl.com/assets/images/logo.gif" alt=""  />
         
        </a>

        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-end"
          id="navbarNavAltMarkup"
        >
          <div class="navbar-nav w-75 justify-content-evenly">
          <a
              class="nav-link active fw-bold"
              aria-current="page"
              href="index.php"
              >Home</a
            >
            <a
              class="nav-link active fw-bold"
              aria-current="page"
              href="services.php"
              >Services</a
            >
            <a
              class="nav-link active fw-bold"
              aria-current="page"
              href="about.php"
              >About Us</a
            >
            <?php
            if(isset($_COOKIE["IOCL"])){
              echo "
                <a
                  class='nav-link active fw-bold'
                  aria-current='page'
                  href='profile.php'
                  >Register</a
                >
              " ;
            }
            else{
              echo "
              <a
                class='nav-link active fw-bold'
                aria-current='page'
                href='login.php'
                >Register</a
              >
            ";
            }
           
            ?>
            <!-- <a class="nav-link active fw-bold" aria-current="page" href="#"
              >Sign Up</a
            > -->
            <!-- <a class="nav-link" href="#">Features</a>
            <a class="nav-link" href="#">Pricing</a>
            <a class="nav-link disabled">Disabled</a> -->
          </div>
        </div>
      </div>
    </nav>

    <section class="about-us py-5" id="about-us">
      <div class="container mt-5">
        <div class="row">
          <div class="col-md-12s">
            <h1 class="text-success">Welcome!</h1>
            <h2>Know More About Us</h2>
            <hr />
            <p>
              Welcome to the world of IndianOil, a diversified, integrated energy major with presence in almost all the streams of oil, gas, petrochemicals and alternative energy sources; a world of high-calibre people, state-of-the-art technologies and cutting-edge R&D; a world of best practices, quality-consciousness and transparency; and a world where energy in all its forms is tapped most responsibly and delivered to the consumers most affordably.

              Welcome to IndianOil, The Energy of India.
            </p>
            <p>
              Over the past decade, IndianOil has assiduously built its new businesses, that is, petrochemicals and natural gas marketing, to a level where they have achieved integration with the core verticals. The Corporation's upstream forays into Exploration & production have also yielded significant results in the form of a sizeable portfolio of oil & gas assets in India and abroad.

              Besides being the second-largest player in the domestic petrochemicals market, IndianOil exports to over 70 countries, offering the complete slate of petrochemical products and intermediates under the brand name PROPEL. The Corporation has set up world-scale petrochemical plants at Gujarat, Panipat and Paradip refineries over the last two decades with a capex of over Rs. 25,000 crore, and has firm plans for further investments to consolidate the business, expand capacities and enter niche grades. These projects include revamp/augmentation of existing capacities and new projects, forward integration plans into plastics and textiles parks, as well as equity investment in Hindustan Urvarak & Rasayan Ltd. (HURL) for production of fertilizer.
            </p>
            <button type="button" class="btn btn-success">
              Let's Know More
            </button>
          </div>
          <div class="col-12 text-center mt-5">
            <img
              src="https://iocl.com/assets/images/banner-4.jpg"
              alt=""
            />
          </div>
        </div>
      </div>
    </section>

    <!-- FOOTER -->
    <footer class="w-100 py-4 flex-shrink-0">
      <div class="container py-4">
        <div class="row gy-4 gx-5">
          <div class="col-lg-4 col-md-6">
            <img src="https://logosave.com/images/large/common/02/indian-oil-l.jpg" alt="" width = "60"  />
            <h5 class="h1 text-white">GUWAHATI REFINERY</h5>
            <p class="small text-muted">
             
            </p>
            <p class="small text-muted mb-0">
              &copy; Copyrights. All rights reserved.
              <!-- <a class="text-primary" href="#">Bootstrapious.com</a> -->
            </p>
          </div>
          <div class="col-lg-2 col-md-6">
            <h5 class="text-white mb-3">Quick links</h5>
            <ul class="list-unstyled text-muted">
              <li><a href="#">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Get started</a></li>
              <li><a href="#">FAQ</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-6">
            <h5 class="text-white mb-3">Quick links</h5>
            <ul class="list-unstyled text-muted">
              <li><a href="#">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Get started</a></li>
              <li><a href="#">FAQ</a></li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-6">
            <h5 class="text-white mb-3">Newsletter</h5>
            <p class="small text-muted">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt.
            </p>
            <form action="#">
              <div class="input-group mb-3">
                <input
                  class="form-control primary"
                  type="text"
                  placeholder="Recipient's username"
                  aria-label="Recipient's username"
                  aria-describedby="button-addon2"
                />
                <button
                  class="btn btn-primary"
                  id="button-addon2"
                  type="button"
                >
                  <!-- <i class="fas fa-paper-plane"></i> -->Send
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
