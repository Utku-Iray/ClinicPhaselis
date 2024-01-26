<?php 

error_reporting(E_ALL);

 ini_set("display_errors", 1);

$url = 'https://www.clinicphaselis.com/mail/PhpMailer/api.php';




$patientnamesurname = $_POST['patientnamesurname'];
$patientDialCode = $_POST['patientDialCode'];
$patientPhone = $_POST['patientPhone'];
$patientNote = $_POST['patientNote'];
$mail = $_POST['mail'];

// $firmaAdi = $_POST['firmaAdi'];



$mailMesaj = "

    Adı Soyadı: $patientnamesurname <br>
    Telefon Kodu: $patientDialCode <br>
    Telefon Numarası: $patientPhone <br>
    E-Mail: $mail <br>
    Mesaj: $patientNote <br>

    Bu form Clinic Phaselis Web Sayfasından Gelmiştir.

    ";

$data = ['data' =>

	[


	'secret' => 'vvas432',
	'subject' => 'Clinic Phaselis Form',
	'body' => $mailMesaj,
	'serverInfo' => [
		'hostname' => 'smtpout.secureserver.net',
		'username' => 'no-reply@clinicphaselis.com',
		'password' => '25W.nyHFM^Tk6Lb',
		'port' => 587

	],
	'address' => ['info@clinicphaselis.com'], //maili alacak kişiler
	'reply' => 'info@clinicphaselis.com', //yanıt adresi
	'cc' => ['utku.iray.99@gmail.com'],
	// 'bcc' => ['utku.iray.guzeldereli@gmail.com']
	] 
];





// use key 'http' even if you send the request to https://...

$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )

);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === FALSE) {  }

echo($result);

 ?>