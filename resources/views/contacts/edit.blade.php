@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Modification du contact <b>{{$contact->name}}</b></h3>
                <form method="POST" action="{{route('contacts.update', $contact->id)}}">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Entrez votre nouveau nom"
                        value="{{ old('name', "") }}">

                        @error('name')
                            <div class="invalid-feedback">
                                Votre nouveau nom est requis
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="tel">Telephone</label>
                        <input type="text" name="tel" id="tel" class="form-control @error('tel') is-invalid @enderror" placeholder="Entrez votre nouveau numero de telephone"
                        value="{{ old('tel', "") }}">

                        @error('tel')
                            <div class="invalid-feedback">
                                Votre nouveau numero est requis
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Entrez votre email"
                        value="{{ old('tel', "") }}">


                        @error('email')
                            <div class="invalid-feedback">
                                Votre nouveau email est requis
                            </div>
                        @enderror
                    </div>

                    
                    <button type="submit" class="btn btn-primary">Modifier Contact</button>
                </form>
            </div>
        </div>
    </div>
@endsection
