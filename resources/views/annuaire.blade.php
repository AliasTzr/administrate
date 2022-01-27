@include('header')

<div class="container-fluid pt-5 vh-100">
    <div class="container-fluid mt-4 pt-4 p-md-5">
        <table class="table text-center">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Structure</th>
                    <th scope="col">Numéro</th>
                    <th scope="col">Modifier</th>
                    <th scope="col">Supprimer</th>
                </tr>
            </thead>
            <tbody class="fs-5">
                <tr>
                    <td class="border border-1">Police</td>
                    <td class="border border-1">000000000</td>
                    <td class="border border-1"><a data-bs-toggle="modal" data-bs-target="#staticBackdrop3" class="btn btn-primary" href="#updateTel"><i class="bi bi-pen-fill size-text"></i></a></td>
                    <td class="border border-1"><a data-bs-toggle="modal" data-bs-target="#staticBackdrop2" class="btn btn-danger" href="#deleteTel"><i class="bi bi-trash-fill size-text"></i></a></td>
                </tr>
            </tbody>
          </table>
        <!-- Add Tel -->
        <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
            <form class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title m-auto text-primary text-uppercase" id="staticBackdropLabel">nouvelle structure</h5>
                </div>
                <div class="modal-body text-center">
                    <div class="mb-3">
                        <input type="text" class="form-control" name="newStructure" id="newStructure" placeholder="Structure">
                    </div>
                    <div class="mb-3">
                        <input type="number" class="form-control" name="newTel" id="newTel" placeholder="Numéro de la structure">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary m-auto" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-primary m-auto fw-bold">Ajouter</button>
                </div>
            </form>
            </div>
        </div>
        <!-- Delete Tel -->
        <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title m-auto text-danger" id="staticBackdropLabel">AVERTISSEMENT</h5>
                </div>
                <div class="modal-body text-center">
                <P>Confirmer la suppression de cet utilisateur</P>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary m-auto" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-danger m-auto fw-bold">Supprimer</button>
                </div>
            </div>
            </div>
        </div>
        <!-- Edit Tel -->
        <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
            <form class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title m-auto text-primary text-uppercase" id="staticBackdropLabel">nouvelle structure</h5>
                </div>
                <div class="modal-body text-center">
                    <div class="mb-3">
                        <input type="text" value="Structure" class="form-control" name="newStructure" id="newStructure" placeholder="Structure">
                    </div>
                    <div class="mb-3">
                        <input type="number" value="00000000000" class="form-control" name="newTel" id="newTel" placeholder="Numéro de la structure">
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
    <a data-bs-toggle="modal" data-bs-target="#staticBackdrop1" class="btn fond rounded-circle me-3" href="#newActualité"><i class="bi bi-plus-lg fs-4 text-light fw-bold"></i></a>
</div>

@include('footer')