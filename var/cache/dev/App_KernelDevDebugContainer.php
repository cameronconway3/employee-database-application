<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSslgbIZ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSslgbIZ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSslgbIZ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSslgbIZ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerSslgbIZ\App_KernelDevDebugContainer([
    'container.build_hash' => 'SslgbIZ',
    'container.build_id' => '0dd1b8f8',
    'container.build_time' => 1605962280,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSslgbIZ');
