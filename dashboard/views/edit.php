<?php
require_once '../controllers/UsersController.php';
if(isset($_GET['ID'])){
    $userID = $_GET['ID'];
}

$users = new UsersController;
$currentUser = $users->edit($userID);

if(isset($_POST['submit'])){
    $users->update($_POST, $userID);
}
?>

<div>
    <form method="POST">
        Name and Surname:
        <input type="text" name="name" value="<?php echo $currentUser['name'];?>">
        <br>
        Username:
        <input type="text" name="username" value="<?php echo $currentUser['username'];?>">
        <br>
        Email:
        <input type="email" name="email" value="<?php echo $currentUser['email'];?>">
        <br>
        Password:
        <input type="password" name="password" value="<?php echo $currentUser['password'];?>">
        <br>
        <input type="submit" name="submit" value="Update">
    </form>
</div>
