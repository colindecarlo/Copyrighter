<?php namespace Copyrighter\Year;

use Copyrighter\Year\Contracts\CurrentYearGeneratorInterface as CurrentYearGeneratorInterface;

class CurrentYear implements CurrentYearGeneratorInterface
{
    /**
     * Returns a 4-digit representation of the current year.
     * @return string
     */
    public function getCurrentYear()
    {
        return (string) $this;
    }

    public function __toString()
    {
        return date('Y');
    }
}
