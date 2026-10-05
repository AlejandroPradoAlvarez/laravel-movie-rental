@extends('layouts.master')
@section('content')
	<div class="row">
		<div class="col-sm-4">
			
			<img src="{{$pelicula->poster}}" style="height:200px"/>
		</div>
		<div class="col-sm-8">
			
			<h2><b>{{ $pelicula->title }}</b></h2>
			<p><b>Año: </b>{{ $pelicula->year }}</p>
			<p><b>Director: </b>{{ $pelicula->director }}</p><br/>
			<p><b>Resumen: </b>{{ $pelicula->synopsis }}</p><br/>
			@if($pelicula->rented)
				<p><b>Estado: </b>Pelicula actualmente alquilada</p><br/>
				<a href="{{ url('/catalog/alquilar/'.$id) }}" class="btn btn-danger">Devolver pelicula</a>
			@else
				<p><b>Estado: </b>Disponible</p><br/>
				<a href="{{ url('/catalog/alquilar/'.$id) }}" class="btn btn-success">Alquilar pelicula</a>
			@endif
			<a href="{{ url('/catalog/edit/'.$id) }}" class="btn btn-warning">Editar pelicula</a>
			<a href="{{ url('/catalog') }}" class="btn btn-default">Volver al listado</a>
		</div>
	</div>
@stop
