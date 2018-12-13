<nav class="navBar">
  <a href="<?php echo($navBarMenuArray['main']['href']) ?>" class="navBar__logo">
    <div></div>
    <span>site.ru</span>
  </a>

  <ul class="navBar__menu navBar__menu_margin">
    <?php
    foreach ($navBarMenuArray as $navBarItemKey => $navBarItem):
      switch (array_key_exists('subMenu', $navBarItem) || array_key_exists('admin', $navBarItem)) {
        case true: 
          $isSubMenuSet = ' sub-menu';
          break;
        default: $isSubMenuSet = '';
      }

      $navBarItemClass = menuItemClass($navBarItemKey, $page);
      ?>

      <li class="navBar__menuItem<?= $isSubMenuSet; ?>">
      <a class="<?= $navBarItemClass; ?>" href="<?= $navBarItem['href']; ?>"><?= $navBarItem['name']; ?></a>
      
      <?php
      if (isset($navBarItem['subMenu']) || isset($navBarItem['admin'])):
      ?>

        <div class="subMenu__wrap">
        <ul class="subMenu subMenu_hidden">

        <?php foreach ($navBarItem['subMenu'] ?? $navBarItem['admin'] as $navBarSubKey => $navBarSubItem): ?>

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