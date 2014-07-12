<?php
define('BASE_PATH', 'C:/xxxxxxxxx/skype_03');
define('BASE_URL', 'http://skype03.local/');
require dirname(__FILE__) . '/lib/core/Core.php';
require dirname(__FILE__) . '/lib/util/ViewUtil.php';



$data = array();
Core::getInstance()->set('sitename', 'スカゼミ太郎');
$data['sitename'] = 'スカゼミ太郎';

ViewUtil::render('v_index.php', $data);


