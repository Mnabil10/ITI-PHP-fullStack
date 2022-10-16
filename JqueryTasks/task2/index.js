function par1() {
    $('#par1').slideToggle();
  }
  function par2() {
    $('#par2').slideToggle();
  }
  function par3() {
    $('#par3').slideToggle();
  }
  $('#par1').hide();
  $('#par2').hide();
  $('#par3').hide();
  $('#img1').click(par1);
  $('#img2').click(par2);
  $('#img3').click(par3);