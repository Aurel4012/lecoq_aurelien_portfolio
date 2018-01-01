<?php 
// header('Content-Type: application/json');
$retour = array();
$retour["scale"] = "human";
$retour["title"]["media"] = array('caption' => '','credit' => '','url' => 'http://' ,'thumb' => '');
$retour["title"]["text"] = array("headline" => "","text" => "<p>TimelineJS is an open-source tool that enables you to build visually-rich interactive timelines and is available in 40 languages.</p><p>You're looking at an example of one right now.</p><p>Click on the arrow to the right to learn more.</p>");
$retour["events"] = array();

//param à mettre en boucle
$data["start_date"] = array('year' => '','month' => '','day' => '' ,'hour' => '','minute' => '','second' => '' ,'millisecond' => '','format' => '');
$data["group"] ='hello';
$data["media"] = array('caption' => '','credit' => '','url' => 'http://' ,'thumb' => '');
$data["text"] = array("headline" => "","text" => "<p>TimelineJS is an open-source tool that enables you to build visually-rich interactive timelines and is available in 40 languages.</p><p>You're looking at an example of one right now.</p><p>Click on the arrow to the right to learn more.</p>");

array_push($retour["events"], $data);
//test 2eme insertions
$data["start_date"] = array('year' => '','month' => '','day' => '' ,'hour' => '','minute' => '','second' => '' ,'millisecond' => '','format' => '');
$data["group"] ='hello';
$data["media"] = array('caption' => '','credit' => '','url' => 'http://' ,'thumb' => '');
$data["text"] = array("headline" => "","text" => "<p>TimelineJS is an open-source tool that enables you to build visually-rich interactive timelines and is available in 40 languages.</p><p>You're looking at an example of one right now.</p><p>Click on the arrow to the right to learn more.</p>");

 array_push($retour["events"], $data);
echo json_encode($retour);
?>
