@extends('main')
<div class="row">
		<div class="col-md-8">
			<h1>Skills</h1>
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
					</tr>
				</thead>

				<tbody>
					@foreach ($skills as $skill)
					<tr>
						<th>{{ $skill->id }}</th>
						<td>{{ $skill->name }}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div> <!-- end of .col-md-8 -->

		<div class="col-md-3">
			<div class="well">
				{!! Form::open(['route' => 'skills.store', 'method' => 'POST']) !!}
					<h2>New Skill</h2>
					{{ Form::label('name', 'Name:') }}
					{{ Form::text('name', null, ['class' => 'form-control']) }}

					{{ Form::submit('Create New Tag', ['class' => 'btn btn-primary btn-block btn-h1-spacing']) }}

				{!! Form::close() !!}
			</div>
		</div>
	</div>
