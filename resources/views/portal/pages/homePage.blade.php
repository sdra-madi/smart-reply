@extends('portal.layout.layout')
@section('title', 'Home')
@section('body')
    {{-- section hero --}}
    @include('portal.sections.hero')
    {{-- section about --}}
    @include('portal.sections.about')
    {{-- section stats --}}
    @include('portal.sections.stats')
    {{-- section services --}}
    @include('portal.sections.services')
    {{-- pricing --}}
    @include('portal.sections.pricing')
    {{-- team --}}
    @include('portal.sections.team')
    {{-- clients --}}
    @include('portal.sections.clients')
    {{-- contact --}}
    @include('portal.sections.contact')
@endsection