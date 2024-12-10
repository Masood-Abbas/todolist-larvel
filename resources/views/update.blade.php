@extends('layouts.main')
@push('head')
    <title>Update TODO</title>
@endpush

@section('main-section')
    <div class="container ">
        <div class="d-flex justify-content-between py-2">
            <div class="h2 ">Update Todo</div>
            <a href="#" class="btn btn-primary fs-5">back</a>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="{{ route("todoUpdate") }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name" aria-describedby="name"
                            value="{{ $todo->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="work" class="form-label">Work</label>
                        <input type="text" class="form-control" name="work" id="work" aria-describedby="work"
                            value="{{ $todo->work }}">
                    </div>
                    <div class="mb-3">
                        <label for="work" class="form-label">Due Date</label>
                        <input type="date" class="form-control" name="date" id="date" aria-describedby="date"
                            value="{{ $todo->date }}">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="id" value="{{ $todo->id }}" hidden>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    @endSection
