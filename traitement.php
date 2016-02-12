<?php

DEFINE(SERVER,'localhost');
DEFINE(LOGIN,'adminsql');
DEFINE(MDP,'mdpsql');
DEFINE(BASE,'Challenge');

$connect=mysqli_connect(SERVER,LOGIN,MDP,BASE)or die('pb de connexion au serveur');
$info=mysqli_query($connect,"SELECT * FROM client WHERE id=".$_POST["value"]);

While($data=mysqli_fetch_assoc($info)){
    echo "Nom : ".utf8_encode($data['Nom'])."<br/>";
    echo "Prénom : ".utf8_encode($data['Prenom'])."<br/>";
    echo "Age : ".$data['Age']." ans<br/>";
    echo "Profession : ".utf8_encode($data['Profession'])."<br/>";
    echo "Téléphone : ".$data['Telephone']."<br/>";
    echo "Email : ".utf8_encode($data['Email'])."<br/><br/>";
}

if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['age']) && isset($_POST['profession']) && isset($_POST['tel']) && isset($_POST['email'])){

  $nom=$_POST['nom'];
  $prenom=$_POST['prenom'];
  $age=$_POST['age'];
  $profession=$_POST['profession'];
  $tel=$_POST['tel'];
  $email=$_POST['email'];

  mysqli_query($connect,"INSERT INTO client(id,Nom,Prenom,Age,Profession,Telephone,Email) VALUES('','$nom','$prenom','$age','$profession','$tel','$email')");
  header('location: index.php');
    }
?>
