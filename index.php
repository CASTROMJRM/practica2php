<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Conversión de Números Decimales</title>
</head>
<body>
<div class="container-fluid my-5 d-flex justify-content-center align-items-center">
        <div class="card p-4 shadow">
            <h1 class="text-center mb-4">Conversión de Números Decimales</h1>
            <form method="POST" action="">
                <div class="mb-3">
                    <label for="numero" class="form-label">Ingrese un número decimal:</label>
                    <input type="number" class="form-control" id="numero" name="numero" required>
                </div>
                <div class="mb-3">
                    <label for="conversion" class="form-label">Seleccione una opción:</label>
                    <select class="form-select" id="conversion" name="conversion" required>
                        <option value="binario">Convertir a binario</option>
                        <option value="octal">Convertir a octal</option>
                        <option value="hexadecimal">Convertir a hexadecimal</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary w-100">Convertir</button>
            </form>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $decimal = intval($_POST["numero"]);
                $conversion = $_POST["conversion"];
                $resultado = "";

                function decimal_a_binario($decimal) {
                    return decbin($decimal);
                }

                function decimal_a_octal($decimal) {
                    return decoct($decimal);
                }

                function decimal_a_hexadecimal($decimal) {
                    return dechex($decimal);
                }

                switch ($conversion) {
                    case "binario":
                        $resultado = decimal_a_binario($decimal);
                        echo "<div class='alert alert-success mt-4'>El número decimal $decimal en binario es: $resultado</div>";
                        break;
                    case "octal":
                        $resultado = decimal_a_octal($decimal);
                        echo "<div class='alert alert-success mt-4'>El número decimal $decimal en octal es: $resultado</div>";
                        break;
                    case "hexadecimal":
                        $resultado = decimal_a_hexadecimal($decimal);
                        echo "<div class='alert alert-success mt-4'>El número decimal $decimal en hexadecimal es: $resultado</div>";
                        break;
                    default:
                        echo "<div class='alert alert-danger mt-4'>Opción no válida. Por favor, intente de nuevo.</div>";
                        break;
                }
            }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
