$(function(){
  $.get("http://lpmailer.herokuapp.com/form.html")

	//////////
  //=====  Forms  =====//
  //
  var recipient = 'knplink@gmail.com';

	$("form").submit(function(event){
		event.preventDefault();

    // Fix required not supported, emulate it
    if (!Modernizr.input.required) {
      var requiredInputsAreEmpty = $(this).find("input[required]").filter(function(){ return $(this).val() == ""; }).length;
      if (requiredInputsAreEmpty) {
        alert("Поля обязательны для заполнения!");
        return false;
      }
    }

		$(this).find('[name="recipient"]').val(recipient);

    $('button, a').attr("disabled", true);

		$.post('http://lpmailer.herokuapp.com/', $(this).serialize()).always(function(){
			window.location = 'thank.html';
		})
	});
});