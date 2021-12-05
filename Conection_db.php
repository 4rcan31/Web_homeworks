
<?php





//include("conex_with_db.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once 'PHPMailer/Exception.php';
require_once 'PHPMailer/PHPMailer.php';
require_once 'PHPMailer/SMTP.php'; 
require 'conex_with_db.php';

if(isset($_POST['register'])){
    if(strlen($_POST['Fname']) >= 1 && strlen($_POST['Lname']) >= 1 && strlen($_POST['email']) >= 1){
        $Fname = ($_POST['Fname']);
        $Lname = ($_POST['Lname']);
        $email = ($_POST['email']);
        $fechareg = date("d/m/y");
        $consulta = "INSERT INTO  datos(nombres, apellidos, email, fecha_reg) VALUES ('$Fname', '$Lname','$email', '$fechareg')";
        $resultado = mysqli_query($conex,$consulta);
        if($resultado){
            ?>
            <h3 class = "fine"> Te has registrado correctamente!</h3>
            <?php

        $mail = new PHPMailer(true);
    try{ 
            $mail->SMTPDebug = 0;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
          $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'arcane.business323@gmail.com';                     //SMTP username
           $mail->Password   = 'FGK2468001';                               //SMTP password
            $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
            $mail->Port       = 587;
            $mail->setFrom('arcane.business323@gmail.com', 'Arcane');
            $mail->addAddress($email,$Fname);
            $mail->isHTML(true); 
            $mail->Subject = 'Te registraste para los envios de tareas';
            $mail->Body =  "<h4>Hola ".$Fname." Me alegro mucho que te hayas registrado, te subcribiste para mandarte todas las tareas de cada semana, que tengas un exelente dia</h4>";
           header("Location:index.php");
            $mail->send();
   }catch (Exception $e) {
        echo "Se encotro un error inesperado en el envio del correo cuando se relleno el formulario {$mail->ErrorInfo}";
        echo "<br>";
  }
        }else{
            ?>
            <h3 class = "bad"> ups, algo a salido mal, intentalo de nuevo!</h3>
            <?php
        }
    }else if(strlen($_POST['Lname']) < 1 && strlen($_POST['Fname']) < 1 &&strlen($_POST['email']) < 1){
        ?>
        <h3 class = "bad">Tienes que rellenar todos los campos</h3>
        <?php
    }
}


?>

