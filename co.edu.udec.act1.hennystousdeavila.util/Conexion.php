<?php

require_once 'php-activerecord/ActiveRecord.php';

 ActiveRecord\Config::initialize(function($cfg)
 {
    $cfg->set_model_directory('../co.edu.udec.act1.hennystousdeavila.modelo/co.edu.udec.act1.hennystousdeavila.modelo.entidades');
    $cfg->set_connections(array(
        'development' => 'mysql://root:@localhost:3308/asignaturascrud'));
});

