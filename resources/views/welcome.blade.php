@extends('layouts.main')
@push('head')
    <title>TODO APP</title>
@endpush

@section('main-section')
    <div class="container ">
        <div class="d-flex justify-content-between py-2">
            <div class="h2 ">All Todo</div>
            <a href="{{ route('addtodo') }}" class="btn btn-primary fs-5">Add Todo</a>
        </div>
        <table class="table table-stripped ">
            <thead class="bg-dark text-white">
                <tr class="text-center">
                    <th>Name</th>
                    <th>Work</th>
                    <th>Due Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($todos as $todo)
                <tr class="text-center " valign="middle">
                    <th>{{ $todo->name }}</th>
                    <th>{{ $todo->work }}</th>
                    <th>{{ $todo->date }}</th>
                    <th>
                        <a href="{{ route("todoEdit", $todo->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route("todoDelete", $todo->id) }}" class="btn btn-danger">Delete</a>
                    </th>
                </tr>
                @endforeach
               
            </tbody>
        </table>
    </div>
@endSection
