<?php
function menuItemClass($itemKey, $page)
{
  $itemClass = 'navBar__item';

  if ($page == $itemKey || (!isset($page) && $itemKey == 'main')) {
    $itemClass = 'navBar__item navBar__item_active';
  } elseif (($page == 'product' || $page == 'upload') && $itemKey == 'gallery') {
    $itemClass = 'navBar__item navBar__item_active';
  } elseif (($page == 'contacts' || $page == 'feedback') && $itemKey == 'contacts') {
    $itemClass = 'navBar__item navBar__item_active';
  }

  return $itemClass;
}