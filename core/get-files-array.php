<?php
function initFilesArray($filesDir)
{
  $filesArray = scandir($filesDir, SCANDIR_SORT_ASCENDING); //gallery directory

  for ($i = 0; $i < count($filesArray); $i++) {
    if (($filesArray[$i] == '.') || ($filesArray[$i] == '..')) {
      unset($filesArray[$i]);
    }
  }

  return $filesArray;
}