<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYLthcMh\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYLthcMh/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerYLthcMh.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerYLthcMh\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerYLthcMh\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'YLthcMh',
    'container.build_id' => 'ace8fe83',
    'container.build_time' => 1588023376,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYLthcMh');
