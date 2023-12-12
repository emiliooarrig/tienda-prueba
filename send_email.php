<?php
if (isset($_POST['enviar'])) {

    if(!empty($_POST['name']) && !empty($_POST['email'])){
        $to = 'emilioag2703@gmail.com'; // Reemplaza con tu dirección de correo electrónico
        $subject = 'Notificación desde la página web';
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = 'Has recibido una notificación desde tu página web al presionar el botón.';
        $mail = mail($to,$email, $message);
        // Envío del correo

        if ($mail){
            echo "<h4> Mensaje enviado exitosamente </h4>";
        } else{
            echo "<h4> Mensaje no enviado. ERROR</h4>";
        }
    } 
}
?>
