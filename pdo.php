<?php

require_once 'connec.php';
$pdo = new \PDO (DSN, USER, PASS);

$query = "SELECT * FROM friend";
$statement = $pdo->query($query);
$friends = $statement->fetchAll();

foreach ($friends as $friend) {
    echo $friend['lastname'] . ' ' . $friend['firstname'] . ' ' . "</br>";
}

//INSERTION

if (!empty($_POST)) {
    $lastname = trim($_POST['lastname']);
    $firstname = trim($_POST['firstname']);


    $query = "INSERT INTO friend (lastname, firstname)
        VALUES (:lastname, :firstname)";
    $statement = $pdo->prepare($query);

    $statement->bindValue(':lastname', $lastname, \PDO::PARAM_STR);
    $statement->bindValue(':firstname', $firstname, \PDO::PARAM_STR);


    $statement->execute();
    header('Location: pdo.php ');
}


?>


<form action="" method="post" xmlns="http://www.w3.org/1999/html">
    <div>
        <label for="lastname"> lastname:</label>
        <input type="text" id="nom" name="lastname">
    </div>
    <div>
        <label for="firstname"> firstname :</label>
        <input type="text" id="prénom" name="firstname">
    </div>

    <div class="button">
        <input type="submit"> Add friend</input>
    </div>
</form>
