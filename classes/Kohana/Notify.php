<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @author Ando Roots <ando@sqroot.eu>
 */
class Kohana_Notify implements View_Notifier
{
    const ERROR = 'error';
    const INFO = 'info';
    const SUCCESS = 'success';
    const ALERT = 'alert';

    /**
     * @var Notify
     */
    protected static $_instance;

    /**
     * @var Notify_Renderer
     */
    protected $_renderer;

    /**
     * @var Kohana_Config_Group
     */
    protected $_config;

    protected $_messages = [];

    public function __construct()
    {
        $this->_config = Kohana::$config->load('notify');

        $renderer = 'Notify_Renderer_' . $this->_config->renderer;
        $this->_renderer = new $renderer(['view' => $this->_config->view]);
    }

    /**
     * Add a new message to be shown to the user.
     *
     * @param string $message A message string with placeholder values
     * @param array $replacements Replacements for the message string
     * @return Kohana_Notify
     */
    public static function error($message, $replacements = [])
    {
        return self::msg($message, $replacements, self::ERROR);
    }

    /**
     * Add a new message to be shown to the user.
     *
     * @param string $message A message string with placeholder values
     * @param array $replacements Replacements for the message string
     * @return Kohana_Notify
     */
    public static function info($message, $replacements = [])
    {
        return self::msg($message, $replacements, self::INFO);
    }

    /**
     * Add a new message to be shown to the user.
     *
     * @param string $message A message string with placeholder values
     * @param array $replacements Replacements for the message string
     * @return Kohana_Notify
     */
    public static function success($message, $replacements = [])
    {
        return self::msg($message, $replacements, self::SUCCESS);
    }

    /**
     * Add a new message to be shown to the user.
     *
     * @param string $message A message string with placeholder values
     * @param array $replacements Replacements for the message string
     * @param null|string $type
     * @return Kohana_Notify
     */
    public static function msg($message, $replacements = [], $type = self::ALERT)
    {
        $instance = self::instance();
        if (empty($message)) {
            return $instance;
        }

        $instance->_messages[$type][] = __($message, $replacements);

        return $instance;
    }

    /**
     * Get the singleton instance
     *
     * @return Kohana_Notify
     */
    public static function instance()
    {
        if (self::$_instance === null) {
            self::$_instance = new Kohana_Notify;
        }
        return self::$_instance;
    }

    /**
     * Sets the message renderer instance
     *
     * @param Notify_Renderer $renderer
     * @return Kohana_Notify
     */
    public static function set_renderer(Notify_Renderer $renderer)
    {
        self::instance()->_renderer = $renderer;
        return self::instance();
    }


    /**
     * Gets the message renderer instance
     *
     * @return Notify_Renderer
     */
    public static function get_renderer()
    {
        return self::instance()->_renderer;
    }

    /**
     * @return mixed
     */
    public static function render()
    {
        $renderer = self::instance()->_renderer;
        $renderer->set_messages(self::instance()->_messages);
        return $renderer->render();
    }
}