@extends('main')
<div class="row">
		<div class="col-md-12">
      <table id="dtMaterialDesignExample" class="table table-striped" cellspacing="0" width="100%">
				<thead>
					<th>#</th>
					<th>knowledge level</th>
					<th>Experience</th>
					<th>Skills</th>
					<th>No of Projects</th>
          <th>Highest Certificate</th>
          <th>Comment</th>

				</thead>

				<tbody>

					@foreach ($candidates as $candidate)

						<tr>
							<th>{{ $candidate->id }}</th>
							<td>{{ $candidate->knowledge_level}}</td>
              <td>{{ $candidate->experience}}</td>
              <td>@foreach ($candidate->skills as $skill)
					<span class="label label-default">{{ $skill->name }}</span>
				@endforeach</td>
        <td>{{ $candidate->no_of_projects}}</td>
        <td>{{ $candidate->highest_certificate}}</td>
        <td>{{ $candidate->comment}}</td>
						</tr>

					@endforeach

				</tbody>
			</table></div></div>

<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Create Candidate</h1>
			<hr>
			{!! Form::open(array('route' => 'candidates.store', 'data-parsley-validate' => '', 'files' => true)) !!}
      {{ Form::label('title', 'knowledge level:') }}

				{{ Form::text('knowledge_level', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
        {{ Form::label('title', 'Experience:') }}

				{{ Form::text('experience', null, array('class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255') ) }}
        {{ Form::label('title', 'No of Projects:') }}

        {{ Form::text('no_of_projects', null, array('class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255') ) }}
        {{ Form::label('title', 'Comment:') }}

        {{ Form::text('comment', null, array('class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255') ) }}
        {{ Form::label('title', 'Highest Certificate:') }}

        {{ Form::text('highest_certificate', null, array('class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255') ) }}

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
