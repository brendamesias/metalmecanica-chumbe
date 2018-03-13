<?php
//alamacena en variable los datos del formulario
$vnombre=$_POST['xnombre'];
$vcorreo=$_POST['xcorreo'];
$vmensaje=$_POST['xmensaje'];

$vpara="luisoliveraparedes@gmail.com";
$vasunto="Envio de comentarios";
$vmensaje=" 
Nombre:  $vnombre <br>
Correo:  $vcorreo <br>
Mensaje: $vmensaje
";
echo $vmensaje;

mail($vpara, $vasunto, $vheader utf8_decode($vmensaje));
&vheader = 'From'. $vcorreo ."\r\n";
&vheader = "X-Mailer: PHP/".phpversion()."\r\n";
&vheader = "Mime-Version: 1.0; \r\n"
&vheader = "Content-Type: text html";

echo "Hemos recibido su mensaje correctamente 
      pronto le contestaremos, gracias."

?>
