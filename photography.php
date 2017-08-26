<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/menuItems.js"></script>
  <script src='js\photography.js'></script>
  <script src="js/socialMedia.js"></script>
<title>Thomas Smith</title>
<link rel="stylesheet" href="css/mainPage.css">
</head>
<body>
  <div class="mainFrame">
    <div class="menuBar">
      <ul>
        <li><a class="menuItem" href="index.php">Home</a></li>
        <li><a class="menuItem activeMenuItem" href="photography.php">Photography</a></li>
        <li><a class="menuItem" href="projects.php">Projects</a></li>
        <li><a class="menuItem" href="contact.php">Contact</a></li>
      </ul>
    </div>
    <div class="contentFrame">
      <div class="photoGallery">
        <div class="col">
          <div class="imageFrame" onclick="location.href = 'images\\photos\\watertonValley.jpg';">
            <img class="galleryImage" src="images\photos\watertonValley_s.jpg" alt"Mountain Valley"/>
          </div>
          <div class="imageFrame" onclick="location.href = 'images\\photos\\hamil.jpg';">
            <img class="galleryImage" src="images\photos\hamil_s.jpg" alt="hiking" onclick="toggle(this)"/>
          </div>
          <div class="imageFrame" onclick="location.href = 'images\\photos\\louise.jpg';">
            <img class="galleryImage" src="images\photos\louise_s.jpg" alt="lake louise" onclick="toggle(this)"/>
          </div>
          <div class="imageFrame" onclick="location.href = 'images\\photos\\inkpots.jpg';">
            <img class="galleryImage" src="images\photos\inkpots_s.jpg" alt="Mountain" onclick="toggle(this)" />
          </div>
          <div class="imageFrame" onclick="location.href = 'images\\photos\\big.jpg';">
            <img class="galleryImage" src="images\photos\big_s.jpg" alt="mountain"/>
          </div>
        </div>

        <div class="col">
          <div class="imageFrame" onclick="location.href = 'images\\photos\\watertonWaterfall.jpg';">
            <img class="galleryImage" src="images\photos\watertonWaterfall_s.jpg" alt="Waterton waterfall" onclick="toggle(this)"/>
          </div>

          <div class="imageFrame" onclick="location.href = 'images\\photos\\goldenGate.jpg';">
            <img class="galleryImage" src="images\photos\goldenGate_s.jpg" alt="Golden Gate Bridge"/>
          </div>
          <div class="imageFrame" onclick="location.href = 'images\\photos\\small.jpg';">
            <img class="galleryImage" src="images\photos\small_s.jpg" alt="hiking" onclick="toggle(this)"/>
          </div>
        </div>
        <div class="col">
          <div class="imageFrame" onclick="location.href = 'images\\photos\\watertonPeak.jpg';">
            <img class="galleryImage" src="images\photos\watertonPeak_s.jpg" alt="Heron" onclick="toggle(this)" />
          </div>
          <div class="imageFrame" onclick="location.href = 'images\\photos\\heron.jpg';">
            <img class="galleryImage" src="images\photos\heron_s.jpg" alt="Heron" onclick="toggle(this)" />
          </div>
          <div class="imageFrame" onclick="location.href = 'images\\photos\\fish.jpg';">
            <img class="galleryImage" src="images\photos\fish_s.jpg" alt="fish"/>
          </div>
          <div class="imageFrame" onclick="location.href = 'images\\photos\\memorial.jpg';">
            <img class="galleryImage" src="images\photos\memorial_s.jpg" alt="memorial" onclick="toggle(this)"/>
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
