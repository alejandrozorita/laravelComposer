@extends('candidates/show')
@section('content')          



          <h2 class="sub-header">{{ $candidate->user->full_name }}</h2>
          <p><b>Cátegoría: </b><a href="{{ route('category', [$candidate->category->slug, $candidate->category->id])}}" >{{ $candidate->category->name }}</a></td></p>
          <p><b>Tipo de Trabajo: </b> {{ $candidate->job_type }}</p>
          <p><b>WebSite: </b>  <td>{{ $candidate->website_url }}</td></p>
          <p><b>Descripcion: </b>  <td>{{ $candidate->description }}</td></p>
          <p></p>
          <div class="table-responsive">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th>Nombre</td>
                  <th>Tipo</th>
                  <th>Descripcion</th>
                </tr>
              </thead>
              <tbody>
                <tr>
	                <td>{{ $candidate->user->full_name }}</td>
	                <td>{{ $candidate->job_type_title }}</td>
	                <td>{{ $candidate->description }}</td>
				 	<td><a href="{{ route('category', [$candidate->category->slug, $candidate->category->id])}}" >{{ $candidate->category->name }}</a></td>
                </tr>
              </tbody>
            </table>
          </div>
          @stop