var bigPicId = '-1';

$(document).ready(function()
{
  $(".galleryImage").hover(function()
  {
    fadeInDiv($(this), 300);
  }, function()
  {
    fadeOutDiv($(this), 300);
  });

});

function toggle(picElement)
{
  var bigPic = document.getElementById('bigImage');
  bigPic.src = picElement.src;
  var h = getHeight() - 40;
  var w = getWidth() - 40;
  var imageRatio = bigPic.naturalWidth/bigPic.naturalHeight;
  if (imageRatio >= 1)
  {
    sizeImageByWidth();
  }
  else
  {
    if (h * imageRatio > 1000 || h * imageRatio > getWidth())
    {
      sizeImageByWidth();
    }
    else
    {
      sizeImageByHeight();
    }
  }
  document.getElementById('bigImageFrame').style.width = '100%';
  document.getElementById('bigImageFrame').style.height = '100%';
}

function fadeInDiv(divObject, fadeTime)
{
  $({alpha: 0}).animate({alpha: 1}, {
    duration: fadeTime,
    step: function()
    {
        divObject.css("border-color", "rgba(217,50,64," + this.alpha + ")");
    }
  });
}

function fadeOutDiv(divObject, fadeTime)
{
  $({alpha: 1}).animate({alpha: 0}, {
    duration: fadeTime,
    step: function()
    {
        divObject.css("border-color", "rgba(217,50,64," + this.alpha + ")");
    }
  });
}


function sizeImageByWidth()
{
  var bigPic = document.getElementById('bigImage');
  var h = getHeight() - 40;
  var w = getWidth() - 40;
  var imageRatio = bigPic.naturalWidth/bigPic.naturalHeight;
  if (w > 1000)
  {
    bigPic.style.width = "1000px";
    bigPic.style.height = String(1000/imageRatio) + "px";
    bigPic.style.marginTop = String((h - (1000/imageRatio)) / 2) + "px";
  }
  else
  {
    bigPic.style.width = String(w) + "px";
    bigPic.style.height = String(w/imageRatio) + "px";
    bigPic.style.marginTop = String((h - (w/imageRatio)) / 2) + "px";
  }
}

function sizeImageByHeight()
{
  var bigPic = document.getElementById('bigImage');
  var h = getHeight() - 40;
  var w = getWidth() - 40;
  var imageRatio = bigPic.naturalWidth/bigPic.naturalHeight;
  if (h < bigPic.naturalHeight)
  {
    bigPic.style.height = String(h) + "px";
    bigPic.style.width = String(h * imageRatio) + "px";
    bigPic.style.marginTop = "20px";
  }
  else
  {
    bigPic.style.height = String(bigPic.naturalHeight) + "px";
    bigPic.style.width = String(bigPic.naturalWidth) + "px";
    bigPic.style.marginTop = String((h - bigPic.naturalHeight)/2) + "px";
  }
}

function hideBigImage()
{
  document.getElementById('bigImageFrame').style.width = '0%';
  document.getElementById('bigImageFrame').style.height = '0%';
  var bigPic = document.getElementById('bigImage');
  bigPic.style.width = "0px";
  bigPic.style.height = "0px";
}

function getWidth() {
  if (self.innerHeight) {
    return self.innerWidth;
  }

  if (document.documentElement && document.documentElement.clientWidth) {
    return document.documentElement.clientWidth;
  }

  if (document.body) {
    return document.body.clientWidth;
  }
}

function hover(picElement)
{
  picElement.style.borderColor = "#D93240";
}

function unHover(picElement)
{
  picElement.style.borderColor = "#FFF";
}

function getHeight() {
  if (self.innerHeight) {
    return self.innerHeight;
  }

  if (document.documentElement && document.documentElement.clientHeight) {
    return document.documentElement.clientHeight;
  }

  if (document.body) {
    return document.body.clientHeight;
  }
}

function test()
{
  window.alert('test');
}
