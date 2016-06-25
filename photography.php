<!DOCTYPE html>
<html>
<head>
  <script src='photography.js'>
  </script>
<title>Thomas Smith</title>
<link rel="stylesheet" href="css/mainPage.css">
</head>
<body>
  <div id="bigImageFrame" class="bigImage" onclick="hideBigImage()">
    <div id="bigImageOp" class="bigImageOpacity">
    </div>
    <img id="bigImage" src="" alt="" />
  </div>
  <div class="mainFrame">
    <div class="menuBar">
      <ul>
        <li><a href="mainPage.php">Home</a></li>
        <li><a href="photography.php" style="background-color: #0F5959">Photography</a></li>
        <li><a href="projects.php">Projects</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </div>
    <div class="contentFrame">
      <div class="photoGallery">
        <div class="col">
          <div class="imageFrame">
            <img src="images\goldenGate.jpg" alt="Golden Gate Bridge" onclick="toggle(this)" onmouseover="hover(this)" onmouseout="unHover(this)"/>
          </div>
          <div class="imageFrame">
            <img src="images\big.jpg" alt="mountain" onclick="toggle(this)"/>
          </div>
          <div class="imageFrame">
            <img src="images\fish.jpg" alt="fish" onclick="toggle(this)"/>
          </div>
        </div>

        <div class="col">
          <div class="imageFrame">
            <img src="images\dog.jpg" alt="dog" onclick="toggle(this)" />
          </div>
          <div class="imageFrame">
            <img src="images\lake.jpg" alt="lake louise" onclick="toggle(this)" />
          </div>
          <div class="imageFrame">
            <img src="images\memorial.jpg" alt="memorial" onclick="toggle(this)"/>
          </div>
        </div>

        <div class="col">
          <div class="imageFrame">
            <img src="images\hamil.jpg" alt="hiking" onclick="toggle(this)"/>
          </div>
          <div class="imageFrame">
            <img src="images\louise.jpg" alt="lake louise" onclick="toggle(this)"/>
          </div>
          <div class="imageFrame">
            <img src="images\small.jpg" alt="hiking" onclick="toggle(this)"/>
          </div>

          <div class="imageFrame">
            <img src="images\rock.jpg" alt="minerals" onclick="toggle(this)"/>
          </div>
        </div>



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
