<?php

return [
    'title' => "Процедура analyze-require",
    'description' => [
        '1' =>
        "Если бы мы не догадались, что конструкцию require можно реализовать как обычную процедуру с помощью amb, так что пользователь сам может определить ее в своей недетерминистской программе, то нам пришлось бы задать эту конструкцию в виде особой формы. Потребовались бы синтаксические процедуры",
        '2' =>
        "новая ветвь разбора в analyze:",
        '3' =>
        "а также процедура analyze-require, которая обрабатывает выражения require. Допишите следующее определение analyze-require:"
    ]
];
