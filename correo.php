<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
  <title>Consola para previsualización de correos enviados</title>
</head>
<body>

<h1>
    Consola para previsualización de correos enviados
</h1>

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'PHPMailer/Exception.php';
require_once 'PHPMailer/PHPMailer.php';
require_once 'PHPMailer/SMTP.php';
require 'Conection_db.php';




$mail = new PHPMailer(true);

try {
    //Server settings
                        //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'arcane.business323@gmail.com';                     //SMTP username
    $mail->Password   = 'FGK2468001';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients este es el correo de donde se envian los datos
    $mail->setFrom('arcane.business323@gmail.com', 'Arcane');

         //Este codigo: esta llamando datos de bd para enviar a todos el email
         $resultados_datos = mysqli_query($conex,"SELECT * FROM datos");
         while($consulta = mysqli_fetch_array($resultados_datos)){
             $para = $consulta['email'];
             $Fname = $consulta['nombres'];
             
     
             $mail->addAddress($para,$Fname);

             
         }
         $mail->isHTML(true); 
         //  $mail->Body = "<h4>Hola</h4>". $Fname. " <h4>aca te mando esta pequeña tabla donde tienes todas las tareas que se van a dar esta semana</h4>";
         $mail->Subject = 'Vacaciones!!!!!';
       $subject = "<h3>Hola querido user, al fin acabo este año, y agradecerte por inscribirte en este mini proyecto, te dejo un regalo por eso ;)</h3><br>Y perdon por el correo anterior, fue un error, por algun razon el host no me reconocio el codigo html. 
       <br><b>Cuentas de Disney+</b>
       <br><b>Gmail:</b> jawtapbuy@magim.be <br><b>Password:</b> android123
       <br><br><b>Gmail:</b> wuutwhows@leadwizzer.com<br><b>Password:</b>senha9090
       <br><br><b>ADVERTENCIA: </b>Estas cuentas son compartidas XD, es posible que vean la cuenta en portugues o otros idiomas, pero para ver las peliculas solo tienen que cambiarle el idioma y ya esta :D
       <br><br>Estás cuentas son generadas por algo llamado 'bin', son números aleatorios que se generan y luego se chekean para ver si funcionan, estos números son tarjetas de crédito, <b>Descuida</b> no es ilegal XD, estas tarjeta no tienen fondos, es para utilizar las pruebas de 30 días.<b>Estos numeros yo los he generado con un pequeño script, si quieren saber como igual escribanme.
       </b><br><b>Si tienen problemas con las cuentas escribanme :D</b><br><br>Si quieres leer más sobre los bins da clic <a href='https://derechodelared.com/carding/#:~:text=Un%20BIN%20(Bank%20Identification%20Number,%2C%20tipo%20de%20tarjeta%2C%20etc.&text=es%20tan%20simple%20como%20acudir,a%20generar%20(unas%2050).'>aca</a>";
       $subject = utf8_decode($subject);
       $mail->Body = $subject;

    //$mail->addAddress('rodrigo.francoescobar123@gmail.com');     //Add a recipient
   // $mail->addAddress('ellen@example.com');               //Name is optional
   // $mail->addReplyTo('info@example.com', 'Information');
   // $mail->addCC('cc@example.com');
   // $mail->addBCC('bcc@example.com');

    //Attachments
   // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name


   //Aca para la fecha actual $date tiene ese dato
    //$fecha_actual = strtotime(date("d-m-Y H:i:00",time()));
  
    

    //Content

   // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
   $mail->SMTPDebug = 0; 
    $mail->send();
    echo 'El programa entro a una condicion, salio bien ya sea si los correos fueron enviados o no, entro a una';
    echo "<br>";
} catch (Exception $e) {
    echo "Se encotro un error inesperado en TODO en programa, aca una infomacion del error: {$mail->ErrorInfo}";
    echo "<br>";
}

exit();

?>

</table>
  

</body>
</html>