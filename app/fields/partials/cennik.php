<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$cennik = new FieldsBuilder('cennik');

$cennik
    ->addTab('cennik', ['placement' => 'left'])
        ->addText('cennik_tytul')
        ->addLink('cennik_link')
        ->addRepeater('cennik', ['placement' => 'left', 'min_row'=> 0, 'max_row'=> 0])
            ->addText('title')
            ->addImage('icon')
            ->addGroup('cena')
                ->addText('form', ['label'=>'Cena od'])
                ->addText('time', ['label'=>'Cena czas'])
            ->endGroup()
            ->addRepeater('items',['label'=>'Elementy', 'wrapper' => ['width'=>'30%']])
                ->addText('item');
return $cennik;
