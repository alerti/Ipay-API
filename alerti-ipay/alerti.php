<?php




	function ipay_stuf(){

		$url="https://apis.ipayafrica.com/payments/v2/transact";
		$hash=hash_hmac('sha256','012322212323400000718264080demoKES' , 'demoCHANGED');
		$postData = array(
					'live'=>0,
                    'curr'=>'KES',
                    'vid'=>'demo',
                    'cvv'=>'1234',
                    'cardno'=>'1234123412341234',
                    'month'=>'3',
                    'year'=>'2019',
                    'cust_address'=>'Nairobi',
                    'cust_postalcode'=>'10100',
                    'cust_city'=>'Nairobi',
                    'cust_stateprov'=>'central',
                    'cust_country'=>'Kenya',
                    'sid'=>'1111',
                    'fname'=>'Alex',
                    'lname'=>'Mukhunzi',
                    'hash'=>$hash,
                    'inv'=>'12323',
                    'oid'=>'123222',
                    'amount'=>'40000',
                    'tel'=>'0718264080'
                    
                );


                $ch =curl_init();
                curl_setopt_array($ch, array(
                    CURLOPT_URL => $url,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_POST => true,
                    CURLOPT_POSTFIELDS => $postData

                ));

                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

                $output = curl_exec($ch);

                if (curl_errno($ch)) {
                    // echo 'error:' . curl_error($ch);
                    $output = curl_error($ch);
                }
        
        # $output;

                curl_close($ch);


                return $output;


	}


	function append_f($data){
		$hd=fopen('log.txt', 'w');
		fwrite($hd, $data);
		fclose($hd);
		return '<html><body><div style="width:556px;margin:20px auto;padding:12px;background:lightblue;font-weight:bold;"><h3>successful.</h3>
		<a href="read-me-file.php">VIEW READ ME</a>|  <a href="log-display-file.php">show log file</a><hr><p> The reult has been successifully added to the log file. Please check into in this app root directory.<br><b>Thank You!</b></div></body></html>';
	}





 ?>