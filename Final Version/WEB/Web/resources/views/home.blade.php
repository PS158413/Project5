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
                    <h1>Oefeningen</h1>

                    <table class="table">
                        <tr>
                          <th>id</th>
                          <th>oefening</th>
                          <th>foto</th>
                          <th>beschrijving</th>
                        </tr>
                        @foreach($oefenings as $value)
                        <tr>
                            <td>{{$value['id']}}</td>
                            <td>{{$value['oefening']}}</td>
                            <td>
                                <img src="http://localhost:8181/storage/oefening/foto/{{ $value['foto'] }}" width="100px">
                            </td>
                            <td>




                            </td>
                        </tr>
                        @endforeach
                      </table>





                </div>
            </div>
        </div>
    </div>
</div>
@endsection
