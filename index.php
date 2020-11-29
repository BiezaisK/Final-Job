<?php
    if (isset($_GET["page"])) {
        $file = __DIR__ . "/controllers/" . $_GET["page"] . "Controller.php";
        session_start();

        if (file_exists($file)) {
            if ($_GET["page"] === 'login' || $_GET["page"] === 'register') {
                require_once $file;
            } else if (isset($_SESSION["id"])) {
                require_once $file;
            } else {
                Header("Location: /finals/?page=login");
            }
        } else {
            Header("Location: /finals/?page=login");
        }
    }
?>



CREATE TABLE list (
    description varchar(20),
    id int NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (id)
);


CREATE TABLE users (
    username varchar(60) NOT NULL,
    email varchar(60) NOT NULL,
    password varchar(60) NOT NULL
);