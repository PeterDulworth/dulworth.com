<?php
    include 'dulworth/vendor/ChromePhp.php';

    ChromePhp::log($_POST['name']);
    ChromePhp::log($_POST['email']);
    ChromePhp::log($_POST['body']);

    if($_POST['name'] == '') {
        header('location:contact.php?r=err&err=n');
    }
    else if($_POST['email'] == '') {
        header('location:contact.php?r=err&err=e');
    }
    else if($_POST['body'] == '') {
        header('location:contact.php?r=err&err=b');
    } else {
        $to      = 'mark@dulworth.com, pdulworth97@gmail.com, markdulworth@gmail.com';
        $replyTo = $_POST['email'];
        $subject = 'CONTACT FORM - WWW.DULWORTH.COM';
        $message = $_POST['body'];
        $message = str_replace("\n", "<br>", $message); // correct indentation

        $headers =  'MIME-Version: 1.0' . " \r\n" .
                    'Content-type:text/html; charset=utf-8' . " \r\n" .
                    'From:' . $_POST['name'] . '<contact@dulworth.com>' . " \r\n" .
                    'Reply-To: ' . $replyTo . " \r\n" .
                    'X-Mailer: PHP/' . phpversion();

        mail($to, $subject, $message, $headers);

        header('location:contact.php?r=ss');
    }
?>
