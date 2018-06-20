<?php 
	//Incorporar CSS

	//Estilos CSS
	function dl_enqueue_style(){
		$theme_data = wp_get_theme();

		//Registrar estilos de Bootstrap
		wp_register_style(
			'bootstrap_css',
			'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css',
			null, //no hay array
			$theme_data->get('3.3.7'));

		//Registrar estilos CSS "main.css"
		wp_register_style(
			'main', 
			get_parent_theme_file_uri('/css/main.css'),
			null, //no hay array
			$theme_data->get('1.0'));

		//llamar estilos bootstrap_css
		wp_enqueue_style('bootstrap_css');
		//llamar estilos CSS main
		wp_enqueue_style('main');
	}

	add_action('wp_enqueue_scripts', 'dl_enqueue_style');

	//Incorporar JS

	//Registrar JS
	function dl_enqueue_scripts() {
		$theme_data = wp_get_theme();

		//Registrar JS de Bootstrap
		wp_register_script(
			'bootstrap_js', 
			'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', 
			array('jquery'), //wp incluye jquery
			'3.3.7', 
			false); //true footer, false header

		//Registrar scripts
		wp_register_script(
			'scripts', 
			get_parent_theme_file_uri('/js/script.js'), 
			null, 
			'1.0', 
			false); //true footer, false header

		//llamar script de jquery
		wp_enqueue_script('jquery');

		//llamar script de js de bootstrap
		wp_enqueue_script('bootstrap_js');

		//llamar script
		wp_enqueue_script('scripts');
	}

	add_action('wp_enqueue_script', 'dl_enqueue_scripts')
?>