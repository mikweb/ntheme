<?php
/**
 * Config
 *
 * @author Virgil-Adrian Teaca - virgil@giulianaeassociati.com
 * @version 3.0
 */

use Nova\Config\Config;

/**
 * PREFER to be used in Database calls or storing Session data, default is 'nova_'
 */
define('PREFIX', 'nova_');

/**
 * Setup the Config API Mode.
 * For using the 'database' mode, you need to have a database, with a table generated by 'scripts/nova_options'
 */
define('CONFIG_STORE', 'files'); // Supported: "files", "database"


/**
 * Routing configuration
 */
Config::set('routing', array(
    /*
     * The Asset Files Serving configuration.
     */
    'assets' => array(
        // The driver type used for serving the Asset Files.
        'driver' => 'default',     // Supported: "default" and "custom".

        // The name of Assets Dispatcher used as 'custom' driver.
        'dispatcher' => 'Shared\Routing\Assets\CustomDispatcher',

        // The served file Cache Time.
        'cacheTime' => 10800,
    ),
));
