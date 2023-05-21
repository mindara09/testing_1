@extends('layout')
@section('title', 'Login Page')

@section('content')


<div class="container">
	<!-- Outer Row -->
	<div class="justify-content-center">
		<div class="card" style="margin-left: 100px; margin-right: 100px;">
			<div class="card-body">

				<img src="{{ url('/img/background.png')}}" class="img-fluid" sizes="10">
			</div>
		</div>
		<div class="card col-10 mt-5" style="margin-left: 100px; margin-right: 100px;">
			<div class="card-body">
				<h1>Profile : {{ $profile->first_name }} {{ $profile->last_name }} </h1>
				<hr>
				@if (Session::has('success'))
				    <div class="alert alert-success">
				        <ul>
				            <li>{{ Session::get('success') }}</li>
				        </ul>
				    </div>
				@elseif (Session::has('error'))
					<div class="alert alert-danger">
				        <ul>
				            <li>{{ Session::get('error') }}</li>
				        </ul>
				    </div>

				@endif
				<form class="user" action="{{ route('update.profile', 'process=profile')}}" method="POST">
					@csrf
					<div class="row">
						<div class="col">
							<div class="form-group">
			                	<label>First Name</label>
			                    <input type="text" class="form-control form-control-user"
			                        id="exampleInputEmail" aria-describedby="emailHelp"
			                        placeholder="First Name" required="" name="first_name" value="{{ $profile->first_name }}">
			                </div>
						</div>
						<div class="col">
							<div class="form-group">
			                	<label>Last Name</label>
			                    <input type="text" class="form-control form-control-user"
			                        id="exampleInputEmail" aria-describedby="emailHelp"
			                        placeholder="Last Name" required="" name="last_name" value="{{ $profile->last_name }}">
			                </div>
						</div>
					</div>
	                <div class="form-group">
	                	<label>Phone Number</label>
	                    <input type="number" class="form-control form-control-user"
	                        id="exampleInputEmail" aria-describedby="emailHelp"
	                        placeholder="Phone number" required="" name="number_ident" value="{{ $profile->number_ident }}">
	                </div>
	                <div class="form-group">
	                	<label>Email</label>
	                    <input type="email" class="form-control form-control-user"
	                        id="text" placeholder="Email..." required="" name="email" value="{{ $profile->email }}">
	                </div>
	                <div class="form-group">
	                	<label>Address</label>
	                    <input type="text" class="form-control form-control-user"
	                        id="text" placeholder="Address..." required="" name="address" value="{{ $profile->address }}">
	                </div>
	                <div class="row">
	                	<div class="col">
	                		<div class="form-group">
			                	<label>City</label>
			                    <input type="text" class="form-control form-control-user"
			                        id="text" placeholder="City..." required="" name="city" value="{{ $profile->city }}">
			                </div>
	                	</div>
	                	<div class="col">
	                		<div class="form-group">
			                	<label>Province</label>
			                    <input type="text" class="form-control form-control-user"
			                        id="text" placeholder="Province..." required="" name="province" value="{{ $profile->province }}">
			                </div>
	                	</div>
	                </div>
	                <div class="row">
	                	<div class="col">
	                		<div class="form-group">
			                	<label>Zip Code</label>
			                    <input type="text" class="form-control form-control-user"
			                        id="text" placeholder="Zip Code..." required="" name="zip_code" value="{{ $profile->zip_code }}">
			                </div>
	                	</div>
	                	<div class="col">
	                		<div class="form-group">
			                	<label>Country</label>
			                    <input type="text" class="form-control form-control-user"
			                        id="text" placeholder="Country..." required="" name="country" value="{{ $profile->country }}">
			                </div>
	                	</div>
	                </div>
	                <button type="submit" class="btn btn-warning btn-user btn-block mt-5 mb-5">
	                	Change Profile
	                </button>
	              </form>
	                <hr>
	              <form action="{{ route('update.profile', 'process=password')}}" method="POST">
	              	@csrf
	                <p>Account</p>
	                <hr>
	                <div class="row">
	                	<div class="col">
	                		<div class="form-group">
			                	<label>Password</label>
			                    <input type="password" class="form-control form-control-user"
			                        id="text" placeholder="Password..." required="" name="password">
			                </div>
	                	</div>
	                	<div class="col">
	                		<div class="form-group">
			                	<label>Confirm Password</label>
			                    <input type="password" class="form-control form-control-user"
			                        id="text" placeholder="Confirm Password..." required="" name="confirm_password">
			                </div>
	                	</div>
	                </div>
	                <hr>
	                <button type="submit" class="btn btn-primary btn-user btn-block mt-5 mb-5">
	                	Change Password
	                </button>
	            </form>
			</div>
		</div>
		<a href="{{ route('logout.user') }}" class="btn btn-danger btn-user btn-block mt-5 mb-5">Logout</a>
	</div>
</div>

@endsection