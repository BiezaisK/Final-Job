<?php 
    require_once __DIR__ . "/models/listModelmodels.php";
    $model = new listModel();
    if (!empty($_POST["id"])) {
        // Update
        $model->updateById(
            $_POST["id"],
            $_POST["username"],
            $_POST["email"],
        );
    } else {
        // Insert
        $model->insertNew(
            $_POST["username"],
            $_POST["email"],
        );
    }

    Header("Location: /finals/?page=list");
?>