@extends('layouts.app')

@section('content')
    <div class="container" style="">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between mb-0">
                        <div class="card-title mt-2 mb-0">
                            Todo List
                        </div>
                        <div>
                            <div class="btn btn-primary nav-link">
                                Add Task
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table>
                            <thead>
                                <tr>
                                    <th scope="col">Task</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($tasks as $task)


                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
