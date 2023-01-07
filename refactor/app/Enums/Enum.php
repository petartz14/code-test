<?php

namespace DTApi\Enums;

use Illuminate\Support\Str;

abstract class Enum {
  public static function fromKey($name)
  {
    return Str::snake($name);
  }
}