<?php

return [
    'title' => 'Реализация внутренних определений',
    'description' => [
        '1' => "Бен Битобор, Лиза П. Хакер и Ева Лу Атор спорят о том, каким должен быть результат выражения",
        '2' => "Бен говорит, что следует действовать согласно последовательному правилу для define: b равно " .
        "11, затем a определяется как 5, так что общий результат равен 16. Лиза возражает, что взаимная " .
        "рекурсия требует правила одновременной сферы действия для внутренних определений и нет причин " .
        "рассматривать имена процедур отдельно от прочих имен. То есть она выступает за механизм, " .
        "реализованный в упражнении 4.16. При этом a оказывается не определено в момент, когда вычисляется " .
        "b. Следовательно, по мнению Лизы, процедура должна выдавать ошибку. Ева не согласна с обоими. Она " .
        "говорит, что если определения вправду должны считаться одновременными, то 5 как значение a должно " .
        "использоваться при вычислении b. Следовательно, по мнению Евы, a должно равняться 5, b должно быть " .
        "15, а общий результат 20. Какую из этих точек зрения Вы поддерживаете (если у Вас нет своей " .
        "четвертой)? Можете ли Вы придумать способ реализации внутренних определений, который бы работал " .
        "так, как предлагает Ева?"
    ]
];
