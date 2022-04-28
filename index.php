<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- map dependencies -->
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.js"></script>
    <link
      href="https://api.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.css"
      rel="stylesheet"
    />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link href="main.css" rel="stylesheet" type="text/css" />

    
    <title>iocl.com</title>
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
              href="services.html"
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

    <hero>
      <div class="vh-75 row bg-overlay align-items-center">
        <div class="text-center">
          <h1>WELCOME TO GUWAHATI REFINERY</h1>
          <h5>
            We want to create"<strong>substained</strong>" developement on
            Energy
          </h5>
          <br /><br />
          <button type="button" class="btn btn-primary">Get Started</button>
        </div>
      </div>
    </hero>

    <section class="widgets">
      <div class="container row my-4 m-auto justify-content-center g-4">
        <div class="col-md-6">
          <button type="button" class="py-2 w-100 btn btn-dark">
            +7,000 Members
          </button>
        </div>
        <div class="col-md-6">
          <button type="button" class="py-2 w-100 btn btn-dark">
            280 Locations
          </button>
        </div>
        <div class="col-md-6">
          <button type="button" class="py-2 w-100 btn btn-dark">
           14 cities
          </button>
        </div>
        <div class="col-md-6">
          <button type="button" class="py-2 w-100 btn btn-dark">
            1 Mission
          </button>
        </div>
      </div>
    </section>

    <section class="upcoming-events container my-3">
      <div class="py-4 text-center fs-3 fw-bold">BRANCHES IN IOCL</div>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100">
            <img
              src="https://1.bp.blogspot.com/-1JxckIluOTo/Wo01ZH1IzBI/AAAAAAAAGtI/LM6j9i8hlSUkl7mGm-QD6FzlYjX0pTFmACLcBGAs/w1200-h630-p-k-no-nu/iocl.jpg"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">REFINERIES</h5>
              <p class="card-text">
                petroleum oil refinery, which converts crude oil into high-octane motor spirit (gasoline/petrol), diesel oil, liquefied petroleum gases (LPG), kerosene, heating fuel oils, hexane, lubricating oils, bitumen and petroleum coke;
                Edible oil refinery which converts cooking oil into a product that is uniform in taste, smell and appearance, and stability;
                natural gas processing plant, which purifies and converts raw natural gas into residential, commercial and industrial fuel gas, and also recovers natural gas liquids (NGL) such as ethane, propane, butanes and pentanes;
                sugar refinery, which converts sugar cane and sugar beets into crystallized sugar and sugar syrups;
                salt refinery, which cleans common salt (NaCl), produced by the solar evaporation of sea water, followed by washing and re-crystallization;
                metal refineries refining metals such as alumina, copper, gold, lead, nickel, silver, uranium, zinc, magnesium and cobalt;
                iron refining, a stage of refining pig iron (typically grey cast iron to white cast iron), before fining, which converts pig iron into bar iron or steel[1]
              </p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img
              src="https://th.bing.com/th/id/OIP.LlhIc7FZs9TjnWT_JdnTlQHaD4?w=328&h=180&c=7&r=0&o=5&dpr=1.25&pid=1.7"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">MARKETING</h5>
              <p class="card-text">
                The evolution of oil industry in India can be traced to the early 20th century 
                when the industry began its operations through Superior Kerosene Oil (SKO) 
                dealerships. In due course of time the petroleum business prospered and expanded 
                and by independence the industry had commenced marketing of Motor Spirit (MS) and 
                High Speed Diesel (HSD). The network developed under private oil companies like 
                Burmah Shell, Caltex and ESSO. In 1958, Indian Oil Corporation (IOC) was formed 
                giving birth to the entry of the public sector in the petroleum business. Thereafter with 
                the nationalization of Burmah Shell, Caltex and ESSO in the 1970s, the concept of 
                public sector oil companies came into being and the petroleum business prospered 
                witnessing substantial growth. 
                In 2001-02 the public sector oil marketing companies (OMCs) had a network 
                around 16000 retail outlets (ROs), 9000 LPG distributorships and 6500 SKO 
                dealerships. The network has seen tremendous expansion to nearly 41000 RO
                dealerships, 11100 LPG distributorships and 6600 SKO dealerships as on 01.01.2012.
                The deregulation of the petroleum sector witnessed the entry of private players like 
                Reliance, Essar and Shell in the petroleum sector who between themselves have setup 
                nearly 3000 ROs. However, the dominance of the OMCs continued unabated in the 
                retail market.
              </p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img
              src="https://th.bing.com/th/id/OIP.YmsVF_scUNnW-Us-e-N7mwHaGC?w=208&h=180&c=7&r=0&o=5&dpr=1.25&pid=1.7"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">PIPELINES</h5>
              <p class="card-text">
                IndianOil operates a network of more than 15,000 km long crude oil, petroleum product and gas pipelines with a throughput capacity of 94.56 million metric tonnes per annum of oil and 21.69 million metric standard cubic meters per day of gas. Cross-country pipelines are globally recognized as the safest, cost-effective, energy-efficient and environment-friendly mode for transportation of crude oil and petroleum products.

                As a pioneer in oil pipelines in the country, managing one of the world's largest oil pipeline networks, IndianOil achieved a throughput of 76.019 million metric tonnes during the year 2020-21.
                
                IndianOil added 337 km of additional pipeline length during the year 2020-21, as part of its plans to continuously expand the network in line with growth in business. Projects currently under implementation would further increase the length of the pipelines network to about 21,000 km, and throughput capacity to 102 million tonnes per annum.
              </p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="my-4">
      <div class="py-4 text-center fs-3 fw-bold">Guwahati Refinery Map</div>
      <div class="container" style="height: 50vh" id="mapid"></div>
    </section>

    <section class="container">
      <div class="pt-4 text-center fs-3 fw-bold">Review on Indian Oil</div>
      <div
        id="carouselExampleDark"
        class="carousel carousel-dark slide"
        data-bs-ride="carousel"
      >
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleDark"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleDark"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleDark"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="6000">
            <div class="carousel-caption">
              <p>
                IOCL F-500 company . Medical benefits , Hospital, training I&E facilities excellent. water, Production , P&U, lab test ,F&S and Capacity under Audit
              </p>
              <img src="https://th.bing.com/th/id/R.57f12c71d014791cd9d805d8ec5d7b2b?rik=K6dvTpS4%2fVgrCA&riu=http%3a%2f%2fwww.lsbf.org.uk%2fmedia%2f3033810%2facca-portal-story.png&ehk=2mk9V0MgXLH1rbM3nsKc%2fczz9TaGVI63LrVeDPNRX0g%3d&risl=&pid=ImgRaw&r=0g" class="img-fluid" />
              <div id="image-caption" width = "60">Aryan</div>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="6000">
            
            <div class="carousel-caption">

             
              
              
              <p>
                Work is not too much typical it depends upon the location at which location we are working.
               I have learnt there alots if thing like sap entry ,maintanance of equipments and quality control.
              </p>
              <img src="https://th.bing.com/th/id/OIP.f731QQSnmIqVJeDnXm6dBAHaH8?pid=ImgDet&rs=1" />
              <div id="image-caption" Width = " 60 ">Rahul</div>
             
             
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="5000">
            <div class="carousel-caption">
              <p>
                I hope that company is going to give all kind of benifit like good salary , good environment . If searching for a job i would suggest you to go this company .
              </p>
              <img src="https://i.pinimg.com/originals/fe/1b/48/fe1b48b56f121ddce4bf461cca6253bb.jpg" />
              <div id="image-caption" width = " 60 ">Arinjay</div>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleDark"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleDark"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>

    <section>
     
      <div class="my-4 text-center fs-3 fw-bold">APPLY AT REFINERY</div>
      <div class="text-center my-4">
        <button type="button" class="btn btn-warning">Register Here</button>
      </div>
    </section>

    <section class="my-4 sponsors py-5">
      <div class="my-4 text-center fs-3 fw-bold">OUR PARTNER</div>
      <div class="items row justify-content-evenly g-2">
        <div class="card">
          <div class="card-body">
            <img
              class="logo"
              src="https://img.icons8.com/color/100/000000/google-logo.png"
            />
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <img
              class="logo"
              src="https://img.icons8.com/color/100/000000/linkedin.png"
            />
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <img
              class="logo"
              src="https://img.icons8.com/color/100/000000/yahoo.png"
            />
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <img
              class="logo"
              src="https://img.icons8.com/color/100/000000/amazon.png"
            />
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <img
              class="logo"
              src="https://th.bing.com/th/id/R.851b73bb4d5561e4872c39e2c4202beb?rik=R1m0hlbss4JSVA&riu=http%3a%2f%2f1.bp.blogspot.com%2f-znUUXqw9F5o%2fURusQnMJssI%2fAAAAAAAAAB4%2fc9BA4pmq3hI%2fs1600%2ffacebook%2blogo%2b4.jpg&ehk=3czHd%2fveQdIpMvehyz%2bIFKFeda8BPNAbwVz1ox14c6o%3d&risl=&pid=ImgRaw&r=0
              "
            />
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <img
              class="logo"
              src="https://img.icons8.com/ios-filled/100/000000/mac-os.png"
            />
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <img
              class="logo"
              src="https://img.icons8.com/color/48/000000/dell--v1.png"
            />
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <img
              class="logo"
              src="https://img.icons8.com/color/100/000000/hp.png"
            />
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <img
              class="logo"
              src="https://img.icons8.com/color/100/000000/ebay.png"
            />
          </div>
        </div>
        <!---->
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
    <!-- <script src="js/fule.js"></script> -->
    <script src="js/map.js"></script>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  
  </body>
</html>
