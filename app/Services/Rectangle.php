<?php

namespace App\Services;

/**
 * Сервис для вычислений
 */
class Rectangle
{
    /**
     * Вычисление площади прямоугольника
     *
     * @param integer $number число
     *
     * @return integer площадь прямоугольника
     */
    public function area(int $number1, $number2)
    {
        $area = 0;
        $area = $number1 * $number2;
        return $area;
    }
}
