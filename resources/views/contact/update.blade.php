@extends('base')
@section('title','Modifier')

@section('style')
<style>
    .form-container {
        max-width: 600px;
        margin: 0 auto;
        text-align: center;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
    }

    .form-group input {
        width: 100%;
        padding: 8px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }

    button[type="submit"] {
        background-color: #333;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
</style>
@endsection
@section('content')
<div class="form-container">
    <h2>Modifier un contact</h2>
    <form id="contact-form" method="post">
        @csrf
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="tel">Téléphone</label>
            <input type="tel" id="tel" name="tel" required>
        </div>
        <button type="submit">Modifier</button>
    </form>
</div>
@endsection