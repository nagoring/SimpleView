
<div id="index-create-ticket-arae">
	<?php echo $sitename?>
	<div>
		質問を行うにはチケットの投稿を行って下さい。
		チケットの投稿を行うと記載したメールアドレスにメールが届きます。
		メールの内容にチケットへログインするためのURLがあるのでアクセスをして現在の状況を確認できます。
	</div>
	<br>
	<a href="<?php echo BASE_URL?>create-ticket.php">チケットの投稿</a>
</div>
<div id="index-login-arae">
	<form>
		<dl>
			<dt>メールアドレス</dt>
			<dd><input type="text" name="username" value=""></dd>
			<dt>チケットID</dt>
			<dd><input type="text" name="ticketId" value=""></dd>
		</dl>
	</form>
</div>
<br style="clear:both">