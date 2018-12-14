<?php
$navBarMenuArray = [
  'main' => [
    'name' => 'главная',
    'href' => '?page=main'
  ],

  'gallery' => [
    'name' => 'галлерея',
    'href' => '?page=gallery'
  ],

  'contacts' => [
    'name' => 'контакты',
    'href' => '?page=contacts',
    'subMenu' => [
      [
        'name' => 'обратная&nbsp;связь',
        'href' => '?page=feedback',
      ]
    ]
  ]
];

if (!isset($_SESSION['user_id'])) {
  unset($navBarMenuArray['gallery']['admin']);
  unset($navBarMenuArray['profile']);

  $navBarMenuArray['login'] = [
    'name' => 'войти',
    'href' => '?page=login'
  ];
} else {
  unset($navBarMenuArray['login']);

  if ($_SESSION['user_privileges'] != 'NONE') {
    $navBarMenuArray['gallery']['admin'] = [
      [
        'name' => 'Upload&nbsp;files',
        'href' => '?page=upload',
      ]
    ];
  }
  
  $navBarMenuArray['profile'] = [
    'name' => 'Профиль',
    'href' => '?page=profile',
    'subMenu' => [
      [
        'name' => 'выход',
        'href' => '?page=logout&redirect='.$page,
      ]
    ]
  ];

  if ($page == 'product') {
    $navBarMenuArray['profile']['subMenu'][0]['href'] = '?page=logout&redirect=product&product_id='.$_GET['product_id'];
  }
}