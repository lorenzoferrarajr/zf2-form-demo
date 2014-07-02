<?php

namespace Application\Service;

use Application\Service\GreatService;

interface GreatServiceAwareInterface
{
    public function setGreatService(GreatService $greatService);
}
