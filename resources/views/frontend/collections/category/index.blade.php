@extends('layouts.app')

@section('title', 'All Categories | Motomart')

@section('content')

<div class="py-3 py-md-5 bg-light">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-4 g-4">
            @forelse ($categories as $categoryItem)
            <div class="col">
                <div class="category-card d-flex flex-column h-100">
                    <a href="{{ url('/collections/'.$categoryItem->slug) }}" class="d-flex flex-column flex-grow-1">
                        <div class="category-card-img">
                            <img src="{{ asset("$categoryItem->image") }}" class="w-100" alt="#">
                        </div>
                        <div class="category-card-body flex-grow-1 d-flex align-items-center justify-content-center">
                            <h5 class="text-center">{{ $categoryItem->name }}</h5>
                        </div>
                    </a>
                </div>
            </div>
            @empty
            <div class="col-md-12">
                <h5>No Category Available</h5>
            </div>
            @endforelse
        </div>
    </div>
</div>

@endsection
