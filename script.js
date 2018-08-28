  

  $('a#logout').on('click', function(){
  	   
  	    $.confirm({
  		title: 'Logout Confirmation',
  		content: 'Are you sure you want to logout?',
  		buttons: {
  			confirm: function() {
  				window.location.href = "index.php?logout='1'";
  				return true;
  			},
  			cancel: function() {
  				return false;
  			},
  		}
  	});
  });

	