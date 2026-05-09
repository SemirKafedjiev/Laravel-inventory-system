@extends('layouts.app')

@section('content')

    <h2>Продукти</h2>
    <form method="GET" action="/products" class="mb-3 d-flex gap-2">
        <input type="text" name="search" value="{{ request('search') }}" class="form-control" placeholder="Търси продукт..">
        <select class="form-select" name="category_id">
            <option value="">Избери Категория</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}
                </option>

            @endforeach

        </select>
        <button class="form-submit btn btn-primary">Търси</button>
    </form>
    <table class="table table-bordered bg-white">
        <thead class="table-dark">
            <tr>
                <th>Име</th>
                <th>Цена</th>
                <th>Количество</th>
                <th>Категория</th>
                <th>Обнови</th>
                <th>Изтрий</th>
            </tr>
        </thead>

        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->category->name ?? '' }}</td>
                    <td><a href="/products/{{ $product->id }}/edit" class="btn btn-warning btn-sm">Edit</a></td>
                    {{-- <td><a href="/products/{{ $product->id }}/delete" class="btn btn-warning btn-sm">Edit</a></td> --}}
                    <td>
                        <form method="POST" action="/products/{{ $product->id }}/delete"
                            onsubmit="return confirm('Потвърждавате ли изтриването на записа ?')">
                            @csrf
                            @method('DELETE')
                            
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
    <div class="d-flex justify-content-center mt-3">
        {{ $products->links() }}
    </div>
@endsection