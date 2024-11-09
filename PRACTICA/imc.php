<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Calculadora IMC</title> 
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #BDA0E2, #9C7BB5);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 20px;
        }
        .container {
            background-color: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 100%;
            max-width: 400px;
            transition: transform 0.3s;
        }
        .container:hover {
            transform: scale(1.02);
        }
        h1 {
            color: #6a5acd; /* Color morado */
            margin-bottom: 20px;
        }
        input {
            margin: 10px 0;
            padding: 12px;
            width: 90%;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
            transition: border-color 0.3s;
        }
        input:focus {
            border-color: #6a5acd; /* Color morado al enfocar */
            outline: none;
        }
        button {
            padding: 12px 20px;
            background-color: #8a79b6; /* Color de fondo del botón */
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
            width: 100%;
        }
        button:hover {
            background-color: #6a5acd; /* Color del botón al pasar el cursor */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Calculadora IMC</h1>
        <form action="fin.php" method="POST">
            <input type="number" name="altura" id="altura" placeholder="Altura en cm" step="0.01" required>
            <input type="number" name="peso" id="peso" placeholder="Peso en kg" step="0.01" required>
            <button type="submit">Enviar datos de mi IMC</button>
        </form>
    </div>
</body>
</html>
