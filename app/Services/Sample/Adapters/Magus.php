<?php


namespace App\Services\Sample\Adapters;

use App\Services\Sample\HeroesAbstract;

class Magus extends HeroesAbstract
{
    /**
     * @inheritDoc
     */
    public function welcome(): string
    {
        return 'Magic is knowledge, knowledge is power';
    }
}
