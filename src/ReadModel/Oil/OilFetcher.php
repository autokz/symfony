<?php

namespace App\ReadModel\Oil;

use App\Model\Oil\DTO\OilDto;
use App\Model\Oil\Entity\Oil\Oil;
use App\Repository\Oil\OilRepository;

class OilFetcher
{
    private $oilData;

    public function __construct(OilRepository $oilRepository)
    {
        $this->oilData=$oilRepository->findAll();
    }

    public function findByViscosity(string $viscosity):?array
    {
        $oilViscosity=[];
        foreach ($this->oilData as $oilData){
            if ($oilData['viscosity']===$viscosity){

                $oilViscosity[]=new Oil($this->convertOilDataToOilDto($oilData));
            }

        }
        return $oilViscosity;
    }

    public function findByEngineType(string $engineType):?array
    {
        $oilEngineType=[];
        foreach ($this->oilData as $oilData){
            if ($oilData['engine_type']===$engineType){
                $oilEngineType[]=new Oil($this->convertOilDataToOilDto($oilData));
            }

        }
        return $oilEngineType;
    }
    public function findByOilType(string $oilType):?array
    {
        $oilsType=[];
        foreach ($this->oilData as $oilData){
            if ($oilData['oil_type']===$oilType){
                $oilsType[]=new Oil($this->convertOilDataToOilDto($oilData));
            }

        }
        return $oilsType;
    }
    public function get(string $article):?Oil
    {
        foreach ($this->oilData as $oilData){
            if ($oilData['article']===$article){
                return new Oil($this->convertOilDataToOilDto($oilData));
            }

        }
        return null;
    }
    private function convertOilDataToOilDto(array $oilData):OilDto
    {
        $oilDto=new OilDto();
        $oilDto->article=$oilData['article'];
        $oilDto->volume=$oilData['volume'];
        $oilDto->description=$oilData['description'];
        $oilDto->engineType=$oilData['engine_type'];
        $oilDto->oilType=$oilData['oil_type'];
        $oilDto->registerLink=$oilData['register_link'];
        $oilDto->kaspiLink=$oilData['kaspi_link'];
        $oilDto->price=$oilData['price'];
        $oilDto->viscosity=$oilData['viscosity'];
        return $oilDto;

    }

}