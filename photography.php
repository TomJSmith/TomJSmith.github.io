<!DOCTYPE html>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/menuItems.js"></script>
  <script src='js\photography.js'></script>
  <script src="js/socialMedia.js"></script>
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
        <li><a class="menuItem" href="mainPage.php">Home</a></li>
        <li><a class="menuItem activeMenuItem" href="photography.php">Photography</a></li>
        <li><a class="menuItem" href="projects.php">Projects</a></li>
        <li><a class="menuItem" href="contact.php">Contact</a></li>
      </ul>
    </div>
    <div class="contentFrame">
      <div class="photoGallery">
        <div class="col">
          <div class="imageFrame">
            <img class="galleryImage" src="images\photos\watertonValley.jpg" alt"Mountain Valley" onclick="toggle(this)"/>
          </div>
          <div class="imageFrame">
            <img class="galleryImage" src="images\photos\goldenGate.jpg" alt="Golden Gate Bridge" onclick="toggle(this)"/>
          </div>
          <div class="imageFrame">
            <img class="galleryImage" src="images\photos\big.jpg" alt="mountain" onclick="toggle(this)"/>
          </div>
          <div class="imageFrame">
            <img class="galleryImage" src="images\photos\fish.jpg" alt="fish" onclick="toggle(this)"/>
          </div>
        </div>

        <div class="col">
          <div class="imageFrame">
            <img class="galleryImage" src="images\photos\watertonWaterfall.jpg" alt="Waterton waterfall" onclick="toggle(this)"/>
          </div>
          <div class="imageFrame">
            <img class="galleryImage" src="images\photos\heron.jpg" alt="Heron" onclick="toggle(this)" />
          </div>
          <div class="imageFrame">
            <img class="galleryImage" src="images\photos\inkpots.jpg" alt="Mountain" onclick="toggle(this)" />
          </div>
          <div class="imageFrame">
            <img class="galleryImage" src="images\photos\memorial.jpg" alt="memorial" onclick="toggle(this)"/>
          </div>
        </div>

        <div class="col">
          <div class="imageFrame">
            <img class="galleryImage" src="images\photos\hamil.jpg" alt="hiking" onclick="toggle(this)"/>
          </div>
          <div class="imageFrame">
            <img class="galleryImage" src="images\photos\louise.jpg" alt="lake louise" onclick="toggle(this)"/>
          </div>
          <div class="imageFrame">
            <img class="galleryImage" src="images\photos\small.jpg" alt="hiking" onclick="toggle(this)"/>
          </div>
          <div class="imageFrame">
            <img class="galleryImage" src="images\photos\rock.jpg" alt="minerals" onclick="toggle(this)"/>
          </div>
        </div>



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
