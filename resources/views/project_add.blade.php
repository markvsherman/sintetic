@extends('layouts.layout')
@section('content')
<h1 class="h2">Project</h1>
<p>Path: {{ Request::path() }} </p>

<form method="POST" action="/projects/new">

<div class="row g-5">

    <div class="col-md-7 col-lg-8">
        <form class="needs-validation" novalidate>
            <div class="row g-3">
                <div class="col-sm-6">
                    <label for="code" class="form-label">Project code</label>
                    <input type="text" class="form-control" id="code" name="code" placeholder="" value="" required>
                    <div class="invalid-feedback">
                        Enter project code
                    </div>
                </div>

                <div class="col-6">
                    <label for="name" class="form-label">Project name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="" required>
                    <div class="invalid-feedback">
                        Enter project name
                    </div>
                </div>


            </div>

            <div class="btn-toolbar mb-4 my-md-4">
                <button class="btn btn-primary" type="submit">Save</button>
                <a class="btn btn-primary" href="/projects" role="button">Cancel</a>
                <!--<button class="btn btn-primary" type="submit">Cancel</button>-->
            </div>
            {{ csrf_field() }}
            <!--<button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>-->

        </form>
    </div>
</div>
</form>
@endsection
