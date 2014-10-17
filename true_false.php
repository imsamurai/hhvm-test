<?php
$false = (!(strtolower('No') === 'no'));
$same = (strtolower('No') === 'no');
$notSame = (strtolower('No') !== 'no');
$equal = (strtolower('No') == 'no');
$notEqual = (strtolower('No') != 'no');

if ($false) {
  echo '$false should be false!';
  var_dump($false);
}

if (!$same) {
  echo '$same should be true!';
  var_dump($same);
}

if ($notSame) {
  echo '$notSame should be false!';
  var_dump($notSame);
}

if (!$equal) {
  echo '$equal should be true!';
  var_dump($equal);
}

if ($notEqual) {
  echo '$notEqual should be false!';
  var_dump($notEqual);
}

if (!$false && $same && !$notSame && $equal && !$notEqual) {
  exit(0);
} else {
  exit(1);
}
