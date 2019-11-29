@extends('main')
<div class="row">
		<div class="col-md-12">
      <table id="dtMaterialDesignExample" class="table table-striped" cellspacing="0" width="100%">
				<thead>
					<th>#</th>
					<th>Company Name</th>
					<th>experience</th>
					<th>Skills</th>
				</thead>

				<tbody>

					@foreach ($companies as $companies)

						<tr>
							<th>{{ $companies->id }}</th>
							<td>{{ $companies->company_name}}</td>
              <td>{{ $companies->experience}}</td>
              <td>@foreach ($companies->skills as $skill)
					<span class="label label-default">{{ $skill->name }}</span>
				@endforeach</td>
						</tr>

					@endforeach

				</tbody>
			</table></div></div>

<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Create Company</h1>
			<hr>
			{!! Form::open(array('route' => 'companies.store', 'data-parsley-validate' => '', 'files' => true)) !!}
				{{ Form::label('title', 'Company Name:') }}
				{{ Form::text('company_name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

				{{ Form::label('slug', 'experience:') }}
				{{ Form::text('experience', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255') ) }}



				{{ Form::label('skill', 'skills:') }}
				<select class="form-control select2-multi" name="skills[]" multiple="multiple">
					@foreach($skills as $skill)
						<option value='{{ $skill->id }}'>{{ $skill->name }}</option>
					@endforeach

				</select>


				{{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
			{!! Form::close() !!}
		</div>
	</div>
