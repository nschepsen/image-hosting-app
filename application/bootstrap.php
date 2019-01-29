<?php

#-----------------------------------------------------

define('ROOT_DIR', dirname(getcwd()) . '/');
#
# Application Directory
#
define('APP_DIR', ROOT_DIR . 'application/');
#
# Eloquent Models
#
define('MODEL_DIR', APP_DIR . 'models/');
#
# Views
#
define('VIEW_DIR', APP_DIR . 'views/');
#
# Vendor
#
define('VENDOR_DIR', ROOT_DIR . 'vendor/');
#
# Twig Templates
#
define('TEMPLATE_DIR', VIEW_DIR);
#
# Controllers Directory
#
define('CONTROLLER_DIR', APP_DIR . 'controllers/');

#-----------------------------------------------------

class Config
{
    static $DEBUG = true; /* Turn off this option */

    static $DB_DRIVER = 'mysql';
    static $DB_HOST = '127.0.0.1';
    static $DB_USERNAME = 'ihostdbadmin';
    static $DB_PASSWORD = 'R=r%$6p2H%.}(wz&';
    static $DB_PREFIX = '';
    static $DB_NAME = 'ihostappdb';

    static $appdata = [
        'title' => 'Image!HOSTING',
        'file' => [
            'extensions' => [ 'gif', 'jpg', 'bmp', 'png' ],
            'size' => 20 /* in MB */,
            'lifetime' => 30 /* in Days */
        ]
    ];
};

#-----------------------------------------------------

#
# Turn on error_reporting for DEBUG information
#

if(Config::$DEBUG)
{
    ini_set('display_errors', '1'); error_reporting(E_ALL & ~E_NOTICE);
}

#-----------------------------------------------------

#
# Load the Composer's AUTOLOADER
#

require_once VENDOR_DIR . 'autoload.php';

#-----------------------------------------------------

#
# Loads the Image!HOSTER's Engine
#

require_once 'core/Core.php';
require_once 'core/Controller.php';

#-----------------------------------------------------
