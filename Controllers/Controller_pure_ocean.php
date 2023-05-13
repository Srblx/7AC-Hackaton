<?php

class Controller_pure_ocean extends Controller
{
	//* L'action par défaut redirige vers l'action "home"
	public function action_default()
	{
		$this->action_home();
	}

	//* L'action "home" affiche la vue "home"
	public function action_pure_ocean()
	{
		$this->render("pure_ocean");
	}


}
