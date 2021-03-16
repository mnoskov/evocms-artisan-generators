<?php

namespace EvolutionCMS\ArtisanGenerators;

use EvolutionCMS\ArtisanGenerators\Console;
use Illuminate\Support\ServiceProvider;

class ArtisanGeneratorsServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->commands([
            Console\ControllerMakeCommand::class,
            Console\ConsoleMakeCommand::class,
            Console\ModelMakeCommand::class,
        ]);
    }
}
