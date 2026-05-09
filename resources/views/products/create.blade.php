{{-- @extends('layouts.app') --}}
@extends('layouts.admin')

@section('content')
<div class="text-center">
    <h2>Добави продукт</h2>
</div>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<form method="POST" action="/products" class="card p-3">
    @csrf

    <input class="form-control mb-2" name="name" placeholder="Име">
    <input class="form-control mb-2" name="price" placeholder="Цена">
    <input class="form-control mb-2" name="quantity" placeholder="Количество">

    <select class="form-select mb-2" name="category_id">
        @foreach($categories as $category)
            <option value="{{ $category->id }}">
                {{ $category->name }}
            </option>
        @endforeach
    </select>

    <button class="btn btn-primary">Запази</button>
</form>

@endsection