







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
            <form method="POST" action="{{ route('etudiant.update', $etudiant->id) }}">
              @csrf
              @method('PUT')
              <!-- Text input -->
              <div class="row mb-4">
                <div class="col">
                  <div class="form-outline">
                    <input value="{{ $etudiant->nom ?? '' }}" placeholder="{{ $etudiant->nom }}" type="text" id="nom" name="nom" class="form-control" />
                    <label class="form-label" for="nom">Nom complet</label>
                  </div>
                </div>
              </div>
            
              <!-- Text input -->
              <div class="form-outline mb-4">
                <input value="{{ $etudiant->email ?? '' }}" placeholder="{{ $etudiant->email }}" type="email" id="email" name="email" class="form-control" />
                <label class="form-label" for="email">Adresse courriel</label>
              </div>
            
              <!-- Text input -->
              <div class="form-outline mb-4">
                <input value="{{ $etudiant->adresse ?? '' }}" placeholder="{{ $etudiant->adresse }}" type="text" id="adresse" name="adresse" class="form-control" required />
                <label class="form-label" for="adresse">Addresse</label>
              </div>  
            
              
              <!-- Number input -->
              <div class="form-outline mb-4">
              <select id="ville_id" name="ville_id" class="form-select">
                @foreach ($villes as $ville)
                    <option value="{{ $ville->id ?? '' }}" value="{{ $ville->id }}" @if($ville->id === $etudiant->ville_id) selected @endif>{{ $ville->nom }}</option>
                @endforeach
              </select>
              </div>
            
              <!-- Email input -->
              <div class="form-outline mb-4">
                <input value="{{ $etudiant->telephone ?? '' }}"  placeholder="{{ $etudiant->telephone }}" type="text" name="telephone" id="telephone" class="form-control" />
                <label class="form-label" for="telephone">Téléphone</label>
              </div>
            
              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-block mb-4">Confirmer</button>
            </form>
</div>
@endsection