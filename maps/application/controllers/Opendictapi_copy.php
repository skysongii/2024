<?php
$search = $_POST['word_arr'];

$json_de = json_decode($search, true);
$result_arr = [];

foreach($json_de as $key=>$value){
    $search = $value['search'];
//     echo $search;

    $ch = curl_init();  //파싱 대상을 담을 $ch변수를 초기화
    $url = 'https://stdict.korean.go.kr/api/search.do'; /*URL*/
    $queryParams = '?' . 'key' . '=E6EE170EC92AB966F1CE9082E6BFEEC0'; /*Service Key*/
    $queryParams .= '&' . 'q' . '=' . urlencode($search); //요청인수
    $queryParams .= '&' . 'type_search' . '=' . 'search'; //요청인수
    $queryParams .= '&' . 'req_type=json';
    

        curl_setopt($ch, CURLOPT_URL, $url . $queryParams); //파싱 대상 설정
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);	//파싱한 결과를 string 형식으로 반환하도록 설정
        
        $response = curl_exec($ch);
        array_push($result_arr, $response);
        curl_close($ch);

    // $json_response = json_encode($response,JSON_UNESCAPED_UNICODE);
    
}    
echo json_encode($result_arr);

