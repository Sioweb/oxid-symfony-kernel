<?php

namespace OxidCommunity\SymfonyKernel;

use OxidCommunity\SymfonyKernel\Extension\Extension;
use OxidCommunity\SymfonyKernel\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle AS BaseBundle;
use OxidCommunity\SymfonyKernel\Bundle\BundleConfigurationInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder as BaseContainerBuilder;

/**
 * Configures the Contao Glossar bundle.
 *
 * @author Sascha Weidner <https://www.sioweb.de>
 */
class OxidKernelBundle extends BaseBundle implements BundleConfigurationInterface
{
    public function build(BaseContainerBuilder $container)
    {
        $this->container = $container;
    }
    
    /**
     * {@inheritdoc}
     */
    public function getContainerExtension()
    {
        return new Extension();
    }

    public function getBundleConfiguration($name, ContainerBuilder $container) : array
    {
        return $container->getExtensionConfigs();
    }
}
