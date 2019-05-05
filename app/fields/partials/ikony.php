<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$ikony = new FieldsBuilder('ikony');

$ikony
    ->addTab('ikony', ['placement' => 'left'])
        ->addRepeater('ikony')
            ->addImage('image', ['title'=> 'Zdjęcie', 'label'=>'Zdjęcie'])
            ->addGroup('content', ['label'=>'Treść'])
                ->addText('title', ['title'=>'Tytuł'])
                ->addTextarea('text', ['title'=>'Opis']);

return $ikony;
