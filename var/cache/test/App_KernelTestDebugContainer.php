<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSeN2D7U\App_KernelTestDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSeN2D7U/App_KernelTestDebugContainer.php') {
    touch(__DIR__.'/ContainerSeN2D7U.legacy');

    return;
}

if (!\class_exists(App_KernelTestDebugContainer::class, false)) {
    \class_alias(\ContainerSeN2D7U\App_KernelTestDebugContainer::class, App_KernelTestDebugContainer::class, false);
}

return new \ContainerSeN2D7U\App_KernelTestDebugContainer([
    'container.build_hash' => 'SeN2D7U',
    'container.build_id' => '9f49852d',
    'container.build_time' => 1680250866,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSeN2D7U');
