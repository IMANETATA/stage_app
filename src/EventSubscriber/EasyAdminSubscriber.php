<?php

namespace App\EventSubscriber;
use App\Entity\User;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\EventDispatcher\GenericEvent;
use EasyCorp\Bundle\EasyAdminBundle\Event\EasyAdminEvents;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeEntityPersistedEvent;

class EasyAdminSubscriber implements EventSubscriberInterface {

private $security;
    public function __construct (Security $security)
    {
        $this->security = $security;
    }   
     public static function getSubscribedEvents() {
        
        return array(
            BeforeEntityPersistedEvent::class => ['preInsert'],

        );
    }


    public function preInsert(BeforeEntityPersistedEvent $event) {


        $entity = $event->getEntityInstance();
   
        if (($entity instanceof User)) {
            $entity->setLocale('fr_FR');
          
        }
        else
        {
         
  /*      $user = $this->security->getUser();
   	if( !$entity->getCreatedAt())
        {
	     $entity->setCreatedBy($user);
             $entity->setCreatedAt(new \DateTime());
	}
	$entity->setEditedBy($user);
        $entity->setEditedAt(new \DateTime());*/
        }
        
      
       
    }

 
}