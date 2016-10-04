$(document).ready(function()
{
  $(".socialIcon").hover(function()
  {
    $(this).stop().animate({opacity: 1}, 300);
  }, function()
  {
    $(this).stop().animate({opacity: 0.7}, 300);
  });
});
