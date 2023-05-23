@extends('adminlte::page')

@section('title')
Update employes | Laravel Employes App
@endsection

@section('content_header')
   <h1>Update employes</h1>
@endsection

@section('content')
<div class="container">
        <div class="row"> 
           @include('layouts.alert')
            <div class="col-md-10 mx-auto">
                <div class="card my-5">
                    <div class="card-header">
                        <div class="text-center font-weight-bold text-uppercase">
                            <h4>Update employes</h4>
                        </div>
                    </div>
                <div class="card-body">
                    <form action="{{ url('/employes/update',$employe->registration_number) }}" method="POST" class="mt-3">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label for="fullname" class="form-label fw-bold">Full Name</label>
                            <input type="text" name="fullname" value="{{old('fullname',$employe->fullname)}}" placeholder="Full Name" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="registration_number">Registration Number</label>
                            <input type="text" name="registration_number" value="{{old('registration_number',$employe->registration_number)}}"  placeholder="Registration Number" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="depart">Departement</label>
                            <input type="text" class="form-control" value="{{old('depart',$employe->depart)}}"  name="depart" placeholder="Departement">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="hire_date">Hiring Date</label>
                            <input type="date" class="form-control" value="{{old('hire_date',$employe->hire_date)}}"  placeholder="Hiring Date" name="hire_date">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="phone">Phone</label>
                            <input type="text" class="form-control" value="{{old('phone',$employe->phone)}}"  placeholder="Phone" name="phone">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="adress">Address</label>
                            <input type="text" class="form-control" value="{{old('adress',$employe->adress)}}"  placeholder="adress" name="adress">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="city">City</label>
                            <input type="text" class="form-control" value="{{old('city',$employe->city)}}"  placeholder="City" name="city">
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