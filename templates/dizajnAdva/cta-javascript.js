$(document).ready(function(){
  $('ul.a2-menu a')
    .css({ 'backgroundPosition': '0 0' })
	.hover(
      function(){
        $(this).stop()
          .animate({
            'opacity': 1
          }, 650);
	  },
	  function(){
        $(this).stop()
          .animate({
            'opacity': 0.3
          }, 650);
	  }
	);
});
$(document).ready(function(){
  $('div#logohead a')
    .css({ 'backgroundPosition': '0 0' })
	.hover(
      function(){
        $(this).stop()
          .animate({
            'opacity': 1
          }, 650);
	  },
	  function(){
        $(this).stop()
          .animate({
            'opacity': 0.5
          }, 650);
	  }
	);
});