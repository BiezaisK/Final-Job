<?php
    require_once __DIR__ . "/../components/modifyForm.php";
    class listView {
        private $productList;

        public function __construct($data = [])
        {
            $this->productList = $data;
        }


        public function html() {
            ?>
                <table>
                    <thead>
                        <tr>
                            <td colspan="3">Users</td>
                        </tr>
                        <tr>
                            <td>Userame</td>
                            <td>Email</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($this->userList as $user) { ?>
                            <tr>
                                <td><?= $user["username"] ?></td>
                                <td><?= $user["email"] ?></td>
                                <td>
                                    <a href="/final/?page=list&action=modify&user_id=<?= $user['id']?>">Edit</a>
                                    <a href="/final/?page=delete&user_id=<?= $user['id']?>">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

                <a href="/final/?page=list&action=modify">Add product</a>

                <form method="POST">
                    <input type="hidden" name="logOut">
                    <button type="submit">Log out</button>
                </form>
            <?php
        }
    }
?>