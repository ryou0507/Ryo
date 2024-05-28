<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$url = 'https://script.google.com/macros/s/AKfycbw_b332tD3ePKmGA3KKBtjeHoBXXDkOh3UXaxG9PWkPqvfnSH4QUvc_pK0aNCnWWhLE/exec';

// リクエストの本体を取得
$data = file_get_contents('php://input');

// cURLセッションを初期化
$ch = curl_init($url);

// cURLオプションを設定
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt(
    $ch,
    CURLOPT_HTTPHEADER,
    array(
        'Content-Type: application/json',
        'Content-Length: ' . strlen($data)
    )
);

// リクエストを実行し、レスポンスを取得
$result = curl_exec($ch);

// cURLセッションを閉じる
curl_close($ch);

// レスポンスを出力
echo $result;
