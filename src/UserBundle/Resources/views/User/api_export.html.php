<?php 
$followings=array();
for ($i=0; $i < sizeof($users); $i++) { 
	for ($j=$i+1; $j < sizeof($users); $j++) { 
		if ($users[$i]["ringtone"]->getCreated()<$users[$j]["ringtone"]->getCreated()) {
			$temp = $users[$i];
			$users[$i] = $users[$j];
			$users[$j] =$temp ;
		}
	}
}
$max = 10;
for ($i=0; $i < sizeof($users); $i++) { 
	$a["id"]=$users[$i]["id"];
	$a["name"]=$users[$i]["name"];
	$a["image"]=$users[$i]["image"];
	$a["trusted"]=$users[$i]["trusted"];
	$a["label"]=$view['time']->diff($users[$i]["ringtone"]->getCreated());
	$followings[]=$a;
	if ($i==9) {
		break;
	}
}
echo json_encode($followings, JSON_UNESCAPED_UNICODE);

?>