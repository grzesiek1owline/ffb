<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$text = new FieldsBuilder('text');

$text
    ->addTab('text', ['placement' => 'left'])
       ->addText('title', ['label'=>'Tytuł'])
       ->addWysiwyg('content', ['label'=>'Treść'])
       ->addLink('link', ['label'=>'Link'])
       ->addImage('image', ['label'=>'Obrazek dodatkowy']);
return $text;
