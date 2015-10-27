$(document).ready(function(){
$('.menu-cont').affix({
      offset: {
        top: $('header-cont').height();
      }
});	

$('#sidebar').affix({
      offset: {
        top: 200;
      }
});	
});