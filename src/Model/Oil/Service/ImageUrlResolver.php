<?php


namespace App\Model\Oil\Service;




class ImageUrlResolver
{
    private $cdnUrl='https://hb.bizmrg.com/auto.kz-static/oil/petro-canada/goods/thumbnails_340x400';
    private $thumbnailPart='thumbnail';
    private $detailPart='image';
    private $separator='_';
    private $imageType='jpg';

    public function thumbnailImageUrl($article):string
    {
        return $this->cdnUrl.'/'.$article.'.'.$this->imageType;
    }
    public function detailImageUrl($article):string
    {
        return $this->cdnUrl.'/'.$article.$this->separator.$this->detailPart.'.'.$this->imageType;
    }
}