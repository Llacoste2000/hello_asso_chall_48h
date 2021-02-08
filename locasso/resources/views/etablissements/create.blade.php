@extends('layout.app') @section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ __("Ajouter un établissement") }}
                </div>

                <div class="card-body">
                    <form
                        action="{{ route('etablissement.store') }}"
                        method="post"
                    >
                        @csrf
                        <div class="form-group row">
                            <label
                                for="Name"
                                class="col-md-4 col-form-label text-md-right"
                                >{{ __("E-Mail Address") }}</label
                            >

                            <div class="col-md-6">
                                <input
                                    id="Name"
                                    type="text"
                                    class="form-control @error('name') is-invalid @enderror"
                                    name="name"
                                    value="{{ old('name') }}"
                                    required
                                    autocomplete="name"
                                    autofocus
                                />

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        {{-- Code postal --}}

                        <div class="form-group row">
                            <label
                                for="code"
                                class="col-md-4 col-form-label text-md-right"
                                >{{ __("Code postal") }}</label
                            >

                            <div class="col-md-6">
                                <input
                                    id="code"
                                    type="number"
                                    class="form-control @error('code') is-invalid @enderror"
                                    name="code"
                                    value="{{ old('code') }}"
                                    required
                                    autocomplete="code"
                                    autofocus
                                />

                                @error('code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        {{-- Ville --}}

                        <div class="form-group row">
                            <label
                                for="city"
                                class="col-md-4 col-form-label text-md-right"
                                >{{ __("Ville") }}</label
                            >

                            <div class="col-md-6">
                                <input
                                    id="city"
                                    type="text"
                                    class="form-control @error('city') is-invalid @enderror"
                                    name="city"
                                    value="{{ old('city') }}"
                                    required
                                    autocomplete="city"
                                    autofocus
                                />

                                @error('city')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        {{-- Adresse --}}

                        <div class="form-group row">
                            <label
                                for="address"
                                class="col-md-4 col-form-label text-md-right"
                                >{{ __("Adresse") }}</label
                            >

                            <div class="col-md-6">
                                <input
                                    id="address"
                                    type="text"
                                    class="form-control @error('address') is-invalid @enderror"
                                    name="address"
                                    value="{{ old('address') }}"
                                    required
                                    autocomplete="address"
                                    autofocus
                                />

                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        {{-- Résumé --}}

                        <div class="form-group row">
                            <label
                                for="description"
                                class="col-md-4 col-form-label text-md-right"
                                >{{ __("Description") }}</label
                            >

                            <div class="col-md-6">
                                <textarea
                                    id="description"
                                    type="text"
                                    class="form-control @error('description') is-invalid @enderror"
                                    name="description"
                                    value="{{ old('description') }}"
                                    required
                                    autocomplete="description"
                                    autofocus
                                ></textarea>

                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        {{-- Surface --}}

                        <div class="form-group row">
                            <label
                                for="area"
                                class="col-md-4 col-form-label text-md-right"
                                >{{ __("Surface") }}</label
                            >

                            <div class="col-md-6">
                                <input
                                    id="area"
                                    type="number"
                                    class="form-control @error('area') is-invalid @enderror"
                                    name="area"
                                    value="{{ old('area') }}"
                                    required
                                    autocomplete="area"
                                    autofocus
                                />

                                @error('area')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        {{-- As une cuisine --}}

                        <div class="form-group row">
                            <label
                                for="cuisine"
                                class="col-md-4 col-form-label text-md-right"
                            >
                                {{ __("As une cuisine") }}
                            </label>

                            <div class="col-md-6">
                                <input
                                    id="cuisine"
                                    type="text"
                                    class="form-control @error('cuisine') is-invalid @enderror"
                                    name="cuisine"
                                    value="{{ old('cuisine') }}"
                                    required
                                    autocomplete="cuisine"
                                    autofocus
                                />

                                @error('cuisine')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        {{-- Prix --}}

                        <div class="form-group row">
                            <label
                                for="prix"
                                class="col-md-4 col-form-label text-md-right"
                                >{{ __("Prix") }}</label
                            >

                            <div class="col-md-6">
                                <input
                                    id="prix"
                                    type="number"
                                    class="form-control @error('prix') is-invalid @enderror"
                                    name="prix"
                                    value="{{ old('prix') }}"
                                    required
                                    autocomplete="prix"
                                    autofocus
                                />

                                @error('prix')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        {{-- Prix de ménage --}}

                        <div class="form-group row">
                            <label
                                for="price-menage"
                                class="col-md-4 col-form-label text-md-right"
                                >{{ __("Prix du ménage") }}</label
                            >

                            <div class="col-md-6">
                                <input
                                    id="price-menage"
                                    type="text"
                                    class="form-control @error('price-menage') is-invalid @enderror"
                                    name="price-menage"
                                    value="{{ old('price-menage') }}"
                                    required
                                    autocomplete="price-menage"
                                    autofocus
                                />

                                @error('price-menage')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        {{-- Submit --}}

                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">
                                    Envoyer
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
