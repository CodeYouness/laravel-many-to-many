@extends('admin.categories.layouts.create-or-edit')

@section('page-title')
    Editing {{$category->name}}
@endsection


@section('form-action')
    {{route('admin.categories.update', $category)}}
@endsection

@section('form-method')
    @method("PUT")
@endsection
