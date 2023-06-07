@extends('adminlte::page')

@section('title')
Show employes | Laravel Employes App
@endsection

@section('content_header')
   <h1>Show employes</h1>
@endsection

@section('content')
<div class="container">
        <div class="row"> 
           @include('layouts.alert')
            <div class="col-md-10 mx-auto">
                <div class="card my-5">
                    <div class="card-header">
                        <div class="text-center font-weight-bold text-uppercase">
                            <h4>{{$employe->fullname}}</h4>
                        </div>
                    </div>
                    <div class="mt-2 text-center font-weight-bold text-uppercase">
                            <a href="{{url('/employes/vacation-request',$employe->registration_number)}}" class="btn btn-outline-dark">
                                Vacation Request
                            </a>
                            <a href="{{url('/employes/certificate-request',$employe->registration_number)}}" class="btn btn-outline-danger">
                                Work Certificate
                            </a>
                    </div>
                    <hr>
                <div class="card-body">
                        <div class="form-group mb-3">
                            <label for="fullname" class="form-label fw-bold">Full Name</label>
                            <input type="text" name="fullname" value="{{$employe->fullname}}" placeholder="Full Name" disabled class="form-control rounded-0">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="registration_number">Registration Number</label>
                            <input type="text" name="registration_number" value="{{$employe->registration_number}}"  placeholder="Registration Number" disabled class="form-control rounded-0">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="depart">Departement</label>
                            <input type="text" class="form-control rounded-0" value="{{$employe->depart}}"  name="depart" disabled placeholder="Departement">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="hire_date">Hiring Date</label>
                            <input type="date" class="form-control rounded-0" value="{{$employe->hire_date}}"  placeholder="Hiring Date" disabled name="hire_date">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="phone">Phone</label>
                            <input type="text" class="form-control rounded-0" value="{{$employe->phone}}"  placeholder="Phone" disabled name="phone">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="adress">Address</label>
                            <input type="text" class="form-control rounded-0" value="{{$employe->adress}}"  placeholder="adress" disabled name="adress">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="city">City</label>
                            <input type="text" class="form-control rounded-0" value="{{$employe->city}}"  placeholder="City" disabled name="city">
                        </div>
                        <div class="form-group pull-right text-right">
                      <a href="{{ url('/employes/index')}}"><button class="btn btn-primary">Back</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection