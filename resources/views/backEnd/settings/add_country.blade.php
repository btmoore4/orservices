@extends('backLayout.app')
@section('title')
Add Country
@stop

@section('content')
@if (session()->has('error'))
<div class="alert alert-danger alert-dismissable custom-success-box" style="margin: 15px;">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong> {{ session()->get('error') }} </strong>
</div>
@endif
@if (session()->has('success'))
<div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong> {{ session()->get('success') }} </strong>
</div>
@endif


<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Add Country</h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
                {!! Form::open(['route' => 'add_country.save_country','enctype' => 'multipart/form-data']) !!}
                    <div class="form-group {{ $errors->has('country') ? 'has-error' : ''}}">
                        <label class="col-sm-3 control-label text-right">Add country</label>
                        <div class="col-sm-6">
                            <div class="form-group">
                                {!! Form::select('country',$countries,'US',['class' => 'form-control']) !!}
                                {!! $errors->first('country', '<p class="help-block">:message</p>') !!}
                            </div>
                            <input type="submit" value="Add" class="btn btn-success">
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection