<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$prices_eng = new FieldsBuilder('prices_eng');

$prices_eng
    ->addTab('prices_eng', ['placement' => 'left', 'label'=>'Cennik ENG'])
        ->addRepeater('prices_eng', ['label'=>'Cennik ENG'])
            ->addText('title', ['wrapper'=> array('width'=>20)])
            ->addRepeater('tabs')
                ->addText('title', ['wrapper'=> array('width'=>20)])
                ->addRepeater('rows')
                    ->addGroup('content')
                        ->addText('karnet')
                        ->addText('cena')
                        ->addRepeater('list')
                            ->addText('element');
return $prices_eng;
