<?php

namespace GrayWizard\Permanents;

class Land
{
    protected $manaTypes;

    public function __construct(array $manaTypes)
    {
        $this->manaTypes = $manaTypes;
    }
}
