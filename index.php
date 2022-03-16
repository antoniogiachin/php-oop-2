<!-- e-commerce animali -->
<?php

    require_once __DIR__ . '/classes/products.php';
    require_once __DIR__ . '/classes/food.php';
    require_once __DIR__ . '/classes/accessories.php';
    require_once __DIR__ . '/classes/health.php';
    require_once __DIR__ . '/classes/user.php';


    // // cibo
    // $croccantini= new food('gino', 'gino@gmail.com','crocchets', 23);
    // $croccantini->setType('food');
    // $croccantini->setPrice(25);
    // $croccantini->setIngredients('pane', 'carne', 'pangrattato');
    // var_dump($croccantini);

    // // accessorio
    // $cuccia = new accessories('magnolia', 250);
    // $cuccia->setType('accessories');
    // $cuccia-> setPrice(25);
    // var_dump($cuccia);

    // //salute
    // $antipulci = new health('pulcer', 600, 'antipulci');
    // $antipulci->setAvailability();
    // var_dump($antipulci);

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
    $antipulci= new health('marco', 'marco@mail.com', 'pulcer', 600);
    $antipulci->setType('health');
    $antipulci->setSubType('antipulci');
    $antipulci->setAvailability();
    $antipulci->getPrice(60);
    var_dump($antipulci);


?>