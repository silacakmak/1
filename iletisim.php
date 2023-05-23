





<?php 
include 'baglan1.php';
include 'header.php';
// print_r(gettype($_SESSION['alert']) );


include 'phpMailer.php';
?>


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
        <!-- <link="stylesheet" href="../css/bootstrap.min.css"> -->
        <div class="col-md-5 col-lg-4 px-0">
          
            <div id ="alert1"></div>
          
          
          <form action="rezervasyon.php" method="POST">
            <div>
              <input id="sender" type="text" required name="sender" placeholder="İsim" />
            </div>
            <div>
              <input id= "mail" type="email" required name="mail" placeholder="Email" />
            </div>
            <div>
              <input id="telefon" type="text" required name="telefon" placeholder="Telefon" />
            </div>
            <div>
              <input id="message" type="text" required name="message" class="message-box"  />
            </div>
            <div class="d-flex ">
              <button type="submit">
              
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
    <?php include 'footer.php';?>