<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Beta-Fashion</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"> <!-- Ikony -->
</head>
<body>

<header>
    <nav class="main-nav">
        <ul>
            <li><a href="index.php" class="<?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>"><i class="fas fa-home"></i> Domov</a></li>
            <li><a href="products.php" class="<?= basename($_SERVER['PHP_SELF']) == 'products.php' ? 'active' : '' ?>"><i class="fas fa-tshirt"></i> Produkty</a></li>
            <li><a href="o-nas.php" class="<?= basename($_SERVER['PHP_SELF']) == 'o-nas.php' ? 'active' : '' ?>"><i class="fas fa-info-circle"></i> O nás</a></li>
        </ul>
    </nav>
</header>