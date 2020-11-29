<?php

namespace MVC\entity;

require_once __DIR__ . "/autoload.php";
use DB\DB;

class Product {
    private $username;
    private $email;
    private $user_id;

    private $_user_name;

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function getName(): string {
        return $this->name ?? 'unspecified';
    }
    
    public function setUserId(int $user_id): void {
        $this->user_id = $user_id;
    }

    public function getUserId(): int {
        return $this->user_id;
    }

    public function getUserName(): string {
        if (!isset($this->_user_name)) {
            $sql = "SELECT title FROM user WHERE id =" . $this->getUserId();
            $this->_user_name = DB::run($sql)->fetch_assoc()["title"];
        }

        return $this->_user_name;
    }
}
?>