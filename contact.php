<?php
// ob_start();
$name = "";
$email_from = "";
$message = "";
$subject = "";
$email_to = "me@tomjohnsmith.com";
function cleanInput($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = cleanInput($_POST["name"]);
  $email_from = cleanInput($_POST["email"]);
  $subject = cleanInput($_POST["subject"]);
  $message = cleanInput($_POST["message"]);
  $headers = 'From: '."postmaster@tomjohnsmith.com"."\r\n".
  'Reply-To: '.$email_from."\r\n";
  $email_to."<br/>";
  $subject."<br/>";
  $message."<br/>";
  $headers."<br/>";
  mail($email_to, $subject, $message, $headers);
  header("Location: thanks.html");
  // ob_end_flush();
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script type="text/javascript" src="js\contact.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/menuItems.js"></script>
  <script src="js/socialMedia.js"></script>
  </script>
<title>Thomas Smith</title>
<link rel="stylesheet" href="css/mainPage.css">
<link rel="stylesheet" href="css/contact.css">
</head>
<body>
<div class="mainFrame">
  <div class="menuBar">
  <ul>
    <li><a class="menuItem" href="mainPage.php">Home</a></li>
    <li><a class="menuItem" href="photography.php">Photography</a></li>
    <li><a class="menuItem" href="projects.php">Projects</a></li>
    <li><a class="menuItem activeMenuItem" href="contact.php">Contact</a></li>
  </ul>
  </div>
  <div class="contentFrame">
    <div class="contactFormFrame">
      <form class="contactForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <input class="contactInput" type="text" name="name" value="Name" onfocus="fieldGetFocus(this, 'Name')" onblur="fieldLoseFocus(this, 'Name')">
        <input class="contactInput" type="text" name="email" value="Email" onfocus="fieldGetFocus(this, 'Email')" onblur="fieldLoseFocus(this, 'Email')">
        <input class="contactInput" type="text" name="subject" value="Subject" onfocus="fieldGetFocus(this, 'Subject')" onblur="fieldLoseFocus(this, 'Subject')">
        <textarea class="contactInput" name="message" rows="8" cols="40" onfocus="fieldGetFocus(this, 'Message')" onblur="fieldLoseFocus(this, 'Message')">Message</textarea>
        <button class="sendButton" type="submit" name="submit">Send</button>
      </form>
    </div>
  </div>
</div>
<div class="socialLinks">
  <a href="https://www.instagram.com/thom_john/"><img src="images\icons\instagram.png" class="socialIcon" height="30px" width="30px"/></a>
  <a href="https://www.facebook.com/profile.php?id=1081272861"><img src="images\icons\facebook-black.png" class="socialIcon" height="30px" width="30px"/></a>
  <a href="https://github.com/TomJSmith"><img src="images\icons\github.png" class="socialIcon" height="30px" width="30px"/></a>
  <a href="https://ca.linkedin.com/in/thomas-smith-39686289"><img src="images\icons\linkedin.png" class="socialIcon" height="30px" width="38px"/></a>
</div>
</body>
</html>
