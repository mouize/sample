<?php

namespace App\Services\Sample;

/**
 * Interface HeroesInterface
 * @package App\Services\Sample
 *
 * Interface is a contract that define what are the required method that your service need to be functional.
 * All classes that implements interface have to respect the contract and contains those methods.
 */
interface HeroesInterface
{
    /**
     * @return string
     */
    public function welcome(): string;

    /**
     * @return array
     */
    public function attributes(): array;

    /**
     * @return string
     */
    public function lowSkill(): string;

    /**
     * @return string
     */
    public function mediumSkill(): string;

    /**
     * @return string
     */
    public function highSkill(): string;

}
