<?php
/**
 * User: Sanchit <dev@minutephp.com>
 * Date: 7/8/2016
 * Time: 7:57 PM
 */
namespace Minute\Menu {

    use Minute\Event\ImportEvent;

    class TranslateMenu {
        public function adminLinks(ImportEvent $event) {
            $links = [
                'translate' => ['title' => 'Translate', 'icon' => 'fa-language', 'priority' => 50, 'href' => '/admin/translate', 'parent' => 'expert']
            ];

            $event->addContent($links);
        }
    }
}