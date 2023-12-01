<?php

namespace Spatie\Prometheus\Collectors;

use Spatie\Prometheus\Facades\Prometheus;

class EnvironmentProductionCollector implements Collector
{
    public function register(): void
    {
        Prometheus::addGauge('Environment production status')
            ->name('env_prod_status')
            ->helpText('The status of Environment Production,  0 = disable, 1 = enable')
            ->value(function () {
                return (string) app()->environment() === 'production'
                    ? 1
                    : 0;
            });
    }
}
