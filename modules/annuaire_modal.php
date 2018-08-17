<div class="section">
    <div class="fixed-action-btn">
        <a class="btn-floating btn-large waves-light btn modal-trigger deep-orange pulse" href="#annuaire_modal">
            <i class="large material-icons">add</i>
        </a>
    </div>
    <!-- SUPPRESSION ANNUAIRE -->
    <div id="delete_modal" class="modal">
        <div class="modal-content">
            <h4>Suppression d'un collaborateur</h4>
            <p>Etes vous sur de vouloir supprimer cette entrée ?</p>
        </div>
        <div class="modal-footer">
            <form method="post" action="script/user_delete.php" enctype="multipart/form-data" id="delete_form"
                  class="data-form-delete">
                <input id="user_id" type="text" name="id" hidden>
            </form>
            <a href="#" class="btn modal-close waves-effect ">Annuler</a>
            <!--<button class="modal-close waves-effect btn red">Annuler<i class="material-icons right bottom-sheet">cancel</i></button>-->
            <button type="submit" class="modal-action  waves-effect btn red " name="action" id="delete_submit">Supprimer<i
                        class="material-icons right">delete</i></button>
        </div>
    </div>
    <!-- AJOUT ANNUAIRE -->
    <div id="annuaire_modal" class="modal bottom-sheet">
        <div class="modal-content">
            <h5>Ajouter un collaborateur</h5>
            <div class="row">
                <form method="post" action="script/user_add.php" enctype="multipart/form-data" id="useradd">
                    <div class="row">
                        <div class="row">
                            <div class="input-field col s2">
                                <input id="prenom" type="text" class="validate" name="prenom">
                                <label for="prenom">Prénom</label>
                            </div>
                            <div class="input-field col s2">
                                <input id="nom" type="text" class="validate" name="nom">
                                <label for="nom">Nom</label>
                            </div>
                            <div class="input-field col s2">
                                <input id="telephone" type="tel" class="validate" name="telephone">
                                <label for="telephone">Téléphone</label>
                            </div>
                            <div class="input-field col s1">
                                <input id="interne" type="text" class="validate" name="interne">
                                <label for="interne">Interne</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s4">
                                <input id="email" type="email" class="validate" name="email">
                                <label for="email">E-mail</label>
                            </div>
                            <div class="col s2">
                                <label>Site</label>
                                <select class="browser-default" id="site" name="site">
                                    <option value="Sarcelles">Sarcelles</option>
                                    <option value="Moussages">Moussages</option>
                                </select>
                            </div>
                            <div class="col s2">
                                <label>Service</label>
                                <select class="browser-default" id="service" name="service">
                                    <option value="Programmation">Programmation</option>
                                    <option value="Comptabilité">Comptabilité</option>
                                    <option value="Direction">Direction</option>
                                    <option value="Informatique">Informatique</option>
                                    <option value="Numérique">Numérique</option>
                                    <option value="Vérification">Vérification</option>
                                    <option value="Transport">Transport</option>
                                    <option value="Stock">Stock</option>
                                </select>
                            </div>

                        </div>

                    </div>

                    <div class="modal-footer">
                        <a href="#" class="btn modal-close waves-effect waves-red">Annuler</a>
                        <!--<button class="modal-close waves-effect btn red">Annuler<i class="material-icons right bottom-sheet">cancel</i></button>-->
                        <button type="submit" class="modal-action  waves-effect btn green " name="action">Ajouter<i
                                    class="material-icons right">person_add</i></button>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <!-- EDITION ANNUAIRE -->
    <div id="edit_modal" class="modal bottom-sheet">
        <div class="modal-content">
            <h5>Editer un collaborateur</h5>
            <div class="row">
                <form method="post" action="script/user_edit.php" enctype="multipart/form-data" id="useredit"
                      class="data-form">
                    <div class="row">
                        <div class="row">
                            <div class="input-field col s2">
                                <input id="prenom" type="text" class="validate" name="prenom">
                                <label for="prenom" class="active">Prénom</label>
                            </div>
                            <div class="input-field col s2">
                                <input id="nom" type="text" class="validate" name="nom">
                                <label for="nom" class="active">Nom</label>
                            </div>
                            <div class="input-field col s2">
                                <input id="telephone" type="tel" class="validate" name="telephone">
                                <label for="telephone" class="active">Téléphone</label>
                            </div>
                            <div class="input-field col s1">
                                <input id="interne" type="text" class="validate" name="interne">
                                <label for="interne" class="active">Interne</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s4">
                                <input id="email" type="email" class="validate" name="email">
                                <label for="email" class="active">E-mail</label>
                            </div>

                            <div class="col s2">
                                <label class="active">Site</label>
                                <select class="browser-default" id="site" name="site">
                                    <option value="Sarcelles">Sarcelles</option>
                                    <option value="Moussages">Moussages</option>
                                </select>
                            </div>
                            <div class="col s2">
                                <label class="active">Service</label>
                                <select class="browser-default" id="service" name="service">
                                    <option value="Programmation">Programmation</option>
                                    <option value="Comptabilité">Comptabilité</option>
                                    <option value="Direction">Direction</option>
                                    <option value="Informatique">Informatique</option>
                                    <option value="Numérique">Numérique</option>
                                    <option value="Vérification">Vérification</option>
                                    <option value="Transport">Transport</option>
                                    <option value="Stock">Stock</option>
                                </select>
                            </div>
                            <div class="input-field col s4">
                                <input id="user_id" name="id" type="hidden" class="validate ">
                            </div>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <a href="#" class="btn modal-close waves-effect waves-red">Annuler</a>
                        <!--<button class="modal-close waves-effect btn red">Annuler<i class="material-icons right bottom-sheet">cancel</i></button>-->
                        <button type="submit" class="modal-action  waves-effect btn green " name="action">Editer<i
                                    class="material-icons right">edit</i></button>
                    </div>
                </form>
            </div>

        </div>
    </div>

</div>

