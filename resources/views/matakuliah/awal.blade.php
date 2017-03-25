@extends('master')
@section('container')
<div class="panel panel-default">
<div class="panel-heading">
	<strong>Seluruh Data matakuliah</strong>
	<a href="{{url('matakuliah/tambah')}}" class="btn btn-xs btn-primary pull-right">
	<i class="fa fa-plus"></i>matakuliah</a>
	<div class="clearfix"></div>
</div>
	<table class="table">
		<thead><tr>
			<th>No.</th>
			<th>Tittle</th>
			<th>Keterangan</th>
			<th>Aksi</th>
		</tr></thead>
		<tbody>
			<?php $x=1;?>
			@foreach($data as $matakuliah)
			<tr>
				<td>{{$x++ }}</td>
				<td>{{ $matakuliah
		->title or 'title kosong'}}</td>
				<td>{{ $matakuliah
		->Keterangan or 'Keterangan kosong'}}</td>
				<td>
					<div class="btn-group" role="group">
	<a href="{{url('matakuliah/edit/'.$matakuliah->id)}}" class="btn btn-warning btn-xs" data-toogle="tooltrip" data-placement="top" title="Edit">Edit</a>
	<a href  ="{{url('matakuliah/lihat/'.$matakuliah->id)}}" class="btn btn-winfo btn-xs" data-toogle="tooltrip" data-placement="top" title="lihat">Lihat</a>
	<a href="{{url('matakuliah/hapus/'.$matakuliah->id)}}}/" class="btn btn-danger btn-xs" data-toogle="tooltrip" data-placement="top" title="hapus">Hapus</a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop