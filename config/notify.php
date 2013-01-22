<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Configuration for the Notify module
 */
return [
    /**
     * View file to use when rendering messages.
     * Allows integration with different front-end frameworks
     *
     * @since 1.0
     */
    'view' => 'notify/html/bootstrap',

    /**
     * Renderer driver to use
     *
     * @since 3.0
     */
    'renderer' => 'HTML'
];