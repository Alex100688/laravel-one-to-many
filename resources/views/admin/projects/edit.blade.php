@extends('layouts.admin')
@section('content')
    <h1 class="text-center">Modifica del progetto</h1>
    <form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title"
                value="{{ old('title', $project->title) }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <input type="text" class="form-control" id="description" name="description"
                value="{{ old('description', $project->description) }}">
        </div>
        <div class="mb-3">
            <label for="name_client" class="form-label">Nome progettista</label>
            <input type="text" class="form-control" id="name_client" name="name_client"
                value="{{ old('name_client', $project->name_client) }}">
        </div>
        <div class="mb-3">
            <label for="cover_image" class="form-label">Immagine progetto</label>
            <input type="file" class="form-control" id="cover_image" name="cover_image" value="{{ old('cover_image') }}">
        </div>
        <button type="submit" class="btn btn-primary">Modifica</button>
    </form>
    <a href="{{ route('admin.projects.index') }}">Torna alla pagina principale</a>
@endsection
