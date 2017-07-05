<!DOCTYPE html>

<html >

<head>
 <title>Login</title>
<meta charset = "utf-8">
</head>

<body>
<center>
<h1><i>Login de Usuarios</i></h1>
<hr />

<form action="checklogin.php" method="post" >

<label>Nombre Usuario:</label><br>
<input name="username" type="text" id="username" required>
<br><br>

<label>Password:</label><br>
<input name="password" type="password" id="password" required>
<br><br>

<input type="submit" name="Submit" value="LOGIN">

</form>

<hr />

<footer>
 &copy;2017 <a href="http://www.google.com.ar">www.hip.com</a>
</footer>
</center>
 </body>
</html>