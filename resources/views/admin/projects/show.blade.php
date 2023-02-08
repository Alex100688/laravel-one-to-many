@extends('layouts.admin')
@section('content')
    <a href="{{ route('admin.projects.index') }}">Torna alla pagina principale</a>
    <h1>Dettagli</h1>
    <h2>"<strong>{{ $project->title }}</strong>"</h2>
    <h4>Tipologia:{{ $project->type?->name ? $project->type->name : 'Non è stata fatta nessuna selezione' }}</h4>
    <p>{{ $project->description }}</p>
    <div>
        @if ($project->cover_image)
            <img class="w-50" src="{{ asset("storage/$project->cover_image") }}" alt="{{ $project->title }}">
        @endif
    </div>
@endsection
