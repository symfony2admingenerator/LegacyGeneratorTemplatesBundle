<?php

namespace Admingenerator\LegacyGeneratorTemplatesBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AdmingeneratorLegacyGeneratorTemplatesBundle extends Bundle
{
    /**
     * @return \Admingenerator\GeneratorBundle\DependencyInjection\AdmingeneratorGeneratorExtension
     */
    public function getContainerExtension()
    {
        $this->extension = null;
        
        return $this->extension;
    }
}
