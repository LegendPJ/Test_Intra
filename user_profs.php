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
    </head>
   <body>

<?php 
include("topbar.php");
include("sidebar.php");

?>
     

        <div class="container-fluid">
            <div class="hero-unit" style="margin-left: 20%;">
              
            </div>
            <div class="row">
                <div class="span5">
                    <h2>Title 1</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="span5">
                    <h2>Title 2</h2>
                    <p> Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur.</p>
                </div>
                <div class="span5">
                    <h2>Title 3</h2>
                    <p>Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div> 

<?php 
include("footer.php");
?>
   </body>
</html>



