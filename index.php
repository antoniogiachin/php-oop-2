<!-- e-commerce animali -->
<?php

    require_once __DIR__ . '/classes/products.php';
    require_once __DIR__ . '/classes/food.php';

    $croccantini= new food('crocchets', 23);
    $croccantini->setPrice(25);
    $croccantini->setIngredients('pane', 'carne', 'pangrattato');
    var_dump($croccantini);



?>