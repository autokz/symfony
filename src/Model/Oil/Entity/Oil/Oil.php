<?php
namespace App\Model\Oil\Entity\Oil;

use App\Model\Oil\DTO\OilDto;
use App\Model\Oil\Service\ImageUrlResolver;
use App\Model\Oil\Service\PropertyConverter;

class Oil
{

    private $article;
    private $viscosity;
    private $oilType;

    /**
     * @return mixed
     */
    public function getOilType()
    {
        return $this->oilType;
    }
    private $price;
    private $kaspiLink;
    private $registerLink;
    private $engineType;
    private $description;

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * @return mixed
     */
    public function getClass()
    {
        return $this->class;
    }
    private $volume;
    private $class;

    private $nameConverter;
    private $imageUrlResolver;

    public function __construct(OilDto $oilDto)
    {
        $this->article=$oilDto->article;
        $this->viscosity=$oilDto->viscosity;
        $this->oilType=$oilDto->oilType;
        $this->price=$oilDto->price;
        $this->kaspiLink=$oilDto->kaspiLink;
        $this->registerLink=$oilDto->registerLink;
        $this->engineType=$oilDto->engineType;
        $this->description=$oilDto->description;
        $this->volume=$oilDto->volume;
        $this->class=$oilDto->class;
        $this->nameConverter=new PropertyConverter();
        $this->imageUrlResolver=new ImageUrlResolver();
    }

    /**
     * @return string
     */
    public function getEngineType()
    {
        return $this->nameConverter->convertEngineTypeToRus($this->engineType);
    }


    /**
     * @return string
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * @return string
     */
    public function getViscosity()
    {
        return $this->viscosity;
    }

    /**
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return string
     */
    public function getPayLink()
    {
        return $this->payLink;
    }

    /**
     * @return string
     */
    public function getKaspiLink()
    {
        return $this->kaspiLink;
    }

    /**
     * @return string
     */
    public function getRegisterLink()
    {
        return $this->registerLink;
    }

    public function getDetailImageUrl()
    {
        return $this->imageUrlResolver->detailImageUrl($this->article);
    }

    public function getThumbnailImageUrl()
    {
        return $this->imageUrlResolver->thumbnailImageUrl($this->article);
    }




}