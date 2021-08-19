# このリポジトリについて

wordpress-theme-vs-pluginはWordPressのプラグインに対する誤解を解くために作成した、負荷がかかる処理における処理速度計測用のリポジトリです。

このリポジトリは以下の2つで構成されています。

* functions.php
* calc-process-time/calc-process-time.php

## functions.php
functions.phpは、WordPressのテーマ構成ファイルの1つであるfunctions.phpに追記しての使用を想定しています。

functions.phpの改変は必ず最終行にペースト（貼り付け）する形で行ってください（記述間違えによるエラーを防ぐため）。

## calc-process-time/calc-process-time.php
calc-process-time.phpはWordPressにプラグインとして追加することを想定しています。

実装内容は先述したfunctions.phpと全く同一です。

以下のリンクからダウンロードしてWordPressのプラグインページより追加してください。

[zipファイルをダウンロード](https://github.com/braveryk7/wordpress-theme-vs-plugin/releases/download/1.0.0/calc-process-time.zip)

# 免責事項
当プログラムは実証実験目的で作成されたプログラムです。

そのため実際にWebに公開されている公開サイトで使用されることは想定しておりません。

ローカルのテスト環境等でご使用ください。

当プログラムを利用したいかなる不都合も製作者は責任を負いかねます。