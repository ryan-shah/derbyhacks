<?php
set_include_path(get_include_path() . PATH_SEPARATOR . 'phpseclib');
include('Net/SSH2.php');

function raiseEl() {
        $ssh_add = "172.16.100.227";
        $ssh_port = "22";
        $user = "pi";
        $pass = "pi";

        $ssh = new Net_SSH2($ssh_add, $ssh_port);
        $success_login = $ssh->login($user, $pass);
        if(!$success_login) {
                exit('login go byebye');
        }
        $result = $ssh->exec("ls ~");
	echo $result;
}

function what() {
	$ssh_add = "172.16.100.167";
	$ssh_port = "22";
	$user = "pi";
	$pass = "notraspberry";
	$ssh = new Net_SSH2($ssh_add, $ssh_port);
	$success_login = $ssh->login($user, $pass);
	if(!$success_login) {
		exit('login by');
	}
	$result = $ssh->exec("ls ~");
	echo $result;
}

function what2() {
        $ssh_add = "172.16.100.227";
        $ssh_port = "22";
        $user = "pi";
        $pass = "pi";

        $ssh = new Net_SSH2($ssh_add, $ssh_port);
        $success_login = $ssh->login($user, $pass);
        if(!$success_login) {
                exit('login go byebye');
        }
        $result = $ssh->exec("python ~/toggleLock.py");
        echo $result;
}


raiseEl();
what();
what2();
?>
