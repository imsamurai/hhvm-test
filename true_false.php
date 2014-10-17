<?php
$x = (!(strtolower('no') === 'no'));
if ($x) {
  exit('$x should be false!');
}
