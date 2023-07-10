<?php
require_once __DIR__.'/Models/ProductDescription.php';
require_once __DIR__.'/Models/Food.php';
require_once __DIR__.'/Models/Utility.php';
require_once __DIR__.'/Models/Toys.php';
require_once __DIR__.'/Models/shopList.php';
//Importiamo da models tutte le classi + array dei prodotti da mettere in pagina
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Boolshop</title>
</head>
<body>
    <div class="container my-5">
        <h1 class="my-5">Boolshop</h1>
        <div class="row">
            <!-- Facciamo foreach per ciclare l'array dei prodotti in shop -->
        <?php foreach ($shopList as $shop) {?>
            <div class="col d-flex justify-content-center my-3 ">
                <!-- Creiamo la card -->
                <div class="card h_min" style="width: 18rem;">
                    <img src="<?php echo $shop->img ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h4 class="card-title"><?php echo $shop->brandName ?></h4>
                    <!-- Facciamo un if else per detterminare l'icona del animale in base al animale  -->
                    <p class="card-text">
                        
                        <?php if ($shop->animal === 'Cane') { ?>
                        <i class="fa-solid fa-dog" ></i>
                        <?php } elseif($shop->animal === 'Gatto'){ ?>
                            <i class="fa-solid fa-cat" ></i>
                            <?php } elseif($shop->animal === 'Pesce'){ ?>
                            <i class="fa-solid fa-fish" ></i>
                            <?php } elseif($shop->animal === 'Uccello'){ ?>
                            <i class="fa-solid fa-dove" ></i>
                        <?php }?>

                         <?php echo $shop->animal ?></p>
                    <p class="card-text">Prezzo:  €<?php echo $shop->price ?> </p>

                   <!-- Creiamo un if else per detterminare la classe usata al interno di typeDescribtion e complettare la card in base ad esso -->
                    <?php if (get_class($shop->typeDescribtion) === 'Food') { ?>
                        <p class="card-text">Peso netto: <?php echo $shop->typeDescribtion->weight; ?> g</p>
                        <p class="card-text">Ingredienti: <?php echo implode(', ', $shop->typeDescribtion->ingredients); ?></p>
                        <?php } elseif (get_class($shop->typeDescribtion) === 'Utility') { ?>
                        <p class="card-text">Materiale: <?php echo $shop->typeDescribtion->materials; ?></p>
                        <p class="card-text">Dimensioni: <?php echo $shop->typeDescribtion->dimensions; ?></p>
                        <?php } elseif (get_class($shop->typeDescribtion) === 'Toys') { ?>
                        <p class="card-text">Caratteristiche: <?php echo $shop->typeDescribtion->characteristics; ?></p>
                        <p class="card-text">Dimensioni: <?php echo $shop->typeDescribtion->dimensions; ?></p>

                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php }?>
        </div>
    </div>
    
</body>
</html>