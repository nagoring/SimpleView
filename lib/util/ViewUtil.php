<?php

class ViewUtil {
	public static $DIR = 'views';
	public static $LAYOUT = 'layouts';
	public static $PATH = BASE_PATH;
	public static function load($filepath, $dataHash = array()) {
		extract($dataHash);
		ob_start();
		include self::$PATH . DIRECTORY_SEPARATOR . self::$DIR . DIRECTORY_SEPARATOR . $filepath;
		$contents = ob_get_contents();
		ob_end_clean();
		return $contents;
	}

	public static function render($filepath, $dataHash = array(), $layoutfile = 'l_default.php') {
		ob_start();
		
		extract(Core::getInstance()->getParams());
		//viewに変数を割り当てる
		extract($dataHash);
		/* @var $boardNav BoardNav */
		//読み込み命令
		include self::$PATH . DIRECTORY_SEPARATOR . self::$DIR . DIRECTORY_SEPARATOR . $filepath;
		$content = ob_get_contents();
		ob_end_clean();
		if(self::$LAYOUT && $layoutfile){
			$dataHash['content_for_layout'] = $content;
			ob_start();
			//viewに変数を割り当てる
			extract($dataHash);
			//読み込み命令
			include self::$PATH . DIRECTORY_SEPARATOR . self::$DIR . DIRECTORY_SEPARATOR . self::$LAYOUT . DIRECTORY_SEPARATOR . $layoutfile;
			$body = ob_get_contents();
			ob_end_clean();
			echo $body;
		}else{
			echo $content;
		}
	}

	function pagination($pages, $paged=1, $range = 2, $link='') {
		$showitems = ($range * 2) + 1;

		if (empty($paged))
			$paged = 1;

		ob_start();
		if (1 != $pages) {
			echo "<div id='pagination'>";
			if ($paged > 2 && $paged > $range + 1 && $showitems < $pages)
				echo "<span class='pagination_box'><a href='" . $link . 'paged=1' . "'>&laquo;</a></span>";
			if ($paged > 1 && $showitems < $pages)
				echo "<span class='pagination_box'><a href='" . $link . 'paged=' . ($paged - 1) . "'>&lsaquo;</a></span>";

			for ($i = 1; $i <= $pages; $i++) {
				if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems )) {
					echo ($paged == $i) ? "<span class='current pagination_box'>" . $i . "</span>" : "<a href='" . $link . 'paged=' . $i . "' class='inactive' >" . $i . "</a>";
				}
			}

			if ($paged < $pages && $showitems < $pages)
				echo "<span class='pagination_box'><a href='" . $link . 'paged=' . ($paged + 1) . "'>&rsaquo;</a></span>";
			if ($paged < $pages - 1 && $paged + $range - 1 < $pages && $showitems < $pages)
				echo "<span class='pagination_box'><a href='" . $link . 'paged=' . $pages . "'>&raquo;</a></span>";
			echo "</div>\n";
		}
		$html = ob_get_contents();
		ob_clean();
		return $html;
	}
	public function getPaged(){
		if(isset($_GET['paged'])){
			$paged = $_GET['paged'];
		}else{
			$paged = 1;
		}
		return $paged;
	}
}
