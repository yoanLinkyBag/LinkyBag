<?php session_start();
 include_once('functions.php'); 
 sessionCo();
 ?> 


 <section id="intro">
    <h1>Dépose. <span id="discuteWord">Discute.</span> Visite.</h1>
    <p>Et si déposer ses bagages devenait une source de partage ?</p>
    <form id="search" action="linkyBaggersList.php" method="POST">
        <input type="text" name="town" placeholder="Destination" id="villes">
        <button type="submit" name="searchbar" class="searchbar">Valider</button>
    </form>
 </section>

 <?php include ('../www/model/hangs.php');?>

 <?php include ('../www/model/tuto.php');?>

<?php include ('../www/model/security.php');?>

<?php include ('../www/model/actuality.php');?>



<?php include ('../www/model/rejoinLinkybag.php');?>

<?php include ('../www/model/price.php');?>



<?php include ('../www/model/lePetitPrince.php');?>

<div id="border"></div>

 <section id="rejoin">
     <a href="https://beta.linkybag.com/enregistrement.php" id="rejoinButton"><p>Je rejoins LinkyBag</p></a>
 </section>
 <!--<section id="memo"> <aside><h2>N'avez-vous rien oublié ?</h2>
 <p>Parce que Linkybag c’est aussi savoir s’adapter au monde qui nous entoure, sachez que même après réservation vous pouvez souscrire aux options*, pour un maximum de séreinité. 

Et oui, c’est ça la facilité !</p>
<p>*sous réserve de disponibilité de l'hôte</p></aside><img src="public/images/aside-lp.jpg" alt="illustration-home-oublier" /></section>-->


<?php include 'public/footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></Script>
<script src="modules/EasyAutocomplete/jquery.easy-autocomplete.js"></script> 


<<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v3.3'
    });
  };

  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/fr_FR/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="1673431779440193"
  theme_color="#00A2FF"
  logged_in_greeting="Salut ! Je suis Yoan, si tu as une question tu peux me la poser directement ! 😊 "
  logged_out_greeting="Salut ! Je suis Yoan, si tu as une question tu peux me la poser directement ! 😊 ">
</div>

