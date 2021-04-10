<?php

namespace LaravelMigrationGenerator\GeneratorManagers;

abstract class BaseGeneratorManager
{
    public function createMissingDirectory($basePath)
    {
        if (! is_dir($basePath)) {
            mkdir($basePath, 077, true);
        }
    }
}
