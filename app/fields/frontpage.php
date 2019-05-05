<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$front_page = new FieldsBuilder('front_page');

$front_page
    ->setLocation('page_template', '==', 'views/front.blade.php');

$front_page
    ->addFields(get_field_partial('partials.slider'))
    ->addFields(get_field_partial('partials.builder'));
return $front_page;
