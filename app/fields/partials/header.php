<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$header = new FieldsBuilder('header');

$header
    ->addTab('header', ['placement' => 'left'])
        ->addImage('image', ['title'=> 'Zdjęcie na tło']);

return $header;
