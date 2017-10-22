<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'vendor/autoload.php';

                              
$emails = array('email1@example.com','email2@example.com');

$count = count($emails);
$a =0;
try {
	foreach ($emails as $email) {
		//echo $email."\n";
		echo("Preparing Mail...\n");
		$mail = new PHPMailer(true);		// Passing `true` enables exceptions
	    //Server settings
	    //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
	    $mail->isSMTP();                                      // Set mailer to use SMTP
	    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	    $mail->SMTPAuth = true;                               // Enable SMTP authentication
	    $mail->Username = 'example@gmail.com';                 // SMTP username
	    $mail->Password = 'password';                           // SMTP password
	    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	    $mail->Port = 587;
	    $mail->addAttachment('/tmp/Convoke_workshop.png');                                      // TCP port to connect to

	    //Recipients
	    $mail->setFrom('example@gmail.com', 'Convoke');
	    //$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
	    $mail->addAddress($email);               // Name is optional
	    $mail->addReplyTo('example@gmail.com', 'Convoke');
	   // $mail->addCC('cc@example.com');
	    //$mail->addBCC('bcc@example.com');

	    //Attachments
	    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
  // Optional name

	    //Content
	    $mail->isHTML(true);                                  // Set email format to HTML
	    $mail->Subject = 'Delhi University is conducting certified 2 day Courses for students of standard 9-12th';
	    $mail->Body    = 'Please share this with the students of standard IX to XII. This could be useful for them.
<p>
University Of Delhi\'s Cluster Innovation Centre is hosting a Workshop Series on <b>26th & 27th of October 2017.</b> This endeavor is a move to bring together the high school, undergraduate & post graduate students from various educational institutes across the region and update their understanding of modern technologies with a hands-on experience. The event shall provide the students a platform to share and learn about new technological innovations and advancements.
Following are the details of these workshops:
</p>
<h3>ETHICAL HACKING</h3>
<p>
Loophole, Ethical Hacking and Penetration Testing workshop, aims to educate the students of the threats, risks and privacy concerns that go with using the Internet. The other goal of this training module is to help the students protect their online identity by teaching them how to hack their way into systems worldwide by exploiting vulnerabilities and then help them protect themselves from such vulnerabilities.
</p>
<p>
Details & Registration: <a href="http://register.convoke.tech/event/2">http://register.convoke.tech/event/2</a>
</p>

<h3>ANDROID APP DEVELOPMENT</h3>
<p>
You will be taught the entire process of development of an Android application. Come and join this amazing workshop which will help you through the process of Android app development and by the time we are finished, you will have learned enough to go on to build your very own awesome apps!
</p>
<p>
Details & Registration: <a href="http://register.convoke.tech/event/3">http://register.convoke.tech/event/3</a>
</p>

<h3>
ROBOTICS BOOTCAMP
</h3>
<p>
Did you dream of making a Transformer like Robot? Have you ever wanted to build a Self Driving Car? Are you fascinated by Robots and want to know how they work? If most of your answers are "YES" then you have come to the right place. We are organizing an robotics workshop, where you will have hands on, enriching experience with electronics as well as programming. So, get ready for this fascinating workshop, and realize your dream in just 2 days.<br>
Students even get a TAKEAWAY KIT!!
</p>
<p>
Details & Registration: <a href="http://register.convoke.tech/event/1">http://register.convoke.tech/event/1<a>
</p>

PFA the poster for the workshops.
<br>
<h3>FAQs:</h3>
<p>
<b>Venue</b>- Cluster Innovation Centre, Inside University Stadium, North Campus, University of Delhi - 110007<br>

<b>Certification</b>- This is a certification course from Kyrion and shows that the student has made extra effort apart from normal course structure to learn a skill.<br>

<b>Duration</b>- 16 hours (8 hours a day)<Br>

<b>Timings</b>- 26th and 27th October, 9:30 am to 5:30 pm
</p>

For more information, you can also visit: <a href="https://convoke.tech">www.convoke.tech</a>';
	    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	    $mail->send();
	    $a+=1;
	    echo("Message sent to ".$email."\n");
	    echo("========".$a."/".$count."========\n");
	    //echo("\033[99D");
		//echo("\033[K");
	    
	}
} catch (Exception $e) {
    echo('Message could not be sent.');
    echo('Mailer Error: ' . $mail->ErrorInfo);
}
