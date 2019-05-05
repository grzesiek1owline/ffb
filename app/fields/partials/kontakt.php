<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$kontakt = new FieldsBuilder('kontakt');

$kontakt
    ->addTab('kontakt', ['placement' => 'left'])
        ->addText('kontakt_title')
        ->addText('kontakt_title_extra')
        ->addText('kontakt_shortcode')
        ->addText('kontakt_small_title')
        ->addTextarea('kontakt_content');
return $kontakt;