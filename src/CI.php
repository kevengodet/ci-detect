<?php

namespace Keven\CiDetect;

final class CI
{
    public function __construct(private ?Detector $detector = new Detector) {}

    public function is(string $ciName): bool
    {
        $vendor = $this->detector->detect();

        return !is_null($vendor) && str_contains(strtolower($vendor->name), strtolower($ciName));
    }
}
