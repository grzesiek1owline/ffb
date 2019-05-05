<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$prices_pl = new FieldsBuilder('prices_pl');

$prices_pl
    ->addTab('prices_pl', ['placement' => 'left', 'label'=>'Cennik PL'])
        ->addRepeater('prices_pl', ['label'=>'Cennik PL'])
            ->addText('title', ['wrapper'=> array('width'=>20)])
            ->addRepeater('tabs')
                ->addText('title', ['wrapper'=> array('width'=>20)])
                ->addRepeater('rows')
                    ->addGroup('content')
                        ->addText('karnet')
                        ->addText('cena')
                        ->addRepeater('list')
                            ->addText('element');
return $prices_pl;
