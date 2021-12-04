<?php

function money($value)
{
  return 'R$' . number_format($value, 2, ',', '.');
}
