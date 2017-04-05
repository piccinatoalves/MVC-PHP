<?php
require 'config.php';



spl_autoload_register(function ($class){
	if (strpos($class, 'Controller') > -1) {
		
		if (file_exists('controllers/'.$class.'.php')) {

			require_once 'controllers/'.$class.'.php';
		}

		}else if(file_exists('models/'.$class.'.php')){

			require_once 'models/'.$class.'.php';
		}else{
			require_once 'core/'.$class.'.php';
		}	
	
}); // realiza o carregamento automatico dos arquivos do sistema.
$core = new Core();
$core->run();

//faz o cache das paginas 
/*
if(file_exists('cache.cache')){
	require 'cache.cache';

}else{
	ob_start();
	require 'home.php';
	$html = ob_get_contents();
	ob_end_clean();

	file_put_contents('cache.cache', $html);

	echo $hmtl;
} */

?>