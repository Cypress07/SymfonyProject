<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerB1TC93X\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerB1TC93X/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerB1TC93X.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerB1TC93X\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerB1TC93X\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'B1TC93X',
    'container.build_id' => '7804c001',
    'container.build_time' => 1587410453,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerB1TC93X');
