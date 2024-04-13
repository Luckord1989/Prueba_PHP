<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Estilo del login -->
    <link rel="stylesheet" type="text/css" href="../Login/login.css">
<body>
    <div id="formulario_login">
        <div>
            <h1>Login</h1>
        </div>
        <div>
            <form action="/Controlador/Login_controller.php" method="post" >
                <div>
                    <label for="txt_id">ID:</label>
                    <input 
                    type="text" 
                    name="txt_id" 
                    id="txt_id"
                    autofocus 
                    required
                    placeholder="Ususario">
                </div>
                <div>
                    <label for="txt_password">PASSWORD:</label>
                    <input 
                    type="password" 
                    name="" 
                    id="txt_password"
                    required
                    placeholder="Contraseña"                
                    >
                </div>
                <div>
                    <button type="submit">Ingresar</button>
                </div>
            </form>
        </div>
    </div>    
</body>
</html>