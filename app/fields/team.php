<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$team = new FieldsBuilder('team');

$team
    ->setLocation('post_type', '==', 'team');

$team
    ->addText('job', ['title'=>'Stanowisko'])
    ->addTextarea('excerpt', ['title'=>'Opis'])
    ->addImage('image',  ['title'=>'Zdjęcie']);

return $team;
