<?php
//OS and browser detect by UA
//OSとブラウザを判定します。

//代入される変数
//$os=OS;$browser=Browser;$page_type=PageType
//$page_type=0:PCfull,1:PCsimple,2:cellphone,3:cellphoneSimple,4:smartPhone,5:Tablet
define('USER_AGENT',$_SERVER['HTTP_USER_AGENT']);


//OS判別
$os="";
$page_type=0;//0:PCフル 1:PC簡易 2:携帯 3:携帯シンプル
if (preg_match("/Win(dows )?NT 6\.1/", USER_AGENT)) {
    $os = "Windows 7";
    $page_type = 0;
} elseif (preg_match("/Win(dows )?NT 6\.0/", USER_AGENT)) {
    $os = "Windows Vista";
    $page_type = 0;
} elseif (preg_match("/Win(dows )?NT 5\.2/", USER_AGENT)) {
    $os = "Windows ";
    $page_type = 0;"Windows Server 2003";
    $page_type = 0;
} elseif (preg_match("/Win(dows )?(NT 5\.1|XP)/", USER_AGENT)) {
    $os = "Windows XP";
    $page_type = 0;
} elseif (preg_match("/Win(dows)? (9x 4\.90|ME)/", USER_AGENT)) {
    $os = "Windows Me";
    $page_type = 0;
} elseif (preg_match("/Win(dows )?(NT 5\.0|2000)/", USER_AGENT)) {
    $os = "Windows 2000";
    $page_type = 0;
} elseif (preg_match("/Win(dows )?98/", USER_AGENT)) {
    $os = "Windows 98";
    $page_type = 0;
} elseif (preg_match("/Win(dows )?NT( 4\.0)?/", USER_AGENT)) {
    $os = "Windows NT";
    $page_type = 0;
} elseif (preg_match("/Win(dows )?95/", USER_AGENT)) {
    $os = "Windows 95";
    $page_type = 0;
} elseif (preg_match("/!(iP)(Mac|PPC)/", USER_AGENT)) {
    $os = "Mac OS";
    $page_type = 0;
} elseif (preg_match("/Linux/", USER_AGENT) && !preg_match("/Android/", USER_AGENT)) {
    $os = "Linux";
    $page_type = 0;
} elseif (preg_match("/Ubuntu.+Linux/", USER_AGENT)) {
    $os = "Ubuntu";
    $page_type = 0;
} elseif (preg_match("/BSD/", USER_AGENT)) {
    $os = "BSD";
    $page_type = 0;
} elseif (preg_match("/SunOS/", USER_AGENT)) {
    $os = "Solaris";
    $page_type = 0;
} elseif (preg_match("/iPod/", USER_AGENT)) {
    $os = "iPod";
    $page_type = 4;
} elseif (preg_match("/iPad/", USER_AGENT)) {
    $os = "iPad";
    $page_type = 5;
} elseif (preg_match("/iPhone/", USER_AGENT)) {
    $os = "iPhone";
    $page_type = 4;
} elseif (preg_match("/Android/", USER_AGENT)) {
    $os = "Android";
    $page_type = 4;
} elseif (preg_match("/Windows Phone/", USER_AGENT)) {
    $os = "Windows Phone";
    $page_type = 4;
} elseif (preg_match("/BlackBerry/", USER_AGENT)) {
    $os = "BlackBerry";
    $page_type = 4;
} elseif (preg_match("/Symbian/", USER_AGENT)) {
    $os = "Symbian";
    $page_type = 4;
} elseif (preg_match("/Nintendo Wii/", USER_AGENT)) {
    $os = "Wii";
    $page_type = 2;
} elseif (preg_match("/Nintendo Gameboy/", USER_AGENT)) {
    $os = "Gameboy";
    $page_type = 2;
} elseif (preg_match("/Nitro/", USER_AGENT)) {
    $os = "DS";
    $page_type = 2;
} elseif (preg_match("/PlayStation Portable/", USER_AGENT)) {
    $os = "PSP";
    $page_type = 2;
} elseif (preg_match("/PS2/", USER_AGENT)) {
    $os = "PlayStation2";
    $page_type = 2;
} elseif (preg_match("/PLAYSTATION 3/", USER_AGENT)) {
    $os = "PlayStation3";
    $page_type = 2;
} elseif (preg_match("/PDA/", USER_AGENT)) {
    $os = "PDA";
    $page_type = 2;
} elseif (preg_match("/KDDI/", USER_AGENT)) {
    $os = "au";
    $page_type = 2;
} elseif (preg_match("/DoCoMo/", USER_AGENT)) {
    $os = "DoCoMo";
    $page_type = 2;
} elseif (preg_match("/J-PHONE|Vodafone|SoftBank/", USER_AGENT)) {
    $os = "SoftBank";
    $page_type = 2;
} else {
    $os = "Unknow";
    $page_type = 2;
}


//ブラウザ判別

$browser = "";
if (preg_match("/Sleipnir\/[0-9]+(\.[0-9]+)+/",USER_AGENT,$matches)){
 $browser = $matches[0];
}elseif (preg_match("/MSIE [0-9]+\.[0-9]+/",USER_AGENT,$matches)){
 $browser = $matches[0];
} elseif (preg_match("/Chrome\/[0-9]+(\.[0-9]+)+/",USER_AGENT,$matches)){
 $browser = $matches[0];
} elseif (preg_match("/Firefox\/[0-9]+(\.[0-9]+)+/",USER_AGENT,$matches)){
 $browser = $matches[0];
} elseif (preg_match("/Lunascape\/[0-9]+(\.[0-9])+(alpha[0-9])*/",USER_AGENT,$matches)){
 $browser = $matches[0];
} elseif (preg_match("/Safari/",USER_AGENT,$matches)){
 $browser = $matches[0];
} elseif (preg_match("/Opera \/?[0-9]+(\.[0-9]+)+/",USER_AGENT,$matches)){
 $browser = $matches[0];
} elseif (preg_match("/Konqueror\/[0-9]+(\.[0-9])+/",USER_AGENT,$matches)){
 $browser = $matches[0];
} elseif (preg_match("/Lynx\/[0-9]+(\.[0-9])+/",USER_AGENT,$matches)){
 $browser = $matches[0];
 $page_type = 3;
} elseif (preg_match("/w3m\/[0-9]+(\.[0-9])+/",USER_AGENT,$matches)){
 $browser = $matches[0];
 $page_type = 2;
} elseif (preg_match("/Wget\/[0-9]+(\.[0-9])+/",USER_AGENT,$matches)){
 $browser = $matches[0];
} else {
 $browser = "Unknown";
}

