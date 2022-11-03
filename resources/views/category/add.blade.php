@extends('admin.dashboard_admin')

@section('content')
<div class="col-xl-12 col-lg-5">
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Formulaire</h6>
        </div>
        <div class="card-body">
            <form method="post" action="{{ url('/categorie/add') }}">
                @csrf
                <!--input type="hidden" name="_token" value="< ? php echo csrf_token() ? >" -->
                <div class="row">
                    <div class="form-group col-xl-6">
                        <label class="control-label" for="nom">Titre</label>
                        <input class="form-control" type="text" name="titre" id="titre" />
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-xl-6">
                        <label class="control-label" for="categorie">Lien de l'image</label>
                        <input class="form-control" type="text" name="lien_img" id="lien_image" />
                    </div>
                </div>

                <div class="form-group">
                    <input class="btn btn-success" type="submit" name="envoyer" id="envoyer" value="Envoyer" />
                    <input class="btn btn-warning" type="reset" name="annuler" id="annuler" value="Annuler" />
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
