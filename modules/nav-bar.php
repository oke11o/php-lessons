<nav class="navBar">  
  <?php include "nav-bar-menu.php"; ?>

  <a href="<?php echo($navBarMenuArray['main']['href']) ?>" class="navBar__logo">
    <div></div>
    <span>site.ru</span>
  </a>

  <ul class="navBar__menu navBar__menu_margin">
    <?php
    foreach ($navBarMenuArray as $navBarItemKey => $navBarItem):
      switch (array_key_exists('subMenu', $navBarItem)) {
        case true: 
          $isSubMenuSet = ' sub-menu';
          break;
        default: $isSubMenuSet = '';
      }
      
      if ($page == $navBarItemKey || (!isset($page) && $navBarItemKey == 'main')) {
        $navBarItemClass = 'navBar__item navBar__item_active';
      } elseif (($page == 'gal_one' && $navBarItemKey == 'gallery') || ($page == 'gal_two' && $navBarItemKey == 'gallery')) {
        $navBarItemClass = 'navBar__item navBar__item_active';
      } else {
        $navBarItemClass = 'navBar__item';
      }
      ?>

      <li class="navBar__menuItem<?= $isSubMenuSet; ?>">
      <a class="<?= $navBarItemClass; ?>" href="<?= $navBarItem['href']; ?>"><?= $navBarItem['name']; ?></a>
      
      <?php if (isset($navBarItem['subMenu'])): ?>

        <div class="subMenu__wrap">
        <ul class="subMenu subMenu_hidden">

        <?php foreach ($navBarItem['subMenu'] as $navBarSubItem): ?>

          <li class="subMenu__item">
            <a href="<?= $navBarSubItem['href']; ?>" class="subMenu__itemHref"><?= $navBarSubItem['name']; ?></a>
          </li>
          
        <?php endforeach; ?>

        </ul></div>
        
      <?php endif; ?>

      </li>

    <?php endforeach; ?>
  </ul>
</nav>