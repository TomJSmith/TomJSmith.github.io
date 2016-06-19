var bigPicId = '-1';

function toggle(picId)
  {
    if (picId == bigPicId)
    {
      if (document.getElementById(picId).style.width == '29.3%')
      {
        document.getElementById(picId).style.width = '96%';
      }
      else
      {
          document.getElementById(picId).style.width = '29.3%';
      }
    }
    else if (bigPicId == '-1')
    {
      document.getElementById(picId).style.width = '96%';
      bigPicId = picId;
    }
    else
    {
      document.getElementById(bigPicId).style.width = '29.3%';
      document.getElementById(picId).style.width = '96%';
      bigPicId = picId;
    }
}

function test() {
    window.alert('test');
}
