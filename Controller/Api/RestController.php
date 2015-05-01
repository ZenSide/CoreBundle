<?php
/**
 * Created by PhpStorm.
 * User: ZenSide
 * Date: 11/03/15
 * Time: 15:16
 */

namespace ZenSide\CoreBundle\Controller\Api;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Routing\ClassResourceInterface;

abstract class RestController extends FOSRestController implements ClassResourceInterface {

    protected function getManager(){
        return $this->getDoctrine()->getManager();
    }
    protected function getRepository($name){
        return $this->getManager()->getRepository($name);
    }
}