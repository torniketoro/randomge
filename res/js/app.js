(function(document) {
	'use strict';

	var app = document.querySelector('#app');

	app.displayInstalledToast = function() {
    	document.querySelector('#caching-complete').show();
  	};

	/*var app = document.querySelector('#app');

	page('/', home);
	page('/jokes', jokes);
	page('/toats', toasts);

	page({ hashbang: true });

	function home() {
		app.route = 'home';
	}

	function jokes() {
		app.route = 'jokes';
	}

	function toasts() {
		app.route = 'toasts';
	}*/

})(document);