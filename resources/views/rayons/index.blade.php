
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Rekapitulasi Keterlambatan</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-success mb-3" href="{{ route('rayons.create') }}"> Create New Rayon</a>
                    </div>
                </div>
            </div>

            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif

            
            
            @php
            $heads = [
                'No',
                'Rayon',
                'User',
                ['label' => 'Actions', 'no-export' => true, 'width' => 5],
            ];
            @endphp
            
            <x-adminlte-datatable id="table1" :heads="$heads" striped hoverable with-buttons>
                @foreach ($rayons as $i => $rayon)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $rayon->rayon }}</td>
                        <td>{{ $rayon->user_id }}</td>
                        <td>
                            <form action="{{ route('rayons.destroy',$rayon->id) }}" method="POST">

                                <a class="btn btn-info" href="{{ route('rayons.show',$rayon->id) }}">Show</a>

                                <a class="btn btn-primary" href="{{ route('rayons.edit',$rayon->id) }}">Edit</a>

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </x-adminlte-datatable>

        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

