?<php>
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $mailForm = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo =  "amineziadi15@gmail.com";
    $headers = "Form : "  .$mailForm;
    $txt = "You Have a Message " .$name ".\n\n" .$message;

    mail($mailTo , $name , $txt, $headers);

    header ("Location: index.html?Message Sent");
}

</php>