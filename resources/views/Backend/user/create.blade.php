@extends('layouts.app')
@section('title'){{ 'Latest News' }}@endsection
@section('header.css')
<style>
    html body .content .content-wrapper {
        padding: 5px 20px 5px 20px;
    }
</style>
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="">Latestnews</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Add</a></li>
                </ol>
            </div>
            <h4 class="page-title">Create News</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <form class="form" action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-body">

                        <div class="form-group mt-2">
                            <label>Name</label>
                            <input name="name" id="" class="form-control" placeholder="name" required>
                            <span class="text-danger"> <b>{{ $errors->first('name') }}</b></span>
                        </div>

                        <div class="form-group mt-2">
                            <label>Email</label>
                            <input name="email" type="email" id="" class="form-control" placeholder="email" required>
                            <span class="text-danger"> <b>{{ $errors->first('email') }}</b></span>
                        </div>

                        <div class="form-group mt-2">
                            <label>Password</label>
                            <input name="password" type="password" id="" class="form-control" placeholder="password"
                                required>
                            <span class="text-danger"> <b>{{ $errors->first('password') }}</b></span>
                        </div>

                        <div class="form-group mt-2">
                            <label>Confirm Password</label>
                            <input name="password_confirmation" type="password" id="" class="form-control"
                                placeholder="confirm password" required>
                            <span class="text-danger"> <b>{{ $errors->first('password_confirmation') }}</b></span>
                        </div>

                        <div class="form-group mt-2">
                            <label>Phone</label>
                            <input name="phone" id="" class="form-control" placeholder="phone" required>
                            <span class="text-danger"> <b>{{ $errors->first('phone') }}</b></span>
                        </div>

                        <div class="form-group mt-2">
                            <label>Address</label>
                            <input name="address" id="" class="form-control" placeholder="address" required>
                            <span class="text-danger"> <b>{{ $errors->first('address') }}</b></span>
                        </div>

                        <div class="form-group mt-2">
                            <label>Status</label>
                            <select class="form-control" name="status" required>
                                <option>Select Status</option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                            <span class="text-danger"> <b>{{ $errors->first('status') }}</b></span>
                        </div>
                    </div>
                    <div class="form-actions mt-2">
                        <a href="{{route('user.show')}}"><button type="button" class="btn btn-danger mr-1"><i
                                    class="ft-x"></i> Cancel</button></a>
                        <button type="submit" class="btn btn-primary"><i class="la la-check-square-o"></i>
                            Create</button>
                    </div>
                </form>
            </div>
        </div> <!-- end card -->
    </div>
    <!-- end col -->
</div>
@endsection

@section('footer.js')


@endsection