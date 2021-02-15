<?php

namespace Tests\Unit;

use App\Services\Sample\Adapters\Archer;
use App\Services\Sample\Adapters\Magus;
use App\Services\Sample\Adapters\Warrior;
use App\Services\Sample\Exceptions\HeroeNotFoundException;
use App\Services\Sample\HeroesFactory;
use Tests\TestCase;

class HeroesTest extends TestCase
{
    /**
     * Check for working adapters
     *
     * @test
     * @dataProvider adaptersAvailable
     */
    public function HeroesFactoryTest($key, $adatper)
    {
        $return = HeroesFactory::create($key);
        $this->assertInstanceOf($adatper, $return);
    }

    /**
     * @return \string[][]
     */
    public function adaptersAvailable()
    {
        return [
            ['archer', Archer::class],
            ['magus', Magus::class],
            ['warrior', Warrior::class],
        ];
    }

    /**
     * @test
     */
    public function HeroesFactoryNotFoundTest()
    {
        $this->expectException(HeroeNotFoundException::class);

        HeroesFactory::create('toto');
    }

    /**
     * @test
     */
    public function HeroesSetConfigAttributesTest()
    {
        $key = 'archer';
        $config = [
            $key => [
                'attributes' => [
                    'att1' => 1,
                    'att2' => 2,
                ],
            ],
        ];
        $adapter = HeroesFactory::create($key, $config);

        $this->assertArrayHasKey('att1', $adapter->attributes());
        $this->assertArrayHasKey('att2', $adapter->attributes());
    }

    /**
     * @test
     */
    public function HeroesSetConfigSkillsTest()
    {
        $key = 'archer';
        $config = [
            $key => [
                'l_skill' => 'low_skill',
                'm_skill' => 'medium_skill',
                'h_skill' => 'high_skill',
            ],
        ];
        $adapter = HeroesFactory::create($key, $config);

        $this->assertEquals($config[$key]['l_skill'], $adapter->lowSkill());
        $this->assertEquals($config[$key]['m_skill'], $adapter->mediumSkill());
        $this->assertEquals($config[$key]['h_skill'], $adapter->highSkill());
    }
}
