<?php
$this->layout = false;
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
    <head>
        <title>Live info a Sports Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
        <link rel="shortcut icon" href="<?php echo $this->request->webroot . "img/logo_bongdak.png" ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta property="og:title" content="Vide" />
        <meta name="keywords" content="Live info Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- Bootstrap Core CSS -->
        <link href="<?php echo $this->request->webroot . "css" ?>/bootstrap.min.css" rel='stylesheet' type='text/css' />
        <!-- Custom CSS -->
        <link href="<?php echo $this->request->webroot . "css" ?>/style.css" rel='stylesheet' type='text/css' />
        <!-- Graph CSS -->
        <link href="<?php echo $this->request->webroot . "css" ?>/font-awesome.css" rel="stylesheet"> 
        <!-- jQuery -->
        <!-- lined-icons -->
        <link rel="stylesheet" href="<?php echo $this->request->webroot . "css" ?>/icon-font.min.css" type='text/css' />
        <!-- //lined-icons -->

        <!-- webfonts -->
        <link href='//fonts.googleapis.com/css?family=Nunito:400,700,300' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>
        <!--// webfonts --> 
        <!-- Meters graphs -->
        <script src="<?php echo $this->request->webroot . "js" ?>/jquery-1.11.1.min.js"></script>
        <!-- Placed js at the end of the document so the pages load faster -->
        <style>
            .input.text {
                padding: 3px;
            }
            .input.text>label {
                padding-right: 6px;
            }
        </style>
    </head> 

    <body class="sticky-header left-side-collapsed">
        <section>
            <!-- left side start-->
            <?php echo $this->element("menu_left"); ?>
            <!-- left side end-->
            <!-- main content start-->
            <div class="main-content">
                <!-- header-starts -->
                <?php echo $this->element("header"); ?>
                <!-- header-ends-->
                <div id="page-wrapper">
                    <script src="<?php echo $this->request->webroot . "js/" ?>tinymce.min.js"></script>
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
                    <?php echo $this->Form->create("Article"); ?>
                    <fieldset>
                        <h2>Add Articles</h2>
                        <?php
                        echo $this->Form->input("title");
                        echo $this->Form->input("mapUrl");
                        echo $this->Form->input("type");
                        echo $this->Form->input("metaDes");
                        echo $this->Form->input("metaKey");
                        echo $this->Form->input("description");
                        echo $this->Form->input("file");
                        echo $this->Form->input("content", array("type" => "textarea", "id" => "content_article"));
                        echo $this->Form->button('Submit');
                        ?>
                    </fieldset>
                    <?php
                    echo $this->Form->end();
                    ?>
                    <script>
                        tinymce.init({
                            selector: '#content_article',
                            height: 500,
                            toolbar1: "newdocument | bold italic underline | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
                            toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media code | insertdatetime preview | forecolor backcolor",
                            toolbar3: "table  | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | visualchars visualblocks nonbreaking template pagebreak restoredraft",
                            content_css: [
                                '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
                                '//www.tinymce.com/css/codepen.min.css'],
                            menubar: false,
                            toolbar_items_size: 'small',
                            style_formats: [{
                                    title: 'Bold text',
                                    inline: 'b'
                                }, {
                                    title: 'Red text',
                                    inline: 'span',
                                    styles: {
                                        color: '#ff0000'
                                    }
                                }, {
                                    title: 'Red header',
                                    block: 'h1',
                                    styles: {
                                        color: '#ff0000'
                                    }
                                }, {
                                    title: 'Example 1',
                                    inline: 'span',
                                    classes: 'example1'
                                }, {
                                    title: 'Example 2',
                                    inline: 'span',
                                    classes: 'example2'
                                }, {
                                    title: 'Table styles'
                                }, {
                                    title: 'Table row 1',
                                    selector: 'tr',
                                    classes: 'tablerow1'
                                }],
                            templates: [{
                                    title: 'Test template 1',
                                    content: 'Test 1'
                                }, {
                                    title: 'Test template 2',
                                    content: 'Test 2'
                                }],
//                            init_instance_callback: function () {
//                                window.setTimeout(function () {
//                                    $("#div").show();
//                                }, 1000);
//                            }
                        });

                    </script>
                </div>

                <!--footer section start-->
                <?php echo $this->element("footer"); ?>
                <!--footer section end-->

            </div>


            <!-- main content end-->
        </section>
        <script src="<?php echo $this->request->webroot . "js" ?>/modernizr.custom.js"></script>
        <!--pop-up-->
        <script src="<?php echo $this->request->webroot . "js" ?>/menu_jquery.js"></script>
        <!--//pop-up-->	
        <script src="<?php echo $this->request->webroot . "js" ?>/jquery.nicescroll.js"></script>
        <script src="<?php echo $this->request->webroot . "js" ?>/scripts.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo $this->request->webroot . "js" ?>/bootstrap.min.js"></script>
        <!--pop-up-->
        <script src="<?php echo $this->request->webroot . "js" ?>/menu_jquery.js"></script>
        <!--//pop-up-->	

        <!-- ResponsiveTabs -->
        <script src="<?php echo $this->request->webroot . "js" ?>/easyResponsiveTabs.js" type="text/javascript"></script>
        <script type="text/javascript">
                        $(document).ready(function () {
                            $('#horizontalTab').easyResponsiveTabs({
                                type: 'default', //Types: default, vertical, accordion           
                                width: 'auto', //auto or any width like 600px
                                fit: true   // 100% fit in a container
                            });
                        });
        </script>
        <!-- //ResponsiveTabs -->
        <!-- video -->
        <script src="<?php echo $this->request->webroot . "js" ?>/simplePlayer.js"></script>
        <script>
                        $("document").ready(function () {
                            $("#video").simplePlayer();
                        });
        </script>
        <!-- //video -->
    </body>
</html>