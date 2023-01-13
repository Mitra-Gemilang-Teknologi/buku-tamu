	/*  Wizard */
	jQuery(function ($) {
		"use strict";
		$('form#wrapped').attr('action', 'review.php');
		$("#wizard_container").wizard({
			stepsWrapper: "#wrapped",
			submit: ".submit",
			beforeSelect: function (event, state) {
				if ($('input#website').val().length != 0) {
					return false;
				}
				if (!state.isMovingForward)
					return true;
				var inputs = $(this).wizard('state').step.find(':input');
				return !inputs.length || !!inputs.valid();
			}
		}).validate({
			errorPlacement: function (error, element) {
				if (element.is(':radio') || element.is(':checkbox')) {
					error.insertBefore(element.next());
				} else {
					error.insertAfter(element);
				}
			}
		});
		//  progress bar
		$("#progressbar").progressbar();
		$("#wizard_container").wizard({
			afterSelect: function (event, state) {
				$("#progressbar").progressbar("value", state.percentComplete);
				$("#location").text("(" + state.stepsComplete + "/" + state.stepsPossible + ")");
			}
		});
		// Validate select
		$('#wrapped').validate({
			ignore: [],
			rules: {
				select: {
					required: true
				}
			},
			errorPlacement: function (error, element) {
				if (element.is('select:hidden')) {
					error.insertAfter(element.next('.nice-select'));
				} else {
					error.insertAfter(element);
				}
			}
		});
	});

	// Summary 
	function getVals(formControl, controlType) {
		switch (controlType) {

			case 'rating_input_1':
				// Get the value for a input text
				var value = $(formControl).val();
				$("#rating_input_1").text(value);
				break;

			case 'rating_input_2':
				// Get the value for a input text
				var value = $(formControl).val();
				$("#rating_input_2").text(value);
				break;

			case 'rating_input_3':
				// Get the value for a input text
				var value = $(formControl).val();
				$("#rating_input_3").text(value);
				break;

			 case 'rating_input_4':
				// Get the value for a select
				var value = $(formControl).val();
				$("#rating_input_4").text(value);
				break;
				
			case 'review_message':
				// Get the value for a select
				var value = $(formControl).val();
				$("#review_message").text(value);
				break;

		}
	}