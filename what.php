<?php
$green  = "\e[92m";
$red    = "\e[91m";
$lblue  = "\e[36m";

system('clear');
////////////// B A N N E R //////////////
echo "$lblue                ( Whatspamer )\n";
echo "$red   _______\n";
echo "  [       ]   Coded   : Rahmad\n";
echo "  | 0   0 |   Github  : github.com/rahmadxyz\n";
echo "//|   °   |\  expired : 20 Dec 2021\n";
echo "$ [__###__] $\n";
echo "  | |   | |\n";
echo "  ---   ---\n";
echo "\n\n";
////////////// B A N N E R //////////////


echo "$lblue Nomor Target : ";
$num = trim(fgets(STDIN));
echo " Pesan : ";
$msg = trim(fgets(STDIN));
echo " Jumlah : ";
$jum = trim(fgets(STDIN));
echo " Mohon Tunggu...";
echo "$green\n\n";

////////////// E K S E K U S I //////////////
for ($i = 0; $i < $jum; $i++){
     $curl = curl_init();
     curl_setopt($curl, CURLOPT_URL,"https://eu51.chat-api.com/instance86400/sendMessage?token=uzw1srgwttc8reuh");
     curl_setopt($curl, CURLOPT_POST, 1);
     curl_setopt($curl, CURLOPT_POSTFIELDS, "phone=" .$num. "&body=" .$msg);
     curl_exec($curl);
     curl_close($curl);
}
////////////// E K S E K U S I //////////////
?>
