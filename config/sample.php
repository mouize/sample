<?php

use \App\Services\Sample\HeroesAbstract;

return [
    'magus' => [
        'attributes' => [
            HeroesAbstract::ATT_MANA => 100,
            HeroesAbstract::ATT_AGIL => 10,
            HeroesAbstract::ATT_HP => 50,
        ],
        'h_skill' => 'ballfire',
        'm_skill' => 'heal',
        'l_skill' => 'light',
    ],
    'archer' => [
        'attributes' => [
            HeroesAbstract::ATT_MANA => 10,
            HeroesAbstract::ATT_AGIL => 100,
            HeroesAbstract::ATT_HP => 50,
        ],
        'h_skill' => 'bulls_eye',
        'm_skill' => 'run_speed',
        'l_skill' => 'clear_arrow',
    ],
    'warrior' => [
        'attributes' => [
            HeroesAbstract::ATT_MANA => 10,
            HeroesAbstract::ATT_AGIL => 50,
            HeroesAbstract::ATT_HP => 100,
        ],
        'h_skill' => 'crush_bones',
        'm_skill' => 'head_knock',
        'l_skill' => 'sharp_axe',
    ],
];
