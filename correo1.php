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

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'Conection_db.php';




$mail = new PHPMailer(true);

try {
    //Server settings
                          //Enable verbose debug output
                          $mail->SMTPDebug = 0;                      //Enable verbose debug output
                          $mail->isSMTP();                                            //Send using SMTP
                          $mail->Host       = 'mail.homeworkfgk.pcriot.com';                     //Set the SMTP server to send through
                          $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                          $mail->Username   = 'send.homework@homeworkfgk.pcriot.com';                     //SMTP username
                          $mail->Password   = 'passwordemail2356';                               //SMTP password
                          $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
                          $mail->Port       =  587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                      
                          //Recipients este es el correo de donde se envian los datos
                          $mail->setFrom('send.homework@homeworkfgk.pcriot.com');
    //Este codigo: esta llamando datos de bd para enviar a todos el email
    $resultados_datos = mysqli_query($conex,"SELECT * FROM datos");
    while($consulta = mysqli_fetch_array($resultados_datos)){
        $para = $consulta['email'];
        $name = $consulta['nombre'];

        $mail->addAddress($para,$name);
        $mail->Subject = 'Tareas FGK';

        $mail->isHTML(true); 
        $mail->Body =  "<h3>Hola</h3>"."<h3></h3>". " <h3>Aca te mando esta pequeña tabla donde tienes todas las tareas que se van a dar esta semana, <b>Animooo es la ultima :)</b></h3>" .
        "<table border='1'>
        <tr>
        <td width='10rem'><b>Año</b></td><td width='80'><b>Periodo</b></td><td width='200'><b>Semana</b></td><td width='180'><b>Materia</b></td><td width='300'><b>Tareas Calificadas</b></td><td width='130'><b>Tareas no calificadas</b></td><td width='150'><b>Fecha inicio de semana</b></td>
        </tr>
        <tr>
        <td width='10rem'><b>2021</b></td><td width='80'><b>P4</b></td><td width='200'><b>Semana8 22 nov al 28 nov</b></td><td width='180'><b>Matemáticas</b></td><td width='300'><b>Examen de periodo, tiene una ponderación de 30%</b></td><td width='130'><b>Tareas no calificadas</b></td><td width='150'><b>22/11/21</b></td>
        </tr>
        <tr>
        <td width='10rem'><b>2021</b></td><td width='80'><b>P4</b></td><td width='200'><b>Semana8 22 nov al 28 nov</b></td><td width='180'><b>Formación Lingüistica</b></td><td width='300'><b>Debate Grupo 2</b></td><td width='130'><b>Tareas no calificadas</b></td><td width='150'><b>22/11/21</b></td>
        </tr>
        <tr>
        <td width='10rem'><b>2021</b></td><td width='80'><b>P4</b></td><td width='200'><b>Semana8 22 nov al 28 nov</b></td><td width='180'><b>Valores</b></td><td width='300'><b>Se llego el dia, feria de mini proyecto y plan financiero tiene una ponderacion de 35%</b></td><td width='130'><b>Tareas no calificadas</b></td><td width='150'><b>22/11/21</b></td>
        </tr>
        <tr>
        <td width='10rem'><b>2021</b></td><td width='80'><b>P4</b></td><td width='200'><b>Semana8 22 nov al 28 nov</b></td><td width='180'><b>Orientación vocacional (OVI)</b></td><td width='300'><b>Segunda prueba corta, tiene una ponderación de 20%</b></td><td width='130'><b>Tareas no calificadas</b></td><td width='150'><b>22/11/21</b></td>
        </tr>
        <tr>
        <td width='10rem'><b>2021</b></td><td width='80'><b>P4</b></td><td width='200'><b>Semana8 22 nov al 28 nov</b></td><td width='180'><b>Computación</b></td><td width='300'><b>Entrega de proyecto Sistema de planillas (ISSS, AFP. etc), tiene una ponderación del 30%</b></td><td width='130'><b>Tareas no calificadas</b></td><td width='150'><b>22/11/21</b></td>
        </tr>
        <tr>
        <td width='10rem'><b>2021</b></td><td width='80'><b>P4</b></td><td width='200'><b>Semana8 22 nov al 28 nov</b></td><td width='180'><b>Inglés</b></td><td width='300'><b>Cultural Fair que tiene una ponderación de 35%</b></td><td width='130'><b>Tareas no calificadas</b></td><td width='150'><b>22/11/21</b></td>
        </tr>
        </table><br><h4>Para esta semana tienes tareas de todas las materias DD:</h4>";



    }
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
    date_default_timezone_set('America/El_Salvador');
    //$date = date("d/m/y");
    $date = '22/11/21';
    //echo "\n" .$fecha_actual;

    



    $mail->send();
    echo 'El programa entro a una condicion, salio bien ya sea si los correos fueron enviados o no, entro a una';
    echo "<br>";
} catch (Exception $e) {
    echo "Se encotro un error inesperado en TODO en programa, aca una infomacion del error: {$mail->ErrorInfo}";
    echo "<br>";
}

 
?>

</table>
  

</body>
</html>
