<?php

namespace Spatie\Prometheus\Collectors;

use Spatie\Prometheus\Facades\Prometheus;

class DebugModeCollector implements Collector
{
    public function register(): void
    {
        Prometheus::addGauge('Debug mode status')
            ->name('debug_mode_status')
            ->helpText('The status of debug mode,  0 = disable, 1 = enable')
            ->value(function () {
                return config('app.debug')
                    ? 1
                    : 0;
            });
    }
}
