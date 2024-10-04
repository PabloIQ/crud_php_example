<?php
include 'config.php';

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $autor = $_POST['autor'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];

    try {
        $sql = "INSERT INTO libros (nombre, autor, precio, stock) VALUES (:nombre, :autor, :precio, :stock)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['nombre' => $nombre, 'autor' => $autor, 'precio' => $precio, 'stock' => $stock]);

        $message = 'Libro añadido con éxito!';
    } catch (PDOException $e) {
        $message = 'Error al añadir el libro: ' . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Libro</title>
</head>
<body>
<h2>Añadir nuevo Libro</h2>

<?php if (!empty($message)): ?>
    <p><?= $message ?></p>
<?php endif; ?>

<form action="create.php" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" required>
    <br>
    <label for="autor">Autor:</label>
    <textarea name="autor" id="autor"></textarea>
    <br>
    <label for="precio">Precio:</label>
    <input type="text" name="precio" id="precio" required>
    <br>
    <label for="stock">Stock:</label>
    <input type="number" name="stock" id="stock" required>
    <br>
    <input type="submit" value="Añadir Libro">
</form>

</body>
</html>
