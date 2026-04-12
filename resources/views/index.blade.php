@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endpush

@section('content')
@include('home.hero')
@include('home.pricing')
@include('home.portfolio')
@include('home.faq')
@endsection

@push('scripts')
<script src="{{ asset('js/main.js') }}"></script>
@endpush