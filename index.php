<!-- e-commerce animali -->
<?php

    require_once __DIR__ . '/classes/products.php';
    require_once __DIR__ . '/classes/food.php';
    require_once __DIR__ . '/classes/accessories.php';
    require_once __DIR__ . '/classes/health.php';


    // cibo
    $croccantini= new food('crocchets', 23);
    $croccantini->setType('food');
    $croccantini->setPrice(25);
    $croccantini->setIngredients('pane', 'carne', 'pangrattato');
    var_dump($croccantini);

    // accessorio
    $cuccia = new accessories('magnolia', 250);
    $cuccia->setType('accessories');
    $cuccia-> setPrice(25);
    var_dump($cuccia);

    //salute
    $antipulci = new health('pulcer', 600, 'antipulci');
    $antipulci->setAvailability();
    var_dump($antipulci);

    echo date("m.d.y");   


?>