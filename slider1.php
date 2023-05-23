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
                      <a href="">
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
                      <a href="">
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