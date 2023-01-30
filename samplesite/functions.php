<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
  //カスタムメニュー
  register_nav_menus(
    array(
    'place_global' => 'グローバル',
    'place_utility' => 'ユーティリティ',
    'place_sidebar' => 'サイドメニュー',
    'place_footer' => 'フッター',
    )
    );

?>
</body>
</html>
