@extends('layouts.admin')
@section('content')
    <h1 class="text-center">Crea nuovo progetto</h1>
    <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}">
        </div>
        <div class="mb-3">
            <label for="name_client" class="form-label">Nome progettista</label>
            <input type="text" class="form-control" id="name_client" name="name_client" value="{{ old('name_client') }}">
        </div>
        <div class="mb-3">
            <label for="cover_image" class="form-label">Immagine progetto</label>
            <input type="file" class="form-control" id="cover_image" name="cover_image" value="{{ old('cover_image') }}">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipologia</label>
            <select class="form-select" name="type_id" id="type_id">
                <option value="">Senza Tipologia</option>
                @foreach ($types as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </select>

        </div>
        <button type="submit" class="btn btn-primary">Crea</button>
    </form>
    <a href="{{ route('admin.projects.index') }}">Torna alla pagina principale</a>
@endsection
