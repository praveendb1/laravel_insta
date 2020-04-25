@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 p-5">
                             <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRazI0fd4lIJEsFIxoSPhIFL0Hxlchy-Lp3OQXfYwpZcxmMqmo5&usqp=CAU" alt="" class="rounded-circle" height="100" width="100">
                             
                            </div>
                     
                            <div class="col-md-9">
                                 <div class="">
                                    <h5>{{$user->username}}</h5>
                                 </div>
                                 <div class="d-flex">
                                     <div class="pr-5"><strong>1564</strong></div>
                                     <div class="pr-5"><strong>278K</strong></div>
                                     <div class="pr-5"><strong>123</strong></div>
                                 </div>
                                 <div class="pt-5">
                                     <h5>{{$user->username}}</h5>
                                     <p>{{$user->profile->title}}</p>
                                     <p>{{$user->profile->description?? N/A}}</p>

                                 </div>
                     
                         </div>
                             <div class="row">
                                 <div class="col-md-4">
                                     <img src="data:image/jpeg;base64,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" alt="">
                                 </div>
                                 <div class="col-md-4">
                                     <img src="data:image/jpeg;base64,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" alt="">
                                 </div>
                                 <div class="col-md-4">
                                     <img src="data:image/jpeg;base64,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" alt="">
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