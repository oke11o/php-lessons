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
      ],
      [
        'name' => 'Upload&nbsp;files',
        'href' => '?page=upload',
      ]
    ]
  ],
  'contacts' => [
    'name' => 'контакты',
    'href' => '?page=contacts',
    'subMenu' => [
      [
        'name' => 'о&nbsp;нас',
        'href' => '?page=contacts',
      ],
      [
        'name' => 'обратная&nbsp;связь',
        'href' => '?page=feedback',
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