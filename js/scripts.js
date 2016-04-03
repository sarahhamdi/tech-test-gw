$(function(){

	console.log("It's working");

	var name = "https://www.youtube.com/watch?v=8nGd36NhmTE";
	var newname = name.replace(/watch?v=/, "embed/");
	return newname;

});