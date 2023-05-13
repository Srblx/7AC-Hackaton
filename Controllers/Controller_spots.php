<?php

class Controller_spots extends Controller
{
	//* L'action par défaut redirige vers l'action "home"
	public function action_default()
	{
		$this->action_home();
	}

	//* L'action "home" affiche la vue "home"
	public function action_spots()
	{
		$this->render("spots_bio");
	}


}
