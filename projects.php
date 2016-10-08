<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src='js\projects.js'></script>
  <title>Thomas Smith</title>
  <link rel="stylesheet" href="css/mainPage.css">
  <link rel="stylesheet" href="css/projects.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/menuItems.js"></script>
  <script src="js/socialMedia.js"></script>
</head>
<body>
<div class="mainFrame">
  <div class="menuBar">
    <ul>
      <li><a class="menuItem" href="mainPage.php">Home</a></li>
      <li><a class="menuItem" href="photography.php">Photography</a></li>
      <li><a class="menuItem activeMenuItem" href="projects.php">Projects</a></li>
      <li><a class="menuItem" href="contact.php">Contact</a></li>
    </ul>
  </div>
  <div class="contentFrame">
    <ul class="projectList">
      <li onclick="location.href = 'https://github.com/TomJSmith/Cookr';" class="projectListItem" onmouseover="projectHover(this)" onmouseout="projectUnHover(this)">
          <div class="projectIcon">
              <img src="images\projects\CookrLogo.png" alt="Cookr Logo" />
          </div>
          <div class="projectText">
            <div class="projectItemTitle">
                Cookr
            </div>
            <div class="projectItemDescription">
              Cookr is a high fidelity prototype for a tablet based cooking application designed to help beginners start cooking at home.
            </div>
          </div>
      </li>

      <li onclick="location.href = 'https://github.com/TomJSmith/Boids';" class="projectListItem" onmouseover="projectHover(this)" onmouseout="projectUnHover(this)">
          <div class="projectIcon">
              <img src="images\projects\BoidLogo.png" alt="BOIDS" />
          </div>
          <div class="projectText">
            <div class="projectItemTitle">
                OpenGL Boids
            </div>
            <div class="projectItemDescription">
              Birdoid object animation using OpenGL and C++ that demonstrates flocking behavior and object avoidance by independent agents.
            </div>
          </div>
      </li>

      <li onclick="location.href = 'https://github.com/TomJSmith/personalSite';" class="projectListItem" onmouseover="projectHover(this)" onmouseout="projectUnHover(this)">
          <div class="projectIcon">
              <img src="images\icons\tIcon.jpg" alt="Scuba Selfie" />
          </div>
          <div class="projectText">
            <div class="projectItemTitle">
                TomJohnSmith.com
            </div>
            <div class="projectItemDescription">
              This website!
            </div>
          </div>
      </li>

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
