<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container6hgo66j\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container6hgo66j/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container6hgo66j.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\Container6hgo66j\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \Container6hgo66j\appDevDebugProjectContainer(array(
    'container.build_hash' => '6hgo66j',
    'container.build_id' => 'a32a05b9',
    'container.build_time' => 1532386817,
), __DIR__.\DIRECTORY_SEPARATOR.'Container6hgo66j');
