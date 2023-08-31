
$(document).ready(function(){
  document.onreadystatechange = function () {
    if (document.readyState === 'complete') {
      $("body").removeClass('spinner');
    }
  }
	$('#nav-icon').click(function(){
		$(this).toggleClass('open');
	});
    $('#nav-icon').click(function(){
        $('.side-bar').toggleClass("side-bar-open");
    });

$('#mob-num').keyup(function(){
   $(this).val(this.value.replace(new RegExp(/[^\d]/,'ig'), ""));
});
setTimeout(function() {
    $('.splash-screen').hide();
}, 3000);
$(".back").click(function (){
    window.history.back();
  });
  $(".product-bit-images").click(function(){
    var bitImage=$(this).html();
    var fullImage=$(this).parent().prev().html();
    $(this).html(fullImage);
    $(this).parent().prev().html(bitImage);
  });
});
