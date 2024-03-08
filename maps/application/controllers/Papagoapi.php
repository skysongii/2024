<?php
    $k_title = $_POST['k_title'];

    // echo $k_title;
    $papaClientId = "Zl5cWEvAYNKjJTOjZOp0";     // 파파고 클라이언트 ID
    $papaClientSecret = "XuOAz8trv0";           // 파파고 시크릿 ID

    $papaEncText = urlencode($k_title);
    $papaPostvars = "source=ko&target=en&text=".$papaEncText;
    $papaUrl = "https://openapi.naver.com/v1/papago/n2mt";
    $papaIspost = true;
    $papaCh = curl_init();
    curl_setopt($papaCh, CURLOPT_URL, $papaUrl);
    curl_setopt($papaCh, CURLOPT_POST, $papaIspost);
    curl_setopt($papaCh, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($papaCh,CURLOPT_POSTFIELDS, $papaPostvars);
    $papaHeaders = array();
    $papaHeaders[] = "X-Naver-Client-Id: ".$papaClientId;
    $papaHeaders[] = "X-Naver-Client-Secret: ".$papaClientSecret;
    curl_setopt($papaCh, CURLOPT_HTTPHEADER, $papaHeaders);
    $papaResponse = curl_exec ($papaCh);
    $papaStatusCode = curl_getinfo($papaCh, CURLINFO_HTTP_CODE);
    // echo "status_code:".$papaStatusCode."<br>";
    // curl_close ($ch);

    if($papaStatusCode == 200) {
      // $response = json_encode($response,JSON_UNESCAPED_UNICODE);
      // $papaResponse = json_encode($response,JSON_UNESCAPED_UNICODE);
      echo $papaResponse;
    } else {
      // echo "Error 내용:".$response;
      echo "Error 내용:".$papaResponse;

    }

?>
