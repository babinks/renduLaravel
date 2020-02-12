@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Créer un contact</h3>
                <form method="POST" action="{{route('contacts.store')}}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Entrez votre nom"
                        value="{{ old('name', "") }}">

                        @error('name')
                            <div class="invalid-feedback">
                                Votre nom est requis
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="tel">Telephone</label>
                        <input type="text" name="tel" id="tel" class="form-control @error('tel') is-invalid @enderror" placeholder="Entrez votre numero de telephone"
                        value="{{ old('tel', "") }}">

                        @error('tel')
                            <div class="invalid-feedback">
                                Votre numero est requis
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Entrez votre email"
                        value="{{ old('tel', "") }}">


                        @error('email')
                            <div class="invalid-feedback">
                                Votre email est requis
                            </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Créer Contact</button>
                </form>
            </div>
        </div>
    </div>
@endsection
