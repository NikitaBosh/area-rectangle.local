<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Площадь прямоугольника</title>
</head>

<body>
    <!-- Вывод результата -->
    <p>
        <b>Result</b>: {{ $area ?? '' }}
    </p>
    <!-- Форма для передачи данных -->
    <form action="{{ route('area') }}" method="post">
        @csrf
        <label for="number1">Ширина</label>
        <input type="text" name="number1" id="number1" value="{{ $number1 ?? old('number1') }}">
        <label for="number2">Длина</label>
        <input type="text" name="number2" id="number2" value="{{ $number2 ?? old('number2') }}">
        <button type="submit">Вычислить</button>
    </form>
    <!-- Ошибки  -->
    @if ($errors->any())
    <h4>Ошибки:</h4>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif
</body>

</html>
