<?php


namespace App\Services\Sample;

use App\Services\Sample\Exceptions\HeroeNotFoundException;
use Illuminate\Support\Str;

/**
 * Class HeroesFactory
 * @package App\Services\Sample
 *
 * The main Goal of the factory is to instanciate the good class and to configurate it through setters as it should be.
 * It helps to maintain code and make it more clear and clean.
 */
class HeroesFactory
{
    public static function create(string $key, array $config = []): HeroesAbstract
    {
        /**
         * Let's check if an Adapter exists for that class.
         *
         * @var HeroesAbstract $adapter
         */
        $adapter = sprintf('%s\Adapters\%s', __NAMESPACE__, Str::studly($key));
        if (!class_exists($adapter)) {
            throw new HeroeNotFoundException(sprintf('Heroe %s not defined yet', $key));
        }

        return (new $adapter())->setConfig($config[$key] ?? []);
    }
}
