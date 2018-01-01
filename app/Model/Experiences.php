<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Experiences extends Model
{
	public static function timeline_json($exp){
	$retour = array();
	$retour["scale"] = "human";
	$retour["title"]["media"] = array('caption' => '','credit' => '','url' => 'img/html-1832991_1280.png' ,'thumb' => '');
	$retour["title"]["text"] = array("headline" => "","text" => "<p>Bienvenue sur mon portfolio. Ici vous pouvez naviguer de projets en projets par ordre chronologique et obtenir un bref descriptif.</p><p>Naviguez avec les flêches ou la frise chronologique pour en savoir plus</p>");
	$retour["events"] = array();
		foreach ($exp as $exp) {
	     $data["start_date"] = array('year' => date('Y', strtotime($exp->date_exp)),'month' => date('m', strtotime($exp->date_exp)),'day' => date('d', strtotime($exp->date_exp)) ,'hour' => '','minute' => '','second' => '' ,'millisecond' => '','format' => '');
		 $data["group"] ='hello';
		 $data["media"] = array('caption' => $exp->url_exp,'credit' => '','url' => "<iframe width='480' height='360' src='".$exp->url_exp."' frameborder='0' scrolling='yes' allowtransparency='true' style='background-color:transparent;'></iframe>" ,'thumb' => url('uploads/exp/'.$exp->file_exp));
		 $data["text"] = array("headline" => $exp->title_exp,"text" => $exp->description_exp);

         array_push($retour["events"], $data);
     	}//fin foreach
     	$response = response()->json($retour)->content();
		$handle = fopen("database.json", "w+");//ici ecrit le fichier json car passer le json en variable js ne fonctionne pas 
		fwrite($handle, $response);
		fclose($handle);
		return $response;

                                                }//fin function timeline_json
    protected $table = 'experiences';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_user','title_exp','description_exp','url_exp','file_exp','date_exp',//champs modifiable
        ]; 
}

