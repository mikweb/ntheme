<?php
/**
 * Profiler
 *
 * @author Virgil-Adrian Teaca - virgil@giulianaeassociati.com
 * @version 3.0
 */

use Nova\Core\Config;


/**
 * Setup the Profiler configuration
 */
Config::set('profiler', array(
    'useForensics' => false,
    'withDatabase' => false,
));