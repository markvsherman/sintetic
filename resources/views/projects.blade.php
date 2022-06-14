@extends('layouts.layout')
@section('content')
<h1 class="h2">Projects_master</h1>
<p>Path: {{ Request::path() }} </p>


<div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group me-2">
        <!--<button type="button" class="btn btn-sm btn-outline-secondary">+Add project</button>-->
        <a class="btn btn-primary" href="/projects/new" role="button">+Add project</a>
    </div>
</div>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th scope="col" class="col-1">ID</th>
            <th scope="col" class="col-2">Code</th>
            <th scope="col" class="col-4">Name</th>
            <th scope="col">Action</th>

        </tr>
        </thead>
        <tbody>
        @foreach($projects as $proj)
        <tr>
            <td>{{$proj->id}}</td>
            <td>{{$proj->code}}</td>
            <td>{{$proj->name}}</td>
            <td>
                <a href="/proj/{{$proj->id}}" name="edit" class="mr-3 text-sm bg-blue-500">Edit</a>

                <form action="/proj/{{$proj->id}}">
                    <a class="btn btn-primary" href="/projects" role="button">Cancel</a>
                    <!--<button type="submit" name="delete" formmethod="POST" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>-->
                    {{ csrf_field() }}
                </form>




            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection

<
