<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Challenge Ajax</title>
    <link rel="stylesheet" href="css/challenge.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <header>
        <h1> Challenge Ajax</h1>
    </header>
    <?php
    DEFINE(SERVER,'localhost');
    DEFINE(LOGIN,'adminsql');
    DEFINE(MDP,'mdpsql');
    DEFINE(BASE,'Challenge');

    $connect=mysqli_connect(SERVER,LOGIN,MDP,BASE)or die('pb de connexion au serveur');
    $info=mysqli_query($connect,"SELECT * FROM client");
     ?>
    <section>
      <form id="inscrit" action="traitement.php" method="post">
        <input type="texte" name="nom" placeholder="Nom">
        <input type="texte" name="prenom" placeholder="Prénom">
        <input type="texte" name="age" placeholder="Age">
        <input type="texte" name="profession" placeholder="Profession">
        <input type="texte" name="tel" placeholder="Téléphone:06-00-00-00-00">
        <input type="texte" name="email" placeholder="Email">
        <input type="submit" name="name" value="Valider">
      </form>

      <form method="post" action="traitement.php">
           <select id="choice">
                <option value="">Selectionner un client :</option>

                <?php
                While($data=mysqli_fetch_assoc($info)){ ?>
                <option value="<?php echo $data['id']; ?>"> <?php echo utf8_encode($data['Nom'])." ".utf8_encode($data['Prenom']); }?></option>

           </select>
      </form>
      <div id="infos"> </div>
      
    </section>

    <script type="text/javascript" src="js/challenge.js"></script>
  </body>
</html>
