@extends('layouts.admin')
@section('content')
    <h1>Progetti</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titolo</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Nome Progettista</th>
                <th scope="col">Slug</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->description }}</td>
                    <td>{{ $project->name_client }}</td>
                    <td>{{ $project->slug }}</td>
                    <td><a class="btn btn-primary" href="{{ route('admin.projects.show', $project) }}"</a>Dettagli</td>
                    <td><a class="btn btn-danger" href="{{ route('admin.projects.edit', $project) }}"</a>Modifica</td>
                    <td>
                        <form action="{{ route('admin.projects.destroy', $project) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-warning">Elimina progetto</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <a href="{{ route('admin.projects.create') }}"</a>Crea nuovo progetto
    </table>
@endsection
