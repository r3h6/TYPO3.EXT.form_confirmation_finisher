<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "form_registration"
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
    'title' => 'Form confirmation finisher',
    'description' => 'Makes the core form confirmation finisher available for editors.',
    'category' => 'be',
    'author' => 'R3 H6',
    'author_email' => 'r3h6@outlook.com',
    'state' => 'stable',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => array(
        'depends' => array(
            'typo3' => '8.7.0-8.7.99',
            'form' => '8.7.0-8.7.99',
        ),
        'conflicts' => array(
        ),
        'suggests' => array(
        ),
    ),
);
