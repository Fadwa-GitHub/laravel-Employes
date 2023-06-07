@extends('adminlte::page')

@section('title')
Work Certificate Request | Laravel Employes App
@endsection

@section('content')
   <div class="container">
      <div class="row">
         <div class="col-md-8 mx-auto">
         <div class="card p-3 my-5">
            <div class="card-header">
                <h3>Work Certificate Request</h3>
            </div>
            <div class="card-body">
                    <p class="lead">
                        This is to certify that <b>{{$employe->fullname}}</b> is presently employed with me in the following :
                    </p>
                    <p class="lead">
                        <b>{{$employe->depart}}</b> departement.
                    </p>
                    <p class="lead">
                        Their employment began on <b>{{$employe->hire_date}}</b>
                    </p>
                    <p class="lead">
                        This Certification is being issued upon the request of <b>{{$employe->fullname}}</b> for whatever legal purpose it may serve.
                    </p>
                    <p class="lead">
                        Issued on <b>{{\Carbon\Carbon::today()->toDateString()}}</b> at <b>{{\Carbon\Carbon::now()->toTimeString()}}</b>
                    </p>
                    <p class="m-5">
                        ___________
                        ___________
                    </p>
                    <div class="my-4">
                        <a href="#" 
                        onclick="
                                document.getElementById('printLink').style.display='none'
                                document.getElementById('cancel-id').style.display='none'
                                setTimeout(function(){
                                    document.getElementById('printLink').style.display='inline-block'
                                    document.getElementById('cancel-id').style.display='inline-block'
                                },2000);
                                window.print();
                        "
                        class="btn btn-sm btn-primary" id="printLink">
                            <i class="fas fa-print"></i>
                        </a>
                    </div>
                    <div class="form-group pull-right text-right">
                      <a href="{{ url('/employes/show',$employe->registration_number) }}"><button class="btn btn-outline-secondary" id="cancel-id">Cancel</button></a>
                    </div>
             </div>
         </div> 
      </div>
      </div>
   </div>
@endsection
