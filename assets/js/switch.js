(function() {
	// Theme switch
	var themeSwitch = document.getElementById('dn');
	if(themeSwitch) {
		// initTheme(); // if user has already selected a specific theme -> apply it
		themeSwitch.addEventListener('change', function(event){
    	resetTheme(); // update color theme
    });

    function initTheme() {
    	var darkThemeSelected = (localStorage.getItem('themeSwitch') !== null && localStorage.getItem('themeSwitch') === 'dark');
    	// update checkbox
    	themeSwitch.checked = darkThemeSelected;
			// update body data-theme attribute
			darkThemeSelected ? document.body.setAttribute('data-theme', 'dark') : document.body.removeAttribute('data-theme');
    };

    function resetTheme() {
    	if(themeSwitch.checked) { // dark theme has been selected
    		document.body.setAttribute('data-theme', 'dark');
    		localStorage.setItem('themeSwitch', 'dark');
    		dark_mode = 1;
    	} else {
    		document.body.removeAttribute('data-theme');
    		localStorage.removeItem('themeSwitch');
    		dark_mode = 2;
    	} 

    	$.ajax({
	        type: 'post',
	        url: 'home/dark_mode/' + dark_mode,
	        processData: false,
	        contentType: false,
    	});
    };
	}
	
}());