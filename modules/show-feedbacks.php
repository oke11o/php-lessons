<?php
function showLastFeedbacks($array)
{
  $arrayLength = count($array['id']);

  for ($i = 0; $i < $arrayLength; $i++) {
    echo('<blockquote cite="'.$array['names'][$i].'" class="taskCard__feedbackPost">');
    echo('<p>'.$array['description'][$i].'</p>');
    echo('<span><cite>'.$array['names'][$i].'</cite>');
    echo('<sub>'.$array['date'][$i].' '.$array['time'][$i].'<sub></span>');
    echo('</blockquote>');
  }
}