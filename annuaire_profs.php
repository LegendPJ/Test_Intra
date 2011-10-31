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
      <div class="page-header">
        <h1>Annuaire des Professeurs</h1>
      </div>
        <form action="">
        <fieldset>
            <div class="clearfix">
                <label>Recherche</label>
                <div class="input">
                    <input type="text">
                <button class="btn primary" type="submit">Ok</button>
                </div>
            </div>
        </fieldset>
        
        <table class="zebra-striped" id="sortTableExample">
          <thead>
              <tr>
                  <th>#</th>
                  <th class="yellow">Nom</th>
                  <th class="blue">Pr&eacute;nom</th>
                  <th class="green">Bureau</th>
                  <th class="blue">N&deg; Tel</th>
                  <th class="red">E-mail</th>

              </tr>
          </thead>
          <tbody>
              <tr>
                  <td>1</td>
                  <td>GATUMEL</td>
                  <td>Matthieu</td>
                  <td>107</td>
                  <td>04.76.78.90.05</td>
                  <td>gatumel.matthieu@bnp-paribas.fr</td>
              </tr>
              <tr>
                  <td>2</td>
                  <td>BLANCHON</td>
                  <td>Herv&eacute;</td>
                  <td>105</td>
                  <td>04.76.56.78.90</td>
                  <td>blanchon.herve@ada-power.com</td>

              </tr>
          </tbody>
        </table>

<?php 
include("footer.php");
?>
   </body>
   <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.ks"></script>
   <script type="text/javascript" src="tablesorter.js"></script>
   <script type="text/javascript">
   jQuery(function($) {
      $("table#sortTableExample").tablesorter({ sortList: [[1,0]] });
   });
   </script>
</html>



