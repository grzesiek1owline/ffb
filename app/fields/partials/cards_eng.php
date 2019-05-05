<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$cards_eng = new FieldsBuilder('cards_eng');

$cards_eng
    ->addTab('cards_eng', ['placement' => 'left', 'label'=>'Karty ENG'])
        ->addText('cards_eng_title')
        ->addTextarea('cards_eng_content', ['new_lines'=>'br'])
        ->addImage('cards_eng_image')
        ->addLink('cards_eng_link');
return $cards_eng;
