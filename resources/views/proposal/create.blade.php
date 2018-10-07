@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create proposal</div>
                <div class="panel-body">
     
                    <form action="saveprop" method="post">
                     {{csrf_field()}}
                        <div class="form-group">
                            <label for="clint">Clint Name</label>
                            <input type="text" class="form-control" id="clint" name="clint"  placeholder="Clint">
                        </div>
                        <div class="form-group">
                            <label for="proval">Proposal Value</label>
                            <input type="text" class="form-control" id="proval" name="proval"  placeholder="Value">
                        </div>
                        <div class="form-group">
                            <label for="proval">Proposal Type</label>
{{ Form::select('proposaltype',   array(''=>'selct ...') + App\Proposaltype::pluck( 'tname', 'id')->toArray() , NULL, array('class' => 'required form-control')) }}                        
                        </div>
                        <div class="form-group">
                            <label for="proval">Client Source</label>
{{ Form::select('clientsource',   array(''=>'selct ...') + App\Clientsource::pluck( 'sname', 'id')->toArray() , NULL, array('class' => 'required form-control')) }}                        
                        </div>
                        <div class="form-group">
                            <label for="proval">Technical Approval</label>
{{ Form::select('technicalapproval',   array(''=>'selct ...') + App\Technicalapproval::pluck( 'aname', 'id')->toArray() , NULL, array('class' => 'required form-control')) }}                        
                        </div>

                   <button type="submit" class="btn btn-success">SAVE</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
