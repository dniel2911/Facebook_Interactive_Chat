<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit499403dc2a976e127e63788a54092000
{
    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'System' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
                1 => __DIR__ . '/..' . '/ammarfaizi2/ai/src',
                2 => __DIR__ . '/..' . '/ammarfaizi2/facebook/facebook',
            ),
        ),
        'C' => 
        array (
            'Curl' => 
            array (
                0 => __DIR__ . '/..' . '/ammarfaizi2/ratools/src',
            ),
        ),
        'A' => 
        array (
            'App' => 
            array (
                0 => __DIR__ . '/..' . '/ammarfaizi2/ai/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit499403dc2a976e127e63788a54092000::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
