@extends('layouts.app')

@section('content')
<div class="app-main">
	<div class="card" style="height: fit-content; margin-left: auto; margin-right: auto; width: 60% !important;">
		<div class="card-header" style="text-align: center !important;">login</div>
		<div class="card-content">
			<div class="form">
				<div style="padding: 10px">
					<form method="post">
						@csrf
					  <div class="form-group">
					    <label for="exampleInputEmail1">Username</label>
					    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Password</label>
					    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					  </div>
					  <button type="submit" class="btn btn-primary btn-block">Login</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection