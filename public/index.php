<?php

require '../vendor/autoload.php';
require '../src/config/db.php';

//Users Routes
require '../src/routes/users.php';

//countries Routes
require '../src/routes/countries.php';

//State Routes
require '../src/routes/states.php';

//company Routes
require '../src/routes/company.php';


$app->run();