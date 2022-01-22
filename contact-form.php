<?php

    if (isset($_POST["submit"])){
        $name = $_POST["name"];
        $subject = $_POST["phone"];
        $mailFrom = $_POST["mail"];
        $message = $_POST["message"];

        $mailTo = "bruno-cuevas@hotmail.com";
        $headers = "From: ".$mailFrom;
        $txt = "Yo have recieved an e-mail from". $name. ".\n\n".$message; 

        mail($mailTo, $name, $txt, $headers);
        header("Location: index.php?mailsend");
    

    }



