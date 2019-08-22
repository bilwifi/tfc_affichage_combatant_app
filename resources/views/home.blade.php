@extends('layouts.master')
@section('content')
    <div class="" style="margin-top: -20px">
      <div class="container">
        <div class="d-flex justify-content-center">
        <img src="{{ asset('img/cover.png') }}" class="img-fluid" style="max-width: 100%;height:auto">
          
        </div>
      </div>
    </div>
    <main role="main" class="container">

      <div class="starter-template">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="list-unstyled">
                @foreach ($errors->all() as $error)
                    <li>{!! $error !!}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <form action="#" method="POST" >
            @csrf
          <div class="row">
            <div class="col">
              <div class="form-group">
                <select class="custom-select custom-select-lg mb-3" name="premier_combatant">
                  <option selected>Selectionner le combatant</option>
                  @foreach($combatants as $combatant)
                  <option value="{{ $combatant->idcombatants }}">{{ $combatant->prenom .' '. $combatant->nom}}</option>
                  @endforeach
                </select>
                <div class="invalid-feedback">Example invalid custom select feedback</div>
              </div>
            </div>
            <div class="col-1 btn btn-outline-default">
              VS
            </div>
            <div class="col">
              <div class="form-group">
                <select class="custom-select custom-select-lg mb-3" name="dexieme_combatant">
                  <option selected>Selectionner le combatant</option>
                  @foreach($combatants as $combatant)
                  <option value="{{ $combatant->idcombatants }}">{{ $combatant->prenom .' '. $combatant->nom}}</option>
                  @endforeach
                </select>
                <div class="invalid-feedback">Example invalid custom select feedback</div>
              </div>
            </div>
          </div>
          <div class="row">
            <input type="submit" class="btn btn-primary btn-block btn-lg">
          </div>
        </form>
      </div>

    </main>
    <!-- /.container -->
@endsection
