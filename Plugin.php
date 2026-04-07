<?php namespace Pensoft\Icp;

use Pensoft\Icp\Components\InternalRepository;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function boot(): void {}

    public function registerComponents(): array
    {
      return [
        InternalRepository::class => 'internalrepository'
      ];
    }
}
