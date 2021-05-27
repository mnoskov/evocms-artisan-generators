<?php

namespace EvolutionCMS\ArtisanGenerators\Console;

use Illuminate\Console\GeneratorCommand as IlluminateGeneratorCommand;
use Symfony\Component\Console\Exception\RuntimeException;

class GeneratorCommand extends IlluminateGeneratorCommand
{
    /**
     * Get the target directory name for generated file
     *
     * @return string
     */
    protected function getTargetDirectory()
    {
        return '';
    }

    /**
     * Get the stubs path
     *
     * @return string
     */
    protected function getStubsPath()
    {
        return __DIR__ . '/../../stubs/';
    }

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return '';
    }

    /**
     * Get the default namespace for the class.
     *
     * @param string $rootNamespace
     *
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        $namespace = app()->getConfig('ControllerNamespace');

        if (empty($namespace)) {
            throw new RuntimeException('ControllerNamespace not specified in configuration');
        }

        $parts = explode('\\', trim($namespace, '\\'));
        array_pop($parts);
        array_shift($parts);
        $namespace = implode('\\', $parts);

        return $rootNamespace . '\\' . $namespace . '\\' . $this->getTargetDirectory();
    }

    /**
     * Get the destination class path.
     *
     * @param string $name
     *
     * @return string
     */
    protected function getPath($name)
    {
        $parts = explode('\\', trim($name, '\\'));

        if (count($parts) > 3) {
            $dirPath = implode(
                '\\',
                [
                    $this->getTargetDirectory(),
                    implode('\\', array_splice($parts, 3))
                ]
            );
            $parts = array_splice($parts, 0, 2);
        } else {
            $dirPath = $this->getTargetDirectory() . '\\' . array_pop($parts);
            array_pop($parts);
        }

        $packageName = array_pop($parts);
        $providerName = $packageName . 'ServiceProvider';
        $providerClass = implode('\\', $parts) . '\\' . $packageName . '\\' . $providerName;

        if (!class_exists($providerClass)) {
            throw new RuntimeException('You should run composer dump-autoload');
        }

        $reflector = new \ReflectionClass($providerClass);
        $path = $reflector->getFileName();

        $dirPath = str_replace('\\', '/', $dirPath);
        $path = str_replace($providerName, $dirPath, $path);

        return $path;
    }
}
