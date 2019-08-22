@extends('layouts.master')

@section('content')
<div class="container">
	<div class="create">
		<button type="button" class="addModal btn btn-info" data-toggle="modal" data-target="#editModal">
	  		 <span class="fa fa-plus"> </span> Ajouter
		</button>
	</div>
	<br>
	<div class="card ">
		<div class="card-body fluid">
			{!!$dataTable->table() !!}	
		</div>
	</div>
</div>

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Ajouter</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        {{-- Formulaire --}}
        <form method="POST" action="{{ route('gestion_combatants.store') }}" class="form-horizontal">
            @csrf
           <input type="hidden" name="idetudiants" id="fidetudiants" >
            <div class="form-group">
                <label for="nom"  class="col-sm-2 control-label">Nom</label>
                <div class="col-sm-12">
                    <input type="text" id="fnom" class="form-control" id="nom" name="nom" placeholder="Entrer nom combatant"  maxlength="50" required="">
                </div>
            </div>
            <div class="form-group">
                <label for="postnom" class="col-sm-2 control-label">Postnom</label>
                <div class="col-sm-12">
                    <input type="text" id="fpostnom" class="form-control" id="postnom" name="postnom" placeholder="Entrer postnom combatant"  maxlength="50" >
                </div>
            </div>
            <div class="form-group">
                <label for="prenom"  class="col-sm-2 control-label">Prenom</label>
                <div class="col-sm-12">
                    <input type="text" id="fprenom" class="form-control" id="prenom" name="prenom" placeholder="Entrer prenom combatant"  maxlength="50" required="">
                </div>
            </div>
              <div class="form-group">
                  <label class="col-sm-2 control-label">Categorie</label>
                  <div class="col-sm-12">
                      
                    <select class="form-control" id="fidcategorie" name="idcategories" required="">
                          @foreach(App\Models\Categorie::get() as $cat)
                              <option value="{{ $cat->idcategories }}"  >{{ $cat->lib }} ({{ $cat->poid_min.'Kg - '.$cat->poid_max.'Kg' }})</option>
                          @endforeach
                    </select>
                  </div>
              </div> 
              <div class="form-group">
                <label for="poid"  class="col-sm-2 control-label">Poid</label>
                <div class="col-sm-12">
                    <input type="number" id="fpoid" class="form-control" id="poid" name="poid" placeholder="Entrer le poid "  maxlength="50" >
                </div>
              </div>        
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
	        <button type="submit" class="save btn btn-primary">Enregistrer</button>
	      </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
@push('scripts')
{!!$dataTable->scripts() !!}

@endpush









@push('stylesheets')
    <link href="{{ asset('dataTables/dataTables/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@section('script')

<script src={{ asset('dataTables/datatables.min.js') }}></script> 

@endsection