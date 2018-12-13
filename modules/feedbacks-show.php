<?php
function showLastFeedbacks($array)
{
  $arrayLength = count($array['id']);

  for ($i = 0; $i < $arrayLength; $i++) {
    $fb_blockquote = '<blockquote cite="'.$array['names'][$i].'" class="feedbackCard__post">';
    $fb_p = '<p>'.$array['description'][$i].'</p>';
    $fb_cite = '<span><cite>'.$array['names'][$i].'</cite><sub>'.$array['date'][$i].' '.$array['time'][$i].'<sub></span>';
    $fb_blockqouteEnd = '</blockquote>';

    echo($fb_blockquote.$fb_p.$fb_cite.$fb_blockqouteEnd);
  }
}