@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @auth
                                bem vindo admin
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
