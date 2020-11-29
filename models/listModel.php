<?php
    require_once __DIR__ . "/../database-wrapper.php";

    class listModel {

        public function getAll() {
            $sql = "SELECT * FROM users";
            $response = DB::run($sql)->fetch_all(MYSQLI_ASSOC);

            return $response;
        }

        public function deleteById($id) {
            $sql = "DELETE FROM users WHERE id=$id";
            DB::run($sql);
        }

        public function getById($id) {
            $sql = "SELECT * FROM users WHERE id=$id";
            $response = DB::run($sql);

            if ($response->num_rows === 0) {
                return [];
            } else {
                return $response->fetch_assoc();
            }
        }

        public function updateById($id, $name, $list) {
            $sql = "UPDATE users SET name = '$name', list=$list WHERE id=$id";
            DB::run($sql);
        }

        public function insertNew($name, $list) {
            $sql = "INSERT INTO list (name, list) VALUES ('$name', $list)";
            DB::run($sql);
        }
    }
?>