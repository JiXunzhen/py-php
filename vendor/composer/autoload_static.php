<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite7acb66743a8df3b84e5e9379290dfaf
{
    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Thrift' => 
            array (
                0 => __DIR__ . '/..' . '/apache/thrift/lib/php/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInite7acb66743a8df3b84e5e9379290dfaf::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
