<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="UTF-8" />
        <link rel="shortcut icon" href="#" />
        <title>Title</title>

    </head>
    <body>
		<div id="wrap">
			<div id="top-comment">トップ</div>
	        <header>
			<h1><a href="#">サイト名</a></h1>
            <div id="gnav">
				<a href="<?php echo BASE_URL;?>user.php"><?php echo ('ホーム'); ?></a>
				<a href="<?php echo BASE_URL; ?>"><?php echo ('新規お問い合わせ') ?></a>
				<a href="<?php echo BASE_URL; ?>"><?php echo ('過去のチケット') ?></a>
				<a href="logout.php"><?php echo ('ログアウト'); ?></a>
            </div><?php //end nav?>
        </header>

	   <div id="contents">
			<?php echo $content_for_layout ?>
		</div>
		&#x3000
        <footer>
            <nav>
                <ul>
                    <li><a href = "terms.php">利用規約</a></li>
                    <li><a href = "privacy.php">プライバシーポリシー</a></li>
                    <li><a href = "privacy.php">HELP</a></li>
                </ul>
            </nav>
            <span>&copy;<a href="<?php echo BASE_URL?>">サイト名</a> 2013</span>
        </footer>

        <!--<script src="js/modernizr.custom.14171.js" type="text/javascript"></script>-->
		</div><?php //wrap?>
    </body>
</html>