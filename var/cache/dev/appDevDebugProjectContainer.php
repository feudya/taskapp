<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerFgtgbbn\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerFgtgbbn/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerFgtgbbn.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerFgtgbbn\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerFgtgbbn\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Fgtgbbn',
    'container.build_id' => '6c722348',
    'container.build_time' => 1532356016,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerFgtgbbn');
