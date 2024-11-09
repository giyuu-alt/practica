<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Persona</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #BDA0E2, #9C7BB5);
        }

        .form-container {
            background-color: #ffffff; 
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            width: 350px;
            text-align: center;
        }

        .form-container h2 {
            margin-bottom: 20px;
            color: #6a5acd; /* Color morado claro */
        }

        input[type="text"], select {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #d1c4e9; /* Borde suave */
            border-radius: 8px;
            box-sizing: border-box;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus, select:focus {
            border-color: #6a5acd; /* Color de borde al enfocar */
        }

        input[type="submit"] {
            background-color: #8e24aa; /* Color de fondo del botón */
            color: white;
            padding: 12px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #6a5acd; /* Color del botón al pasar el cursor */
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Formulario Persona</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST['nombre'];
            $apePa = $_POST['apellidoPaterno'];
            $apeMa = $_POST['apellidoMaterno'];
            $edad = $_POST['edad'];
            $sexo = $_POST['sexo'];

            $servername = "localhost";  
            $username = "root";   
            $password = ""; 
            $dbname = "base_imc";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Conexión fallida: " . $conn->connect_error);
            }

            $sql = "INSERT INTO persona (id_nombre, ape_pa_nombre, ape_ma_nombre, edad, sexo) 
                    VALUES ('$nombre', '$apePa', '$apeMa', '$edad', '$sexo')";

            if ($conn->query($sql) === TRUE) {
                echo "<script>
                        alert('Datos guardados exitosamente');
                        window.location.href = 'test.php';
                      </script>";
            } else {
                echo "<script>alert('Error al guardar los datos');</script>";
            }

            $conn->close();
        }
        ?>

        <form method="POST" action="">
            <input type="text" id="nombre" name="nombre" placeholder="Nombre" required><br>
            <input type="text" id="apellidoPaterno" name="apellidoPaterno" placeholder="Apellido Paterno" required><br>
            <input type="text" id="apellidoMaterno" name="apellidoMaterno" placeholder="Apellido Materno" required><br>
            <input type="text" id="edad" name="edad" maxlength="2" placeholder="Edad" required><br>
            <select id="sexo" name="sexo" required>
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
            </select><br>
            <input type="submit" value="Enviar y seguir con el siguiente formulario">
        </form>
    </div>

    <script>
        function Validanum() {
            if (event.keyCode >= 48 && event.keyCode <= 57) {
                event.returnValue = true;
            } else {
                event.returnValue = false;
            }
        }

        function Validarlet() {
            if ((event.keyCode >= 97 && event.keyCode <= 122) || (event.keyCode >= 65 && event.keyCode <= 90)) {
                event.returnValue = true;
            } else {
                event.returnValue = false;
            }
        }
    </script>
</body>
</html>
