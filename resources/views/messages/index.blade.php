@extends('layout.app')
@section('content')
<!-- Sale & Revenue Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-comments fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Total messages</p>
                  <h6 class="mb-0">{{ $messages->count() }}</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-comments fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Unresponded</p>
                    <h6 class="mb-0">{{ $messages->where('response', null)->count() }}</h6>                
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-users fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Total Agents</p>
                    <h6 class="mb-0">{{ $users->count() }}</h6>
                </div>
            </div>
        </div>        
    </div>
</div>
@endsection