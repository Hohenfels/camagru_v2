<?php
session_start();

function page_header($title)
{
?>
    <html>
        <header>
            <meta charset="utf-8">
            <link rel="stylesheet" href="../css/style_it.css">
            <title> <?php echo $title ?> </title>
        </header>
        <body>
        <?php if (!isset($_SESSION['id']))
        {
        ?>
        <div class="dropdown">
            <button class="dropbtn">Menu</button>
            <div class="dropdown-content">
                <a href="index.php">Gallerie</a>
                <a href="signin.php">Connexion</a>
                <a href="signup.php">Inscription</a>
            </div>
        </div>
        <div class="header_banner"><a href="index.php" alt="retour a l'index"><img src="../rsrc/banner.png"></a></div>
        <hr>
        <?php
        }
        else
        {
            //TODO verifier si user est bien log et afficher bouton en consequence
        ?>
        <?php
        }
}

function page_footer()
{
?>
        </body>
    </html>
<?php
}
?>
