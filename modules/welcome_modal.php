<div>
    <div class="fixed-action-btn click-to-toggle horizontal" id="welcome-btn">
        <a class="btn-floating btn-large deep-orange pulse">
            <i class="large material-icons">mode_edit</i>
        </a>
        <ul>
            <li><a class="btn-floating indigo tooltipped modal-trigger" data-position="top" data-tooltip="Ajouter une actu"
                   href="#news_modal"><i class="material-icons">add</i></a></li>
            <li><a class="btn-floating indigo darken-1 tooltipped modal-trigger" data-position="top"
                   data-tooltip="Editer la phrase du jour" href="#quote_modal"><i
                            class="material-icons">format_quote</i></a></li>
            <li><a class="btn-floating indigo darken-2 tooltipped modal-trigger" data-position="top" data-tooltip="Editer les infos"
                   href="#info_modal"><i class="material-icons">info_outline</i></a></li>
        </ul>
    </div>

    <!-- MODAL ACTU-->
    <div id="news_modal" class="modal bottom-sheet">
        <div class="modal-content">
            <h5>Ajouter une actualité</h5>
            <div class="row">
                <form method="post" action="script/news_add.php" enctype="multipart/form-data" id="news_add">
                    <div class="row">
                        <div class="input-field col s2">
                            <input id="title" type="text" class="validate" name="title">
                            <label for="title">Titre</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="body" class="materialize-textarea validate" name="body"></textarea>
                            <label for="body">Corps</label>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <a href="#" class="btn modal-close waves-effect waves-red">Annuler</a>
                        <button type="submit" class="modal-action  waves-effect btn green " name="action">Ajouter<i
                                    class="material-icons right">add</i></button>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <!-- MODAL QUOTE-->
    <div id="quote_modal" class="modal bottom-sheet">
        <div class="modal-content">
            <h5>Editer la phrase du jour</h5>
            <form method="post" action="script/quote_edit.php" enctype="multipart/form-data" id="quote_edit">
                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="content" class="materialize-textarea validate" name="content"></textarea>
                        <label for="content">Phrase du jour :</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn modal-close waves-effect waves-red">Annuler</a>
                    <button type="submit" class="modal-action  waves-effect btn green " name="action">Ajouter<i
                                class="material-icons right">format_quote</i></button>
                </div>
            </form>
        </div>

    </div>


    <!-- MODAL INFO-->
    <div id="info_modal" class="modal bottom-sheet">
        <div class="modal-content">
            <h5>Editer les infos</h5>
            <form method="post" action="script/info_edit.php" enctype="multipart/form-data" id="info_edit">
                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="info" class="materialize-textarea validate" name="info"></textarea>
                        <label for="info">Informations:</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn modal-close waves-effect waves-red">Annuler</a>
                    <button type="submit" class="modal-action  waves-effect btn green " name="action">Ajouter<i
                                class="material-icons right">info_outline</i></button>
                </div>
            </form>
        </div>
    </div>
</div>

