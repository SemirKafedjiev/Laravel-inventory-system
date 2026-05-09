{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}

@extends('layouts.admin')

@section('content')

<div class="container-fluid">

    <h2 class="mb-4">📊 Dashboard</h2>

    <!-- Cards row -->
    <div class="row g-3">

        <!-- Products -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title">📦 Products</h5>
                    <p class="card-text">Manage all products in the system.</p>
                    <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm">
                        View Products
                    </a>
                </div>
            </div>
        </div>

        <!-- Add Product -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title">➕ Add Product</h5>
                    <p class="card-text">Create new product entry.</p>
                    <a href="{{ route('products.create') }}" class="btn btn-success btn-sm">
                        Add New
                    </a>
                </div>
            </div>
        </div>

        <!-- Categories -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title">🏷 Categories</h5>
                    <p class="card-text">Organize products by categories.</p>
                    <a href="{{ route('categories.index') }}" class="btn btn-warning btn-sm">
                        View Categories
                    </a>
                </div>
            </div>
        </div>

    </div>

    <!-- Info section -->
    <div class="mt-5">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <h5>👋 Welcome</h5>
                <p class="mb-0">
                    You are logged in as <strong>{{ auth()->user()->name }}</strong>.
                </p>
            </div>
        </div>
    </div>

</div>

@endsection