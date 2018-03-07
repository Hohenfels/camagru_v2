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
        <div class="dropdown">
            <button class="dropbtn">MENU</button>
            <div class="dropdown-content">
            <?php
            if (!isset($_SESSION['id']))
            {
            ?>
                <a href="index.php">Gallerie</a>
                <a href="signin.php">Connexion</a>
                <a href="signup.php">Inscription</a>
            <?php
            }
            else
            {
                $_SESSION['id'] = "";
            ?>
                <a href="index.php">Gallerie</a>
                <a href="upload_photo.php">Upload une photo</a>
                <a href="parameters.php">Param&egravetres</a>
            <?php
            }
            ?>
            </div>
        </div>
        <div class="header_banner"><a href="index.php" alt="retour a l'index"><img src="../rsrc/banner.png"></a></div>
        <hr>
        <?php
}

function page_footer()
{
?>
        </body>
    </html>
<?php
}
?>
