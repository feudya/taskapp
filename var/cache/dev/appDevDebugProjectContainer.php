<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container16dtwkv\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container16dtwkv/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container16dtwkv.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\Container16dtwkv\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \Container16dtwkv\appDevDebugProjectContainer(array(
    'container.build_hash' => '16dtwkv',
    'container.build_id' => '4e4e8343',
    'container.build_time' => 1532220901,
), __DIR__.\DIRECTORY_SEPARATOR.'Container16dtwkv');
