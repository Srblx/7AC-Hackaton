<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
class Controller_home extends Controller
{
	//* L'action par défaut redirige vers l'action "home"
	public function action_default()
	{
		$this->action_home();
	}

	//* L'action "home" affiche la vue "home"
	public function action_home()
	{
	    $m = Model::get_model();

	
	    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_date_donnees'])) {
			$date_donnee = $_POST['date_donnee'];
	        $date_donnee = $m->get_donnees_by_date($date_donnee);
			$donnees = $m->get_donnees();
	        $data = ["date_donnees" => $date_donnee,"donnees" => $donnees, "position" => 1];
	        $this->render("home", $data);
	    } else {
			$donnees = $m->get_donnees();
	        $data = ["donnees" => $donnees, "position" => ""];
	        $this->render("home", $data);
	    }
	}


}
