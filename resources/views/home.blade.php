@extends('layouts.base')

@section('title', 'home')

@section('main')
    <div class="md:flex">
        <div
            class="mx-auto"
            hx-get="/items"
            hx-trigger="load"
            >
        </div>
        <div
            id="cart"
            hx-get="/cart"
            hx-trigger="load"
            class="md:w-48 md:h-auto"
            >
        </div>
    </div>
@endsection
