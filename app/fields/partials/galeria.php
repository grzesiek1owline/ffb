<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$galeria = new FieldsBuilder('galeria');

$galeria
    ->addTab('galeria', ['placement' => 'left'])
        ->addGallery('galeria', ['title'=> 'Zdjęcie', 'label'=>'Zdjęcie']);

return $galeria;
