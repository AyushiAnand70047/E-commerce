@extends('master')
@section("content")
<div class="container custom-signup">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <div class="panel" style="border-radius: 10px; background-color: #f0f8ff; opacity: 0.7;">
                <div class="panel-heading text-center">
                    <h3 style="font-weight: bold; font-size: xx-large;">Sign Up</h3>
                </div>
                <div class="panel-body" style="font-size: large;">
                    <form action="{{route('signup')}}" method="POST" style="padding: 1rem;">
                        <div class="form-group" style=" margin-top: 2%;">
                            @csrf
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Name"
                                style="font-size: large;height:5rem;" required>
                        </div>
                        <div class="form-group" style=" margin-top: 2%;">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                placeholder="Email" style="font-size: large;height:5rem;" required>
                        </div>
                        <div class="form-group" style=" margin-top: 2%;">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Password" style="font-size: large;height:5rem;" required>
                        </div>
                        <div class="text-center" style=" margin-top: 5%;">
                            <button type="submit" class="btn btn-primary btn-lg" style="height:5rem;width: 15rem;">Sign
                                Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection