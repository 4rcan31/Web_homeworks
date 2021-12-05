
<?php
/*
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'Conection_db.php';




$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
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
        $name = $consulta['nombre'];

        $mail->addAddress($para,$name);
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
    $date = date("d/m/y");
    $date = '22/11/21';
    //echo "\n" .$fecha_actual;
    echo "\n" .$date;

    


     //Llamar la tabla 'p4_tareas' donde ahi estan todas las semanas y tareas
     $semanas = "SELECT * FROM `p4_tareas` WHERE fecha_inicio = '".$date."'";
    // $consulta1 = "SELECT COUNT(*) FROM `p4_tareas` WHERE fecha_inicio = '".$date."'";
    $resultados_tareas = mysqli_query($conex,$semanas);
     $num_datos = mysqli_num_rows($resultados_tareas);

     echo $num_datos;
  
     if($num_datos > 0){ 
        $mail->isHTML(true); 
        $mail->Body =  "
        <table border='1'>
        <tr>
        <td width='30'><b>Año</b></td><td width='80'><b>Periodo</b></td><td width='200'><b>Semana</b></td><td width='180'><b>Materia</b></td><td width='300'><b>Tareas Calificadas</b></td><td width='130'><b>Tareas no calificadas</b></td><td width='150'><b>Fecha inicio de semana</b></td>
        </tr>
        </table>";

        while($semanas = mysqli_fetch_array($resultados_tareas)){ 
        //  $mensaje = $mensaje."\n".$semanas['years'] ."\t". $semanas['periodos']."\t".$semanas['semana']."\t". $semanas['materia'] ."\t". $semanas['tarea_c'] ."\t". $semanas['tarea_no_c'] ."\t". $semanas['fecha_inicio'];
        
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Este es el asunto, abrelo';
        $Year = $semanas['years'];
        $periodos = $semanas['periodos'];
        $semana = $semanas['semana']; 
        $materia = $semanas['materia'];
        $tarea_c = $semanas['tarea_c'];
        $tarea_no_c = $semanas['tarea_no_c'];
        $fecha_inicio = $semanas['fecha_inicio'];

    //  $mail->Body  = "<table border='1'>
    // <tr>
    //     <td> Año  </td><td> Periodo </td><td> Semana </td><td> Materia </td><td> Tareas Calificadas </td><td> Tareas no calificadas </td><td> Fecha inicio de semana </td>
    // </tr> </table>";

        $mail->Body    =  $mail->Body . "<table border='1' > 

        <tr>
        <td width='30'> $Year </td><td width='80'> $periodos </td><td width='200'> $semana </td><td width='180'> $materia </td><td width='300'> $tarea_c </td><td width='130'> $tarea_no_c </td><td width='150'> $fecha_inicio </td>
        </tr>

        </table>"
        ;
        
        
        
        
        
        //.  $mail->Body ."\n".$semanas['years'] ."\t". $semanas['periodos']."\t".$semanas['semana']."\t". $semanas['materia'] ."\t". $semanas['tarea_c'] ."\t". $semanas['tarea_no_c'] ."\t". $semanas['fecha_inicio'];
        }

        if($mail->send()){
            echo "Se encontro una fecha correcta en la base de datos y los correos fueron eviados ";
            echo "<br>";
        }else if(!$mail->send()){
            echo "Ups, algo salio mal, se escontro una tabla correcta con la fecha pero al parecer los correos no fueron enviados";
            echo "<br>";
        }

     }else if($num_datos == 0){
        $mail->isHTML(true); 
        $mail->Subject = 'Este es el asunto, abrelo';
        $mail->Body =  "Felicidades, no hay tareas para esta semana";
        echo "No se encontraron semanas para la consulta de sql";

        if($mail->send()){
            echo "NO se encontro una fecha correcta en la base de datos y L=los correos fueron eviados ";
            echo "<br>";
        }else if(!$mail->send()){
            echo "Ups, algo salio mal, no se  escontro una tabla correcta con la fecha y no se enviaron los correos";
            echo "<br>";
        }

     }else{
         echo "Algo inesperado paso, no se que XD, quiza lo sabre cuando el programa entre a esta condicional XD";
         echo "<br>";
     }
    
    //Content

   // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'El programa entro a una condicion, salio bien ya sea si los correos fueron enviados o no, entro a una';
    echo "<br>";
} catch (Exception $e) {
    echo "Se encotro un error inesperado en TODO en programa, aca una infomacion del error: {$mail->ErrorInfo}";
    echo "<br>";
} */





use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'Conection_db.php';




$mail = new PHPMailer(true);


try {

    date_default_timezone_set('America/El_Salvador');
    //$date = date("d/m/y");
    $date = '22/11/21';


    $mail->SMTPDebug = 0;                      //Enable verbose debug output
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


         $semanas = "SELECT * FROM `p4_tareas` WHERE fecha_inicio = '".$date."'";
         $resultados_tareas = mysqli_query($conex,$semanas);
         $num_datos = mysqli_num_rows($resultados_tareas);

         if($num_datos > 0){
            $mail->isHTML(true);
            $mail->Body = "Hola";
            $mail->Body =   "
         <table border='1'>
         <tr>
        <td width='30'><b>Año</b></td><td width='80'><b>Periodo</b></td><td width='200'><b>Semana</b></td><td width='180'><b>Materia</b></td><td width='300'><b>Tareas Calificadas</b></td><td width='130'><b>Tareas no calificadas</b></td><td width='150'><b>Fecha inicio de semana</b></td>
        </tr>
        </table>";

        while($semanas = mysqli_fetch_array($resultados_tareas)){ 
            
            $mail->isHTML(true);                                  //PAra que el correo se pueda mandar en formato html
            $mail->Subject = 'Este es el asunto, abrelo';
            $Year = $semanas['years'];
            $periodos = $semanas['periodos'];
            $semana = $semanas['semana']; 
            $materia = $semanas['materia'];
            $tarea_c = $semanas['tarea_c'];
            $tarea_no_c = $semanas['tarea_no_c'];
            $fecha_inicio = $semanas['fecha_inicio'];
    
            $mail->Body    =  $mail->Body . "<table border='1' > 
    
            <tr>
            <td width='30'> $Year </td><td width='80'> $periodos </td><td width='200'> $semana </td><td width='180'> $materia </td><td width='300'> $tarea_c </td><td width='130'> $tarea_no_c </td><td width='150'> $fecha_inicio </td>
            </tr>
    
            </table>"
            ;
            
            }
            
     
              
           // if(!$mail->Send()){
           //     echo "Ups, algo salio mal, se escontro una tabla correcta con la fecha pero al parecer los correos no fueron enviados";
            //    echo "<br>";
           // }else if($mail->Send()){
            //    echo "Se encontro una fecha correcta en la base de datos y los correos fueron eviados ";
            //    echo "<br>";
           // }

         }

     

         


    $mail->send();
    echo 'El programa entro a una condicion, salio bien ya sea si los correos fueron enviados o no, entro a una';
    echo "<br>";
} catch (Exception $e) {
    echo "Se encotro un error inesperado en TODO en programa, aca una infomacion del error: {$mail->ErrorInfo}";
    echo "<br>";
}

 
?>








