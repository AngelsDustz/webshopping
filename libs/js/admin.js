function showHover(button){
	if ($(button).children().css("display") == "none"){
		$(button).children().css("display", "block");
	} else {
		$(button).children().css("display", "none");
	}
}