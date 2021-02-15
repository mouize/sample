<?php


namespace App\Services\Sample\Adapters;

use App\Services\Sample\HeroesAbstract;

class Warrior extends HeroesAbstract
{
    /**
     * @inheritDoc
     */
    public function welcome(): string
    {
        return 'Destroyyyyyy';
    }
}
