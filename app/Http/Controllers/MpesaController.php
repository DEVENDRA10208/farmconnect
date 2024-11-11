<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MpesaController extends Controller
{
    
    public function index(){
        return view('/payment');
    }
    public function mpesaSTKPush(Request $request){

        
            // Initialize the variables
            $consumer_key = 'KkksX68PB05cjUqW5Hue9OCBvBFp1hFi';
            $consumer_secret = 'f5LJN6CJccVj3nSN';
            $Business_Code = '174379';
            $Passkey = 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';
            $Type_of_Transaction = 'CustomerPayBillOnline';
            $Token_URL = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
            $phone_number = $request->input('phone_number');
            $OnlinePayment = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
            $amount = $request->input('amount');
            $CallBackURL = 'https://mydomain.com/path';
            $Time_Stamp = date("Ymdhis");
            $password = base64_encode($Business_Code . $Passkey . $Time_Stamp);




            $curl_Tranfer = curl_init();
            curl_setopt($curl_Tranfer, CURLOPT_URL, $Token_URL);
            $credentials = base64_encode($consumer_key . ':' . $consumer_secret);
            curl_setopt($curl_Tranfer, CURLOPT_HTTPHEADER, array('Authorization: Basic ' . $credentials));
            curl_setopt($curl_Tranfer, CURLOPT_HEADER, false);
            curl_setopt($curl_Tranfer, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curl_Tranfer, CURLOPT_SSL_VERIFYPEER, false);
            $curl_Tranfer_response = curl_exec($curl_Tranfer);

            $token=json_decode($curl_Tranfer_response)-> access_token;

            $curl_Tranfer2 = curl_init();
            curl_setopt($curl_Tranfer2, CURLOPT_URL, $OnlinePayment);
            curl_setopt($curl_Tranfer2, CURLOPT_HTTPHEADER, array('Content-Type:application/json', 'Authorization:Bearer ' . $token));

            $curl_Tranfer2_post_data = [
                'BusinessShortCode' => $Business_Code,
                'Password' => $password,
                'Timestamp' =>$Time_Stamp,
                'TransactionType' =>$Type_of_Transaction,
                'Amount' => $amount,
                'PartyA' => $phone_number,
                'PartyB' => $Business_Code,
                'PhoneNumber' => $phone_number,
                'CallBackURL' => $CallBackURL,
                'AccountReference' => 'FarmConnect',
                'TransactionDesc' => 'Delivery Fee',
            ];

            $data2_string = json_encode($curl_Tranfer2_post_data);
            curl_setopt($curl_Tranfer2, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl_Tranfer2, CURLOPT_POST, true);
            curl_setopt($curl_Tranfer2, CURLOPT_POSTFIELDS, $data2_string);
            curl_setopt($curl_Tranfer2, CURLOPT_HEADER, false);
            curl_setopt($curl_Tranfer2, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($curl_Tranfer2, CURLOPT_SSL_VERIFYHOST, 0);
            $curl_Tranfer2_response = json_decode(curl_exec($curl_Tranfer2));

            //echo json_encode($curl_Tranfer2_response, JSON_PRETTY_PRINT);
             return view('/confirmpayment');
    }
  
}
