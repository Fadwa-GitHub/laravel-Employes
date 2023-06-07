@extends('adminlte::page')

@section('title')
Add new employes | Laravel Employes App
@endsection

@section('content_header')
   <h1>Add new employes</h1>
@endsection

@section('content')
<div class="container">
        <div class="row"> 
           @include('layouts.alert')
            <div class="col-md-10 mx-auto">
                <div class="card my-5">
                    <div class="card-header">
                        <div class="text-center font-weight-bold text-uppercase">
                            <h4>Add new employes</h4>
                        </div>
                    </div>
                <div class="card-body">
                    <form action="{{ url('/employes/store') }}" method="POST" class="mt-3">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="fullname" class="form-label fw-bold">Full Name</label>
                            <input type="text" name="fullname"  value="{{old('fullname')}}" placeholder="Full Name" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="registration_number">Registration Number</label>
                            <input type="text" name="registration_number" maxlength="8" value="{{old('registration_number')}}"  placeholder="Registration Number" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="depart">Departement</label>
                            <input type="text" class="form-control" value="{{old('depart')}}"  name="depart" placeholder="Departement">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="hire_date">Hiring Date</label>
                            <input type="date" class="form-control" value="{{old('hire_date')}}"  placeholder="Hiring Date" name="hire_date">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="phone">Phone</label>
                            <input type="text" class="form-control" value="{{old('phone')}}"  placeholder="Phone" name="phone" maxlength="10">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="adress">Address</label>
                            <input type="text" class="form-control" value="{{old('adress')}}"  placeholder="adress" name="adress">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="city">City</label>
                            <input type="text" class="form-control" value="{{old('city')}}"  placeholder="City" name="city">
                        </div>
                        <div class="form-group ">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection