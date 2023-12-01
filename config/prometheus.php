<?php

return [
    'enabled' => true,

    /*
     * The urls that will return metrics.
     */
    'urls' => [
        'default' => 'prometheus',
    ],

    /*
     * Only these IP's will be allowed to visit the above urls.
     * All IP's are allowed when empty.
     */
    'allowed_ips' => [
        // '1.2.3.4',
    ],

    /*
     * This is the default namespace that will be
     * used by all metrics
     */
    'default_namespace' => 'app',

    /*
    * This is the default labels that will be
    * used by all metrics
    */
    'default_labels' => ['laravel_app' => config('app.name')],
    /*
     * The middleware that will be applied to the urls above
     */
    'middleware' => [
        Spatie\Prometheus\Http\Middleware\AllowIps::class,
    ],

    /*
     * You can override these classes to customize low-level behaviour of the package.
     * In most cases, you can just use the defaults.
     */
    'actions' => [
        'render_collectors' => Spatie\Prometheus\Actions\RenderCollectorsAction::class,
    ],
];
