$(document).ready(function()
{
  $(".menuItem").hover(function()
  {
    if (!$(this).hasClass("activeMenuItem"))
    {
      $(this).css("border-color", "#0F5959");
    }
  }, function()
  {
    if (!$(this).hasClass("activeMenuItem"))
    {
      $(this).css("border-color", "#D93240");
    }
  });
});
