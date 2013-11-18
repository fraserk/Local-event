$('#myTab a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
 $('#when').timepicker({
				showMeridian: false,
				minuteStep: 15,
				disableFocus: true
 });
