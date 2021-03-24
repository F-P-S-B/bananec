<?php
    function getTokens(){
        $curl = curl_init();

        curl_setopt_array($curl, [
          CURLOPT_URL => "https://api.helloasso.com/oauth2/token",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => "client_id=45f590a280ae41e2ba0c22cb888f4a47&grant_type=refresh_token&refresh_token=Mb4m6K5COXAG7oEuCEEqjN2f8XTgLYT1kQAM9vUnizHL3f7mhLrhu1e9xOiXFg24oJfqQvIVEwdwK48APPVeansaqDxNOPCAvR7wC3r5VqF7vNNvrxtUf798alzLLX1sE38sKS8mKbGJy8ZTT-pCrK7Qt3jFsntSIrbRM5O1KWAbLpCoMyJ5wV4dlYonwmNNzl-sj7Au3pHhT95bw_eF1ZSbg33s23B6rTgOu9wvKoTzmzuEhggNEAyfNwsm9HUdrUEd1xxSxiSpY0gs80Xj2ceYehfARAM7pK_EUTXjtX-fj4jv6xyXDzDcQbYYGspbFB117DZJjtZ8WEMpmDndFuzeprysFbgPtLOZjMilRRsieswhynJPm8lXLvGLH3L9YVhKlB4KmDlFKDbpTRuY1je03Sk",
          CURLOPT_COOKIE => "tm5-HelloAsso=eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJqdGkiOiJmMjRjNjMxNGY2ZGE0NjAwYmEyZjNkOGU3NGYwNWVkOCIsImNwcyI6WyJBY2Nlc3NQdWJsaWNEYXRhIiwiQWNjZXNzVHJhbnNhY3Rpb25zIl0sInVycyI6Ik9yZ2FuaXphdGlvbkFkbWluIiwibmJmIjoxNjE2NTI5MzYzLCJleHAiOjE2MTY1MzExNjMsImlzcyI6Imh0dHBzOi8vYXBpLmhlbGxvYXNzby5jb20iLCJhdWQiOiI0NWY1OTBhMjgwYWU0MWUyYmEwYzIyY2I4ODhmNGE0NyJ9.uv0_cFi8YVeTCgKsHFybwVJql_qC81FA9R-7o25llEiEnxd7etqHHoGJxaX0u2f17_USkgQQe8NMcwBK-oagvTdYIhiCAlEd-mGVOo5vfhzSSdm-pZdklu5QmOej3N0sVSb8t07pihFIA0YzQ9dyAO8fjB6pbIYylsaNel8T27tV3rBuNt6e_qcA4OIGOXnBuATZUFvXEwgNj-68Dq_oVhg-KSPSvqUPdyPCu9geJhDlWiYRwyVbZFxB4kbZj4yZT5fryK8UC7uc84XNyqtldBIrupGBQHb_p8rJbJaCb6df19FnyiHwDraRkMyv6TFpDNWUCR8ri1y68LTn23aemA; rm5-HelloAsso=iSGX-zHo6BZgbRgUfV4DpMeUe47cpYogVstNc5FoNrSnWLmwrf_SUdwSpEVT4826xCcl_DEXYqA6ktihQcKgS4CcLg315FlcH-zv8GhiKMwWGWcMmtBTuJWM9hRByNUNTCsC97DCQKqtSc9DBwdArULW6cl7hFUFia3xcgQfo_X1sFG4FpdXgu3pBbq8-Rt8VpiOF9rEgWEpxP4HMJ1S-T3wsqN--WClcbLIsqDz3oMvhzIzt3Sm8PpU4fnK60E_dSYp6hJkE_rMq3msfmrRz98XPY13ryim9xDFmXBjMMlwUFjMFslKj92XfzjCoqdq4efR2oN7CktvJj-w1G51WrZXwBo99m0zulhIjYCjznuymNYmWsOLaPXmWkDC6_WoAfbBildHM56eqnQTbwpJ24_VZHM",
          CURLOPT_HTTPHEADER => [
            "Content-Type: application/x-www-form-urlencoded"
          ],
          CURLOPT_SSL_VERIFYPEER=>false,
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            $jsonResp = json_decode($response,true);
            $myfile = fopen("testfile.txt", "w") ;
            fwrite($myfile,$jsonResp['refresh_token']);
            fclose($myfile);
            return $jsonResp;
        }
    }
    $resp = getTokens();
    
    foreach($resp as $key=>$value){
        echo $key.' : '.$value;
        echo '<br/><br/>';
    }
    
    $myfile = fopen("testfile.txt", "r") ;
    echo "Token : ".fread($myfile,filesize("testfile.txt"));
    fclose($myfile);

?>