<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'cache.app' shared service.

$this->services['cache.app'] = $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('zX9-jY+h6+', 0, ($this->targetDirs[0].'/pools'));

$instance->setLogger(($this->privates['logger'] ?? $this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger()));

return $instance;
