<?php

namespace App\Repository\Oil;

class OilRepository
{

    private $oilData;

    public function __construct()
    {
        $this->oilData[]=[
            'article'=>'MOSP13C16',
            'description'=>'Petro-Canada Supreme 10W-30 4 л',
            'viscosity'=>'10W-30',
            'oil_type'=>'ENGINE',
            'price'=>6760,
            'engine_type'=>'GAS',
            'kaspi_link'=>'https://kaspi.kz/shop/p/petro-canada-supreme-10w-30-4-l-23000291/?c=750000000',
            'register_link'=>'http://www.auto.kz/register/?DETAIL_NUM=',
            'volume'=>4,
            'class'=>'API SN',
        ];
        $this->oilData[]=[
            'article'=>'MOSP14C16',
            'description'=>'Petro-Canada Supreme 10W-40 4 л',
            'viscosity'=>'10W-40',
            'oil_type'=>'ENGINE',
            'price'=>6630,
            'engine_type'=>'GAS',
            'kaspi_link'=>'https://kaspi.kz/shop/p/petro-canada-supreme-10w-40-4-l-23000292/?c=750000000',
            'register_link'=>'http://www.auto.kz/register/?DETAIL_NUM=',
            'volume'=>4,
            'class'=>'API SN',
        ];
        $this->oilData[]=[
            'article'=>'MOSYN52C16',
            'description'=>'Petro-Canada Supreme Synthetic 5W-20 4 л',
            'viscosity'=>'5W-20',
            'oil_type'=>'ENGINE',
            'price'=>11690,
            'engine_type'=>'GAS',
            'kaspi_link'=>'https://kaspi.kz/shop/p/petro-canada-supreme-synthetic-5w-20-4-l-23000289/?c=750000000',
            'register_link'=>'http://www.auto.kz/register/?DETAIL_NUM=',
            'volume'=>4,
            'class'=>'API SN',
        ];
        $this->oilData[]=[
            'article'=>'MOSP14C12',
            'description'=>'Petro-Canada Supreme 10W-40 1 л',
            'viscosity'=>'10W-40',
            'oil_type'=>'ENGINE',
            'price'=>1950,
            'engine_type'=>'GAS',
            'kaspi_link'=>'https://kaspi.kz/shop/p/petro-canada-supreme-10w-40-1-l-23000284/',
            'register_link'=>'http://www.auto.kz/register/?DETAIL_NUM=',
            'volume'=>1,
            'class'=>'API SN',
        ];
        $this->oilData[]=[
            'article'=>'MOSP52C12',
            'description'=>'Petro-Canada Supreme 5W-20 1 л',
            'viscosity'=>'5W-20',
            'oil_type'=>'ENGINE',
            'price'=>1885,
            'engine_type'=>'GAS',
            'kaspi_link'=>'https://kaspi.kz/shop/p/petro-canada-supreme-5w-20-1-l-23000286/',
            'register_link'=>'http://www.auto.kz/register/?DETAIL_NUM=',
            'volume'=>1,
            'class'=>'API SN',
        ];
        $this->oilData[]=[
            'article'=>'MOSP25C12',
            'description'=>'Petro-Canada Supreme Synthetic 5W-30 4 л',
            'viscosity'=>'5W-30',
            'oil_type'=>'ENGINE',
            'price'=>9990,
            'engine_type'=>'GAS',
            'kaspi_link'=>'https://kaspi.kz/shop/p/petro-canada-supreme-synthetic-5w-30-4-l-23000290/',
            'register_link'=>'http://www.auto.kz/register/?DETAIL_NUM=',
            'volume'=>4,
            'class'=>'API SN',
        ];
        $this->oilData[]=[
            'article'=>'MOSYN52C12',
            'description'=>'Petro-Canada Supreme Synthetic 5W-20 1 л',
            'viscosity'=>'5W-20',
            'oil_type'=>'ENGINE',
            'price'=>3185,
            'engine_type'=>'GAS',
            'kaspi_link'=>'https://kaspi.kz/shop/p/petro-canada-supreme-synthetic-5w-20-1-l-23000281/?c=750000000',
            'register_link'=>'http://www.auto.kz/register/?DETAIL_NUM=',
            'volume'=>1,
            'class'=>'API SN',
        ];
        $this->oilData[]=[
            'article'=>'MOSYN53C12',
            'description'=>'Petro-Canada Supreme Synthetic 5W-30 1 л',
            'viscosity'=>'5W-30',
            'oil_type'=>'ENGINE',
            'price'=>2860,
            'engine_type'=>'GAS',
            'kaspi_link'=>'https://kaspi.kz/shop/p/petro-canada-supreme-synthetic-5w-30-1-l-23000282/',
            'register_link'=>'http://www.auto.kz/register/?DETAIL_NUM=',
            'volume'=>1,
            'class'=>'API SN',
        ];
        $this->oilData[]=[
            'article'=>'MOSP53C12',
            'description'=>'Petro-Canada Supreme 5W-30 1 л',
            'viscosity'=>'5W-30',
            'oil_type'=>'ENGINE',
            'price'=>1885,
            'engine_type'=>'GAS',
            'kaspi_link'=>'https://kaspi.kz/shop/p/petro-canada-supreme-5w-30-1-l-23000287/',
            'register_link'=>'http://www.auto.kz/register/?DETAIL_NUM=',
            'volume'=>1,
            'class'=>'API SN',
        ];
        $this->oilData[]=[
            'article'=>'MOSP25C16',
            'description'=>'Petro-Canada Supreme 20W-50 4 л',
            'viscosity'=>'20W-50',
            'oil_type'=>'ENGINE',
            'price'=>7930,
            'engine_type'=>'GAS',
            'kaspi_link'=>'https://kaspi.kz/shop/p/petro-canada-supreme-20w-50-4-l-23000293/',
            'register_link'=>'http://www.auto.kz/register/?DETAIL_NUM=',
            'volume'=>4,
            'class'=>'API SN',
        ];
        $this->oilData[]=[
            'article'=>'MOSYN03C12',
            'description'=>'Petro-Canada Supreme Synthetic 0W-30 1 л',
            'viscosity'=>'0W-30',
            'oil_type'=>'ENGINE',
            'price'=>2990,
            'engine_type'=>'GAS',
            'kaspi_link'=>'https://kaspi.kz/shop/p/petro-canada-supreme-synthetic-0w-30-1-l-23000280/',
            'register_link'=>'http://www.auto.kz/register/?DETAIL_NUM=',
            'volume'=>1,
            'class'=>'API SN',
        ];

        $this->oilData[]=[
            'article'=>'MOSP53C16',
            'description'=>'Petro-Canada Supreme 5W-30 4 л',
            'viscosity'=>'5W-30',
            'oil_type'=>'ENGINE',
            'price'=>6760,
            'engine_type'=>'GAS',
            'kaspi_link'=>'https://kaspi.kz/shop/p/petro-canada-supreme-5w-30-4-l-23000288/',
            'register_link'=>'http://www.auto.kz/register/?DETAIL_NUM=',
            'volume'=>4,
            'class'=>'API SN',
        ];
        $this->oilData[]=[
            'article'=>'MOSYN02C12',
            'description'=>'Petro-Canada Supreme Synthetic 0W-20 1 л',
            'viscosity'=>'0W-20',
            'oil_type'=>'ENGINE',
            'price'=>2990,
            'engine_type'=>'GAS',
            'kaspi_link'=>'https://kaspi.kz/shop/p/petro-canada-supreme-synthetic-0w-20-1-l-23000279/',
            'register_link'=>'http://www.auto.kz/register/?DETAIL_NUM=',
            'volume'=>1,
            'class'=>'API SN',
        ];
        $this->oilData[]=[
            'article'=>'MOSP13C12',
            'description'=>'Petro-Canada Supreme 10W-30 1 л',
            'viscosity'=>'10W-30',
            'oil_type'=>'ENGINE',
            'price'=>1885,
            'engine_type'=>'GAS',
            'kaspi_link'=>'https://kaspi.kz/shop/p/petro-canada-supreme-10w-30-1-l-23000283/',
            'register_link'=>'http://www.auto.kz/register/?DETAIL_NUM=',
            'volume'=>1,
            'class'=>'API SN',
        ];
        $this->oilData[]=[
            'article'=>'ATFD3MC12',
            'description'=>'PETRO-CANADA ATF D3M 1L',
            'viscosity'=>'D3M',
            'oil_type'=>'GEAR',
            'price'=>1885,
            'engine_type'=>'GAS',
            'kaspi_link'=>'',
            'register_link'=>'http://www.auto.kz/register/?DETAIL_NUM=',
            'volume'=>1,
            'class'=>'D3M',
        ];
        $this->oilData[]=[
            'article'=>'ATFD3MP20',
            'description'=>'PETRO-CANADA ATF D3M 20 L PAIL',
            'viscosity'=>'D3M',
            'oil_type'=>'GEAR',
            'price'=>30225,
            'engine_type'=>'GAS',
            'kaspi_link'=>'',
            'register_link'=>'http://www.auto.kz/register/?DETAIL_NUM=',
            'volume'=>20,
            'class'=>'D3M',
        ];

        $this->oilData[]=[
            'article'=>'ATFD3MDRM',
            'description'=>'PETRO-CANADA ATF D3M 205 L DRUM',
            'viscosity'=>'D3M',
            'oil_type'=>'GEAR',
            'price'=>286000,
            'engine_type'=>'GAS',
            'kaspi_link'=>'',
            'register_link'=>'http://www.auto.kz/register/?DETAIL_NUM=',
            'volume'=>205,
            'class'=>'D3M',
        ];

        $this->oilData[]=[
            'article'=>'DEX6C12',
            'description'=>'DEXRON VI ATF 1L',
            'viscosity'=>'ATF',
            'oil_type'=>'GEAR',
            'price'=>3380,
            'engine_type'=>'GAS',
            'kaspi_link'=>'',
            'register_link'=>'http://www.auto.kz/register/?DETAIL_NUM=',
            'volume'=>1,
            'class'=>'DEXTRON',
        ];
        $this->oilData[]=[
            'article'=>'DEX6C16',
            'description'=>'DEXRON VI ATF 4L',
            'viscosity'=>'ATF',
            'oil_type'=>'GEAR',
            'price'=>13000,
            'engine_type'=>'GAS',
            'kaspi_link'=>'',
            'register_link'=>'http://www.auto.kz/register/?DETAIL_NUM=',
            'volume'=>4,
            'class'=>'DEXTRON',
        ];
        $this->oilData[]=[
            'article'=>'DDMVATFC12',
            'description'=>'DURADRIVE MV SYNTHETIC ATF 1 L',
            'viscosity'=>'ATF',
            'oil_type'=>'GEAR',
            'price'=>2665,
            'engine_type'=>'GAS',
            'kaspi_link'=>'',
            'register_link'=>'http://www.auto.kz/register/?DETAIL_NUM=',
            'volume'=>1,
            'class'=>'DEXTRON',
        ];
        $this->oilData[]=[
            'article'=>'DDMVATFP20',
            'description'=>'DURADRIVE MV SYNTHETIC ATF 20 L',
            'viscosity'=>'ATF',
            'oil_type'=>'GEAR',
            'price'=>51610,
            'engine_type'=>'GAS',
            'kaspi_link'=>'',
            'register_link'=>'http://www.auto.kz/register/?DETAIL_NUM=',
            'volume'=>20,
            'class'=>'DEXTRON',
        ];
        $this->oilData[]=[
            'article'=>'DDMVATFDRM',
            'description'=>'DURADRIVE MV SYNTHETIC ATF 205 L',
            'viscosity'=>'ATF',
            'oil_type'=>'GEAR',
            'price'=>474500,
            'engine_type'=>'GAS',
            'kaspi_link'=>'',
            'register_link'=>'http://www.auto.kz/register/?DETAIL_NUM=',
            'volume'=>205,
            'class'=>'DEXTRON',
        ];
        $this->oilData[]=[
            'article'=>'TR89C12',
            'description'=>'TRAXON 80W-90 1L',
            'viscosity'=>'80W-90',
            'oil_type'=>'GEAR',
            'price'=>2500,
            'engine_type'=>'GAS',
            'kaspi_link'=>'',
            'register_link'=>'http://www.auto.kz/register/?DETAIL_NUM=',
            'volume'=>1,
            'class'=>'GEAR',
        ];
        $this->oilData[]=[
            'article'=>'TR89C16',
            'description'=>'TRAXON 80W-90 4L',
            'viscosity'=>'80W-90',
            'oil_type'=>'GEAR',
            'price'=>8600,
            'engine_type'=>'GAS',
            'kaspi_link'=>'',
            'register_link'=>'http://www.auto.kz/register/?DETAIL_NUM=',
            'volume'=>4,
            'class'=>'GEAR',
        ];
        $this->oilData[]=[
            'article'=>'TR89DRM',
            'description'=>'TRAXON 80W-90 205L',
            'viscosity'=>'80W-90',
            'oil_type'=>'GEAR',
            'price'=>364000,
            'engine_type'=>'GAS',
            'kaspi_link'=>'',
            'register_link'=>'http://www.auto.kz/register/?DETAIL_NUM=',
            'volume'=>205,
            'class'=>'GEAR',
        ];
        $this->oilData[]=[
            'article'=>'TR89P20',
            'description'=>'TRAXON 80W-90 20L',
            'viscosity'=>'80W-90',
            'oil_type'=>'GEAR',
            'price'=>43700,
            'engine_type'=>'GAS',
            'kaspi_link'=>'',
            'register_link'=>'http://www.auto.kz/register/?DETAIL_NUM=',
            'volume'=>20,
            'class'=>'GEAR',
        ];
        $this->oilData[]=[
            'article'=>'TRXL759C12',
            'description'=>'TRAXON 75W-90 1L',
            'viscosity'=>'75W-90',
            'oil_type'=>'GEAR',
            'price'=>3500,
            'engine_type'=>'GAS',
            'kaspi_link'=>'',
            'register_link'=>'http://www.auto.kz/register/?DETAIL_NUM=',
            'volume'=>1,
            'class'=>'GEAR',
        ];
        $this->oilData[]=[
            'article'=>'TRXL759C16',
            'description'=>'TRAXON 75W-90 4L',
            'viscosity'=>'75W-90',
            'oil_type'=>'GEAR',
            'price'=>13000,
            'engine_type'=>'GAS',
            'kaspi_link'=>'',
            'register_link'=>'http://www.auto.kz/register/?DETAIL_NUM=',
            'volume'=>4,
            'class'=>'GEAR',
        ];
        $this->oilData[]=[
            'article'=>'TRXL759DRM',
            'description'=>'TRAXON 75W-90 205L',
            'viscosity'=>'75W-90',
            'oil_type'=>'GEAR',
            'price'=>497000,
            'engine_type'=>'GAS',
            'kaspi_link'=>'',
            'register_link'=>'http://www.auto.kz/register/?DETAIL_NUM=',
            'volume'=>205,
            'class'=>'GEAR',
        ];
        $this->oilData[]=[
            'article'=>'TRXL759P20',
            'description'=>'TRAXON 75W-90 20L',
            'viscosity'=>'75W-90',
            'oil_type'=>'GEAR',
            'price'=>52000,
            'engine_type'=>'GAS',
            'kaspi_link'=>'',
            'register_link'=>'http://www.auto.kz/register/?DETAIL_NUM=',
            'volume'=>20,
            'class'=>'GEAR',
        ];
    }

    public function findAll():array
    {
        return $this->oilData;
    }

}