<p>&lt;?php </p>
<p>//get data from form <br />
  $name = $_POST['name'];<br />
  $email= $_POST['email'];<br />
$subject= $_POST['subject'];<br />
  $message= $_POST['message'];</p>
<p><br />
  $to = &quot;amineziadi484@gmail.com&quot;;<br />
  $subject = &quot;Mail From website&quot;;<br />
  $txt =&quot;Name = &quot;. $name . &quot;\r\n Email = &quot; . $email . &quot;\r\n Message =&quot; . $message;<br />
  $headers = &quot;From: noreply@MFashionD.com&quot; . &quot;\r\n&quot; .<br />
  &quot;CC: somebodyelse@example.com&quot;;</p>
<p>if($email!=NULL){ <br />
  mail($to,$subject,$txt,$headers);<br />
} </p>
<p>//redirect </p>
<p>header(&quot;Location:thankyou.html&quot;);</p>
<p>?&gt;</p>
<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'contact@example.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();
?>
