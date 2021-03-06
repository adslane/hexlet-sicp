<?php

return [
    'email' => 'Некорректный адрес электронной почты',
    'custom' => [
        'email' => [
            'required' => 'Введите адрес электронной почты',
            'max' => 'Email не может быть длиннее :max символов'
        ],
        'password' => [
            'required' => 'Введите пароль',
            'min' => 'Длина пароля должна быть не менее :min символов',
            'confirmed' => 'Пароль и подтверждение не совпадают'
        ],
        'password_confirmation' => [
            'required' => 'Введите подтверждение пароля',
            'same' => 'Пароль и подтверждение не совпадают'
        ],
        'name' => [
            'required' => 'Введите имя',
            'max' => 'Имя не может быть длиннее :max символов'
        ],
    ],
];
