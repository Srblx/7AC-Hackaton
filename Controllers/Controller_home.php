<?php

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
		$data = ["donnees" => $m->get_donnees()];
		$this->render("home", $data);
	}


}
