$(document).ready(function(){
  $('.questions').on('change', function(){
    var select = $(this),
      select_name = select.attr('name'),
      form_group = select.parents(".form-group"),
      value = select.val(),
      text = $('option[value="' + value +'"]', select).text(),
      new_input = $('<input name="'+value+'" class="form-control"')
      last_character = text.slice(-1);
      var wrap = $('<div class="more-wrapper">');

      if (last_character == "*") {
        if (!new_input.length) {
          wrap.append('<br><label>Name of <span>' + text +' </span> </label>');
          wrap.append('<input name="'+value+'" class="form-control">');
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


  // DatePicker for Date of Birth
  $('#datepicker').datepicker({
      format: "yyyy-mm-dd",
      startDate: "1940-01-01",
      endDate: "1995-01-01"
  });
});