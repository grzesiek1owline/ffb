<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$cards_pl = new FieldsBuilder('cards_pl');

$cards_pl
    ->addTab('cards_pl', ['placement' => 'left', 'label'=>'Karty PL'])
        ->addText('cards_pl_title')
        ->addTextarea('cards_pl_content', ['new_lines'=>'br'])
        ->addImage('cards_pl_image')
        ->addLink('cards_pl_link');
return $cards_pl;
