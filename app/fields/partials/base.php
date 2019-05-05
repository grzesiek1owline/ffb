<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$base = new FieldsBuilder('base');

$base
    ->addTab('base', ['placement' => 'left'])
        ->addImage('logo')
        ->addImage('default_image', ['label'=>'Domyślne zdjęcie']);
return $base;
