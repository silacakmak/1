<?php include 'header.php';?>

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
        <a href="sayfa-detay.php">
          Read More
        </a>
      </div>
    </div>
  </section>
  <?php include 'footer.php';?>