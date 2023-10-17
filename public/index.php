<?php
require_once '../source/db.php';

$sql = "SELECT titel, intro, foto, slug FROM producten LIMIT 6";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Product Overzicht</title>
    <link rel="stylesheet" href="/assets/style/style.css">
</head>
<body>
    <div class="products-container">
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<a class="product" href="'. $row["slug"] . '"' . '>';
                echo '<img src="/assets/images/' . $row["foto"] . '" alt="' . $row["titel"] . '">';
                echo '<h2>' . $row["titel"] . '</h2>';
                echo '<p>' . $row["intro"] . '</p>';
                echo '</a>';
            }
        } else {
            echo "Geen producten gevonden!";
        }
        $conn->close();
        ?>
    </div>
</body>
</html>
