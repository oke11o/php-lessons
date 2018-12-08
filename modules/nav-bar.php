<nav class="navBar">  
  <?php include "nav-bar-menu.php"; ?>

  <a href="<?php echo($navBarMenuArray['main']['href']) ?>" class="navBar__logo">
    <div></div>
    <span>site.ru</span>
  </a>

  <ul class="navBar__menu navBar__menu_margin">
    <?php
    foreach ($navBarMenuArray as $navBarItemKey => $navBarItem) {
      switch (array_key_exists('subMenu', $navBarItem)) {
        case true: 
          $isSubMenuSet = ' sub-menu';
          break;
        default: $isSubMenuSet = '';
      }
      
      if ($page == $navBarItemKey || (!isset($page) && $navBarItemKey == 'main')) {
        $navBarItemClass = 'navBar__item navBar__item_active';
      } else {
        $navBarItemClass = 'navBar__item';
      }

      echo('<li class="navBar__menuItem'.$isSubMenuSet.'">');
      echo('<a class="'.$navBarItemClass.'" href="'.$navBarItem['href'].'">'.$navBarItem['name'].'</a>');

      if (isset($navBarItem['subMenu'])) {
        echo('<div class="subMenu__wrap">
        <ul class="subMenu subMenu_hidden">');

        foreach ($navBarItem['subMenu'] as $navBarSubItem) {
          echo('<li class="subMenu__item">');
          echo('<a href="'.$navBarSubItem['href'].'" class="subMenu__itemHref">'.$navBarSubItem['name'].'</a>');
          echo('</li>');
        }

        echo('</ul></div>');
      }

      echo('</li>');
    }
    ?>
  </ul>
</nav>