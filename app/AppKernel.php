<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new ItoSoftware\Components\AdminBundle\ItoAdminBundle(),
            new ItoSoftware\Components\ModelBundle\ItoModelBundle(),
            new Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle(),
            //BUNDLES DE SONATA PARA ADMIN GENERATOR          
            new Sonata\BlockBundle\SonataBlockBundle(),
            new Sonata\AdminBundle\SonataAdminBundle(),
            new Sonata\DoctrineORMAdminBundle\SonataDoctrineORMAdminBundle(),
            new Knp\Bundle\PaginatorBundle\KnpPaginatorBundle(),
            //BUNDLES PARA GESTIONAR USUARIOS
            new FOS\UserBundle\FOSUserBundle(),
            new Sonata\CoreBundle\SonataCoreBundle(),
            new Sonata\EasyExtendsBundle\SonataEasyExtendsBundle(),
            new Sonata\UserBundle\SonataUserBundle('FOSUserBundle'),
            new ItoSoftware\Components\UserBundle\ItoUserBundle(),
            new ItoSoftware\Front\FrontendBundle\FrontFrontendBundle(),
            new HWI\Bundle\OAuthBundle\HWIOAuthBundle(),
            new ItoSoftware\Api\ApiBundle\ItoApiBundle(),
            new Lexik\Bundle\FormFilterBundle\LexikFormFilterBundle(),                                                                                                                                                                                                          
            new Knp\Bundle\MenuBundle\KnpMenuBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
}
