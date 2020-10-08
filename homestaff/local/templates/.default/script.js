$(document).ready(function() {
	
			var params = {
				changedEl: "select",
				visRows: 5,
				scrollArrows: true
			}
			cuSel(params);

	$(".cap_key_1, .Отправить").on("click", function() {
  	$(".плашка_1").toggle();	
		});

	$(".cap_key_2, .Отправить_2").on("click", function() {
  	$(".плашка_2").toggle();
		});
});
