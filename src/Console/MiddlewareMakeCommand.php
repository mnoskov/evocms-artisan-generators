<?php

namespace EvolutionCMS\ArtisanGenerators\Console;

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class MiddlewareMakeCommand extends GeneratorCommand {
   /**
    * The console command name.
    *
    * @var string
    */
   protected $name = 'make:middleware';

   /**
    * The console command description.
    *
    * @var string
    */
   protected $description = 'Create a new middleware';

   /**
    * The type of class being generated.
    *
    * @var string
    */
   protected $type = 'Middleware';

   /**
    * Get the target directory name for generated file
    *
    * @return string
    */
   protected function getTargetDirectory() {
      return 'Middlewares';
   }

   /**
    * Get the stub file for the generator.
    *
    * @return string
    */
   protected function getStub() {
      return $this->getStubsPath() . 'middleware.stub';
   }

   /**
    * Get the console command arguments.
    *
    * @return array
    */
   protected function getArguments() {
      return [
         ['name', InputArgument::REQUIRED, 'The name of the middleware'],
      ];
   }
}
