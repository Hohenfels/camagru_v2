<?php
include 'common.php';

page_header("ONSTOGROM - Inscription");
?>
<div class="login-page">
  <div class="form">
    <form class="login-form" method="post" action="../controller/signup.php">
      <input type="text" name="login" value="" placeholder="username"/>
      <input type="password" name="password" value="" placeholder="password"/>
      <input type="text" name="mail" value="" placeholder="e-mail"/>
      <button>S'inscrire</button>
      <p class="message">D&eacuteja inscrit ? <a href="signin.php">Se connecter</a></p>
    </form>
  </div>
</div>
<?php
page_footer();
?>