<?php
try {
    $pdo = new PDO("mysql:host=127.0.0.1;port=3306;dbname=Barber", "root", "");
    echo "✅ Verbinding met database geslaagd!";
} catch (PDOException $e) {
    echo "❌ Verbinding mislukt: " . $e->getMessage();
}
