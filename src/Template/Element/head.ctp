<?php
$this->layout = false;
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title><?php echo $title; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="<?php echo $keys; ?>" />
        <meta name="description" content="<?php echo $des; ?>" />
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

        <script src="<?php echo $this->request->webroot . "js" ?>/jquery-1.11.1.min.js"></script>	
        <script src="<?php echo $this->request->webroot . "js" ?>/jquery.nicescroll.js"></script>

        <!--Bootstrap Core JavaScript--> 
        <script src="<?php echo $this->request->webroot . "js" ?>/bootstrap.min.js"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120987257-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-120987257-1');
        </script>

    </head> 
