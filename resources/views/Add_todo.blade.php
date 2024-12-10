@extends('layouts.main')
@push('head')
    <title>ADD TODO</title>
@endpush

@section('main-section')
    <div class="container ">
        <div class="d-flex justify-content-between py-2">
            <div class="h2 ">Add Todo</div>
            <a href="{{ route("home") }}" class="btn btn-primary fs-5">back</a>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="{{ route("todoAdd") }}" method="post">
                    @csrf
                
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="name">
                    <span class="text-danger">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="mb-3">
                    <label for="work" class="form-label">Work</label>
                    <input type="text" class="form-control" name="work" id="work" aria-describedby="work">
                    <span class="text-danger">
                        @error('work')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Due Date</label>
                    <input type="date" class="form-control" name="date" id="date" aria-describedby="date">
                    <span class="text-danger">
                        @error('date')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">ADD</button>
                </div>
            </form>
            </div>
        </div>
    @endSection
