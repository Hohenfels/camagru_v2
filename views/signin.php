<?php
include 'common.php';

page_header("ONSTOGROM - Connexion");
?>
<div class="login-page">
  <div class="form">
    <form class="login-form" method="post" action="../controller/signin.php">
      <input type="text" name="login" value="" placeholder="login"/>
      <input type="password" name="password" value="" placeholder="password"/>
      <button>login</button>
      <p class="message">Pas encore inscrit ? <a href="signup.php">Cr&eacuteer un compte</a></p>
      <p class="message">Mot de passe oubli&eacute ? <a href="reset_password"> Cliquez ici</a></p>
    </form>
  </div>
</div>
<?php
page_footer();
?>