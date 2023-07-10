<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php 
//Post metodu ile gönderilen verilerimizi alıyoruz.
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$patientnamesurname = $_POST['patientnamesurname'];
$patientDialCode = $_POST['patientDialCode'];
$patientPhone = $_POST['patientPhone'];
$patientNote = $_POST['patientNote'];
$mail = $_POST['mail'];


function mailgonder(){
    require "inc/class.phpmailer.php"; // PHPMailer dosyamızı çağırıyoruz  
    $mail = new PHPMailer();   
         $mail->IsSMTP();
         $mail->From     = "utah@alondanbilisim.com"; //Gönderen kısmında yer alacak e-mail adresi  
         $mail->Sender   = "utah@alondanbilisim.com";  
         $mail->FromName = "Clinic Phaselis Mail";  
         $mail->Host     = "srvc55.turhost.com"; //SMTP server adresi  
         $mail->SMTPAuth = true;  
         $mail->Username = "utah@alondanbilisim.com"; //SMTP kullanıcı adı  
         $mail->Password = "[4I#Pn+#IWEC"; //SMTP şifre  
		 $mail->SMTPSecure="tls";
         $mail->Port = "587";
         $mail->CharSet = "utf-8";
         $mail->IsHTML(true); //Mailin HTML formatında hazırlanacağını bildiriyoruz.  
         $mail->Subject  ="Clinic Phaselis Form";

    $mail->Body ="Adı Soyadı: ". $_POST['patientnamesurname'] . "<br>Dial Kodu: " . $_POST['patientDialCode']. "<br>Telefon Numarası: " . $_POST['patientPhone'] . "<br>Not: ". $_POST['patientNote'] . "<br>Mail adresi: " . $_POST['mail'];
         
    $mail->AltBody = strip_tags("mesaj");
    $mail->AddAddress("utku.iray.99@gmail.com");
    return ($mail->Send())?true:false;
    $mail->ClearAddresses();
    $mail->ClearAttachments();
}

if(mailgonder()) {
        echo '<script>alert("Your messages have been received from you!");</script>';
    } else {
        echo 'Beim Abrufen der Nachricht ist ein Fehler aufgetreten: ' . $mail->ErrorInfo;
    }


   ?>
<script>
  setTimeout(function(){
  window.location = "https://clinicphaselis.com/";
}, 1000);
</script>
