@extends('layout')
@section('title', 'Dashboard Admin Page')

@section('content')

<div class="container">
	
	<div class="justify-content-center">
		<div class="card" style="margin-left: 100px; margin-right: 100px;">
			<div class="card-body">

				<img src="{{ url('/img/background.png')}}" class="img-fluid" sizes="10">
			</div>
		</div>
		<div class="card col-10 mt-5" style="margin-left: 100px; margin-right: 100px;">
			<div class="card-body">
				<table class="table">
					<tr>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Email</th>
						<th>No. Handphone</th>
						<th>Action</th>
					</tr>
					@foreach($users as $user)
					<tr>
						<td>{{ $user->first_name }} </td>
						<td>{{ $user->last_name }} </td>
						<td>{{ $user->email }} </td>
						<td>{{ $user->number_ident }} </td>
						<td>
							<center>
								<a href="{{ route('profile.detail', $user->id )}} " class="fa fa-eye"></a>
							</center>
						</td>
					</tr>
					@endforeach
				</table>
			</div>
		</div>
		<a href="{{ route('logout.admin') }}" class="btn btn-danger btn-user btn-block mt-5 mb-5">Logout</a>
	</div>
</div>

@endsection