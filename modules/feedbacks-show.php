<?php
function showFeedbacks($array)
{
  foreach ($array as $item) {
    $fb_blockquote = '<blockquote cite="'.$item['name'].'" class="feedbackCard__post">';
    $fb_p = '<p>'.$item['description'].'</p>';
    $fb_cite = '<span><cite>'.$item['name'].'</cite><sub>'.$item['date'].' '.$item['time'].'<sub></span>';
    $fb_blockqouteEnd = '</blockquote>';

    echo($fb_blockquote.$fb_p.$fb_cite.$fb_blockqouteEnd);
  }
}