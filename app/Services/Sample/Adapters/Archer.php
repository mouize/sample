<?php


namespace App\Services\Sample\Adapters;

use App\Services\Sample\HeroesAbstract;

class Archer extends HeroesAbstract
{
    /**
     * @inheritDoc
     */
    public function welcome(): string
    {
        return 'Archer are the best in long distance attack, good choice';
    }
}
