$(function ()
{
    var original_input =  $("#quote_edit");
    var original_text = $("#quote_edit").text();
    var edit_icon = $("#edit_quote");
    var check_icon = $("#check_quote");
    var cancel_icon = $("#cancel_quote");
    edit_icon.click(edit);
    check_icon.click(validate);
    cancel_icon.click(cancel);
    var new_input = $("<input class=\"text_editor  sub-title\" id='quote_input'/>");

    function edit()
    {
        new_input.val(original_text);
        $("#quote_edit").replaceWith(new_input);
        new_input.focus();
        check_icon.css('display', 'block');
        cancel_icon.css('display', 'block');
        edit_icon.css('display', 'none');
    }

    function validate()
    {
        var new_text = $("#quote_input").val();
        var updated_text = $("<h5 class=\"light sub-title editable_text\" id='quote_edit'>");
        updated_text.text(new_text);
        $("#quote_input").replaceWith(updated_text);
        check_icon.css('display', 'none');
        cancel_icon.css('display', 'none');
        edit_icon.css('display', 'block');
    }

    function cancel()
    {
        $("#quote_input").replaceWith(original_input);
        check_icon.css('display', 'none');
        cancel_icon.css('display', 'none');
        edit_icon.css('display', 'block');
    }


});