<?php
ob_start();
$name = "";
$email = "";
$message = "";
$subject = "";
$email_to = "lflupe@gmail.com";
function cleanInput($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = cleanInput($_POST["name"]);
  $email = cleanInput($_POST["email"]);
  $subject = cleanInput($_POST["subject"]);
  $message = cleanInput($_POST["message"]);
  $headers = 'From: '.$email_from."\r\n".
  'Reply-To: '.$email_from."\r\n" .
  'X-Mailer: PHP/' . phpversion();
  mail($email_to, $subject, $message, $headers);
  header("Location: thanks.html");
  ob_end_flush();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Thomas Smith</title>
<link rel="stylesheet" href="css/mainPage.css">
</head>
<body>
<div class="mainFrame">
  <div class="menuBar">
  <ul>
    <li><a href="mainPage.php">Home</a></li>
    <li><a href="photography.php">Photography</a></li>
    <li><a href="projects.php">Projects</a></li>
    <li><a href="contact.php" style="background-color: #0F5959">Contact</a></li>
  </ul>
  </div>
  <div class="contentFrame">
    <div class="contactFormFrame">
      <form class="contactForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <h3>Name<br></h3>
        <input type="text" name="name">
        <h3>Email</h3>
        <input type="email" name="email">
        <h3>Subject<br></h3>
        <input type="text" name="subject">
        <h3>Message</h3>
        <textarea name="message" rows="8" cols="40"></textarea>
        <button type="submit" name="submit">Send</button>
      </form>
    </div>
  </div>
</div>
<div class="socialLinks">
  <a href="https://www.instagram.com/thom_john/"><img src="instagram.png" class="socialIcon" height="30px" width="30px"/></a>
  <a href="https://www.facebook.com/profile.php?id=1081272861"><img src="facebook-black.png" class="socialIcon" height="30px" width="30px"/></a>
  <a href="https://github.com/TomJSmith"><img src="github.png" class="socialIcon" height="30px" width="30px"/></a>
  <a href="https://ca.linkedin.com/in/thomas-smith-39686289"><img src="linkedin.png" class="socialIcon" height="30px" width="38px"/></a>
</div>
</body>
</html>
