<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$dane_kontaktowe = new FieldsBuilder('dane_kontaktowe');

$dane_kontaktowe
    ->addTab('dane_kontaktowe', ['placement' => 'left'])
        ->addRepeater('kontakt_bloki')
            ->addImage('icon')
            ->addText('title')
            ->addWysiwyg('content', ['new_lines' => 'br']);
return $dane_kontaktowe;
