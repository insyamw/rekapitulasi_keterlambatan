
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
                        <a class="btn btn-success mb-3" href="{{ route('lates.create') }}"> Create New Late</a>
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
                'Student',
                'Date Time Late',
                'Information',
                'File',
                ['label' => 'Actions', 'no-export' => true, 'width' => 5],
            ];
            @endphp
            
            <x-adminlte-datatable id="table1" :heads="$heads" striped hoverable with-buttons>
                @foreach ($lates as $i => $late)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $late->student_id }}</td>
                        <td>{{ $late->date_time_late }}</td>
                        <td>{{ $late->information }}</td>
                        <td><img src="{{$late->getFirstMediaUrl('file', 'thumb')}}" / width="220px"></td>
                        <td>
                            <form action="{{ route('lates.destroy',$late->id) }}" method="POST">
                                <a href="{{ route('lates.exports.download-pdf', $late->id) }}" class="btn btn-primary" target="_blank">CETAK PDF</a>

                                <a class="btn btn-info" href="{{ route('lates.show',$late->id) }}">Show</a>

                                <a class="btn btn-primary" href="{{ route('lates.edit',$late->id) }}">Edit</a>

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

