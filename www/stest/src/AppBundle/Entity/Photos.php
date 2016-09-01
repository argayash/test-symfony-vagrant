<?php

namespace AppBundle\Entity;

/**
 * Photos
 */
class Photos
{
    /**
     * @var integer
     */
    private $goodsId;

    /**
     * @var string
     */
    private $basename;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set goodsId
     *
     * @param integer $goodsId
     *
     * @return Photos
     */
    public function setGoodsId($goodsId)
    {
        $this->goodsId = $goodsId;

        return $this;
    }

    /**
     * Get goodsId
     *
     * @return integer
     */
    public function getGoodsId()
    {
        return $this->goodsId;
    }

    /**
     * Set basename
     *
     * @param string $basename
     *
     * @return Photos
     */
    public function setBasename($basename)
    {
        $this->basename = $basename;

        return $this;
    }

    /**
     * Get basename
     *
     * @return string
     */
    public function getBasename()
    {
        return $this->basename;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @var \AppBundle\Entity\Goods
     */
    private $goods;


    /**
     * Set goods
     *
     * @param \AppBundle\Entity\Goods $goods
     *
     * @return Photos
     */
    public function setGoods(\AppBundle\Entity\Goods $goods = null)
    {
        $this->goods = $goods;

        return $this;
    }

    /**
     * Get goods
     *
     * @return \AppBundle\Entity\Goods
     */
    public function getGoods()
    {
        return $this->goods;
    }
}
