$(document).ready(function()
{
  $(".socialIcon").hover(function()
  {
    $(this).stop().animate({opacity: 1}, 200);
  }, function()
  {
    $(this).stop().animate({opacity: 0.6}, 200);
  });

  $(".sendButton").hover(function()
  {
    $(this).stop().animate({opacity: 1}, 200);
  }, function()
  {
    $(this).stop().animate({opacity: 0.8}, 200);
  });
});
