@extends('layouts.app')
@section('content')
    <link href="{!! asset('css/all.css') !!}" media="all" rel="stylesheet" type="text/css" />
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="pull-left">
                        <form action="{{ URL::previous() }}" method="GET">{{ csrf_field() }}
                            <button type="submit" id="create-resident" class="btn btn-primary"><i class="fa fa-btn fa-file-o"></i>Back</button>
                        </form>
                    </div>
                    <div class="panel-heading text-center" > Create New Common Area</div>
                    <div class="panel-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors-> all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        {!! Form::open(['url' => 'commonarea']) !!}
                        <div class="form-group">
                            <span style="color: red; display:block; float:left">*</span>
                            {!! Form::label('cntr_id', 'Center Name:',['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-4">
                                {{ Form::select('cntr_id', array_merge([0 => 'Please Select']) + $centers, 'default', array('id' => 'center_dropdown','required' => 'required')) }}
                            </div>
                            </br> </br>
                            <span style="color: red; display:block; float:left">*</span>
                            {!! Form::label('ca_name', 'Common Area/System name:',['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-4">
                                {!! Form::text('ca_name',null,['class'=>'col-md-4 form-control','required' => 'required']) !!}
                            </div>
                        </div>
                        </br> </br>



                            <div class="form-group">

                                <div class="form-group">
                                    {!! Form::label('ca_comments', 'Comments:',['class' => 'col-md-4 control-label']) !!}
                                    <div class="col-md-4">
                                        {!! Form::textarea('ca_comments',null,['class' => 'col-md-4 form-control','rows' => 4, 'cols' => 60]) !!}
                                    </div>
                                </div>
                                    </br> </br>

                                    <div class="form-group" style="text-align: center; padding-top: 100px">
                                        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}

                                    </div>
    {!! Form::close() !!}
                                </div>
                            </div>
                    </div>
                </div>
        </div>
    </div>
@stop