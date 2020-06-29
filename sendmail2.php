<?php
   use PHPMailer\PHPMailer\PHPMailer;

    if (isset($_POST['name']) && isset($_POST['email'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = "Yummy livraison";
        $phone=$_POST['phone'];
        $cp = $_POST['cp'];
        $address= $_POST['address'];
        $ville= $_POST['ville'];
        $body= "<b>Person Name: ". $name."<br>Phone number : ". $phone . "</br><br>Code postal : ".$cp . "</br><br>Adresse: ". $address ."</br><br>Ville: ". $ville ."</br></b>";
       
       
        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";

        $mail = new PHPMailer();

        //SMTP Settings
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "karimmaroous@gmail.com";
        $mail->Password = 'fmkwxergkydvazhv';
        $mail->Port = 465; //587
        $mail->SMTPSecure = "ssl"; //tls

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom($email, $name);
        $mail->addAddress("karimmaroous@gmail.com");
        $mail->Subject = $subject;
        $mail->Body = $body;


        if ($mail->send()) {
            $status = "success";
            $response = "Email is sent!";
        } else {
            $status = "failed";
            $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
        }

        exit(json_encode(array("status" => $status, "response" => $response)));
    }
?>
