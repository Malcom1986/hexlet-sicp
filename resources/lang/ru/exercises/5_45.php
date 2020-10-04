<?php

return [
    'title' => "Качество компилятора",
    'description' => [
        '1' =>
        "Сравнивая статистику операций со стеком, порождаемую скомпилированным кодом, с такой же статистикой для интерпретатора, ведущего то же самое вычисление, можно определить, насколько компилятор оптимизирует работу со стеком, как по скорости (уменьшая общее число стековых операций), так и по памяти (уменьшая максимальную глубину стека). " .
        "Сравнение той же статистики с результатами работы специализированной машины, предназначенной для того же вычисления, дает некоторое представление о качестве компилятора.",
        '2' =>
        "а. В упражнении ",
        '3' =>
        " от Вас требовалось определить как функцию от n число сохранений и максимальную глубину стека, которые требуются вычислителю для того, чтобы получить n! с помощью указанной факториальной процедуры. В упражнении ",
        '4' =>
        "Вас просили провести те же измерения для специализированной факториальной машины, показанной на рисунке 5.11. Проведите теперь тот же анализ для скомпилированной процедуры factorial.",
        '5' =>
        "Возьмем отношение числа сохранений в скомпилированной версии к числу сохранений в интерпретируемой версии и проделаем то же для максимальной глубины стека. " .
        "Поскольку число операций и глубина стека при вычислении n! линейно зависят от n, эти отношения должны приближаться к константам при росте n. " .
        "Чему равны эти константы? Найдите также отношения показателей использования стека в специализированной машине к показателям интерпретируемой версии.",
        '6' =>
        "Сравните отношения специализированной версии к интерпретируемой и отношения скомпилированной версии к интерпретируемой. " .
        "Вы должны увидеть, что специализированная машина работает намного лучше скомпилированного кода, поскольку настроенный вручную код контроллера должен быть намного лучше, чем результаты работы нашего рудиментарного компилятора общего назначения.",
        '7' =>
        "б. Можете ли Вы предложить изменения в компиляторе, помогающие ему порождать код, который приблизится к показателям версии, построенной вручную?",
        '8' =>
        "Рис. 5.11. Рекурсивная факториальная машина.",
    ],
];
