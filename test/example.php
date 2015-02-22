<?php
error_reporting(E_ALL);
require_once "../keepassphp/keepassphp.php";

//define("EL", PHP_EOL);
//define("DS", DIRECTORY_SEPARATOR);

$dbid = "aaa";
$pwd1 = "ccc";
$mainPwd = "sample";
$kdbxFile = "keepassphp/data/secure/kdbx/Sample.kdbx";
$keyfile = null;
$usePwdForCK = true;

function out($str) {
   echo '[' . date('H:i:s') . '] ' . $str . PHP_EOL;
}

KeePassPHP::init(true);
if (!KeePassPHP::$isError) {
   if(!KeePassPHP::exists($dbid) || KeePassPHP::checkPassword($dbid, $mainPwd)) {
//      $keys = $usePwdForCK ? array(array(KeePassPHP::KEY_PWD, $mainPwd)) : array();
//      if($pwd1 != '')
//         $keys[] = array(KeePassPHP::KEY_PWD, $pwd1);
//      if($keyfile != null)
//         $keys[] = array(KeePassPHP::KEY_FILE, $keyfile);
//      if(KeePassPHP::checkKeys($kdbxFile, $keys)) {
//         if(KeePassPHP::tryAdd($kdbxFile, $dbid, $mainPwd, $keys))
//            out("Success!");
//      }
//      else {
//         out("Meh");
//      }
   }
   else {
      out("blargh");
   }
}
else {
   out("KeePassPHP not started!");
}

out("Error: " . (KeePassPHP::$isError ? "true" : "false"));
KeepassPHP::$errordump;
?>
