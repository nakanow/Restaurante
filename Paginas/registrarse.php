<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
    background-color:gray;
  font-family: arial;
  background-image: url('../Imagenes/bg.png');
}

.form-login {
  width: 400px;
  height: 520px;
  background: #4e4d4d;
  margin: auto;
  margin-top: 180px;
  box-shadow: 7px 13px 37px #000;
  padding: 20px 30px;
  border-top: 4px solid #017bab;
  color: white;
}

.form-login h5 {
  margin: 0;
  text-align: center;
  height: 40px;
  margin-bottom: 30px;
  border-bottom: 1px solid;
  font-size: 20px;
}

.controls {
  width: 100%;
  border: 1px solid #017bab;
  margin-bottom: 15px;
  padding: 11px 10px;
  background: #252323;
  font-size: 14px;
  font-weight: bold;
}

.buttons {
  width: 100%;
  height: 40px;
  background: #017bab;
  border: none;
  color: white;
  margin-bottom: 16px;
}

.form-login p{
  height: 40px;
  text-align: center;
  border-bottom: 1px solid;
}

.form-login a {
  color: white;
  text-decoration: none;
  font-size: 14px;
}

.form-login a:hover {
  text-decoration: underline;
}

</style>

<section class="form-login">
      <h5>Registrar</h5>
      <input class="controls" type="text" name="usuario" value="" placeholder="Nombre">
      <input class="controls" type="text" name="contrasena" value="" placeholder="Apellido">
      <input class="controls" type="text" name="contrasena" value="" placeholder="Telefono">
      <input class="controls" type="text" name="contrasena" value="" placeholder="Email">
      <input class="controls" type="password" name="contrasena" value="" placeholder="Contraseña">
      <input class="controls" type="password" name="contrasena" value="" placeholder="Confirme la contraseña">
      <input class="buttons" type="submit" name="" value="Registrarse">
     

    </section>

    <script src="../bootstrap/js/bootstrap.bundlez.js"></script>
</body>
</html>