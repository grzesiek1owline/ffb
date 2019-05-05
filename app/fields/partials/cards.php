<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$cards = new FieldsBuilder('cards');

$cards
    ->addTab('cards', ['placement' => 'left'])
        ->addText('cards_title')
        ->addTextarea('cards_content', ['new_lines'=>'br'])
        ->addImage('cards_image')
        ->addLink('cards_link');
return $cards;
