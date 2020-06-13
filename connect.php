<?php
$dsn = 'pgsql:dbname=fenouil;host=localhost';
$user = 'postgres';
$password = 'Honor-6880';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}

?>
