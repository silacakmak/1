
<?php
include 'baglan1.php';

$ayarsor = mysqli_query($baglan,'SELECT * FROM ayarlar where ayar_id=1');
$ayarcek=mysqli_fetch_assoc($ayarsor);

?>


<section class=" footer_section">
      <div class="container">
      <?php echo $ayarcek['ayar_footer'];?>
      </div>
    </section>
    <!-- footer section -->

  </section>

  <!-- end info section -->


  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script type="text/javascript" src="js/custom.js"></script>

</body>

</html>