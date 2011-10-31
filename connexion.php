<!DOCTYPE html>
<html>
    <head>
        <title>Intranet de l'IUT Informatique</title>
        <link rel="stylesheet/less" href="bootstrap.less">
        <script type="text/javascript" src="less.js"></script>
        <script type="text/javascript" src="jquery.js"></script>
        <script>
            jQuery(function($){
               $(".secondary-nav").mouseover(function(){
                  $('.menu-dropdown').stop().slideDown();
                                    
               });
               $('.menu-dropdown').mouseout(function(){
                   $(this).stop().slideUp();
               });
            });
        </script>
        <style>
            .topbar .btn {
            border: 0;}
        </style>
    </head>
   <body>

<?php 
include("topbaruserlambda.php");

?>
     
<div class="container">
            <div class="hero-unit" style="margin-top: 5%;">
              <h1>Intranet DUT Info</h1>
              <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. </p>
            </div>
            <div class="row">
                <div class="span16">
                    <div class="page-header">
                        <h1>Visitez <small>le site de l'<a href="www.upmf-grenoble.fr/" title="UPMF">UPMF</a></small></h1>
                        <p><img src="upmf.jpg" alt="Banniere UPMF"></p>
                    </div>
                </div>
            </div>
        </div> 
<?php 
include("footer.php");
?>
   </body>
</html>



