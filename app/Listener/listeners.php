<?php

/** @var Binding $binding */
use Minute\Event\AdminEvent;
use Minute\Event\Binding;
use Minute\Event\TodoEvent;
use Minute\Menu\TranslateMenu;
use Minute\Todo\TranslateTodo;

$binding->addMultiple([
    //translate
    ['event' => AdminEvent::IMPORT_ADMIN_MENU_LINKS, 'handler' => [TranslateMenu::class, 'adminLinks']],

    //tasks
    ['event' => TodoEvent::IMPORT_TODO_ADMIN, 'handler' => [TranslateTodo::class, 'getTodoList']],
]);