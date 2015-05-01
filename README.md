ZenSide CoreBundle
==============

A pre-configured Symfony2 bundle to start project with usefull bundles pre-configured.

- Sonata admin
- FOS Rest
- FOS User

Installation with composer
------------
require "zenside/core-bundle": "dev-master"

Symfony 2 configuration
------------
In AppKernel.php, add the following bundles :

    // symfony
    new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
    new Symfony\Bundle\SecurityBundle\SecurityBundle(),
    new Symfony\Bundle\TwigBundle\TwigBundle(),
    new Symfony\Bundle\MonologBundle\MonologBundle(),
    new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
    new Symfony\Bundle\AsseticBundle\AsseticBundle(),

    // doctrine
    new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
    new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
    new Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle(),

    // user
    new FOS\UserBundle\FOSUserBundle(),
    new Sonata\UserBundle\SonataUserBundle('FOSUserBundle'),

    // admin
    new Knp\Bundle\MenuBundle\KnpMenuBundle(),
    new Sonata\CoreBundle\SonataCoreBundle(),
    new Sonata\BlockBundle\SonataBlockBundle(),
    new Sonata\AdminBundle\SonataAdminBundle(),
    new Sonata\DoctrineORMAdminBundle\SonataDoctrineORMAdminBundle(),
    new Sonata\EasyExtendsBundle\SonataEasyExtendsBundle(),
    new Stnw\DatePickerBundle\StnwDatePickerBundle(),

    // rest
    new JMS\SerializerBundle\JMSSerializerBundle($this),
    new FOS\RestBundle\FOSRestBundle(),

    // js routing
    new FOS\JsRoutingBundle\FOSJsRoutingBundle(),

    new ZenSide\CoreBundle\ZenSideCoreBundle(),

In your config.yml, reference config of CoreBundle

    imports:
        - { resource: @ZenSideCoreBundle/Resources/config/config.yml }
        
In your routing.yml, reference routing of CoreBundle

    core_routing:
        resource: "@ZenSideCoreBundle/Resources/config/routing.yml"

Fresh new Symfony2 project
-------------------
To start a new project using CoreBundle pre-configuration, check the ZenSide/SymfonyStarter project
