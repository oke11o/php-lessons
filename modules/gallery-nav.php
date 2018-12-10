<div class="wrapper">  
  <?php
  foreach ($navBarMenuArray['gallery']['subMenu'] as $galleryButton):
    $galleryButton_state = '?page='.$page == $galleryButton['href'] ? ' functionButton_disabled' : '';
  ?>

  <a href="<?=$galleryButton['href']?>" class="functionButton<?=$galleryButton_state?>"><?=$galleryButton['name']?></a>

  <?php endforeach; ?>
</div>