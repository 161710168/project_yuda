	@extends('layout.master')
@section('konten')
<table class="table">
				<thead>
					<tr>
						<th>
							#
						</th>
						<th>
							nama_barang
						</th>
						<th>
							harga_barang
						</th>
					</tr>
				</thead>
				<tbody>
					@php $no=1; @endphp
					@foreach($a as $tab)
					<tr>
						<td>
							{{$no++}}
						</td>
						<td>
							{{$tab->nama_barang}}
						</td>
						<td>
							{{$tab->harga_barang}}
						</td>
					</tr>
					@endforeach
				</tbody>
			</table> 
			<button type="button" class="btn btn-default">
				Default
			</button>
			@endsection
