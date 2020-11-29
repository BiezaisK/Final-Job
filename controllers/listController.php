<?php
    require_once __DIR__ . "/../views/listView.php";
    require_once __DIR__ . "/../models/listModel.php";
    require_once __DIR__ . "/../components/modifyForm.php";

    if (isset($_POST["logOut"])) {
        session_destroy();
        Header("Location: /finals/?page=login");
    }

    $model = new listModel();
    $users = $model->getAll();

    $view = new listView($users);
    $view->html();

    if (isset($_GET["action"]) && $_GET["action"] === "modify") {
        if (isset($_GET["user_id"])) {
            $users = $model->getById($_GET["users_id"]);

            $form = new modifyForm($users["name"], $users["price"], $users["id"]);
        } else {
            $form = new modifyForm();
        }
        $form->html();
    }
?>