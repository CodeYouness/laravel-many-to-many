@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <form action="@yield('form-action')" method="POST">
                @yield('form-method')
                @csrf

                <div class="mb-3">
                    <h2>
                        @yield("page-title")
                    </h2>
                </div>

                <div class="mb-3">
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" class="form-control mb-3"
                    value="{{ old('title', $project->title)}}">
                    @error("title")
                        <div class="alert alert-danger mb-3">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image">Image url:</label>
                    <input type="text" name="image" id="image" class="form-control mb-3"
                    value="{{ old('image', $project->image)}}">
                    @error("image")
                        <div class="alert alert-danger mb-3">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <select class="form-select" aria-label="Default select example" name="category_id">
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}"
                                {{$category->id == old('category_id', $project->category_id)? "selected" : "" }}>
                                {{$category->name}}
                            </option>
                        @endforeach
                    </select>
                    @error("category_id")
                        <div class="alert alert-danger mb-3">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="content">Content:</label>
                    <textarea type="text" name="content" id="content" class="form-control" rows="10" class="form-control">{{ old('content', $project->content)}}</textarea>
                    @error("content")
                        <div class="alert alert-danger my-3">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <input type="submit" value="@yield('page-title')" class="btn btn-primary btn-lg">
                <input type="reset" value="Reset Fields" class="btn btn-warning btn-lg">
            </form>
        </div>
    </div>
</div>
@endsection
