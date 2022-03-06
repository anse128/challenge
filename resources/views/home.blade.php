@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="card-header">
            <a href="/marvel/public/information">Add information</a>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">comic</th>

            </tr>
        </thead>
        <tbody>
            <tr >
                <th scope="row">1</th>
                <td>{{$comicArray['data']['total']}}</td>
            </tr>
        </tbody>
       
    </table>

</div>
@endsection
