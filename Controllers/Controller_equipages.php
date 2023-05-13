<?php

class Controller_equipages extends Controller
{
	//* L'action par défaut redirige vers l'action "home"
	public function action_default()
	{
		$this->action_home();
	}

	//* L'action "home" affiche la vue "home"
	public function action_equipages()
	{
		$this->render("equipages");
	}


}
