function startTime(){
	// Start action for Time
	var min = 10;
	var sec = 0;
	timeout = setInterval(function(){
		if(min == 0 && sec == 0){
			$('#time').html("Time " + min + ":" + sec + "0");
			clearTimeout(timeout);
		}
		if((sec % 60) == 0){
			$('#time').html("Time " + min + ":" + sec + "0");
			min--;
			sec = 59;
		}else if(sec < 10 && sec > 0){
			$('#time').html("Time " + min + ":" + "0" + sec);
			sec--;
		}else{
			$('#time').html("Time " + min + ":" + sec);
			sec--;
		}
	}, 1000);
	// End action for Time
}