<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace KPC\Components\Gate;

class ORGate extends AbstractGate implements Gate
{
    public function update(Input $input)
    {
        $this->output->update(! (! $input->getA() && ! $input->getB()));
    }
}
