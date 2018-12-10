<?php
$navBarMenuArray = [
  'main' => [
    'name' => 'главная',
    'href' => '?page=main'
  ],
  'gallery' => [
    'name' => 'галлерея',
    'href' => '?page=gal1',
    'subMenu' => [
      [
        'name' => 'House&nbsp;type&nbsp;1',
        'href' => '?page=gal1',
      ],
      [
        'name' => 'House&nbsp;type&nbsp;2',
        'href' => '?page=gal2',
      ]
    ]
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