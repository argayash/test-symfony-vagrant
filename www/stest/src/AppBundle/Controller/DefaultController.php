<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

    public function indexAction(Request $request)
    {
        return $this->render('default/index.html.twig');
    }

    /**
     * Implement function get goods with order [2,3,1]
     * SQL: SELECT G.* FROM `goods` G
     * INNER JOIN prices P ON P.`goods_id` = G.`id`
     * WHERE P.`price_type_id` = 1 order by FIELD(G.`id`, 2,3,1)
     *
     */
    private function _getGoods231()
    {
        $em    = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT G
    FROM AppBundle:Goods G
    ORDER BY FIELD(G.id, 2, 3, 1)'
        );

        return $query->getResult();
    }

    /**
     * Implements function get goods with photos
     * SELECT G.`title`, PR.`price`, GROUP_CONCAT(DISTINCT PH.`basename` SEPARATOR ';') as `photos` FROM `goods` G
     * LEFT JOIN `prices` PR ON PR.goods_id = G.id
     * LEFT JOIN `photos` PH ON PH.goods_id = G.id
     * WHERE PR.`price_type_id` = 1 GROUP BY G.`id
     *
     * @return mixed
     */
    private function _getGoodsWithPhotos()
    {
        $em    = $this->getDoctrine()->getManager();
        $query = $em->createQuery("
        SELECT G.title, PR.price, GROUP_CONCAT(DISTINCT PH.basename SEPARATOR '; ') as photos FROM AppBundle:Goods G 
INNER JOIN AppBundle:Prices PR WITH PR.goodsId = G.id
LEFT JOIN AppBundle:Photos PH WITH PH.goodsId = G.id
WHERE PR.priceTypeId = 1 GROUP BY G.id
        ");

        return $query->getResult();
    }

    /**
     * /listview
     *
     * @return mixed
     */
    public function goods231Action()
    {
        return $this->render('default/listing.html.twig', [
            'goods' => $this->_getGoods231()
        ]);
    }

    /**
     * /tableview
     *
     * @return mixed
     */
    public function tableAction()
    {
        return $this->render('default/table.html.twig', [
            'goods' => $this->_getGoodsWithPhotos()
        ]);
    }
}
