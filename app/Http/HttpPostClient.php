<?php
 class HttpPostClient {
    public function makePostRequest($header = array(), $body, $url, $method) {
        try{
            $ch = curl_init($url);
            if ($method == 'POST') {
              curl_setopt($ch, CURLOPT_POST, 1);
              curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
            }
            if (!empty($header)) {
                curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            }
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            curl_close($ch);

          }catch(Exception $e){
              return $e->getMessage();
      }

      return $response;
    }
 }
?>