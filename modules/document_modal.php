<div class="section">
    <div class="fixed-action-btn">
        <a class="btn-floating btn-large waves-light btn modal-trigger deep-orange pulse" href="#doc_modal">
            <i class="large material-icons">add</i>
        </a>
    </div>


    <!----MODAL AJOUT DOCUMENT----->
    <div id="doc_modal" class="modal bottom-sheet">
        <div class="modal-content">
            <h5>Ajouter un fichier</h5>
            <div class="row">
                <div class=" col s2 m2 l2 ">
                    <label>Séléctionnez une catégorie</label>
                    <select class="browser-default" form="getfile" name="categorie">
                        <option value="" selected disabled>Catégorie</option>
                        <?php
                        //scan et affichage des dossier présents dans le répertoire
                        for ($i = 2; $i < count(scandir($directory)); $i++) {
                            echo "<option value=\"" . $dirs[$i] . "\">" . $dirs[$i] . "</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
            <label>Séléctionnez un fichier (.pdf / 20Mo max.)</label>
            <div class="row">
                <form method="post" action="script/upload.php" enctype="multipart/form-data" id="getfile">

                    <div class=" col s9 m9 l9 file-field input-field">
                        <div class="btn waves-light">
                            <span>Fichier</span>
                            <input type="file" name="fileToUpload">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate " type="text">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn modal-close waves-effect waves-red" >Annuler</a>
                        <!--<button class="modal-close waves-effect btn red">Annuler<i class="material-icons right bottom-sheet">cancel</i></button>-->
                        <button type="submit" class="modal-action  waves-effect btn green " name="action">Ajouter<i class="material-icons right">file_upload</i></button>
                    </div>
                </form>


            </div>

        </div>
    </div>
</div>

<!----MODAL SUPPRESSION DOCUMENT----->
<div id="delete_doc_modal" class="modal">
    <div class="modal-content">
        <h4>Suppression d'un document</h4>
        <p>Etes vous sur de vouloir supprimer ce document ?</p>
    </div>
    <div class="modal-footer">
        <form method="post" action="script/doc_delete.php" enctype="multipart/form-data" id="deleteDoc_form"
              class="doc-form-delete">
            <input id="file_path" type="hidden" name="link">
        </form>
        <a href="#" class="btn modal-close waves-effect ">Annuler</a>
        <button type="submit" class=" waves-effect btn red " name="action" id="deleteDoc_submit" form="deleteDoc_form">Supprimer<i
                    class="material-icons right">delete</i></button>
    </div>
</div>













