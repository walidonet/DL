<?php

namespace DreamlifeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DreamlifeBundle:Default:index.html.twig');
    }
    public function getnature($i)
    {

        $neuds = $this->get('doctrine.orm.entity_manager')
            ->getRepository('DreamlifeBundle:DreamlifePartnerPartner')
            ->findBytreeParentId($i);
        $x=0;
        foreach ($neuds as $neut) {
            $x++;
        }
        return $x;
    }
    public function getmychield($i)
    {

        $neuds = $this->get('doctrine.orm.entity_manager')
            ->getRepository('DreamlifeBundle:DreamlifePartnerPartner')
            ->findBytreeParentId($i);
        return $neuds;
    }
    /**
     * @Route("/aa}", name="neud_aa")
     * @Method({"GET"})
     */
    public function getTreeByIdAction(Request $request)
    {
        $neuds = $this->get('doctrine.orm.entity_manager')
            ->getRepository('DreamlifeBundle:DreamlifePartnerPartner')
            ->findAll();
        $lcp = array();
        for ($c = 6600; $c < 6700; $c++) {
            var_dump($c);
            if ($this->getnature($neuds[$c]) == 0){
                $lcp[] = [
                    'idpartenaire' => $neuds[$c]->getUserUid()->getUid(),
                    'codeparent' => $neuds[$c]->getParentCode(),
                    'codedirect' => $neuds[$c]->getParentCode(),
                    'paqueid' => $neuds[$c]->getPackId(),
                    'active' => $neuds[$c]->isPlaced(),
                    //'pack' => $this->getmypack($this->getmlmbyid($comarray[$f]['rev']->getIdpartenaire())->getPaqueid())->getPlafond(),
                ];
        } elseif ($this->getnature($neuds[$c]) == 1){
               // var_dump('test');
                $lcp[] = [
                    'idpartenaire' => $neuds[$c]->getUserUid()->getUid(),
                    'codeparent' => $neuds[$c]->getParentCode(),
                    'codedirect' => $neuds[$c]->getParentCode(),
                    'paqueid' => $neuds[$c]->getPackId(),
                    'active' => $neuds[$c]->isPlaced(),
                    'codegauche' => $this->getmychield($neuds[$c]->getUserUid()->getUid()-1)[0]->getCode(),
                    //'pack' => $this->getmypack($this->getmlmbyid($comarray[$f]['rev']->getIdpartenaire())->getPaqueid())->getPlafond(),
                ];
    }
    elseif ($this->getnature($neuds[$c]) == 2){
        $lcp[] = [
            'idpartenaire' => $neuds[$c]->getUserUid()->getUid(),
            'codeparent' => $neuds[$c]->getParentCode(),
            'codedirect' => $neuds[$c]->getParentCode(),
            'paqueid' => $neuds[$c]->getPackId(),
            'active' => $neuds[$c]->isPlaced(),
            'codegauche' => $this->getmychield($neuds[$c]->getUserUid()->getUid()-1)[0]->getCode(),
            'codedroite' => $this->getmychield($neuds[$c]->getUserUid()->getUid()-1)[1]->getCode(),
        ];

    }
        }
        return new JsonResponse($lcp);
    }
}
