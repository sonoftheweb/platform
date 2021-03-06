<?php

return [
    'title'       => 'Меню',
    'description' => 'Виберіть доступне меню',

    'not_found' => 'Немає доступних меню',
    'form'      => [
        'title'             => 'Назва',
        'title_description' => 'Про нас',
        'alt'               => 'Підпис',
        'alt_description'   => 'Історія компанії',
        'url'               => 'Адреса сайту',
        'url_description'   => 'Єдиний вказівник ресурсу (URL)',
        'display'           => [
            'name'      => 'Відображення',
            'variables' => [
                'no_auth' => 'Доступно всім',
                'auth'    => 'Тільки авторизованим користувачам',
            ],
        ],
        'class'             => 'Клас',
        'relations'         => [
            'name'      => 'Відносини між поточним документом і документом, на який веде посилання',
            'variables' => [
                'answer'     => 'Відповідь на питання',
                'chapter'    => 'Розділ або голова поточного документа',
                'co-worker'  => 'Посилання на сторінку колеги по роботі',
                'colleague'  => 'Посилання на сторінку колеги (не по роботі)',
                'contact'    => 'Посилання на сторінку з контактною інформацією',
                'details'    => 'Посилання на сторінку з подробицями',
                'edit'       => 'Версія документа, яку можна редагувати',
                'friend'     => 'Посилання на сторінку друга',
                'question'   => 'Питання',
                'archives'   => 'Посилання на архів сайту',
                'author'     => 'Посилання на сторінку про автора на тому ж домені',
                'bookmark'   => 'Постійне посилання на розділ або запис',
                'first'      => 'Посилання на першу сторінку',
                'help'       => 'Посилання на документ з довідкою',
                'index'      => 'Посилання на зміст',
                'last'       => 'Посилання на останню сторінку',
                'license'    => 'Посилання на сторінку з ліцензійною угодою або авторськими правами',
                'me'         => 'Посилання на сторінку автора на іншому домені',
                'next'       => 'Посилання на наступну сторінку або розділ',
                'nofollow'   => 'Не передавати по посиланню ТІЦ і PR.',
                'noreferrer' => 'Не передавати по посиланню HTTP-заголовки',
                'prefetch'   => 'Вказує, що треба заздалегідь кешувати вказаний ресурс',
                'prev'       => 'Посилання на попередню сторінку або розділ',
                'search'     => 'Посилання на пошук',
                'sidebar'    => 'Додати посилання у закладки браузера',
                'tag'        => 'Вказує, що мітка (тег) має відношення до поточного документа',
                'up'         => 'Посилання на батьківську сторінку',
            ],
        ],
        'target'            => [
            'name'      => 'Відкрити',
            'variables' => [
                'self'  => 'У поточному вікні',
                'blank' => 'У новому вікні',
            ],
        ],
        'control'           => [
            'remove' => 'Видалити',
            'reset'  => 'Скинути',
            'create' => 'Додати',
            'save'   => 'Зберегти',
        ],
    ],
];
