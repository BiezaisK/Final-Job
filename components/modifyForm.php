<?php 

    class modifyForm {
        private $username;
        private $price;
        private $id;

        public function __construct($username = null, $email = null, $id = null)
        {
            $this->username = $username;
            $this->email = $email;
            $this->id = $id;
        }

        public function html() {
            ?>
            <form action="/finals/?page=modify" method="POST">
                <input name="username" value="<?= $this->username ?>">
                <input name="password" value="<?= $this->password ?>">
                <input type="hidden" name="id" value="<?= $this->id ?>">

                <button type="submit">Save</button>
            </form>
            <?php
        }
    }
?>