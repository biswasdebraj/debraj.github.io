<?php

//get data from form

$name = $_POST['name'];
$email = $_POST['email'];
$subject = "New Mail From $email";
$message = $_POST['message'];
$to="contact@debraj.in";
$subject="Mail from $name";
$txt="Hello this is $name \r\n $message";
$header="From:$name <$email>";
if($email!=NULL){
    $feed=mail($to,$subject,$txt,$header);
    //echo "<script>alert('Thank you for contacting us. A response mail has been sent to $email.');</script>";
    echo "<script>document.location.href='./thank-you'</script>";
    
}
      else
      {
      echo "<script>alert('Mail was not sent. Please try again later');</script>";
      }

if($feed=true ) {
            $tosender = $email;
            $subject1 = "From Debraj Biswas";
            //$message1 = 'Thank you for contacting us. Our support team will soon response to your query.';
            $htmlContent = "<html>Dear $name thank you for contating. I will get in touch with you shortly.</html>";
            $header1= "MIME-Version: 1.0" . "\r\n";
            $header1 .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $header1 .= "From:Debraj Biswas <contact@debraj.in>";
            // Set content-type header for sending HTML email 
            
            
            mail($tosender,$subject1,$htmlContent,$header1);
    
            
}
//redirect
//header("Location:index");
?>
