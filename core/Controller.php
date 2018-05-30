<?php 
	class Controller{
		public function loadView($nameView, $dadosView = array()){
				extract($dadosView);
			require "views/".$nameView.".php";
		}
	}
?>