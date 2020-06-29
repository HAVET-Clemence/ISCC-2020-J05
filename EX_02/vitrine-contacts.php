<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link type="text/css" rel="stylesheet" href="vitrine.css" />
        <title>Contacts</title>
    </head>

    <body>

    <?php $page_active = "contacts" ?>
    <?php include("header.php"); ?>

  
    
    <h2>CONTACTS</h2>

   <form>
        <p><input type="text"  placeholder="Votre nom"></p>
        <p><input type="text"  placeholder="Votre email"></p>
        <p><textarea placeholder="Comment améliorer mon site ?"></textarea></p>
        <input type="submit" class="bouton" style="background-color: #27d1ff; color: white;" value="Envoyer">
    </form>


 <p>  <?php include("footer.php"); ?></p>

    </body>

</html>