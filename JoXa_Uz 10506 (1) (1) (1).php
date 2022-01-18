<?php

//Rustambek_Uz

if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
include 'madeline.php';

$MadelineProto = new \danog\MadelineProto\API('session.madeline');
$MadelineProto->start();

$time=date("H:i",strtotime("4 hour"));
$input = ["nik, bioga soat qoʻyish @SoatTime_robot час|$time","ѕaloм alιĸ warтмaѕ мaqѕadnι yoz. час|$time"];
//Biodagi harflar soni 65tadan oshmasin oldin bioga qoyib keyin kodga qowing. bolmasa soat ishlamaydi!\\
$rand=array_rand($input);
$text="$input[$rand]";
$nik = ["#The EnD"];
$nikrand=array_rand($nik);
$niktxt="$nik[$nikrand]";
$MadelineProto->account->updateProfile(['first_name'=>"$niktxt | $time",'about'=>"$text"]);
$MadelineProto->account->updateStatus(['offline' => false, ]);
//@Rustambek_Uz  bu yerga tegmang soat yurmay qoladi!\\
header('Content-type: image/jpg');

$urls = ["rasm.jpg"];
$rands = array_rand($urls);
$url="http://u4936.xvest6.ru/Usa/rasm.jpg=$time";"$urls[$rands]";
file_put_contents("rasm.jpg", file_get_contents("$url"));

$info = $MadelineProto->get_full_info('me');
$inputPhoto = ['_' => 'inputPhoto', 'id' => $info['User']['photo']['photo_id'], 'access_hash' => $info['User']['access_hash'], 'file_reference' => 'bytes'];
$deletePhoto = $MadelineProto->photos->deletePhotos(['id'=>[$inputPhoto]]);

$MadelineProto->photos->uploadProfilePhoto(['file' => "rasm.jpg" ]);
unlink("MadelineProto.log");
unlink("session.madeline");
//MANBA BILAN OL😡 @Secretius\\
?>