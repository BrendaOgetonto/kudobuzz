@extends('layouts.app')
@section('content')

<div class="app-body">
      <main class="main">
        <a href="{{ route('employees.create') }}" type="button" class="btn btn-secondary btn-lg btn-block">New Employee</a>
        		<div class="table-responsive-sm">
        			<table id="__BVID__362" aria-busy="false" aria-colcount="4" aria-rowcount="25" class="table b-table table-striped table-hover table-bordered table-sm b-table-fixed">
        				<!----><!---->
        				<thead class="">
        					<tr>
        						<th aria-colindex="1" class="">Name</th>
        						<th aria-colindex="2" class="">Email</th>
        						<th aria-colindex="3" class="">Phone</th>
        						<th aria-colindex="4" class="">Action</th>
        					</tr>
        				</thead>
        				<!---->
        				<tbody class="">
        					<!---->
                            @forelse($employees as $employee)
        					<tr aria-rowindex="1" class="">
        						<td aria-colindex="1" class="">{{ $employee->fname }} {{ $employee->lname }}</td>

        						<td aria-colindex="2" class="">{{ $employee->email }}</td>

        						<td aria-colindex="3" class="">{{ $employee->phone }}</td>

        						<td aria-colindex="4" class="">
                                        <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-default">Edit</a>
                                        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST"
                                              style="display: inline"
                                              onsubmit="return confirm('Are you sure?');">
                                            <input type="hidden" name="_method" value="DELETE">
                                            {{ csrf_field() }}
                                            <button class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
        					</tr>
                                @empty
                                    <tr>
                                        <td colspan="3">No entries found.</td>
                                    </tr>
                                     @endforelse
        					<!----><!---->
        				</tbody>
        			</table>
                    {{ $employees->links() }}
        		</div>
    </div>
@endsection