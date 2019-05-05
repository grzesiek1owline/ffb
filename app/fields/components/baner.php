<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$baner = new FieldsBuilder('baner');

$baner
    ->addTab('baner', ['placement' => 'left'])
       ->addText('title', ['label'=>'Tytuł'])
       ->addTextarea('content', ['label'=>'Treść'])
       ->addImage('icon', ['label'=>'Ikona']);
return $baner;
