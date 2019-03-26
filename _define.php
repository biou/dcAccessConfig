<?php
/**
 * @brief acccessConfig
 *
 * @copyright Access42
 */

if (!defined('DC_RC_PATH')) {return;}

$this->registerModule(
    "accessConfig",                    // Name
    "dotclear accessConfig integration", // Description
    "Access42 & biou",                 // Author
    "0.9.4",                         // Version
    array(
        //'requires'    => [['core', '2.15']],
        'permissions' => 'usage,contentadmin',
        'type'        => 'plugin'
    )
);
