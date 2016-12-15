<?php
defined('_JEXEC') or die('Restricted access'); // no direct access
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'functions.php';
$document = null;
if (isset($this))
  $document = & $this;
$baseUrl = $this->baseurl;
$templateUrl = $this->baseurl . '/templates/' . $this->template;
artxComponentWrapper($document);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
 <head>
  <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<jdoc:include type="head" />
  <link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/system/css/system.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/system/css/general.css" type="text/css" />
  
  <link rel="stylesheet" type="text/css" href="<?php echo $templateUrl; ?>/css/template.css" />
  <!--[if IE 6]><link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.ie6.css" type="text/css" media="screen" /><![endif]-->
  <!--[if IE 7]><link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.ie7.css" type="text/css" media="screen" /><![endif]-->
  <link rel="stylesheet" type="text/css" href="<?php echo $templateUrl; ?>/css/coda.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo $templateUrl; ?>/css/kwicks.css" />
  <script type="text/javascript" src="<?php echo $templateUrl; ?>/script.js"></script>
  <script type="text/javascript" src="<?php echo $templateUrl; ?>/swfobject.js"></script>
  <script type="text/javascript" src="<?php echo $templateUrl; ?>/jquery-1.2.6.min.js"></script>
  <script type="text/javascript" src="<?php echo $templateUrl; ?>/cta-javascript.js"></script>
  <script type="text/javascript" src="<?php echo $templateUrl; ?>/coda-slider.1.1.1.pack.js"></script>
  <script type="text/javascript" src="<?php echo $templateUrl; ?>/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="<?php echo $templateUrl; ?>/jquery.easing.compatibility.js"></script>
	<script type="text/javascript" src="<?php echo $templateUrl; ?>/jquery.kwicks-1.5.1.js"></script>
	<script type="text/javascript" src="<?php echo $templateUrl; ?>/jquery.roundabout-1.0.min.js"></script>
	<script type="text/javascript" src="<?php echo $templateUrl; ?>/jquery.roundabout-shapes-1.1.min.js"></script>
	<script type="text/javascript" src="<?php echo $templateUrl; ?>/cufon-yui.js" ></script>
  <script type="text/javascript" src="<?php echo $templateUrl; ?>/Bebas_400.font.js" ></script>
  <script type="text/javascript" src="<?php echo $templateUrl; ?>/captify.js"></script>
  <script type="text/javascript" defer="defer">
	$(function(){
		$('img.captify').captify({animation: 'always-on',opacity: '0.7',className: 'caption-bottom',position: 'bottom'});
	});
	</script>
  <script type="text/javascript" defer="defer">
  Cufon.replace('span.t', { hover: true, fontFamily: 'Bebas' });
  Cufon.replace('h2', { fontFamily: 'Bebas' });
	</script>
	<script type="text/javascript" defer="defer">
   $(document).ready(function() {
      $('ul#myRoundabout').roundabout({
         shape: 'tearDrop'
      });
   });
  </script> 
  <script type="text/javascript" defer="defer">
			$().ready(function() {
				$('.kwicks').kwicks({
					max : 200,
					duration: 800,  
					easing: 'easeOutQuint'
				});
			});
  </script>
  <script type="text/javascript" defer="defer">
		$(document).ready(function() {
			jQuery("div#slider1").codaSlider()
		});
	</script>
<script type="text/javascript" defer="defer">
		var flashvars = {};
		flashvars.xml = "<?php echo $templateUrl; ?>/cu3er/config.xml";
		flashvars.font = "<?php echo $templateUrl; ?>/cu3er/font.swf";
		var params = {
	wmode: "transparent",
	allowscriptaccess: "always",
	bgcolor: "#000000"
	};
		var attributes = {};
		attributes.id = "slider";
		window.onload = function()
    {
		swfobject.embedSWF("<?php echo $templateUrl; ?>/cu3er/cu3er.swf", "cu3er-container", "960", "500", "9", "expressInstall.swf", flashvars, params, attributes);
		}
</script>
<meta name="google-site-verification" content="lFTEFt-BtMmFbSjMqbymgTGMJEprnjWjRau7_tBmZIE" />
 </head>
<body>
    <div id="a2-page-background-gradient"></div>
<div id="a2-main">
<div class="a2-Sheet">
    <div class="a2-Sheet-tl"></div>
    <div class="a2-Sheet-tr"></div>
    <div class="a2-Sheet-bl"></div>
    <div class="a2-Sheet-br"></div>
    <div class="a2-Sheet-tc"></div>
    <div class="a2-Sheet-bc"></div>
    <div class="a2-Sheet-cl"></div>
    <div class="a2-Sheet-cr"></div>
    <div class="a2-Sheet-cc"></div>
    <div class="a2-Sheet-body">

<div class="a2-Header">

<div id="logohead">
<h1 style="text-align: center"><a href="http://dizajnadva.co.cc/">dizajnAdva</a></h1>
</div>

<div id="containlayer">

<div id="cu3er-container">
    <h2>STARTING...</h2>
    <!-- <a href="http://www.adobe.com/go/getflashplayer">
        <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />
    </a> -->
</div>

<div id="flashover"></div>

</div>

</div>
<jdoc:include type="modules" name="user3" />
<jdoc:include type="modules" name="banner1" style="artstyle" artstyle="a2-nostyle" />
<?php echo artxPositions($document, array('top1', 'top2', 'top3'), 'a2-block'); ?>
<div class="a2-contentLayout">
<div class="a2-content">

<?php
  echo artxModules($document, 'banner2', 'a2-nostyle');
  if (artxCountModules($document, 'breadcrumb'))
    echo artxPost(null, artxModules($document, 'breadcrumb'));
  echo artxPositions($document, array('user1', 'user2'), 'a2-article');
  echo artxModules($document, 'banner3', 'a2-nostyle');
?>
<?php if (artxHasMessages()) : ?><div class="a2-Post">
    <div class="a2-Post-body">
<div class="a2-Post-inner">
<div class="a2-PostContent">

<jdoc:include type="message" />

</div>
<div class="cleared"></div>

</div>

		<div class="cleared"></div>
    </div>
</div>
<?php endif; ?>
<jdoc:include type="component" />

<?php echo artxModules($document, 'banner4', 'a2-nostyle'); ?>
<?php echo artxPositions($document, array('user4', 'user5'), 'a2-article'); ?>
<?php echo artxModules($document, 'banner5', 'a2-nostyle'); ?>
</div>

</div>
<div class="cleared"></div>

<?php echo artxPositions($document, array('bottom1', 'bottom2', 'bottom3'), 'a2-block'); ?>
<jdoc:include type="modules" name="banner6" style="artstyle" artstyle="a2-nostyle" />
<div class="a2-Footer">
 <div class="a2-Footer-inner">
  <div class="a2-Footer-text">
  <?php if (artxCountModules($document, 'copyright') == 0): ?>
<p>With jscript disabled / unsupported browser, you won't see much.. ;(<br />
Thanks for visiting, we hope it was emotional :)<br />
Looking forward to hearing from you!<br /><br />
Copyright &copy; 2010 Adva.<br />
All Rights Reserved.
</p>

  <?php else: ?>
  <?php echo artxModules($document, 'copyright', 'a2-nostyle'); ?>
  <?php endif; ?>
  </div>
 </div>
 <div class="a2-Footer-background"></div>
</div>

		<div class="cleared"></div>
    </div>
</div>
<div class="cleared"></div>
<p class="a2-page-footer"></p>
</div>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-17056723-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body> 
</html>