<?php

namespace DreamlifeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EarnController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }
    public function EarnedUserAction()
    {
        $neuds = $this->get('doctrine.orm.entity_manager')
            ->getRepository('DreamlifeBundle:CoreUserUser')
            ->findAll();
        $earned= array();

        foreach ($neuds as $neut) {
            $neud = $this->get('doctrine.orm.entity_manager')
                ->getRepository('DreamlifeBundle:DreamlifePartnerPartner')
                ->findBytreeParentId($neut->getUid()-1);
            $x=0;
            foreach ($neud as $neus) {
                $x++;
            }
            if($x==2){
                array_push($earned,$neut);
            }
        }

        return $this->render('@Dreamlife/earnedpartner.html.twig', array('name' => $earned));
    }
}
