<?php 
echo $_POST['name'];
exit;

                    $subject_admin ="Enquiry for http://foduu.cf/EdosBrosSupplements";

                    $from_sender="From :-";

                    $body="<html>";

                    $body.="<head>";
                    
                    $body.="<title>Approval</title>";

                    $body.="</head>";

                    $body.="<body>";

                    $body.="<table>";

                    $body.="<tr><td colspan='2' align='right'>";

                   $body.="<h1 style='color:red'>";

                    $body.="Enquiry for EdosBrosSupplements";

                    $body.="</h1>";

                    $body.="</td></tr>";

                    $body .="<tr><td><b>Guest Name</b> :-</td><td>".$_POST['name']."</td></tr>";
					$body .="<tr><td><b>email</b> :-</td><td>".$_POST['email']."</td></tr>";
					$body .="<tr><td><b>Contact No.</b> :-</td><td>".$_POST['phone']."</td></tr>";
					$body .="<tr><td><b>Message</b> :-</td><td>".$_POST['message']."</td></tr>";
          
          
                    $body.="</table>";

                    $body.="</body>";

                    $body.="</html>";



                                    





         $headers .= "Reply-To: www.coderedsol.com <info@foduu.com>\r\n";

         $headers .= "Return-Path: www.coderedsol.com <info@foduu.com>\r\n";

         $headers .= "From:  www.coderedsol.com <info@foduu.com>\r\n"; 

    

          $headers .= "Organization: Bright steel industries\r\n";

              $headers .= "MIME-Version: 1.0\r\n";

              $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

              $headers .= "X-Priority: 3\r\n";

              $headers .= "X-Mailer: PHP". phpversion()."\r\n" ;



      

  // $to_admin="info@quickalgoplus.in";

  $to_admin="info@foduu.com";

  

  

       $mai = mail($to_admin, $subject_admin, $body,$headers);



   //echo $body;

  {

    

  // echo '<meta http-equiv="refresh" content="0;url=index.html">';  

  }

     

     ?>