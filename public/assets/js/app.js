$(document).ready(function(){
  $('#has-extras').on('change', function(){
    var select = $(this),
      select_name = select.attr('name'),
      form_group = select.parents(".form-group"),
      value = select.val(),
      text = $('option[value="' + value +'"]', select).text(),
      new_input = $('<input name="' + select_name + '_details" class="form-control" id="org-more">'),
      hidden_input = $('<input name="' + select_name + '_details" type="hidden" value="" class="form-control" id="org-more">'),
      last_character = text.slice(-1);
      var wrap = $('<div class="org-wrapper">');

    if (last_character == "*") {
      if (!$('#more').length) {
        wrap.append('<br><label>Name of <span>' + text +' </span> </label>');
        wrap.append(new_input);
        form_group.append(wrap);
      } else {
        $('label span', form_group).text(text);
      }
    } else {
      $('.org-wrapper', form_group).remove();
      form_group.append(hidden_input);
    }
  });

  $('#role-extras').on('change', function(){
    var select = $(this),
      select_name = select.attr('name'),
      form_group = select.parents(".form-group"),
      value = select.val(),
      text = $('option[value="' + value +'"]', select).text(),
      new_input = $('<input name="' + select_name + '_details" class="form-control" id="role-more">'),
      hidden_input = $('<input name="' + select_name + '_details" type="hidden" value="" class="form-control" id="role-more">'),
      last_character = text.slice(-1);
      var wrap = $('<div class="role-wrapper">');

    if (last_character == "*") {
      if (!new_input == false) {
        wrap.append('<br><label><span>' + text +' - Please specify</span> </label>');
        wrap.append(new_input);
        form_group.append(wrap);
      } else {
        $('label span', form_group).text(text);
      }
    } else {
      $('.role-wrapper', form_group).remove();
      form_group.append(hidden_input);
    }
  });


  // MultiSelect for Different Skills
  $('#skills-nine').multiselect({
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