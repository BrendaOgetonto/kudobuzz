@extends('layouts.app')
@section('content')

<div class="app-body">
      <main class="main">
        		<div class="table-responsive-sm">
        			<table id="__BVID__362" aria-busy="false" aria-colcount="4" aria-rowcount="25" class="table b-table table-striped table-hover table-bordered table-sm b-table-fixed">
        				<!----><!---->
        				<thead class="">
        					<tr>
        						<th aria-colindex="1" class="">Job Title</th>
        					</tr>
        				</thead>
        				<!---->
        				<tbody class="">
        					<!---->
                            @forelse($jobs as $job)
        					<tr aria-rowindex="1" class="">
        						<td aria-colindex="1" class="">{{ $job->title }}</td>
        					</tr>
                                @empty
                                    <tr>
                                        <td colspan="3">No entries found.</td>
                                    </tr>
                                     @endforelse
        					<!----><!---->
        				</tbody>
        			</table>
                    {{ $jobs->links() }}
        		</div>
    </div>
@endsection