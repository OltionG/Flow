<?php
require_once '../controllers/UsersController.php';

$users = new UsersController;
if(isset($_POST['submit'])){
    $users->insert($_POST);
}

?>

<div>
    <form method="POST">
        Name and Surname:
        <input type="text" name="name">
        <br>
        Username:
        <input type="text" name="username">
        <br>
        Email:
        <input type="email" name="email">
        <br>
        Password:
        <input type="password" name="password">
        <br>
        <input type="submit" name="submit" value="Save">
    </form>
</div>