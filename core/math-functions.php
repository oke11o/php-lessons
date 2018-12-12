<?php
function summ($x, $y)
{
  $summ = $x + $y;
  return $summ;
}

function diff($x, $y)
{
  $diff = $x - $y;
  return $diff;
}

function mult($x, $y)
{
  $mult = $x * $y;
  return $mult;
}

function div($x, $y)
{
  if ($y != 0) {
    $div = $x / $y;
  }
  else $div = 'Деление на ноль невозможно.';
  return $div;
}

function mathOperation($arg1, $arg2, $oper)
{
  $result = 0;
  switch ($oper) {
    case "summ":
      $result = summ($arg1, $arg2);
      break;
    case "diff":
      $result = diff($arg1, $arg2);
      break;
    case "mult":
      $result = mult($arg1, $arg2);
      break;
    case "div":
      $result = div($arg1, $arg2);
      break;
    default: $result = 'undefined';
  }
  return $result;
}