<?php
$pdo = new PDO('mysql:host=localhost;
dbname=tp_gestion', 'root', 'P@ssw0rd');
$tache = $_POST['tache'];
$stmt = $pdo->prepare('INSERT INTO 
taches (tache) VALUES (:tache)');
$stmt->execute(['tache' => $tache]);
echo 'Votre tâche a bien été ajouté.';

if(isset($_POST['ajouter'])){
    $descript = trim($_POST['description']);
    if($descript!== ''){

    }
    else {
        echo "Veuillez entrer une tâche.";
    }
}
if(isset($_POST['importer'])){
    
}

?>