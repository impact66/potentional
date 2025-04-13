<?php include 'header.php'; ?>

<main>
    <h2>Naše produkty</h2>
    <div class="product-container">
        <?php
        $produkty = [
            ["nazov" => "Tričko Red", "kategoria" => "Tričká", "cena" => 20, "zlava" => 10, "obrazok" => "img/tricko1.jpg"],
            ["nazov" => "Tričko Blue", "kategoria" => "Tričká", "cena" => 22, "zlava" => 5, "obrazok" => "img/tricko2.jpg"],
            ["nazov" => "Tričko Black", "kategoria" => "Tričká", "cena" => 25, "zlava" => 0, "obrazok" => "img/tricko3.jpg"],
            ["nazov" => "Mikina Red", "kategoria" => "Mikiny", "cena" => 40, "zlava" => 15, "obrazok" => "img/mikina1.jpg"],
            ["nazov" => "Mikina Grey", "kategoria" => "Mikiny", "cena" => 42, "zlava" => 10, "obrazok" => "img/mikina2.jpg"],
            ["nazov" => "Mikina Blue", "kategoria" => "Mikiny", "cena" => 45, "zlava" => 0, "obrazok" => "img/mikina3.jpg"],
            ["nazov" => "Nohavice Black", "kategoria" => "Nohavice", "cena" => 30, "zlava" => 5, "obrazok" => "img/nohavice1.jpg"],
            ["nazov" => "Nohavice Grey", "kategoria" => "Nohavice", "cena" => 35, "zlava" => 10, "obrazok" => "img/nohavice2.jpg"],
            ["nazov" => "Nohavice Red", "kategoria" => "Nohavice", "cena" => 33, "zlava" => 0, "obrazok" => "img/nohavice3.jpg"],
            ["nazov" => "Nohavice Green", "kategoria" => "Nohavice", "cena" => 37, "zlava" => 7, "obrazok" => "img/nohavice4.jpg"]
        ];

        function percent($cena, $zlava) {
            return $cena - ($cena * $zlava / 100);
        }

        foreach ($produkty as $produkt): ?>
            <div class="product">
                <img src="<?= $produkt['obrazok'] ?>" alt="<?= $produkt['nazov'] ?>">
                <h3><?= $produkt['nazov'] ?></h3>
                <p>Kategória: <?= $produkt['kategoria'] ?></p>
                <p>Pôvodná cena: <?= $produkt['cena'] ?> €</p>
                <?php if ($produkt['zlava'] > 0): ?>
                    <p>Zľava: <?= $produkt['zlava'] ?>%</p>
                    <p>Nová cena: <strong><?= percent($produkt['cena'], $produkt['zlava']) ?> €</strong></p>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
</main>

<?php include 'footer.php'; ?>