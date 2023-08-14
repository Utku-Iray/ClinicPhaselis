<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<?php 
//Post metodu ile gönderilen verilerimizi alıyoruz.

$patientnamesurname = $_POST['patientnamesurname'];
$patientDialCode = $_POST['patientDialCode'];
$patientPhone = $_POST['patientPhone'];
$patientNote = $_POST['patientNote'];
$mail = $_POST['mail'];


$Mesaj = "
    İsim soyisim: $patientnamesurname <br>
    Telefon Kodu: $patientDialCode <br>
    Telefon Numarası : $patientPhone <br>
    Mail: $mail <br>
    Mesaj : $patientNote <br>
  
    Bu form Clinicphaselis sayfasından geldi.
    ";




$ekle= "insert into urunler (patientnamesurname,patientDialCode, patientPhone, patientNote, mail)  VALUES ('".$patientnamesurname."','".$patientDialCode."','".$patientPhone."','".$patientNote."','".$mail."')";
function mailgonder(){
         require "inc/class.phpmailer.php"; // PHPMailer dosyamızı çağırıyoruz  
         $mail = new PHPMailer();   
         $mail->IsSMTP();
         $mail->From     = "utah2@alondanbilisim.com"; //Gönderen kısmında yer alacak e-mail adresi  
         $mail->Sender   = "utah2@alondanbilisim.com";  
         $mail->FromName = "Clinicphaselis Web Sitesi";  
         $mail->Host     = "srvc55.turhost.com"; //SMTP server adresi  
         $mail->SMTPAuth = true;  
         $mail->Username = "utah2@alondanbilisim.com"; //SMTP kullanıcı adı  
         $mail->Password = "4MT#=NO^YFh-"; //SMTP şifre  
		 $mail->SMTPSecure="tls";
         $mail->Port = "587";
         $mail->CharSet = "utf-8";
         $mail->IsHTML(true); //Mailin HTML formatında hazırlanacağını bildiriyoruz.  
         $mail->Subject  = $_POST['patientnamesurname'] . " Form Mesajı Geldi!";

         $mail->Body = $_POST['patientnamesurname'] . "<br>Dial Kodu: " . $_POST['patientDialCode']. "<br>Telefon Numarası: " . $_POST['patientPhone'] . "<br>Not: ". $_POST['patientNote'] . "<br>Mail adresi: " . $_POST['mail'];
         $mail->AltBody = strip_tags("mesaj");
         $mail->AddAddress("info@clinicphaselis.com"); 
         return ($mail->Send())?true:false;      
         $mail->ClearAddresses();  
         $mail->ClearAttachments();
}

if(mailgonder()) echo "";
else echo "";
{
   ?>
   
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talep Alındı</title>
    

    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- Bootstrap-5 -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- custom-styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/animation.css">
</head>
<body>
<body class="home sky">

    <main class="main  thankyou-page">
        <div class="main-wrapper">
            <div class="main-inner">
                <div class="logo">
                    <div class="logo-icon" style="
    width: 320px;
">
                        <img src="/assets/images/logo/clinic-phaselis.png" alt="Jettel">
                    </div>
                    
                </div>
                <article>
                    <h1><span style="
    color: #607d8b;
">Thank You</span></h1>
                    <span>Your request for information has reached us.</span>
                    <p>Our consultants will inform you as soon as possible.</p>
                </article>
                
                
                <div class="mb-5 back-home">
                    <a href="javascript:history.back()" style="
    margin-top: 1rem;
    background: black;
">Back</a>
                </div>
            </div>
        </div>
    </main>

    <!-- Bootstrap-5 -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Jquery -->
    <script src="assets/js/jquery-3.6.1.min.js"></script>

<div id="h10-xray"></div><div id="h10-xray-keywords"></div><div id="h10-asin-grabber"></div><div id="h10-demand"></div><div id="h10-inventory"></div><div id="h10-profitability-calculator"></div><div id="h10-review"></div><div id="h10-xray-walmart"></div><div id="h10-token-connection"></div><div id="h10-page-widget"></div></body></html>

<?php } 



?>