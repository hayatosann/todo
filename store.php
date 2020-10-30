<?php
// create.phpにはフォームがあった
// フォームから送信されたデータを受け取って保存する

// 1.PHPからデータベースに接続するコードを記載
// 2.SQL文実行
//   create機能を作成している場合→insert文
// 3.リダイレクト（store.phpで処理を終わらせない→保存した後にindex.phpに戻る）

// - ファイルの読み込み
// クラスの継承の際に学習したメソッド
require_once('Models/Task.php');


// - データの受け取り
// create.phpのフォームからデータが送られる
// スーパーグローバル変数（postで受け取り）
// フォームの何属性にひもずいている？

// inputの中にあるname属性
$title = $_POST['title'];
$contents = $_POST['contents'];
// dateメソッド 日付を入力する際に使用
$currentTime = date("Y/m/d H:i:s");

// - DBへのデータ保存
        // 設計書（クラス）
        // インスタンス
        // クラス名とファイル名はだいたい一致
$task = new Task();
$task->create([$title, $contents, $currentTime]);

// - リダイレクト
header('location:index.php');
exit;
