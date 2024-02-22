<?php
// $search = $_REQUEST['search'];
// $q = $_POST["data1"];
// $req_type = $_POST["data2"];
$KEY = "0824B9FD10E8A547AF407A3E66C8A256";
$encText = "나무";

$url = "https://krdict.korean.go.kr/api/search/api/search?key={$KEY}&q={$encText}"; 

$ch = curl_init();                                 //CURL 세션 초기화
curl_setopt($ch, CURLOPT_URL, $url);               //URL 지정    
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3);       //connection timeout 3초
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);    //요청 결과를 문자열로 반환
$response = curl_exec($ch);                        //쿼리 실행
curl_close($ch);
$code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$error = curl_error($ch);

echo $code;



// echo "<script>alert('API 적용'); </script>";

// if($StatusCode == 200) {
// $response = json_encode($response,JSON_UNESCAPED_UNICODE);
// $Response = json_encode($response,JSON_UNESCAPED_UNICODE);
// echo $Response;
// } else {
// echo "Error 내용:".$response;
// echo "Error 내용:".$Response;

// }
