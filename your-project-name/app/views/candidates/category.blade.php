@extends('candidates/show')
@section('content')          
          <h2 class="sub-header">{{ $category->name }}</h2>
          <div class="table-responsive">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th>Nombre</td>
                  <th>Tipo</th>
                  <th>Descripcion</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                 @foreach ($category->paginate_candidates as $candidate)
                <tr>
                  <td>{{$candidate->user->full_name}}</td>
	                <td>{{ $candidate->job_type_title }}</td>
	                <td>{{ $candidate->description }}</td>
				 	<td><a href="{{ route('candidate', [$candidate->slug, $candidate->id])}}" class="btn btn-info">Ver</a></td>
                </tr>
				@endforeach
              </tbody>
            </table>
            {{$category->paginate_candidates->links()}}
          </div>
          @stop