@extends('layouts.main')
@section('page')
@include('pages.document.search')
@include('pages.document.list')
@include('pages.document.add')
@include('pages.document.edit')
@include('pages.document.delete')
@endsection

@section('js')
@include('pages.document.js')
@endsection
