<?php

include 'baglan1.php';

// function validate($data)
// {
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
// }

if (isset($_POST["kaydet"])) {

    $ayar_telefon = mysqli_real_escape_string($baglan, $_POST['ayar_telefon']);
    $ayar_title = mysqli_real_escape_string($baglan, $_POST['ayar_title']);
    $ayar_description = mysqli_real_escape_string($baglan, $_POST['ayar_description']);
    $ayar_keywords = mysqli_real_escape_string($baglan, $_POST['ayar_keywords']);
    $ayar_facebook = mysqli_real_escape_string($baglan, $_POST['ayar_facebook']);
    $ayar_twitter = mysqli_real_escape_string($baglan, $_POST['ayar_twitter']);
    $ayar_instagram = mysqli_real_escape_string($baglan, $_POST['ayar_instagram']);
    $ayar_mail = mysqli_real_escape_string($baglan, $_POST['ayar_mail']);
    $ayar_linedin = mysqli_real_escape_string($baglan, $_POST['ayar_linedin']);
    $ayar_adres = mysqli_real_escape_string($baglan, $_POST['ayar_adres']);
    $ayar_footer = mysqli_real_escape_string($baglan, $_POST['ayar_footer']);

    $sql = "UPDATE ayarlar SET 
        ayar_telefon = '$ayar_telefon', 
        ayar_title = '$ayar_title', 
        ayar_description = '$ayar_description',
        ayar_keywords= '$ayar_keywords',
        ayar_facebook= '$ayar_facebook',
        ayar_twitter= '$ayar_twitter',
        ayar_instagram= '$ayar_instagram',
        ayar_mail= '$ayar_mail',
        ayar_linedin= '$ayar_linedin',
        ayar_adres= '$ayar_adres',
        ayar_footer= '$ayar_footer'
        WHERE ayar_id = 1";

    if (mysqli_query($baglan, $sql)) {
        header("location: ayarlar.php?durum=ok",  true,  301);
        exit;
    } else {
        echo "Hata: " . mysqli_error($baglan);
    }
}



if (isset($_POST['login'])) {
    
    $user = mysqli_real_escape_string($baglan, $_POST['user']);
    $admin_sifre=md5($_POST['admin_sifre']);
    // $admin_sifre = mysqli_real_escape_string($baglan, $_POST['admin_sifre']);
    $query = "SELECT * FROM ad WHERE user='$user' AND admin_sifre='$admin_sifre'";
    $result = mysqli_query($baglan, $query);
    if (mysqli_num_rows($result) == 1) {
        $_SESSION['user']=$user;
       
        header('Location: index.php');
    } else { echo "Invalid username or password";
    }
  }
  
  if (isset($_POST['regist'])){
    $user = mysqli_real_escape_string($baglan, $_POST['user']);
    $email = mysqli_real_escape_string($baglan, $_POST['email']);
    $admin_sifre = md5( $_POST['admin_sifre']);


// Check if username or email already exist in database
$sql = "SELECT * FROM ad WHERE user='$user' OR email='$email'";
$result = mysqli_query($baglan, $sql);

if (mysqli_num_rows($result) > 0) {
  echo "Username or email already exist";
} else {
  
  $sql = "INSERT INTO ad (user, email, admin_sifre) VALUES ('$user', '$email', '$admin_sifre')";
  if (mysqli_query($baglan, $sql)) {
    $_SESSION['user']=$user;
    echo "Registration successful";
    header('Location:index.php');
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($baglan);
  }
}

mysqli_close($baglan);

  }






  if (isset($_POST['menukaydet'])){
    $tablo_menuad = mysqli_real_escape_string($baglan, $_POST['tablo_menuad']);
    $tablo_menuurl = mysqli_real_escape_string($baglan, $_POST['tablo_menuurl']);
    


// Check if username or email already exist in database

#if (mysqli_num_rows($result) > 0) {
 # echo "Username or email already exist";
#} else {
  
  $sql1 = "INSERT INTO menuler (tablo_menuad,tablo_menuurl) VALUES ('$tablo_menuad', '$tablo_menuurl')";

if (mysqli_query($baglan,$sql1)){
  header('Location:menu-ekle.php?durum=ok');
}
else{
  header('Location:menu-ekle.php?durum=no');
}
  

  }
  




  if (isset($_POST["menuduzenle"])) {

    $tablo_id =$_POST['tablo_id'];
    $tablo_menuad = mysqli_real_escape_string($baglan, $_POST['tablo_menuad']);
    $tablo_menuurl = mysqli_real_escape_string($baglan, $_POST['tablo_menuurl']);
   
    $sqln = "UPDATE menuler SET 
       
       tablo_menuad = '$tablo_menuad', 
       tablo_menuurl = '$tablo_menuurl'
      
      
        
        WHERE tablo_id = $tablo_id";

if (mysqli_query($baglan, $sqln)) {
  header("location: menu-duzenle.php?durum=ok&tablo_id=$tablo_id",  true,  301);
} else {
  echo "Hata: " . mysqli_error($baglan);
}
}






