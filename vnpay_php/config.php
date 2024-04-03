<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
  
$vnp_TmnCode = "R0V5S95C"; //Mã định danh merchant kết nối (Terminal Id)
$vnp_HashSecret ="ZNTRTFCOMQQYSXZJJXHNDWVEHWZERPPM"; //Secret key
$vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
$vnp_Returnurl = "http://localhost/DuAn1_Nhom7/index.php?act=show_don_hang&id_tuor=".$id_tuor."&id_don_hang=".$id_don_hang;
$vnp_apiUrl = "http://sandbox.vnpayment.vn/merchant_webapi/merchant.html";
$apiUrl = "https://sandbox.vnpayment.vn/merchant_webapi/api/transaction";
//Config input format
//Expire
$startTime = date("YmdHis");
$expire = date('YmdHis',strtotime('+5 minutes',strtotime($startTime)));
