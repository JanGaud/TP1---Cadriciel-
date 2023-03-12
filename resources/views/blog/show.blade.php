@extends('layouts.app')
@section('title', 'étudiant')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 text-center pt-2">
            <h1 class="display-7">
                {{ $etudiant->nom }}
            </h1>
            <p>Mise à jours des informations</p>
        </div> <!--/col-12-->
    </div><!--/row-->
            <hr>
            <form>
              @csrf
              @method('PUT')
              <!-- Text input -->
              <div class="row mb-4">
                <div class="col">
                  <div class="form-outline">
                    <input placeholder="{{ $etudiant->nom }}" type="text" id="nom" class="form-control" />
                    <label class="form-label" for="nom">Nom complet</label>
                  </div>
                </div>
              </div>
            
              <!-- Text input -->
              <div class="form-outline mb-4">
                <input placeholder="{{ $etudiant->email }}" type="text" id="email" class="form-control" />
                <label class="form-label" for="email">Adresse courriel</label>
              </div>
            
              <!-- Text input -->
              <div class="form-outline mb-4">
                <input placeholder="{{ $etudiant->adresse }}" type="text" id="adresse" class="form-control" />
                <label class="form-label" for="adresse">Addresse</label>
              </div>              
              
              <!-- Number input -->
              {{-- <select id="ville_id" name="ville_id" class="form-select">
                @foreach ($villes as $ville)
                    <option value="{{ $ville->id }}" @if($ville->id === $etudiant->ville_id) selected @endif>{{ $ville->nom }}</option>
                @endforeach
              </select> --}}
            
              <!-- Email input -->
              <div class="form-outline mb-4">
                <input  placeholder="{{ $etudiant->telephone }}" type="email" id="telephone" class="form-control" />
                <label class="form-label" for="telephone">Téléphone</label>
              </div>
            
              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-block mb-4">Confirmer</button>
            </form>
</div>
@endsection