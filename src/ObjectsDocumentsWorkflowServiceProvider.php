<?php

namespace Waspmax1\ObjectsDocumentsWorkflow;

use Illuminate\Support\ServiceProvider;

class ObjectsDocumentsWorkflowServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/objectsDocumentsWorkflow.php' => config_path('objectsDocumentsWorkflow.php'),
        ]);

        $this->loadRoutesFrom(__DIR__.'/routes.php');

        $this->loadMigrationsFrom(__DIR__.'/migrations');

        $this->loadViewsFrom(__DIR__.'/views', 'ObjectsDocumentsWorkflow');

        $this->publishes([
            __DIR__.'/views' => resource_path('views/waspmax1/objectsDocumentsWorkflow'),
        ]);
    }
}
