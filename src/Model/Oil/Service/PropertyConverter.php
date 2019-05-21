<?php


namespace App\Model\Oil\Service;


class PropertyConverter
{
    public function convertEngineTypeToRus(string $engineType)
    {
        if ($engineType==='gasoline'){
            return 'Бензин';
        }
        if ($engineType==='diesel'){
            return 'Дизель';
        }

        return 'Нет данных';

    }

}