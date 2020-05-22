@extends('layouts.admintemplate')

@section('content')

<div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                            <div class="row">
                                <!-- [ configuration table ] start -->
                                <div class="col-sm-12">
                                    <div class="card">
                                    @if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif
                                        <div class="card-header">
                                            <h5>Update Vendor</h5>
                                        </div>
                                        <div class="card-body">
                                        <div class="row">
                                                <div class="col-md-6">
                                                <form method="POST" action="{{url('/admin/updatevendor/'.$hash_key)}}" aria-label="{{ __('Login') }}">
            @csrf
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Name</label>
                                                            <input id="name" value="{{ $user->name }}" placeholder="Name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                                        </div>
                                                        <input type="hidden" value="{{ $hash_key }}" name="hash_key" />
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Mobile</label>
                                                            <input id="mobile" value="{{ $user->mobile }}" placeholder="Mobile" type="text" class="form-control{{ $errors->has('mobile') ? ' is-invalid' : '' }}" name="mobile" value="{{ old('mobile') }}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Email</label>
                                                            <input id="email" value="{{ $user->email }}" placeholder="Email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Address</label>
                                                            <input id="address" value="{{ $user->address }}" placeholder="Address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Zip Code</label>
                                                            <input id="zipcode" value="{{ $user->zipcode }}" placeholder="Zip Code" type="text" class="form-control{{ $errors->has('zipcode') ? ' is-invalid' : '' }}" name="zipcode" value="{{ old('zipcode') }}" required>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </form>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                </div>
                                </div>
                                </div>
                    
                </div>
            </div>
        </div>
    </div>

@endsection
