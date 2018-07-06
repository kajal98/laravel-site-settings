@extends('layouts.admin')
@section('content')
<div class="min-height-200px">

	<!-- Contextual classes Start -->
	<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
		<div class="clearfix mb-20">
			<div class="pull-left">
				<h4 class="text-blue">Users</h4>
			</div>
			<div class="pull-right">
				<a href="/admin/users/create" class="btn btn-primary btn-sm scroll-click" rel="content-y" role="button"><i class="fa fa-plus"></i> Add User</a>
			</div>
		</div>
		<div class="table-responsive">
			@if($users->count() > 0)
			<table class="table table-striped">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Name</th>
						<th scope="col">Email</th>
						<th scope="col">Role</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach($users as $user)
						<tr>
							<th>{!! $user->id !!}</th>
							<td>{!! $user->name !!}</td>
							<td>{!! $user->email !!}</td>
							<td>{!! $user->role !!}</td>
							<td><a href="{!!route('users.show',['id'=>$user->id])!!}" class="btn btn-warning"><i class="fa fa-eye"></i></a> <a href="{!!route('users.edit',['id'=>$user->id])!!}" class="btn btn-success"><i class="fa fa-pencil"></i></a> <a href="{!!route('users.destroy',['id'=>$user->id])!!}" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
						</tr>
					@endforeach						 
				</tbody>
			</table>
			@else
				<P>No users found</P>
			@endif
		</div>
	</div>
	<!-- Contextual classes End -->
</div>
@endsection