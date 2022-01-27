@include('header')

<div class="container-fluid pt-5 vh-100">
    <div class="container-fluid mt-4 pt-4 p-md-5">
        <div class="card text-center mb-3">
            <div class="card-header">
              Source de l'information
            </div>
            <div class="card-body">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Titre de la publication //changer les id pour indexer un seul élément
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            La page d'actualité concerne tout les evenements pouvant avoir un impacts de près où de loin à la circulation des véhicule.
                            Les données proviendront d'une base de donnéEs notament <strong>FIREBASE</strong>. Ces infos proviendront des structure tels que FratMat etc...
                            Elles seront envoyées ver l'appli mobile seulement par les admins. 
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop1" class="btn btn-primary me-1 mt-1 text-black"><i class="bi bi-pen-fill"></i></a>
                <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop2" class="btn btn-danger ms-1 mt-1 text-black"><i class="bi bi-trash-fill"></i></a>
            </div>
        </div>
        <!-- Edit -->
        <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
            <form class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title m-auto text-warning" id="staticBackdropLabel">AVERTISSEMENT</h5>
                </div>
                <div class="modal-body text-center">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="titreUpdate" name="titreUpdate" placeholder="Titre de l'information">
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control resize" id="descriptionUpdate" name="descriptionUpdate" placeholder="Rediger l'information" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="sourceUpdate" placeholder="Source de l'information">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary m-auto" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-warning m-auto fw-bold">Modifier</button>
                </div>
            </form>
            </div>
        </div>
        <!-- Delete -->
        <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title m-auto text-danger" id="staticBackdropLabel">AVERTISSEMENT</h5>
                </div>
                <div class="modal-body text-center">
                <P>Confirmer la suppression de cette publication</P>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary m-auto" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-danger m-auto fw-bold">Supprimer</button>
                </div>
            </div>
            </div>
        </div>
        <!-- Ajout -->
        <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
            <form class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title m-auto text-warning text-uppercase" id="staticBackdropLabel">nouvelle actualité</h5>
                </div>
                <div class="modal-body text-center">
                    <div class="mb-3">
                        <input type="text" class="form-control" name="newTitre" id="newTitre" placeholder="Titre de l'information">
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control resize" name="newDescription" placeholder="Rediger l'information" id="" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="newSource" id="newSource" placeholder="Source de l'information">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary m-auto" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-primary m-auto fw-bold">Ajouter</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
<div class="bg-transparent p-4 container-fluid fixed-bottom text-end">
    <a data-bs-toggle="modal" data-bs-target="#staticBackdrop3" class="btn fond rounded-circle me-3" href="#newActualité"><i class="bi bi-plus-lg fs-4 text-light fw-bold"></i></a>
</div>

@include('footer')