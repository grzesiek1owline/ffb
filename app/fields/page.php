<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$page = new FieldsBuilder('page');

$page
    ->setLocation('post_type', '==', 'page')
        ->and('page_template', '!=', 'views/front.blade.php')
        ->and('page_template', '!=', 'views/prices.blade.php')
        ->and('page_template', '!=', 'views/gallery.blade.php');

$page
    ->addFields(get_field_partial('partials.header'))
    ->addFields(get_field_partial('partials.builder'));
return $page;
