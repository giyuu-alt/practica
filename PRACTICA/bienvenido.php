<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Bienvenido</title> 
    <style> 
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: linear-gradient(to right, #BDA0E2, #9C7BB5);
            font-family: 'Arial', sans-serif;
        }
        .container {
            text-align: center;
            background-color: #ffffff; /* Fondo blanco */
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s;
        }
        h1 {
            font-size: 36px;
            margin: 0;
            color: #6a5acd; /* Color morado claro */
            font-family: 'Pacifico', cursive; /* Nueva fuente para el título */
        }
        p {
            font-size: 18px;
            margin: 15px 0;
            color: #6a5acd; /* Color morado claro */
            font-family: 'Verdana', sans-serif; /* Nueva fuente para el párrafo */
        }
        a {
            text-decoration: none;
        }
        button {
            margin-top: 25px;
            padding: 12px 25px;
            font-size: 16px;
            border: none;
            border-radius: 25px;
            background-color: #8a79b6; /* Color de fondo del botón */
            color: white;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
        }
        button:hover {
            background-color: #6a5acd; /* Color del botón al pasar el cursor */
            transform: scale(1.05);
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Verdana:wght@400&display=swap" rel="stylesheet"> <!-- Importar fuentes -->
</head>
<body>
    <div class="container">
        <h1>Bienvenido</h1>
        <p>Ingrese para conocer cómo mantener una dieta adecuada</p>
        <a href="plan_salud.php">
            <button>INGRESAR</button>
        </a>
    </div>
</body>
</html>
