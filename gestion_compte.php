<!DOCTYPE html>
<html>
    <head>
        <title>Intranet de l'IUT Informatique</title>
        <link rel="stylesheet/less" href="bootstrap.less">
        <script type="text/javascript" src="less.js"></script>
        <link type="text/css" rel="stylesheet" href="css/themename/jquery-ui-1.8.16.custom.css" /> 
        <script type="text/javascript" src="js/jquery-1.6.2.min.js"> </script>
        <script type="text/javascript" src="js/jquery-ui-1.8.16.custom.min.js"> </script>

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
        <meta charset="utf-8">
        <script>
        $(function() {
          $("#datepicker").datepicker();
        });
        </script>
    </head>
   <body>

<?php 
include("topbar.php");
include("sidebar.php");

?>
     

        <div class="container-fluid">
        <form action="">
          <fieldset>

              <h4>Informations</h4>

              <div class="clearfix">
                  <label>Nom</label>
                  <div class="input">
                      <input type="text" name="nom_eleve" value="PARRENO">
                  </div>
              </div>

              <div class="clearfix">
                  <label>Pr&eacute;nom</label>
                  <div class="input">
                      <input type="text" name="prenom_eleve" value="Florian">
                  </div>
              </div>

                <!-- a voir pour le name pour récupération-->
              <div class="clearfix">
                <label for="prependedInput">E-mail</label>
                  <div class="input">
                    <input type="text" name="debut_mail"value="flohw" >
                    <div class="input-prepend">
                      <span class="add-on">@</span>
                        <input class="medium" id="prependedInput" name="fin_mail" size="16" type="text" value="gmail.com"/>
                    </div>
                  </div>
              </div>

              <div class="clearfix">
                  <label>Num&eacute;ro de T&eacute;l&eacute;phone</label>
                      <div class="input">
                          <input type="text" name="telephone" value="06 89 99 07 65">
                      </div>
              </div>

              <div class="clearfix">
                  <label>Informations compl&eacute;mentaires</label>
                  <div class="input">
                      <textarea name="message" class="xlarge"></textarea>
                      <span class="help-block">Visible uniquement par les professeurs</span>
                  </div>
              </div>

              <div class="clearfix">
                  <label>Date de Naissance</label>
                  <div class="input">
                  <!-- date("d/m/Y", strtotime($ligne2->dateprog)); ou utiliser calendrier-->
                      <input type="datetime" name="date_naiss" value="25/12/2011">
                  </div>
              </div>






<div class="demo">

<p>Date: <input type="text" id="datepicker"></p>

</div><!-- End demo -->



              <h4>Adresse</h4>
              
              <div class="clearfix">
                  <label>Rue</label>
                  <div class="input">
                      <input type="text" name="ad_rue" value="66 Rue du Vercors">
                  </div>
              </div>
                
              <div class="clearfix">
                  <label>Rue</label>
                  <div class="input">
                      <input type="number" name="code_postal" value="38000">
                  </div>
              </div>

              <div class="clearfix">
                  <label>Ville</label>
                  <div class="input">
                      <input type="text" name="ville" value="Grenoble">
                  </div>
              </div>

              <div class="actions">
                  <input type="submit" value="Envoyer" class="btn primary">
                  <input type="reset" class="btn">
              </div>
          </fieldset>
        </form>


        </div> 

<?php 
include("footer.php");
?>
   </body>
</html>



