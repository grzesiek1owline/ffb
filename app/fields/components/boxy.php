<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$boxy = new FieldsBuilder('boxy');

$boxy
    ->addTab('boxy', ['placement' => 'left'])
        ->addRepeater('boxy')
            ->addImage('boxy_image')
            ->addGroup('content')
                ->addText('title')
                ->addTextarea('text');
return $boxy;
