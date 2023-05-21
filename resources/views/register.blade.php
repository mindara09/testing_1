@extends('layout')
@section('title', 'Register Page')

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
				<h1>Personal Register Letter</h1>
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
				<form class="user" action="{{ route('register.store')}}" method="POST">
					@csrf
					<div class="row">
						<div class="col">
							<div class="form-group">
			                	<label>First Name</label>
			                    <input type="text" class="form-control form-control-user"
			                        id="exampleInputEmail" aria-describedby="emailHelp"
			                        placeholder="First Name" required="" name="first_name">
			                </div>
						</div>
						<div class="col">
							<div class="form-group">
			                	<label>Last Name</label>
			                    <input type="text" class="form-control form-control-user"
			                        id="exampleInputEmail" aria-describedby="emailHelp"
			                        placeholder="Last Name" required="" name="last_name">
			                </div>
						</div>
					</div>
	                <div class="form-group">
	                	<label>Phone Number</label>
	                    <input type="number" class="form-control form-control-user"
	                        id="exampleInputEmail" aria-describedby="emailHelp"
	                        placeholder="Phone number" required="" name="number_ident">
	                </div>
	                <div class="form-group">
	                	<label>Email</label>
	                    <input type="email" class="form-control form-control-user"
	                        id="text" placeholder="Email..." required="" name="email">
	                </div>
	                <div class="form-group">
	                	<label>Address</label>
	                    <input type="text" class="form-control form-control-user"
	                        id="text" placeholder="Address..." required="" name="address">
	                </div>
	                <div class="row">
	                	<div class="col">
	                		<div class="form-group">
			                	<label>City</label>
			                    <input type="text" class="form-control form-control-user"
			                        id="text" placeholder="City..." required="" name="city">
			                </div>
	                	</div>
	                	<div class="col">
	                		<div class="form-group">
			                	<label>Province</label>
			                    <input type="text" class="form-control form-control-user"
			                        id="text" placeholder="Province..." required="" name="province">
			                </div>
	                	</div>
	                </div>
	                <div class="row">
	                	<div class="col">
	                		<div class="form-group">
			                	<label>Zip Code</label>
			                    <input type="text" class="form-control form-control-user"
			                        id="text" placeholder="Zip Code..." required="" name="zip_code">
			                </div>
	                	</div>
	                	<div class="col">
	                		<div class="form-group">
			                	<label>Country</label>
			                    <input type="text" class="form-control form-control-user"
			                        id="text" placeholder="Country..." required="" name="country">
			                </div>
	                	</div>
	                </div>
	                <hr>
	                <p>Account</p>
	                <hr>
	                <div class="row">
	                	<div class="col">
	                		<div class="form-group">
			                	<label>Password</label>
			                    <input type="text" class="form-control form-control-user"
			                        id="text" placeholder="Password..." required="" name="password">
			                </div>
	                	</div>
	                	<div class="col">
	                		<div class="form-group">
			                	<label>Confirm Password</label>
			                    <input type="text" class="form-control form-control-user"
			                        id="text" placeholder="Confirm Password..." required="" name="confirm_password">
			                </div>
	                	</div>
	                </div>
	                <hr>
	                <button type="submit" class="btn btn-primary btn-user btn-block mt-5 mb-5">
	                	Submit
	                </button>
	            </form>
			</div>
		</div>
	</div>
</div>
@endsection