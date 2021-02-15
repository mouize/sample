<?php


namespace App\Services\Sample;


use League\Flysystem\Adapter\AbstractAdapter;

/**
 * Class HeroesAbstract
 * @package App\Services\Sample
 *
 * Abstract class let u define all methods that are common to all adapters.
 * It let you also define which method HAS TO be defined in the children classes through abstract key.
 */
abstract class HeroesAbstract implements HeroesInterface
{
    const ATT_HP = 'hp';
    const ATT_MANA = 'mana';
    const ATT_AGIL = 'agility';

    /**
     * @var array
     */
    protected $attributes = [];

    /**
     * @var string
     */
    protected $lowSkill = '';

    /**
     * @var string
     */
    protected $mediumSkill = '';

    /**
     * @var string
     */
    protected $highSkill = '';

    /**
     * @var array
     */
    protected $config = [];

    /**
     * @inheritDoc
     */
    abstract public function welcome(): string;

    /**
     * @inheritDoc
     */
    public function attributes(): array
    {
       return $this->attributes;
    }

    public function lowSkill(): string
    {
       return  $this->lowSkill;
    }

    /**
     * @inheritDoc
     */
    public function mediumSkill(): string
    {
        return $this->mediumSkill;
    }

    /**
     * @inheritDoc
     */
    public function highSkill(): string
    {
        return $this->highSkill;
    }

    /**
     * @param  array  $config
     * @return $this
     */
    public function setConfig(array $config): HeroesAbstract
    {
        if (!empty($config['attributes'])) {
            $this->attributes = array_merge($this->attributes, $config['attributes']);
        }

        if (!empty($config['l_skill'])) {
            $this->lowSkill = $config['l_skill'];
        }

        if (!empty($config['m_skill'])) {
            $this->mediumSkill = $config['m_skill'];
        }

        if (!empty($config['h_skill'])) {
            $this->highSkill = $config['h_skill'];
        }

        return $this;
    }
}
