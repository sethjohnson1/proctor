<?php
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
 
 	if (Configure::read('allowAll')=='yes'){
		Router::connect('/', array('controller' => 'artworks', 'action' => 'index'));
	}
	else{
		Router::connect('/', array('controller' => 'artworks', 'action' => 'front'));
		Router::connect('/castings', array('controller' => 'castings', 'action' => 'front'));
	}

	
	
	
	
/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
