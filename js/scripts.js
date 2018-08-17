$(document).ready(function () {
//initialisation des modals
    $('#doc_modal').modal();
    $('#annuaire_modal').modal();
    $('#edit_modal').modal();
    $('#delete_modal').modal();
    $('#news_modal').modal();
    $('#quote_modal').modal();
    $('#info_modal').modal();
    $('#login_modal').modal();
    $('#delete_doc_modal').modal();
    $('select').material_select();
    $('.parallax').parallax();

    //Envoi de formulaire lorsque l'on tape Enter
    $(function () {
        $('form').each(function () {
            $(this).find('input').keypress(function (e) {
                if (e.which == 10 || e.which == 13) {
                    this.form.submit();
                }
            });
            $(this).find('input[type=submit]').hide();
        });
    });





    // recupération du chemin du fichier
    $('a',this).on('click',function () {

            $('#file_path').val( $($("#file-path" + $($(this).parent().get(0)).attr("id"))).attr("href"));

        // var div = $(this).parent().get(0);
        // var id = $(div).attr("id");
        // var path = $("#file-path" + id);
        // var link = $(path).attr("href");
        //     $('#file_path').val(link);
    });

    // Auto remplissage modal annuaire
    $("td", this).on("click", function () {
        var tds = $(this).parents("tr").find("td");
        console.log(tds);
        $.each(tds, function (i, v) {
            $($(".data-form input")[i]).val($(v).text());
        });

        Materialize.updateTextFields();
    });


    // recupération de l'id pour supression collaborateur
    $('.delete_user', this).on('click',function () {
        var id = $(this).parents("tr").find("#user_id");
        $(function () {
            $('.data-form-delete input').val(id.text());
        });
    });


    //Envoie du formulaire lors du clic
    document.getElementById("login_submit").onclick = function () {
        document.getElementById("login_form").submit();
    };

    document.getElementById("delete_submit").onclick = function () {
        document.getElementById("delete_form").submit();
    };

});





