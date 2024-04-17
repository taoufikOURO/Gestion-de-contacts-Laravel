@extends('base')
@section('title','Contacts')
@section('style')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@endsection
@section('content')
    <table class="table text-center table-hover">
        <thead>
            <th>Id</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Telephone</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </thead>

        @foreach($contacts as $contact)
        <tr>
            <td>{{$contact->id}}</td>
            <td>{{$contact->name}}</td>
            <td>{{$contact->email}}</td>
            <td>{{$contact->tel}}</td>
            <td>
                <a href="{{ route('preUpdate') }}?id={{ $contact->id }}">
                    <button class="btn btn-primary">modifier</button>
                </a>
            </td>
            <td>
                <form action="{{ route('delete',$contact->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
