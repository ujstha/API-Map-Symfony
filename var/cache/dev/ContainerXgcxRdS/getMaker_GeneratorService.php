<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'maker.generator' shared service.

return $this->privates['maker.generator'] = new \Symfony\Bundle\MakerBundle\Generator(new \Symfony\Bundle\MakerBundle\FileManager(($this->services['filesystem'] ?? $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem()), 'C:\\my_project'));
