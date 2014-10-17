<?php
$x = (!(strtolower('no') === 'no'));
if ($x) {
  echo '$x should be false!';
  var_dump($x);
  exit(1);
}
