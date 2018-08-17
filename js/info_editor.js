$(function ()
{
    var original_input =  $("#info_edit");
    var original_text = $("#info_edit").text();
    var edit_icon = $("#edit_info");
    var check_icon = $("#check_info");
    var cancel_icon = $("#cancel_info");
    edit_icon.click(edit);
    check_icon.click(validate);
    cancel_icon.click(cancel);
    var new_input = $("<textarea class=\"info-edit materialize-textarea\" id='info_input'/>");

    function edit()
    {
        new_input.val(original_text);
        $("#info_edit").replaceWith(new_input);
        new_input.focus();
        check_icon.css('display', 'block');
        cancel_icon.css('display', 'block');
        edit_icon.css('display', 'none');
    }

    function validate()
    {
        var new_text = $("#info_input").val();
        var updated_text = $("<p class=\"left-align\" id=\"info_edit\">");
        updated_text.text(new_text);
        $("#info_input").replaceWith(updated_text);
        check_icon.css('display', 'none');
        cancel_icon.css('display', 'none');
        edit_icon.css('display', 'block');
    }

    function cancel()
    {
        $("#info_input").replaceWith(original_input);
        check_icon.css('display', 'none');
        cancel_icon.css('display', 'none');
        edit_icon.css('display', 'block');
    }


});