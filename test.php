<?php
$username = htmlspecialchars($_POST['username'], ENT_QUOTES);
print $username . "さんご登録ありがとうございます。";