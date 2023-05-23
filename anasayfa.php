
<?php include 'header.php'?>



<meta charset="utf-8">

    <section class="slider_section">
      <div class="slider_container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
              01
            </li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1">
              02
            </li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2">
              03
            </li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6 px-0">
                    <div class="img-box">
                      <img src="images/slider-img.jpg" alt="" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="detail-box">
                      <h1>
                        Design
                        <br />
                        Agency
                      </h1>
                      <p>
                        There are many variations of passages of Lorem Ipsum available, but the
                      </p>
                      <a href="iletisim.php">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6 px-0">
                    <div class="img-box">
                      <img src="images/slider-img.jpg" alt="" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="detail-box">
                      <h1>
                        Design
                        <br />
                        Agency
                      </h1>
                      <p>
                        There are many variations of passages of Lorem Ipsum available, but the
                      </p>
                      <a href="iletisim.php">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6 px-0">
                    <div class="img-box">

                    <?php 


               $slidersorgu = mysqli_query($baglan,'SELECT * FROM slider ORDER BY slider_sira DESC');
                    $slidersorgu = mysqli_query($baglan,'SELECT * FROM slider');
               while($slidercek = mysqli_fetch_assoc($slidersorgu)){ ?>

                      <img src="nedmin/<?php echo $slidercek['slider_resimyol']; ?>" alt="<?php echo $slidercek['slider_ad']; ?>" />

<?php } ?>


                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="detail-box">
                      <h1>
                        Design
                        <br />
                        Agency
                      </h1>
                      <p>
                        There are many variations of passages of Lorem Ipsum available, but the
                      </p>
                      <a href="">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel_btn-box">
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="sr-only">Previous</span>
            </a>
            <img src="images/line.png" alt="" />
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- end slider section -->
  </div>
  <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Çalışmalar<span> ve </span>Deneyimler
        </h2>
        
      </div>
      <div class="row">
        <div class="col-lg-6 ">
          <div class="img-container tab-content">
          <div class="img-box tab-pane fade show active" id="img1" role="tabpanel">
            <img src="images/service-img.jpg" alt="" />
            </div>
           
          </div>
        </div>
        <div class="col-lg-6">
          <div class="detail-container nav nav-tabs" id="myTab" role="tablist">
          <?php
              $sayfasorgu = mysqli_query($baglan,'SELECT * FROM sayfalar');
              $sayfacek=mysqli_fetch_assoc($sayfasorgu);
                {
             
                ?>
          
          <div class style="
    margin-bottom: 108px;
    padding-left: 100px;
    padding-right: 300px;
    
    "

    >
    
                <h4 width="300px"><?php echo $sayfacek['sayfa_ad']; ?></h4>
    
                  <p><?php echo $sayfacek['sayfa_icerik']; ?></p>

                <?php } ?>
                </div>
                </div>
                
            <!-- <div class="detail-box active" id="img1-tab" data-toggle="tab" href="#img1" role="tab" aria-selected="true">
              <h4>
                Website <br />
                design
              </h4>
            </div> -->
            <!-- <div class="detail-box" id="img2-tab" data-toggle="tab" href="#img2" role="tab" aria-selected="false">
              <h4>
                Logo <br />
                design
              </h4>
            </div> -->
            <!-- <div class="detail-box" id="img2-tab" data-toggle="tab" href="#img3" role="tab" aria-selected="false">
              <h4>
                brochure <br />
                design
              </h4>
            </div> -->
            <!-- <div class="detail-box" id="img2-tab" data-toggle="tab" href="#img4" role="tab" aria-selected="false">
              <h4>
                visiting card <br />
                design
              </h4>
            </div> -->
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="calisma.php">
          Read More
        </a>
      </div>
    </div>
  </section>
  <!-- <section class="portfolio_section">
    <div class="heading_container">
      <h2>
        Por<span>tf</span>olyo
      </h2>
      
    </div>
    <div class="portfolio_container layout_padding">
      <div class="box-1">
        <div class="img-box b-1"> -->
          <!-- <img src="images/p1.jpg" alt=""> -->
          <!-- <div class="btn-box">
            <a href="" class="btn-1">

            </a>
            <a href="" class="btn-2">

            </a>
          </div>
        </div>
        <div class="img-box b-2"> -->
          <!-- <img src="images/p2.jpg" alt=""> -->
          <!-- <div class="btn-box">
            <a href="" class="btn-1">

            </a>
            <a href="" class="btn-2">

            </a>
          </div>
        </div>
      </div>
      <div class="box-2">
        <div class="img-box b-3"> -->
          <!-- <img src="images/p3.jpg" alt=""> -->
          <!-- <div class="btn-box">
            <a href="" class="btn-1">

            </a>
            <a href="" class="btn-2">

            </a>
          </div>
        </div>
        <div class="img-box b-4"> -->
          <!-- <img src="images/p4.jpg" alt=""> -->
          <!-- <div class="btn-box">
            <a href="" class="btn-1">

            </a>
            <a href="" class="btn-2">

            </a>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <section class="agency_section layout_padding-bottom">
    <div class="agency_container ">
      <div class="box ">
        <div class="detail-box">
          <div class="heading_container">
            <h2>
            <span> Eğitim  Bilgileri</span>
            </h2>
          </div>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
          </p>
          <a href="egitim.php">
            Read More
          </a>
        </div>
      </div>
    </div>
  </section>
  <section class="contact_section layout_padding">
    <div class="container px-0">
      <div class="heading_container">
        <h2 class="">
         <span>Blog</span>
        </h2>
      </div>

    </div>
    <div class="container container-bg">
      <div class="row">
        <div class="col-lg-8 col-md-7 px-0">
          <div class="map_container">
            <div class="map-responsive">
              <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <div class="col-md-5 col-lg-4 px-0">
          <form action="">
            <div>
              <input type="text" placeholder="İsim" />
            </div>
            <div>
              <input type="email" placeholder="Email" />
            </div>
            <div>
              <input type="text" placeholder="Telefon" />
            </div>
            <div>
              <input type="text" class="message-box"  />
            </div>
            <div class="d-flex ">
              <button>
                SEND
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <section class="info_section  layout_padding2-top">
    <div class="social_container">
      <div class="social_box">
      
        
        
        <a href="<?php echo $ayarcek['ayar_twitter'];?>">
          <img src="images/twitter.png" alt="">
        </a>
        <a href="<?php echo $ayarcek['ayar_linedin'];?>">
          <img src="images/linkedin.png" alt="">
        </a>
       
        <a href="<?php echo $ayarcek['ayar_instagram'];?>">
         <img src="images/instagram3.png" alt="" style="
    width: 50px;
    
    margin-left: -10px;
">
        </a>
      </div>
    </div>
  
    <div class="info_container ">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <h6>
              ABOUT US
            </h6>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet,
            </p>
          </div>
          <div class="col-md-6 col-lg-3">
            <h6>
              Instagram
            </h6>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipi
              scing elit, sed doLorem ipsum dolor sit
            </p>
          </div>
          <div class="col-md-6 col-lg-3">
            <h6>
              NEED HELP
            </h6>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet,
            </p>
          </div>
          <div class="col-md-6 col-lg-3">
            <h6>
              CONTACT US
            </h6>
            <div class="info_link-box">
              <a href="">
                <img src="images/location.png" alt="">
                <span> Çukurova/Adana </span>
              </a>
              <a href="">
                <img src="images/call.png" alt="">
                <span>+90 505 980 93 30</span>
              </a>
              <a href="https://mail.google.com/mail/">
                <img src="images/mail.png" alt="">
                <span> orhann519@hotmail.com</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include 'footer.php'?>