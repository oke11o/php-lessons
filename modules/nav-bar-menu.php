<?php
$navBarMenuArray = [
  'main' => [
    'name' => 'главная',
    'href' => '/'
  ],
  'gallery' => [
    'name' => 'галлерея',
    'href' => '?page=gallery'
  ],
  'contacts' => [
    'name' => 'контакты',
    'href' => '#cont',
    'subMenu' => [
      [
        'name' => 'о&nbsp;нас',
        'href' => '#',
      ],
      [
        'name' => 'обратная&nbsp;связь',
        'href' => '#',
      ]
    ]
  ],
  'sign' => [
    'name' => 'войти',
    'href' => '#sign',
    'subMenu' => [
      [
        'name' => 'вход',
        'href' => '#',
      ],
      [
        'name' => 'регистрация',
        'href' => '#',
      ]
    ]
  ]
];