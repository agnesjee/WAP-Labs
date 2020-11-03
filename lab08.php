<?php
require_once "lab08_pdo.php";

if( isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])){
  $sql = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)";
  echo("<pre>\n" . $sql . "\n<pre>\n");
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(
    ':name' => $_POST['name'],
    ':email' => $_POST['email'],
    ':password' => $_POST['password']
  ));
}

if( isset($_POST['user_id']) && isset($_POST['delete']) ){
  $sql = "DELETE FROM users WHERE user_id = :zip";
  echo "<pre>\n$sql\n</pre>\n";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(
    ':zip' => $_POST['user_id']
  ));
}

echo "<pre>\n";

$stmt = $pdo->query("SELECT * FROM users");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo '<table border = "1">' . "\n";
foreach ($rows as $row) {
  echo ("<tr><td>");
  echo ($row['user_id']);
  echo ("</td><td>");
  echo ($row['name']);
  echo ("</td><td>");
  echo ($row['email']);
  echo ("</td><td>");
  echo ($row['password']);
  echo ("</td><td>");
  echo ('<form method = "post"><input type = "hidden" name = "user_id" value = "'.$row['user_id'].'" />' . "\n" );
  echo ('<input type = "submit" value = "Del" name = "delete" />');
  echo ("\n</form>\n");
  echo ("</td></tr>\n");
}
echo "</table>\n";

 ?>

 <html>
 <head></head>
 <body>
 Add A New User<br/>
 <form method = "post">
   Name:<input type = "text" name = "name" size = "40"/><br/>
   Email:<input type = "text" name = "email"/><br/>
   Password:<input type = "text" name = "password"/><br/>
   <p><input type = "submit" value = "Add New"/></p>
 </form>
 Delete A User<br/>
 <form method = "post">
   ID to Delete:<input type = "text" name = "user_id"/><br/>
   <p><input type = "submit" value = "Delete"/></p>
 </form>
 </body>
 </html>
