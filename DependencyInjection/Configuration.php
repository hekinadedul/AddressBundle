<?php

namespace Padam87\AddressBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $root = $treeBuilder
            ->root('padam87_addressbundle', 'array')
            ->children()
            ->booleanNode('enable_short_alias')->defaultTrue()->end()
        ;

//        $this->addHandlersSection($root);
//        $this->addSerializersSection($root);
//        $this->addMetadataSection($root);
//        $this->addVisitorsSection($root);
        return $treeBuilder;
    }
}
