<?php
if (isset($_SESSION['user_id'])):
  foreach ($navBarMenuArray['gallery']['admin'] as $adminSubMenu):
?>

<div class="galleryNavWrapper">
  <a href="<?=$$adminSubMenu['href']?>" class="functionButton"><?=$adminSubMenu['name']?></a>
</div>

<?php
  endforeach;
endif;
?>