<!-- e-commerce animali -->
<?php

    require_once __DIR__ . '/classes/products.php';
    require_once __DIR__ . '/classes/food.php';
    require_once __DIR__ . '/classes/accessories.php';
    require_once __DIR__ . '/classes/health.php';
    require_once __DIR__ . '/classes/user.php';


    //cibo
    $croccantini = new food('gino', 'gino@gmail.com', 'crocchets', 23);
    $croccantini->setType('food');
    $croccantini->getPrice(20);
    $croccantini->setIngredients('pane', 'carne', 'sale', 'pepe');
    var_dump($croccantini);

    //accessorio
    $cuccia = new accessories('pino', 'pino@gmail.com', 'magnolia', 250);
    $cuccia->setType('accessories');
    $cuccia->getPrice(100);
    var_dump($cuccia);

    //salute
    $antipulci= new health('marco', 'st', 'pulcer', 600);
    $antipulci->setType('health');
    $antipulci->setSubType('antipulci');
    $antipulci->setAvailability();
    $antipulci->getPrice(60);
    $antipulci->setCardNumber();
    $antipulci->getCardExpiration();
    $antipulci->getCardValid();
    var_dump($antipulci);


?>