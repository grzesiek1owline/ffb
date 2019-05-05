<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$oferta = new FieldsBuilder('oferta');

$oferta
    ->addTab('oferta', ['placement' => 'left'])
        ->addText('oferta_title')
        ->addRepeater('oferta')
            ->addImage('image', ['title'=>'Zdjęcie'])
            ->addGroup('content')
                ->addText('title')
                ->addTextarea('text');

return $oferta;
