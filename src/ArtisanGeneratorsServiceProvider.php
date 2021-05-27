<?php

namespace EvolutionCMS\ArtisanGenerators;

use EvolutionCMS\ArtisanGenerators\Console;
use Illuminate\Support\ServiceProvider;

class ArtisanGeneratorsServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->commands([
            Console\ConsoleMakeCommand::class,
            Console\ControllerMakeCommand::class,
            Console\ModelMakeCommand::class,
            Console\SeederMakeCommand::class,
            Console\MiddlewareMakeCommand::class
        ]);
    }
}
