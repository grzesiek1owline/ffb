<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$option_page = new FieldsBuilder('option_page');

$option_page
    ->setLocation('options_page', '==', 'acf-options-theme-settings');

$option_page
    ->addFields(get_field_partial('partials.base'))
    ->addFields(get_field_partial('partials.oferta'))
    ->addFields(get_field_partial('partials.ikony'))
    ->addFields(get_field_partial('partials.opinie'))
    ->addFields(get_field_partial('partials.galeria'))
    ->addFields(get_field_partial('partials.cennik'))
    ->addFields(get_field_partial('partials.kontakt'))
    ->addFields(get_field_partial('partials.dane_kontaktowe'))
    ->addFields(get_field_partial('partials.cards'));
return $option_page;
