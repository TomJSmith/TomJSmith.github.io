<!DOCTYPE html>
<html>
<head>
  <script src='js\projects.js'>
  </script>
<title>Thomas Smith</title>
<link rel="stylesheet" href="css/mainPage.css">
<link rel="stylesheet" href="css/projects.css">
</head>
<body>
<div class="mainFrame">
  <div class="menuBar">
    <ul>
      <li><a href="mainPage.php">Home</a></li>
      <li><a href="photography.php">Photography</a></li>
      <li><a href="projects.php" style="background-color: #0F5959">Projects</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
  </div>
  <div class="contentFrame">
    <ul class="projectList">
      <li onclick="location.href = 'wip.html';" class="projectListItem" onmouseover="projectHover(this)" onmouseout="projectUnHover(this)">
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

      <li onclick="location.href = 'wip.html';" class="projectListItem" onmouseover="projectHover(this)" onmouseout="projectUnHover(this)">
          <div class="projectIcon">
              <img src="images\projects\BoidLogo.png" alt="BOIDS" />
          </div>
          <div class="projectText">
            <div class="projectItemTitle">
                OpenGL Boids
            </div>
            <div class="projectItemDescription">
              Birdoid object simulation in OpenGL that demonstrates flocking behavior and object avoidance with independent agents.
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
