<?php

namespace Keven\CiDetect;

use Keven\CiDetect\Env\Matcher;

final class Detector
{
    public function __construct(
        private Matcher $matcher = new Matcher(),
        private ?array $vendors = null
    ) {
        $this->vendors ??= self::loadVendors();
    }

    public function detect(): ?Vendor
    {
        foreach ($this->vendors as $vendor) {
            if ($this->matcher->matches($vendor['env'])) {
                return new Vendor(
                    $vendor['name'],
                    isset($vendor['pr']) && $this->matcher->matches($vendor['pr']),
                );
            }
        }

        return null;
    }

    private static function loadVendors(): array
    {
        static $vendors;

        if ($vendors) {
            return $vendors;
        }

        if (!file_exists($path = dirname(__DIR__).'/data/vendors.php')) {
            throw new \RuntimeException('CI vendors file not found');
        }

        return $vendors = require_once $path;
    }
}
