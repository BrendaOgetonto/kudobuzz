@extends('layouts.app')
@section('content')

<div data-v-715a1058="" class="card">
    <div data-v-715a1058="" class="card-body">
    	@if ($errors->count() > 0)
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
    	<form action="{{ route('employees.store') }}" method="post">
    		{{ csrf_field() }}
    		<div class="b-form-group form-group">
    			<div class="form-row">
    				<label class="col-sm-3 col-form-label">First Name</label>
    				<div class="col-sm-9">
    					<input id="fname" name="fname" class="form-control" value="{{ old('fname') }}">
    					<!----><!---->
    				</div>
    			</div>
    		</div>
    		<div class="b-form-group form-group">
    			<div class="form-row">
    				<label class="col-sm-3 col-form-label">Last Name</label>
    				<div class="col-sm-9">
    					<input id="lname" name="lname" class="form-control" value="{{ old('lname') }}">
    					<!----><!---->
    				</div>
    			</div>
    		</div>
    		<div class="b-form-group form-group">
    			<div class="form-row">
    				<label class="col-sm-3 col-form-label">Email</label>
    				<div class="col-sm-9">
    					<input id="email" name="email" type="email" class="form-control" value="{{ old('email') }}">
    					<!----><!---->
    				</div>
    			</div>
    		</div>
    		<div class="b-form-group form-group">
    			<div class="form-row">
    				<label class="col-sm-3 col-form-label">Phone Number</label>
    				<div class="col-sm-9">
    					<input id="phone" name="phone" class="form-control" value="{{ old('phone') }}">
    					<!----><!---->
    				</div>
    			</div>
    		</div>
    		<div data-v-715a1058="" slot="footer">
    			<input type="submit" value="Submit" class="btn btn-primary btn-sm" />
    		</div>
    	</form>
    </div>
</div>

@endsection