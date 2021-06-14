<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <p>Hi Admin:  {{ Auth::user()->name }}</p>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="row">
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                        <th scope="col">No.1</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Sign In Date </th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($users as $row)
                            <tr>
                                <th>{{$row->id}}</th>
                                <td>{{$row->name}}</td>
                                <td>{{$row->email}}</td>
                                <td>{{$row->created_at}}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table> 
            
            </div>
        </div>
    </div>

</x-app-layout>

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

                    You are admin user.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

