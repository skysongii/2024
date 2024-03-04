<?php
namespace App\Controllers;

class Papagoapi extends BaseController
{

    public function index()
    {
    $k_title = $_POST['k_title'];

    $papaClientId = "Zl5cWEvAYNKjJTOjZOp0";
    $papaClientSecret = "XuOAz8trv0";

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
  }
}
?>