if(isset($_GET['menusil'])){
  $tablo_id =$_GET['tablo_id'];

  
  $sql = "DELETE FROM menuler WHERE tablo_id=$tablo_id";
  if (mysqli_query($baglan, $sql)) {
    echo "Menü başarıyla silindi";
    header("location: menuler.php?durum=ok&tablo_id=$tablo_id",  true,  301);
  } else {
    echo "Hata: " . mysqli_error($baglan);
  }
  }



  if (isset($_POST['sliderekle'])){
    
//     $MAX_SIZE=5000000;
//     $file_type=$_FILES['slidegorsel']['type'];
//     if($_FILES["slidegorsel"]["name"]== ""){
//       echo"a";
//       // header('Location:slidern.php');
//     }
//     if($_FILES["slidegorsel"]["size"] > $MAX_SIZE){
//       // header('Location:slidern.php');
//       echo"büyük resim";
//     }
// elseif($file_type!='imeg/jpeg' && $file_type!='imeg/png'){
//   // header('Location:slidern.php');
//   echo"zort";
// }
// else{
  echo " asdfdg";
    $uploads_dir="uploads";
    @$tmp_name=$_FILES['slidegorsel']["tmp_name"];
    @$name=$_FILES['slidegorsel']["name"];

    $benzersizsayi1=rand(20000,32000);
    $benzersizsayi2=rand(20000,32000);
    $benzersizsayi3=rand(20000,32000);
    $benzersizsayi4=rand(20000,32000);
    $benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
     $refimgyol=substr($uploads_dir,3)."/".$benzersizad.$name;
    @move_uploaded_file($tmp_name,"$uploads_dir/$benzersizad.$name");

    $slider_ad = mysqli_real_escape_string($baglan, $_POST['slider_ad']);
    $slider_url= mysqli_real_escape_string($baglan, $_POST['slider_url']);
    $slider_sira = mysqli_real_escape_string($baglan, $_POST['slider_sira']);

  
  $sql1 = "INSERT INTO slider (slider_resimyol,slider_ad,slider_url,slider_sira) VALUES ('$refimgyol','$slider_ad', '$slider_url','$slider_sira')";

if (mysqli_query($baglan,$sql1)){
  header('Location:slider-ekle.php?durum=ok');
}
else{
  header('Location:slider-ekle.php?durum=no');
}
  
}
  




if(isset($_GET['slidersil'])){
  $slider_id =$_GET['slider_id'];

  
  $sql = "DELETE FROM slider WHERE slider_id=$slider_id";
  if (mysqli_query($baglan, $sql)) {
    echo "Slider başarıyla silindi";
    header("location: slidern.php?durum=ok&slider_id=$slider_id",  true,  301);
  } else {
    echo "Hata: " . mysqli_error($baglan);
  }
  }






  if (isset($_POST['sayfakaydet'])){
    $sayfa_ad = mysqli_real_escape_string($baglan, $_POST['sayfa_ad']);
    $sayfa_icerik = mysqli_real_escape_string($baglan, $_POST['sayfa_icerik']);
    $sayfa_sira = mysqli_real_escape_string($baglan, $_POST['sayfa_sira']);
    $sayfa_anasayfa = mysqli_real_escape_string($baglan, $_POST['sayfa_anasayfa']);


    $t=time();
    $sayfa_tarih=date('Y-m-d H:i',$t);

    $sayfa_tarih= mysqli_real_escape_string($baglan, $_POST['sayfa_tarih']);

    


// Check if username or email already exist in database

#if (mysqli_num_rows($result) > 0) {
 # echo "Username or email already exist";
#} else {
  
  $sql1 = "INSERT INTO sayfalar (sayfa_ad,sayfa_icerik,sayfa_sira,sayfa_anasayfa,sayfa_tarih) VALUES ('$sayfa_ad', '$sayfa_icerik','$sayfa_sira','$sayfa_anasayfa','$sayfa_tarih')";

if (mysqli_query($baglan,$sql1)){
  header('Location:sayfa-ekle.php?durum=ok');
}
else{
  header('Location:sayfa-ekle.php?durum=no');
}
  

  }





  if(isset($_GET['sayfasil'])){
    $sayfa_id =$_GET['sayfa_id'];
  
    
    $sql = "DELETE FROM sayfalar WHERE sayfa_id=$sayfa_id";
    if (mysqli_query($baglan, $sql)) {
      echo "Sayfa başarıyla silindi";
      header("location: sayfalar.php?durum=ok&sayfa_id=$sayfa_id",  true,  301);
    } else {
      echo "Hata: " . mysqli_error($baglan);
    }
    }





    if (isset($_POST["sayfaduzenle"])) {

      $sayfa_id =$_POST['sayfa_id'];
      $sayfa_tarih = mysqli_real_escape_string($baglan, $_POST['sayfa_tarih']);
      $sayfa_ad = mysqli_real_escape_string($baglan, $_POST['sayfa_ad']);
      $sayfa_icerik = mysqli_real_escape_string($baglan, $_POST['sayfa_icerik']);
      $sayfa_sira = mysqli_real_escape_string($baglan, $_POST['sayfa_sira']);
      $sayfa_anasayfa = mysqli_real_escape_string($baglan, $_POST['sayfa_anasayfa']);
    
     
     
      $sqln = "UPDATE sayfalar SET 
         
         sayfa_ad = '$sayfa_ad', 
         sayfa_icerik = '$sayfa_icerik',
         sayfa_sira='$sayfa_sira',
         sayfa_anasayfa= '$sayfa_anasayfa',
        sayfa_tarih=' $sayfa_tarih'
          WHERE sayfa_id = $sayfa_id";
  
  if (mysqli_query($baglan, $sqln)) {
    header("location: sayfa-duzenle.php?durum=ok&sayfa_id=$sayfa_id",  true,  301);
  } else {
    echo "Hata: " . mysqli_error($baglan);
  }
  }
    






  

?>




