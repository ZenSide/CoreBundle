<?php
/**
 * Created by PhpStorm.
 * User: ZenSide
 * Date: 04/02/15
 * Time: 11:14
 */

namespace ZenSide\CoreBundle\Admin;

use Sonata\UserBundle\Admin\Entity\UserAdmin as BaseAdmin;
use Sonata\AdminBundle\Form\FormMapper;

class UserAdmin extends BaseAdmin
{
    /**
     * {@inheritdoc}
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('General')
                ->add('username')
                ->add('plainPassword', 'text', array(
                    'required' => (!$this->getSubject() || is_null($this->getSubject()->getId()))))
                ->add('firstname')
                ->add('lastname')
                ->add('email')
                ->add('phone')
            ->end();
    }

}