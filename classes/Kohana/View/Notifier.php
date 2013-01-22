<?php defined('SYSPATH') or die('No direct script access.');
interface Kohana_View_Notifier
{
    /**
     * Add a new message to be shown to the user.
     *
     * @param string $message A message string with placeholder values
     * @param array $replacements Replacements for the message string
     * @return Notify
     */
    public static function error($message, $replacements = []);

    /**
     * Add a new message to be shown to the user.
     *
     * @param string $message A message string with placeholder values
     * @param array $replacements Replacements for the message string
     * @return Notify
     */
    public static function info($message, $replacements = []);

    /**
     * Add a new message to be shown to the user.
     *
     * @param string $message A message string with placeholder values
     * @param array $replacements Replacements for the message string
     * @return Notify
     */
    public static function success($message, $replacements = []);


    /**
     * Add a new message to be shown to the user.
     *
     * @param string $message A message string with placeholder values
     * @param array $replacements Replacements for the message string
     * @param null $type
     * @return Notify
     */
    public static function msg($message, $replacements = [], $type = Notify::ALERT);

    /**
     * Get the singleton instance
     *
     * @return Notify
     */
    public static function instance();

    /**
     * @return mixed
     */
    public static function render();

    /**
     * Sets the message renderer instance
     *
     * @param Notify_Renderer $renderer
     * @return Notify
     */
    public static function set_renderer(Notify_Renderer $renderer);

    /**
     * Gets the message renderer instance
     *
     * @return Notify_Renderer
     */
    public static function get_renderer();
}