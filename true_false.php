<?php
$x = (!(strtolower('no') === 'no'));
if ($x) {
  echo '$x should be false!';
  exit(1);
}
