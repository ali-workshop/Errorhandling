<?php session_start();?>
<html>
<body>

<form action="errorhandler.php" method="POST">
Name: <input type="text" name="name"><?php if(isset($_SESSION['errors']['name'])) { echo $_SESSION['errors']['name']; }  ?><br>

E-mail: <input type="text" name="email"><?php if(isset($_SESSION['errors']['email'])) { echo $_SESSION['errors']['email']; } ?><br>
<input type="submit">
</form>

</body>
</html>