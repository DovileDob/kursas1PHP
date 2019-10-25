<?php
    function dbJungtis(){
        try {
            return $pdo = new PDO('mysql:host=127.0.0.1; dbname=homework', 'root', '');
        } catch (PDOException $e){
            die($e->getmessage());
        }
    }

    function visosuzduotys($pdo){
        $teiginys = $pdo->prepare('select * from ndarbas');
        $teiginys->execute();

        return $teiginys->fetchALL(PDO::FETCH_CLASS, 'namuDarbas');
    }
