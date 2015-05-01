<?php
use Doctrine\Common\Persistence\ObjectManager;
use ZenSide\CoreBundle\DataFixtures\ORM\AbstractDataFixture;

class Users extends AbstractDataFixture
{
    private function param($param, $default){
        return $this->container->hasParameter($param) ? $this->container->getParameter($param) : $default;
    }

    public function doLoad(ObjectManager $manager)
    {
        $c = $this->container;

        // Create an admin user with parameter
        if ($c->hasParameter('admin.fixture') && $c->getParameter('admin.fixture')) {

            $login =  $this->param('admin.login', 'admin');
            $pass =  $this->param('admin.password', '123456');
            $email =  $this->param('admin.email', 'admin@admin.admin');

            $userManager = $this->container->get('fos_user.user_manager');

            $user = $userManager->createUser();
            $user->setUsername($login);
            $user->setEmail($email);
            $user->setPlainPassword($pass);
            $user->setEnabled(true);
            $user->setRoles(array("ROLE_SUPER_ADMIN"));
            $userManager->updateUser($user);

            $manager->flush();
        }

    }
    protected function getEnvironments(){
        return array('dev','prod');
    }
    public function getOrder(){
        return 2;
    }
}