$(document).ready(function(){
  $('.questions').on('change focus', function(){
    var old_input_value = '{{Input::old("sponsoring_organisation_details")}}';
    var select = $(this),
      select_name = select.attr('name'),
      form_group = select.parents(".form-group"),
      value = select.val(),
      text = $('option[value="' + value +'"]', select).text(),
      new_input = $('<input name="sponsoring_organisation_details" class="form-control" id="more">')
      last_character = text.slice(-1);
      var wrap = $('<div class="more-wrapper">');


    if (last_character == "*") {
      if (!$('#more').length) {
        wrap.append('<br><label>Name of <span>' + text +' </span> </label>');
        wrap.append(new_input);
        form_group.append(wrap);
      } else {
        $('label span', form_group).text(text);
      }
    } else {
      $('.more-wrapper', form_group).remove();
    }
  });


  // MultiSelect for Different Skills
  $('#skills-ten').multiselect({
    buttonClass: 'btn btn-default'
  });
  $('#skills-five').multiselect({
    buttonClass: 'btn btn-default'
  });

  // Textarea count
  // $("textarea").textareaCounter({ limit: 100 });
  $("#statement-one").textareaCounter({ limit: 100 });
  $("#statement-two").textareaCounter({ limit: 100 });
  $("#statement-three").textareaCounter({ limit: 100 });


  // DatePicker for Date of Birth
  $('#datepicker').datepicker({
      format: "yyyy-mm-dd",
      startDate: "1940-01-01",
      endDate: "1995-01-01"
  });
});