<?php

namespace JorisRos\BoilerPlateBundle;

use JorisRos\BoilerPlateBundle\DependencyInjection\BoilerPlateBundleExtension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class BoilerPlateBundle extends Bundle
{
    public function getContainerExtension(): ?ExtensionInterface
    {
        if (null === $this->extension) {
            return new BoilerPlateBundleExtension();
        }

        return $this->extension;
    }
}