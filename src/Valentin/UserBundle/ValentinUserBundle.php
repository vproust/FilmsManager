<?php

namespace Valentin\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ValentinUserBundle extends Bundle
{
	public function getParent()
  {
    return 'FOSUserBundle';
  }
}
