<?php
include 'mail.php';
    // if (@$secret != 'kivanc') {die();}
$alert1="";

    $iletisim = [
        'sender' => ["Ad Soyad", 4, 55],
        'telefon' =>["Telefon Numarası", 10, 20],
    ];
    $bilgiler = [];
    // foreach ($iletisim as $k=>$v) {
    //     $dx = yenimres(trim($ajv[$k]));

    //     if (strlen($dx) == 0) {js_error($v[0].' alanı boş bırakılamaz.');}
    //     if (strlen($dx) < $v[1]) {js_error($v[0].' alanı en az '.$v[1].' karakter olabilir.');}
    //     if (strlen($dx) > $v[2]) {js_error($v[0].' alanı en fazla '.$v[2].'karakter olabilir.');}
    //     $dx = str_replace('%', '', $dx);
    //     $dx = str_replace('"', '', $dx);
    //     $dx = str_replace("'", "", $dx);
    //     $dx = str_replace(',', '', $dx);
    //     if ($dx != trim($ajv[$k])) {js_error($v[0].' alanını kontrol ediniz.');}
    // }
    //  $telefonno = trim($ajv['telefon']);
    if (!is_numeric($_POST["telefon"])) {

        $alert='Telefon numaranız hatalıdır. Lütfen kontrol ediniz.';
       
     }
print_r($_POST);
    
    // $bilgiler['tarih'] = time();
    // $bilgiler['sender'] = $ajv['sender'];
    // $bilgiler['telefon'] = $ajv['telefon'];


    if (@$_POST['sender']) {
        $kime = "kivanchancerliv@gmail.com";
        // $kime2 = "mustafaustundag@gmail.com";
        // $kime3 = "hayrullahnergiz@gmail.com";
        // $kime4 = "tekereksmt@gmail.com";
        $baslik = $_POST['sender'];

        $metin = [ '<table width="100%" cellspacing="0" cellpadding="0">
        <tr>
            <td>
                <table cellspacing="0" cellpadding="0">
                    <tr>
                        <td style="border-radius: 2px;" margin-top:10px; font-size:16px>
                           <p><span style="font-weight:800">Ad Soyad :</span> '.$_POST['sender'].'</p>
                           <p><span style="font-weight:800">Telefon :</span> '.$_POST['telefon'].'</p>
                        
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        </table>', '', '' ];

        $metin = implode('<br>', $metin);
        mail_OTP($kime, $baslik, $metin);
        // mail_OTP($kime2, $baslik, $metin);
        // mail_OTP($kime3, $baslik, $metin);
        // mail_OTP($kime4, $baslik, $metin);
        echo "test";
    }



?>
<!-- ws.bildirim.s("Mesajınız bize ulaştı. En kısa sürede tarafınıza dönüş yapılacaktır.");
$('#rezervasyon').remove(); -->



