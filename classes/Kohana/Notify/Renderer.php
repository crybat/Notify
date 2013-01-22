<?php defined('SYSPATH') or die('No direct script access.');
interface Kohana_Notify_Renderer
{

    /**
     * @param array $config
     */
    public function __construct(array $config);

    /**
     * Render messages
     *
     * @since 3.0
     * @return mixed
     */
    public function render();

    /**
     * Set messages to render
     *
     * @since 3.0
     * @param array $messages
     * @return Notify_Renderer
     */
    public function set_messages(array $messages);

    /**
     * Get set messages
     *
     * @return array
     */
    public function get_messages();
}