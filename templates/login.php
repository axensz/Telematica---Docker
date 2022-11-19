<!DOCTYPE html>
<html lang="es">
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <!-- code here -->
        <div class="card">
            <div class="card-image">	
                <h2 class="card-heading">
                    Inicia Sesion
                </h2>
            </div>
            <form class="card-form" method="POST">
                    <div class="input">
                    <input name="email" id="email" type="email" class="input-field" required/>
                    <label class="input-label">Email</label>
                </div>
                <div class="input">
                    <input name="password" id="contraseña" type="password" class="input-field" required/>
                    <label class="input-label">Contraseña</label>
                </div>
                <div class="action">
                    <button type="submit" class="action-button">Inicia Sesion</button>
                </div>
            </form>
            <div class="card-info">
                <a href="index.php"><p>Ir a la pagina principal</p></a>
            </div>
        </div>
    </div>
    
</body>
<style>
    *, *:after, *:before {
        box-sizing: border-box;
    }
    h2{
        color: #FFF;
    }
    body {
        font-family: "DM Sans", sans-serif;
        line-height: 1.5;
        background-color: #606E8C;
        padding: 0 2rem;
    }
    
    img {
        max-width: 100%;
        display: block;
    }
    
    input {
        appearance: none;
        border-radius: 0;
    }
    
    .card {
        margin: 2rem auto;
        display: flex;
        flex-direction: column;
        width: 100%;
        max-width: 425px;
        background-color: #FFF;
        border-radius: 10px;
        box-shadow: 0 10px 20px 0 rgba(#999, .25);
        padding: .75rem;
    }
    
    .card-image {
        border-radius: 8px;
        overflow: hidden;
        padding-bottom: 30%;
        background-color: #606E8C;
        background-repeat: no-repeat;
        background-size: 150%;
        background-position: 0 5%;
        position: relative;
    }
    
    .card-heading {
        position: absolute;
        left: 10%;
        top: 15%;
        right: 10%;
        font-size: 1.75rem;
        font-weight: 700;
        color: #fff;
        line-height: 1.222;
        
    }
    small {
        color: #FFF;
        display: block;
        font-size: .75em;
        font-weight: 400;
        margin-top: .25em;
    }
    .card-form {
        padding: 2rem 1rem 0;
    }
    
    .input {
        display: flex;
        flex-direction: column-reverse;
        position: relative;
        padding-top: 1.5rem;
        
    }
    input {
        margin-top: 1.5rem;
    }
    .input-label {
        color: #8597a3;
        position: absolute;
        top: 1.5rem;
        transition: .25s ease;
    }
    
    .input-field {
        border: 0;
        z-index: 1;
        background-color: transparent;
        border-bottom: 2px solid #eee; 
        font: inherit;
        font-size: 1.125rem;
        padding: .25rem 0;
    }
    input-label {
        color: #6658d3;
        transform: translateY(-1.5rem);
    }
    .action {
        margin-top: 2rem;
    }
    
    .action-button {
        font: inherit;
        font-size: 1.25rem;
        padding: 1em;
        width: 100%;
        font-weight: 500;
        background-color: #606E8C;
        border-radius: 6px;
        color: #FFF;
        border: 0;
    }
    
    .card-info {
        text-align: center;
        font-size: .875rem;
        color: #8597a3;
    }
    a {
        display: block;
        color: #6658d3;
        text-decoration: none;
    }
</style>
</html>
<?php
if(isset($_POST['email']) && isset($_POST['password']))
{
    
    $email=$_POST['email'];
    $password=$_POST['password'];
    $archivo = fopen("base_datos.txt", "r") or die("¡Error al leer el archivo!");;
    $separador = "|";
    $nombre="";
    while(!feof($archivo)){

        $traer = fgets($archivo);
        $separada = explode($separador, $traer);

        if(in_array($email, $separada) && in_array($password, $separada))
        {
            $posicion = array_search($email, $separada);
            $posicion2 = array_search($password, $separada);
            if($posicion == true && $posicion2 == true){
                $nombre = $separada[0];
                
                print "<script>
                            window.setTimeout(function() { window.location = 'blank.php' });
                            alert('Usuario Encontrado exitosamente')
                        </script>";
                return $email.$nombre;
            }
        }
        else {
            echo $email.$traer;
            print "<script>
                    //window.setTimeout(function() { window.location = 'login.php' });
                    alert('Usuario no encontrado')
                   </script>";
            return;
        }
    }
    fclose($archivo);
}   
?>
