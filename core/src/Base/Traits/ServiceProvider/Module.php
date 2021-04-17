<?php

namespace Core\Base\Traits\ServiceProvider;

trait Module
{
    /**
     * register the service provider for the module
     *
     * @param string $excluded_directory
     * @param string $root_namespace
     */
    private function registerModules($excluded_directory = 'Base', $root_namespace = 'Core')
    {
        foreach (glob('./core/src/*/ModuleServiceProvider.php') as $file) {
            if (!preg_match("/src\/{$excluded_directory}/i", $file)) {
                $namespace = str_replace('/', '\\', str_replace('.php', '', $file));
                $namespace = explode('src\\', $namespace)[1];
                $this->app->register($root_namespace . '\\' . $namespace);
            }
        }
    }
}