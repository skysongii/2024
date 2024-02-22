<?php
    $search = $_POST['search'];
    $client_id = "gmxDYIf79Pk0KhzVgg8N";
    $client_secret = "_pAb5keABG";

    $encText = urlencode($search);
    $url = "https://openapi.naver.com/v1/search/encyc.json?query=".$encText; // json 결과
    $is_post = false;
    sleep(1); // 네이버 API 초당 요청 건 수 제한으로 인해 sleep 제한
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, $is_post);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $headers = array();
    $headers[] = "X-Naver-Client-Id: ".$client_id;
    $headers[] = "X-Naver-Client-Secret: ".$client_secret;
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $response = curl_exec ($ch);
    $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    // // echo "status_code:".$status_code."";
    curl_close ($ch);

    if($status_code == 200) {
      $response = json_encode($response,JSON_UNESCAPED_UNICODE);
      // $papaResponse = json_encode($response,JSON_UNESCAPED_UNICODE);
      echo $response;
    } else {
      // echo "Error 내용:".$response;
      echo "Error 내용:".$response;

    }

?>
