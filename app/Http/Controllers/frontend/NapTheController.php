<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NapTheController extends Controller
{
    public function index()
    {
        return view('napthe');
    }

    public function store(Request $request)
    {
//        $seri = isset($_POST['txtseri']) ? $_POST['txtseri'] : '';
        $seri = $request->get('txtseri');
//        $sopin = isset($_POST['txtpin']) ? $_POST['txtpin'] : '';
        $sopin = $request->get('txtpin');
//        $card_value = isset($_POST['card_value']) ? $_POST['card_value'] : '';
        $card_value = $request->get('card_value');
//Loai the cao (VINA, MOBI, VIETEL, VTC, GATE)
//        $mang = isset($_POST['chonmang']) ? $_POST['chonmang'] : '';
        $mang = $request->get('chonmang');
        $user = $request->get('txtuser');
        if ($mang == 2) {
            $ten = "Mobifone";
        } else if ($mang == 1) {
            $ten = "Vietel";
        } else $ten = "Vinaphone"; //id = 3 la mang VINA

//Mã MerchantID dang kí trên napthengay.com
        $merchant_id = '4297';
//Api email, email tai khoan dang ky tren napthengay.com
        $api_email = 'cntt510@gmail.com';
//mat khau di kem ma website dang kí trên  napthengay.com
        $secure_code = '339b6186396da6920102ed0ad0bd8b0c';
//mã giao dịch
        $trans_id = time();  //mã giao dịch do bạn gửi lên, Napthengay.com sẽ trả về
        $api_url = 'http://api.napthengay.com/v2/';


        $arrayPost = array(
            'merchant_id' => intval($merchant_id),
            'api_email' => trim($api_email),
            'trans_id' => trim($trans_id),
            'card_id' => trim($mang),
            'card_value' => intval($card_value),
            'pin_field' => trim($sopin),
            'seri_field' => trim($seri),
            'algo_mode' => 'hmac'
        );

//        echo "<pre>";
//        print_r($arrayPost);
//        echo "</pre>";

        $data_sign = hash_hmac('SHA1', implode('', $arrayPost), $secure_code);

        $arrayPost['data_sign'] = $data_sign;

        $curl = curl_init($api_url);

        curl_setopt_array($curl, array(
            CURLOPT_POST => true,
            CURLOPT_HEADER => false,
            CURLINFO_HEADER_OUT => true,
            CURLOPT_TIMEOUT => 120,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_POSTFIELDS => http_build_query($arrayPost)
        ));

        $data = curl_exec($curl);

        $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        $result = json_decode($data, true);

        $time = time();

        if ($status == 200) {
            $amount = $result['amount'];
            switch ($amount) {
                case 10000:
                    $xu = 10000;
                    break;
                case 20000:
                    $xu = 20000;
                    break;
                case 50000:
                    $xu = 50000;
                    break;
                case 100000:
                    $xu = 100000;
                    break;
                case 200000:
                    $xu = 200000;
                    break;
                case 500000:
                    $xu = 500000;
                    break;
            }

            if ($result['code'] == 100) {
                $dbhost = "localhost";
                $dbuser = "root";
                $dbpass = "";
                $dbname = "edushop";
                $db = mysql_connect($dbhost, $dbuser, $dbpass) or die("cant connect db");
                mysql_select_db($dbname, $db) or die("cant select db");
                mysql_query("UPDATE users SET coins = coins + $xu WHERE login ='$user';");


                // Xu ly thong tin tai day
                $file = "carddung.log";
                $fh = fopen($file, 'a') or die("cant open file");
                fwrite($fh, "Tai khoan: " . $user . ", Loai the: " . $ten . ", Menh gia: " . $amount . ", Thoi gian: " . $time);
                fwrite($fh, "\r\n");
                fclose($fh);
                echo '<script>alert("Bạn đã thanh toán thành công thẻ ' . $ten . ' mệnh giá ' . $amount . ' ");</script>';
            } else {
                echo 'Status Code:' . $result['code'] . '<hr >';
                $error = $result['msg'];
                echo $error;
                $file = "cardsai.log";
                $fh = fopen($file, 'a') or die("cant open file");
                fwrite($fh, "Tai khoan: " . $user . ", Ma the: " . $sopin . ", Seri: " . $seri . ", Noi dung loi: " . $error . ", Thoi gian: " . $time);
                fwrite($fh, "\r\n");
                fclose($fh);
                echo '<script>alert("' . $error . '!");</script>';
            }
        } else {
            echo 'Status Code:' . $status . ' . Máy chủ gặp sự cố<hr >';
        }
    }
}
