<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
          @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap');
*{
    margin: 0; padding: 0;
    box-sizing: border-box;
    font-family: 'Open Sans', sans-serif;
}
.wrp{
    width: 100%; height: 600px;
    position: relative;
}
.portada{
    width: 100%; height: 100%;
    background: url("./Imagenes/fondo.png");
    background-attachment: fixed;
}
.contenido{
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    background: rgba(0,0,11,0.6);
}
.contenido .info{
    width: 100%;
    max-width: 750px;
    text-align: center;
}
.contenido .info h1{
    color: #fff;
    font-size: 50px;
    text-shadow: 0px 1px 10px rgba(0,0,0,0.4);
    margin-bottom: 25px;
    letter-spacing: 1px;
}
.contenido .info a{
    display: inline-block;
    text-decoration: none;
    font-size: 19px;
    padding: 10px 25px;
    color: #fff;
    background: #4897C3;
    border-radius: 50px;
    margin-bottom: 40px;
    border: 2px solid transparent;
    transition: all 300ms ease;
    letter-spacing: 0.5px; /*Para separar un poco las letras*/
}
.contenido .info a:hover{
    background: transparent; /*Fondo transparente*/
    border: 2px solid #fff;
}
.curveado{
    position: absolute;
    width: 100%;
    bottom: -10px;
}
.curveado img{
    width: 100%;
}
@media(max-width:768px){
    .contenido .info h1{
        font-size: 35px;
    }    
}
h2
{
color:white;
}
    </style>

<!--:::::::Portada-001:::::::-->
<div class="wrp">
        <div class="portada"></div>
        <div class="contenido">
            <div class="info">
                <h1>Bienvenido a:</h1>
                <h2>Sazon Broaster</h2>
                <br>
                <a href="./Paginas/orden.php"> Tomar Orden </a>
            </div>
        </div>
        
    </div>
<!--:::::::FIN-Portada-001:::::::-->


    <script src="./bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>