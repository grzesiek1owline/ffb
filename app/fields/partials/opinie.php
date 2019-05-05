<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$opinie = new FieldsBuilder('opinie');

$opinie
    ->addTab('opinie', ['placement' => 'left'])
        ->addText('opinie_title', ['label'=> 'Tytuł'])
        ->addRepeater('opinie')
            ->addTextarea('text', ['title'=>'Opinia']);

return $opinie;
