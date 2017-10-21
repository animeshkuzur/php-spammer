<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'vendor/autoload.php';

                              // Passing `true` enables exceptions

$emails = array('animesh.amank21@gmail.com','pankaj11520@ducic.ac.in'
//'bbpsrh@gmail.com','carmeldelhi@gmail.com','davsvd@hotmail.com','davr_dv@yahoo.com','davvasantkunj@gmail.com','davkhills@hotmail.com','davjasola@gmail.com','Info.rohini@dis.ac.in','Info.dwarka@dis.ac.in','ritasen@dpsrohini.com','principaldpsmr@gmail.com','dpsnoida30@gmail.com','dpsfbd@vsnl.com','principal@dpsrkp.net','mail@dpsdwarka.com','dpsi@vsnl.net','principal@dpsvasantkunj.com','dpsnadmin@dpsgrnoida.com','info@dpsindirapuram.com','info1@dpsindirapuram.com','principal@donboscoschool.in','doonpublic_school@yahoo.co.in','school@gdgoenka-rohini.com','bluebells@rediffmail.com','info@gdgoenkadwarka.in','gyanbharati@gmail.com','apsnoidasec37@gmail.com','apssvprincipal@gmail.com','dpsvasantvihar@gmail.com','info@bvmschool.in','principal@genesisgs.com','indus_valley_ps@yahoo.co.in','mail@davpusaroad.org','office@fasnoida.org','info@dps-gbn.org','contact@agnelgreaternoida.org','apsdk1953@gmail.com','apsdc@indiatimes.com','tafsdelhi@gmail.com','afbbschool@gmail.com','principal.afgji@gmail.com','principal@modernschool.net','msvvdel@gmail.com','modernpublicschool37@hotmail.com','spsmv59@rediffmail.com','gdsps@salwanschools.com','u_p_school@yahoo.co.in','info@kotharischool.edu.in','principal.eok@tagoreint.com'
	);

//info.vv@tagoreint.com,mail@pcsdelhi.in,mayoornoida@gmail.com,mayointernational@gmail.com,springdaleschoolpusaroad@gmail.com,springdales@vsnl.com,standrewsdelhi@gmail.com,spvdelhi@gmail.com,info@mtps.in,contact@theiihs.com,principal@stcolumbas.net,ssn@somervillenoida.in,somervilleve@gmail.com,somervillegn@gmail.com,info.noida@theshrirammillenniumschool.org,stxaviersdelhi54@gmail.com,info@kvvigyanvihar.com,general_lps@rediffmail.com,vp@vbpsnoida.com,vbpsdwarka@yahoo.co.in,vbpsgn@gmail.com,contactus@theindianschool.in,ris.vasantkunj@ryangroup.org,info@vivekanandschool.in,lpspioneersun@gmail.com,krmworldschool@gmail.com,krmangalamgk2@vsnl.net,svisg@rediffmail.com,svisg_in@yahoo.com,ha_academy@yahoo.com,gzb.jaipuria@gmail.com,contact@ahlconinternational.com,principal@aiss.amity.edu,amity@aisn.amity.edu,aispv@amity.edu,principal@aismv.amity.edu,skool.saket.del@apj.edu,skool.ms.nvd@apj.edu,skool.ss.del@apj.edu,skool.pp.del@apj.edu,arwachinschool@gmail.com,bal.madir2010@gmail.com,mehtavidyalaya@rediffmail.com,bbpspr@hotmail.com,principal_bbpsdw@yahoo.ocm,bbpsgr@hotmail.com,info@jbms.in
$count = 2;
$a =0;
try {
	//foreach ($emails as $email) {
		
		$mail = new PHPMailer(true);
	    //Server settings
	    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
	    $mail->isSMTP();                                      // Set mailer to use SMTP
	    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	    $mail->SMTPAuth = true;                               // Enable SMTP authentication
	    $mail->Username = 'convoke.ducic@gmail.com';                 // SMTP username
	    $mail->Password = 'erlzhgtnnalcyibe';                           // SMTP password
	    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	    $mail->Port = 587;                                    // TCP port to connect to

	    //Recipients
	    $mail->setFrom('convoke.ducic@gmail.com', 'Convoke');
	    //$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
	    $mail->addAddress('animesh.amank21@gmail.com');               // Name is optional
	    $mail->addReplyTo('convoke.ducic@gmail.com', 'Convoke');
	   // $mail->addCC('cc@example.com');
	    //$mail->addBCC('bcc@example.com');

	    //Attachments
	    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	    $mail->addAttachment('/tmp/Convoke_workshop.png', 'Workshops.jpg');    // Optional name

	    //Content
	    $mail->isHTML(true);                                  // Set email format to HTML
	    $mail->Subject = 'Delhi University is conducting certified 2 day Courses for students of standard 9-12th';
	    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
	    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	    $mail->send();
	    $a+=1;
	    echo 'Message sent to '.$email.'\n';
	    echo '========'.$a.'/'.$count.'========';
	//}
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}