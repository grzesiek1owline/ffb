<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$slider = new FieldsBuilder('slider');

$slider
    ->addTab('slider', ['placement' => 'left'])
        ->addRepeater('slider')
            ->addImage('image', ['title'=> 'Zdjęcie', 'label'=>'Zdjęcie'])
            ->addGroup('content', ['label'=>'Treść'])
                ->addText('title', ['title'=>'Tytuł top'])
                ->addText('title_middle', ['title'=>'Tytuł środek'])
                ->addText('title_botom', ['title'=>'Tytuł dół'])
                ->addLink('link', ['title'=>'Link']);

return $slider;
