<?php

namespace App\Http\Controllers;

use Rectangle;
use App\Http\Requests\AreaRequest;

/**
 * Контроллер для вычисления
 */
class RectangleController extends Controller
{
    /**
     * Загрузка формы
     *
     * @return View представление
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Вычисление площади паралелограмма
     *
     * @param AreaRequest $request получение данных из формы
     *
     * @return View представление
     */
    public function area(AreaRequest $request)
    {
        // получение данных
        $number1 = $request->number1;
        $number2 = $request->number2;

        // вычисление площади
        $area = Rectangle::area($number1, $number2);

        // передача данных представлению
        return view('index', [
            'number1' => $number1,
            'number2' => $number2,
            'area' => $area,
        ]);
    }
}
