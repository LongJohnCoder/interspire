<?php
/**
 * @package		Interspire eCommerce
 * @copyright	Copyright (C) 2015 Interspire Co.,Ltd. All rights reserved. (Interspire.vn)
 * @credits		See CREDITS.txt for credits and other copyright notices.
 * @license		GNU General Public License version 3; see LICENSE.txt
 */

class EventAppDemo extends Event {

    public function preLoadView(&$args) {
        $template = &$args[0];
        $data = &$args[1];

        if ($template == 'setting/setting.tpl') {
            // $data['heading_title'] = 'My Custom Title';
        }
    }
}