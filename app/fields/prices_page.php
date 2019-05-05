<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$prices = new FieldsBuilder('prices');

$prices
    ->setLocation('page_template', '==', 'views/prices.blade.php');

$prices
    ->addFields(get_field_partial('partials.header'))
    ->addFields(get_field_partial('partials.prices_pl'))
    ->addFields(get_field_partial('partials.prices_eng'))
    ->addFields(get_field_partial('partials.cards_pl'))
    ->addFields(get_field_partial('partials.cards_eng'));
return $prices;
