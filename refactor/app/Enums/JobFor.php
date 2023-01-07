<?php

declare(strict_types=1);

namespace DTApi\Enums;

abstract class JobFor extends Enum
{
  const Normal = 'normal';
  const Certified = 'yes';
  const CertifiedInLaw = 'law';
  const CertifiedInHelth = 'helth';
}