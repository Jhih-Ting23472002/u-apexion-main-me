<?php

header('Content-Type: application/json');

$upload_folder = __DIR__. './img/product_img/';
$output = [
    'success' => false,
    'error' => '',
];

if(! empty($_FILES['img'])) {
    $ext = $exts[$_FILES['img']['type']] ?? '';  // 拿到對應的副檔名
    if(! empty( $ext )){

        $filename = sha1($_FILES['img']['name']. rand()). $ext;

        $target = $upload_folder. '/'. $filename;
        if( move_uploaded_file($_FILES['img']['tmp_name'], $target)){
            $output['success'] = true;
            $output['filename'] = $filename;
            // TODO: 可以將檔案寫入資料表
        } else {
            $output['error'] = '無法移動檔案';
        }

    } else {
        $output['error'] = '不合法的檔案類型';
    }


} else {
    $output['error'] = '沒有上傳檔案';
}
echo json_encode($output, JSON_UNESCAPED_UNICODE);