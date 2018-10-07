@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Proposals</div>
                <div class="panel-body">
                <br>
                <a href="createprop" class="btn btn-success">Add New</a>
                <br>
                <table class="table">
                <thead>
                <th>Code</th>
                <th>Clint Name</th>
                <th>Date</th>
                <th>Value</th>
                <tr>
                </tr>
                </thead>
                <tbody>
                    @foreach($proposals as $proposal)
                    <tr>
                    <td>
                            {{ $proposal->code }}
                        </td>
                         <td>
                            {{ $proposal->clintname }}
                        </td>
                        <td>
                            {{ $proposal->created_at }}
                        </td>
                        <td>
                            {{ $proposal->propsalvalue }}
                        </td>
                        <td>
                           <a href="destroy/{{ $proposal->id }}"  class="btn btn-danger" >DELETE</a>
                        </td>
                     </tr>
                    @endforeach
                    </tbody>
                    </table>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
