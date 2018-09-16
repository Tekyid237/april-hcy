<?php

if(!function_exists('set_page_title')){

	/**
     * Permet de définir le title des pages.
     *
     * @param  string  $title
     * @var string  $base_title
     * @return string
     */

	function set_page_title(string $title){
		$base_title = config('app.name');

		if($title === ''){
			return $base_title;
		}else{
			return $title . ' - ' . $base_title;
		}
	}
}

if(!function_exists('set_active')){

	/**
     * Permet d'ajouter la classe "active" sur les liens du menu de navigation.
     *
     * @param  string  $route
     * @return string
     */

	function set_active(string $route){
		return Route::is($route) ? 'active' : '';
	}
}