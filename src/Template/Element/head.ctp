<?php
$this->layout = false;
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Bóng đá K</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Live info Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <!-- Bootstrap Core CSS -->
        <link href="<?php echo $this->request->webroot . "css" ?>/bootstrap.min.css" rel='stylesheet' type='text/css' />
        <!-- Custom CSS -->
        <link href="<?php echo $this->request->webroot . "css" ?>/style.css" rel='stylesheet' type='text/css' />
        <link href="<?php echo $this->request->webroot . "css" ?>/custome.css" rel='stylesheet' type='text/css' />
        <!-- Graph CSS -->
        <link href="<?php echo $this->request->webroot . "css" ?>/font-awesome.css" rel="stylesheet"> 
        <!-- jQuery -->
        <!-- lined-icons -->
        <link rel="stylesheet" href="<?php echo $this->request->webroot . "css" ?>/icon-font.min.css" type='text/css' />
        <!-- //lined-icons -->

        <link rel="shortcut icon" type="image/x-icon" href="<?php echo $this->request->webroot; ?>uploads/logo_bongdak.png">
        <!-- webfonts -->
        <link href='//fonts.googleapis.com/css?family=Nunito:400,700,300' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>
        <!--// webfonts --> 
        <!-- Meters graphs -->
        <script src="<?php echo $this->request->webroot . "js" ?>/jquery-1.11.1.min.js"></script>
        <!-- Placed js at the end of the document so the pages load faster -->
        <script src="<?php echo $this->request->webroot . "js" ?>/modernizr.custom.js"></script>
        <!--pop-up-->
        <script src="<?php echo $this->request->webroot . "js" ?>/menu_jquery.js"></script>
        <!--//pop-up-->	
        <script src="<?php echo $this->request->webroot . "js" ?>/jquery.nicescroll.js"></script>
    
        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo $this->request->webroot . "js" ?>/bootstrap.min.js"></script>
        <!--pop-up-->
        <script src="<?php echo $this->request->webroot . "js" ?>/menu_jquery.js"></script>
        
        <script src="<?php echo $this->request->webroot . "js" ?>/easyResponsiveTabs.js"></script>
        
        <script src="<?php echo $this->request->webroot . "js" ?>/simplePlayer.js"></script>
        <!--//pop-up-->	
        <script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});
	</script>
    </head> 
