
    <!-- end header section -->
    <!-- slider section -->

  



    <?php
    
            include_once "moduller/header.php";

           if (!@$_GET['s1'] || @$_GET['s1'] == 'anasayfa' || @$_GET['s1'] == 'index') { include_once 'sayfamiz/anasayfa.php';}
            
            else {
          
                $dosyamiz  = 'sayfamiz/'.$_GET['s1'].'.php';
               
                
                if (file_exists($dosyamiz)) { include_once $dosyamiz; }
                else { include_once 'sayfamiz/anasayfa.php'; }
             }
            include_once "moduller/footer.php";

            ?>


</section>


  </body>

</html>