<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @author Ando Roots <ando@sqroot.eu>
 */
class Kohana_Notify_Renderer_HTML implements Notify_Renderer
{

    protected $_messages;
    protected $_config;

    /**
     * Render messages
     *
     * @since 3.0
     * @return mixed
     */
    public function render()
    {
        die(var_dump($this->_messages));
        if (!count($this->_messages)) {
            return null;
        }
        $view = View::factory($this->_config['view'], ['renderer' => $this]);
        return $view->render();
    }

    /**
     * Set messages to render
     *
     * @since 3.0
     * @param array $messages
     * @return Notify_Renderer
     */
    public function set_messages(array $messages)
    {
        $this->_messages = $messages;
        return $this;
    }

    /**
     * @param array $config
     */
    public function __construct(array $config)
    {
        $this->_config = $config;
    }

    /**
     * Get set messages
     *
     * @return array
     */
    public function get_messages()
    {
        return $this->_messages;
    }
}