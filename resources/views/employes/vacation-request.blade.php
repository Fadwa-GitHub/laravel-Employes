@extends('adminlte::page')

@section('title')
Vacation Request | Laravel Employes App
@endsection

@section('content')
   <div class="container">
      <div class="row">
         <div class="col-md-8 mx-auto">
         <div class="card p-3 my-5">
            <div class="card-header">
                <h3>Vacation Request</h3>
            </div>
            <div class="card-body">
                    <p class="lead">
                        <b>{{$employe->fullname}}</b> is presently employed with me in the following :
                    </p>
                    <p class="lead">
                        <b>{{$employe->depart}}</b> departement.
                    </p>
                    <p class="lead">
                        He is requesting a vacation starting from <b>________________</b>
                    </p>
                    <p class="lead">
                        And ends on <b>______________</b>
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
