<?php

namespace ZenSide\QQQBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;

class ZenSideAdmin extends Admin {

    public function getContainer(){
        return $this->getConfigurationPool()->getContainer();
    }
    public function getService($service){
        return $this->getContainer()->get($service);
    }
    public function getDoctrine(){
        return $this->getService('doctrine.orm.entity_manager');
    }
    public function getRepository($entity){
        return $this->getDoctrine()->getRepository($entity);
    }
}