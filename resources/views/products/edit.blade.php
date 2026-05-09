@extends('layouts.app')
@section ('content')
<h1>Редактирай запис</h1>

<form method="POST" action="/products/{{$product->id}}">
    @csrf
    @method('PUT')

    <input class="form-control mb-2" name="name" value="{{ $product->name }}"> 
    <input class="form-control mb-2" name="price" value="{{ $product->price }}">
    <input class="form-control mb-2" name="quantity" value="{{ $product->quantity }}">
    <select class="form-control mb-2" name="category_id">
        @foreach ($categories as $category)
        <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
            {{ $category->name }}
        </option>        
        @endforeach
    </select>
<button class="button btn-primary">Запази</button>
</form>

@endsection