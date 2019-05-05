<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$builder = new FieldsBuilder('builder');

$builder
    ->addTab('builder', ['placement' => 'left'])
        ->addFlexibleContent('components', ['button_label' => 'Add Component'])
            ->addLayout('aktualnosci')
            ->addLayout(get_field_partial('components.baner'))
            ->addLayout(get_field_partial('components.boxy'))
            ->addLayout('cennik')
            ->addLayout('content')
            ->addLayout('galeria-short')
            ->addLayout('ikony')
            ->addLayout('oferta')
            ->addLayout('opinie')
            ->addLayout(get_field_partial('components.text'));
return $builder;
