<?php

namespace EvolutionCMS\ArtisanGenerators\Console;

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class EvoControllerMakeCommand extends GeneratorCommand {
   /**
    * The console command name.
    *
    * @var string
    */
   protected $name = 'make:controller-evo';

   /**
    * The console command description.
    *
    * @var string
    */
   protected $description = 'Create a new EVO controller';

   /**
    * The type of class being generated.
    *
    * @var string
    */
   protected $type = 'Controller';

   /**
    * Get the target directory name for generated file
    *
    * @return string
    */
   protected function getTargetDirectory() {
      return 'Controllers';
   }

   /**
    * Get the stub file for the generator.
    *
    * @return string
    */
   protected function getStub() {
      return $this->getStubsPath() . 'controller-evo.stub';
   }

   /**
    * Get the console command arguments.
    *
    * @return array
    */
   protected function getArguments() {
      return [
         ['name', InputArgument::REQUIRED, 'The name of the controller'],
      ];
   }
}
