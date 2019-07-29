<?php
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['phone']))
$phone = $_POST['phone'];
if(isset( $_POST['message']))
$message = $_POST['message'];
/*if(isset( $_POST['subject']))*/
/*$subject = $_POST['subject'];*/
$subject = 'Zpráva kontaktního formuláře z TOPMER.cz';


$content="Od: $name \n Email: $email \n Zpráva: $message \n Telefon: $phone";
$recipient = "testovani1.ebrana@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Mail nebyl odeslán, nastala chyba!");
echo "Mail byl úspěšně odeslán.";

sleep(5);
//header('Location: index.html#contact');

?>

<script>
window.location.href = 'index.html#contact';
</script>



