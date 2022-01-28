@include('header')

<div class="container-fluid pt-5 vh-100">
    <div class="container mt-4">
          <h1 class="text-center mt-5 fw-bold">2022</h1>
          <hr class="mt-0 w-50 m-auto mb-2">
          <div class="container ">
                <div class="row justify-content-center">
                    <div class="col-md-2 p-sm-4 bg-date text-light text-center fond">
                        <div class="fs-1 fw-bold">
                            8
                        </div>
                        <div class="fs-5 p-0">
                            Décembre
                        </div>
                    </div>
                    <div class="col-md-4 fond">
                            <div class="d-flex justify-content-between">
                                <h5 class="mt-2">Source</h5>
                                <div class="">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop2" class="btn me-1 mt-1 rounded-circle icon-agenda"><i class="bi bi-pen-fill"></i></a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop3" class="btn ms-1 mt-1 rounded-circle icon-agenda"><i class="bi bi-trash-fill"></i></a>
                                </div>
                            </div>
                            <div class="accordion mt-1 " id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Lieu
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
                            <div class="d-flex mt-3 mb-1">
                                <h5 class="mt-2">Type :</h5>
                                <div class="border w-25 bg-success border-2 border-success ms-1">
                                    
                                </div>
                            </div>
                    </div>
                </div>
          </div>
    </div>
    <!-- Ajout -->
    <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
        <form class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title m-auto text-primary text-uppercase" id="staticBackdropLabel">nouvelle évenement</h5>
            </div>
            <div class="modal-body text-center">
                <div class="mb-3">
                    <input type="text" class="form-control" name="newSource" id="newSource" placeholder="Source de l'évenement">
                </div>
                <div class="mb-3">
                    <input type="date" class="form-control" name="newDate" id="newDate" placeholder="Date de l'évenement">
                </div>
                <div class="mb-3">
                    <textarea class="form-control resize" name="newDescription" id="newDescription" placeholder="Rediger la description" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <select class="form-select" name="newCommune" id="newCommune">
                        <option selected>Zone concerné</option>
                        <option value="1">Commune 1</option>
                        <option value="2">Commune 2</option>
                        <option value="3">Commune 3</option>
                      </select>
                </div>
                <div class="mb-3">
                    <select class="form-select" id="eventType" name="eventType">
                        <option selected>Type d'évenement</option>
                        <option value="danger">Rouge</option>
                        <option value="warning">Orange</option>
                        <option value="success">Vert</option>
                      </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary m-auto" data-bs-dismiss="modal">Annuler</button>
                <button type="submit" class="btn btn-primary m-auto fw-bold">Ajouter</button>
            </div>
        </form>
        </div>
    </div>
    <!-- Edit -->
    <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
        <form class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title m-auto text-warning" id="staticBackdropLabel">AVERTISSEMENT</h5>
            </div>
            <div class="modal-body text-center">
                <div class="mb-3">
                    <input type="text" value="xxxxxxxx" class="form-control" name="sourceUpdate" id="sourceUpdate" placeholder="Source de l'évenement">
                </div>
                <div class="mb-3">
                    <input type="date" value="" class="form-control" name="dateUpdate" id="dateUpdate" placeholder="Date de l'évenement">
                </div>
                <div class="mb-3">
                    <textarea class="form-control resize" name="descriptionUpdate" id="descriptionUpdate" placeholder="Rediger la description" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <select class="form-select" name="communeUpdate" id="communeUpdate">
                        <option selected>Zone concerné</option>
                        <option value="1">Commune 1</option>
                        <option value="2">Commune 2</option>
                        <option value="3">Commune 3</option>
                      </select>
                </div>
                <div class="mb-3">
                    <select class="form-select" id="eventTypeUpdate" name="eventTypeUpdate">
                        <option selected>Type d'évenement</option>
                        <option value="danger">Rouge</option>
                        <option value="warning">Orange</option>
                        <option value="success">Vert</option>
                      </select>
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
    <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title m-auto text-danger" id="staticBackdropLabel">AVERTISSEMENT</h5>
            </div>
            <div class="modal-body text-center">
            <P>Confirmer la suppression de cet évenement</P>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary m-auto" data-bs-dismiss="modal">Annuler</button>
            <button type="button" class="btn btn-danger m-auto fw-bold">Supprimer</button>
            </div>
        </div>
        </div>
    </div>
</div>
<div class="bg-transparent p-4 container-fluid fixed-bottom text-end">
    <a data-bs-toggle="modal" data-bs-target="#staticBackdrop1" class="btn fond rounded-circle me-3" href="#newActualité"><i class="bi bi-plus-lg fs-4 text-light fw-bold"></i></a>
</div>

@include('footer')