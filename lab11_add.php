<?php
require_once "lab11_pdo.php";
session_start();

if ( isset($_POST['name']) && isset($_POST['email'])
     && isset($_POST['password'])) {

    // Data validation
    if ( strlen($_POST['name']) < 1 || strlen($_POST['password']) < 1) {
        $_SESSION['error'] = 'Missing data';
        header("Location: lab11_add.php");
        return;
    }

    if ( strpos($_POST['email'],'@') === false ) {
        $_SESSION['error'] = 'Bad data';
        header("Location: lab11_add.php");
        return;
    }

    $sql = "INSERT INTO users (name, email, password)
              VALUES (:name, :email, :password)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        ':name' => $_POST['name'],
        ':email' => $_POST['email'],
        ':password' => $_POST['password']));
    $_SESSION['success'] = 'Record Added';
    header( 'Location: lab11_index.php' ) ;
    return;
}

// Flash pattern
if ( isset($_SESSION['error']) ) {
    echo '<p style="color:red">'.$_SESSION['error']."</p>\n";
    unset($_SESSION['error']);
}
?>
<p>Add A New User</p>
<form method="post">
<p>Name:
<input type="text" name="name"></p>
<p>Email:
<input type="text" name="email"></p>
<p>Password:
<input type="password" name="password"></p>
<p><input type="submit" value="Add New"/>
<a href="lab11_index.php">Cancel</a></p>
</form>
