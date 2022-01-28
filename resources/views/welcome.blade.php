@include('header')

<div class="container-fluid pt-5 vh-100">
    <div class="container-fluid mt-4 pt-4 p-md-5">
        <table class="table">
            <thead class="table-dark">
              <tr>
                <th scope="col">#id</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Email</th>
                <th scope="col">MDP</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody class="size-text">
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td><a data-bs-toggle="modal" data-bs-target="#staticBackdrop2" class="btn btn-danger" href="#deleteUser"><i class="bi bi-trash-fill size-text"></i></a></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>@mdo</td>
                <td><a data-bs-toggle="modal" data-bs-target="#staticBackdrop2" class="btn btn-danger" href="#deleteUser"><i class="bi bi-trash-fill size-text"></i></a></td>
              </tr>
            </tbody>
          </table>
          <!-- Delete user -->
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
    </div>
</div>
<script src="{{url('js/back.js')}}"></script>
@include('footer')