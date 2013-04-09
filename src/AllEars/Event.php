<?php

namespace AllEars;

/**
 * AllEars Events
 *
 * A simple event listener/caller based on
 * http://stackoverflow.com/a/9255855/150062
 *
 * @author Erwinus (http://stackoverflow.com/users/565244/erwinus)
 * @author Steve V (http://github.com/dubcanada)
 */
class Event
{
    public static $events = array();

    /**
     * Fire an event calling the listeners
     * @param  string $event listener name
     * @param  array  $args  arguements to pass to closure
     */
    public static function fire($event, $args = array())
    {
        if(isset(self::$events[$event]))
        {
            foreach(self::$events[$event] as $func)
            {
                call_user_func($func, $args);
            }
        }

    }

    /**
     * Listen to a specific event
     * @param  string  $event name of the event to listen to
     * @param  Closure $func  callable closure that gets called
     */
    public static function listen($event, Closure $func)
    {
        self::$events[$event][] = $func;
    }
}