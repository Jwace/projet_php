<?php
    try {
        $dsn = 'mysql:host=localhost;dbname=sautre2u_bddphp;port=3306;charset=utf8';
        $pdo =new PDO($dsn,"root","");
    } catch(PDOException $exception) {
        exit("Erreur de connexion à la base de données".$exception->getMessage());
                            }
?>