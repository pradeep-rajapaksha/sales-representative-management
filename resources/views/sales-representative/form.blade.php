<!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->

<div class="row">
    <div class="form-group col-md-6 {{ $errors->has('name') ? 'has-error' : ''}}">
        {!!  Html::decode(Form::label('name', 'Full Name <span class="req_star">*</span>', ['class' => 'control-label col-md-12']) ) !!}
        <div class="col-md-12">
            {!!  Form::text('name', null , ['class' => 'form-control'] ) !!}
            {!! $errors->first('name', '<p class="help-block text-danger">:message</p>') !!}
        </div>
    </div> 
    <div class="form-group col-md-6 {{ $errors->has('email') ? 'has-error' : ''}}">
        {!! Html::decode(Form::label('email', 'Email <span class="req_star">*</span>', ['class' => 'control-label col-md-12']) ) !!}
        <div class="col-md-12">
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
            {!! $errors->first('email', '<p class="help-block text-danger">:message</p>') !!}
        </div>
    </div>
    <div class="form-group col-md-6 {{ $errors->has('telephone') ? 'has-error' : ''}}">
        {!! Html::decode(Form::label('telephone', 'Telephone <span class="req_star">*</span>', ['class' => 'control-label col-md-12']) ) !!}
        <div class="col-md-12">
            {!! Form::text('telephone', null, ['class' => 'form-control']) !!}
            {!! $errors->first('telephone', '<p class="help-block text-danger">:message</p>') !!}
        </div>
    </div>
    <div class="form-group col-md-6 {{ $errors->has('joined_on') ? 'has-error' : ''}}">
        {!! Html::decode(Form::label('joined_on', 'Joined Date', ['class' => 'control-label col-md-12']) ) !!}
        <div class="col-md-12">
            {!! Form::date('joined_on', null, ['class' => 'form-control']) !!}
            {!! $errors->first('joined_on', '<p class="help-block text-danger">:message</p>') !!}
        </div>
    </div>

    <div class="form-group col-md-6 {{ $errors->has('salse_route_id') ? 'has-error' : ''}}">
        {!! Html::decode(Form::label('salse_route_id', 'Salse Route', ['class' => 'control-label col-md-12']) ) !!}
        <div class="col-md-12">
            {!! Form::select('salse_route_id', $salseRoutes, null, ['class' => 'form-control']) !!}
            {!! $errors->first('salse_route_id', '<p class="help-block text-danger">:message</p>') !!}
        </div>
    </div>

    <div class="form-group col-md-6 {{ $errors->has('status') ? 'has-error' : ''}}">
        {!! Html::decode(Form::label('status', 'Status', ['class' => 'control-label col-md-12']) ) !!}
        <div class="col-md-12">
            {!! Form::select('status', ['active' => 'Active', 'inactive' => 'Inactive'], null, ['class' => 'form-control']) !!}
            {!! $errors->first('status', '<p class="help-block text-danger">:message</p>') !!}
        </div>
    </div>
</div> 

<div class="row">
    <div class="form-group col-md-12">
        <div class="col-md-12"> 
            {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Submit', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        // body...
        // $('.datepicker').datepicker({
        //     endDate: '-1d',
        //     orientation: 'bottom',
        //     format: 'yyyy-mm-dd'
        // });
    })
</script>