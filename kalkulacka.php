<?php
    // Inicializace proměnné pro výsledek
    $result = '';

    // Zpracování formuláře
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Získání hodnot z formuláře
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];

        // Zpracování na základě vybrané operace
        switch ($operation) {
            case 'add':  // Sčítání
                $result = $num1 + $num2;
                break;
            case 'subtract':  // Odčítání
                $result = $num1 - $num2;
                break;
            case 'multiply':  // Násobení
                $result = $num1 * $num2;
                break;
            case 'divide':  // Dělení
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = 'Nelze dělit nulou!';
                }
                break;
        }
    }
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kalkulačka</title>
    <!-- Odkaz na Bootstrap pro základní styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Odkaz na vlastní CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">

    <div class="container">
        <h1 class="text-center mt-5">Jednoduchá Kalkulačka</h1>

        <!-- Formulář pro výpočet -->
        <form method="POST" class="mt-4">
            <div class="mb-3">
                <label for="num1" class="form-label">První číslo</label>
                <input type="number" name="num1" id="num1" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="num2" class="form-label">Druhé číslo</label>
                <input type="number" name="num2" id="num2" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="operation" class="form-label">Operace</label>
                <select name="operation" id="operation" class="form-control" required>
                    <option value="add">Sčítání (+)</option>
                    <option value="subtract">Odčítání (-)</option>
                    <option value="multiply">Násobení (×)</option>
                    <option value="divide">Dělení (÷)</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Vypočítat</button>
        </form>

        <!-- Zobrazení výsledku -->
        <?php if ($result !== ''): ?>
            <h3 class="text-center mt-4">Výsledek je: <?php echo $result; ?></h3>
        <?php endif; ?>
    </div>

    <!-- Bootstrap JavaScript pro interaktivní prvky -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
