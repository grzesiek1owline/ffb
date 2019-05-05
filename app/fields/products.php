<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$produkty = new FieldsBuilder('produkty');

$produkty
    ->setLocation('post_type', '==', 'produkty');

$produkty
    ->addImage('image', ['title'=> 'Zdjęcie produktu'])
    ->addText('subtitle', ['title'=>'Dodatkowy tytuł(niebieski)'])
    ->addTextarea('content', ['title'=>'Treść'])
    ->addFile('pdf', ['title'=>'PDF']);

return $produkty;
