@extends('layout.master')
@section('content')

<div class=" container mx-auto">

    <div class="grid  justify-center items-center my-10 mx-10">
        <div class="col-span-6 text-center">
          <a href="{{ route('employee#createPage') }}" class="bg-blue-500 px-10 w-100 text-white py-2">Create</a>
        </div>

    </div>
    <div class=" ">
        <table  class=" table-auto ">
            <thead>
                <tr class=" border-2">
                    <th class="px-4 lg:px-20 border-2 bg-purple-500 py-3">Name</th>
                    <th class="px-4 lg:px-20 border-2 bg-purple-500 py-3">Job</th>
                    <th class="px-4 lg:px-20 border-2 bg-purple-500 py-3">Phone</th>
                    <th class="px-4 lg:px-20 border-2 bg-purple-500 py-3">Address</th>
                    <th class="px-4 lg:px-20 border-2 bg-purple-500 py-3">Age</th>
                    <th class="px-4 lg:px-20 border-2 bg-purple-500 py-3">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $employee)
                <tr>
                    <td class="px-2 lg:px-4 border-2 py-3">{{ $employee->name }}</td>
                    <td class="px-2 lg:px-4 border-2 py-3">{{ $employee->job }}</td>
                    <td class="px-2 lg:px-4 border-2 py-3">{{ $employee->phone }}</td>
                    <td class="px-2 lg:px-4 border-2 py-3">{{ $employee->address }}</td>
                    <td class="px-2 lg:px-4 border-2 py-3">{{ $employee->age }}</td>
                    <td class="px-2 lg:px-4 border-2 py-3">
                        <a href="{{ route('employee#editPage',$employee->id) }}" class=" bg-blue-500 px-1 lg:px-4 lg:py-2 shadow-sm rounded my-1 py-1 text-white">Edit</a>
                        <a href="{{ route('employee#delete',$employee->id) }}"  class=" bg-red-500 px-1 lg:px-4 lg:py-2 shadow-sm rounded my-1 py-1 text-white">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

  </div>

  @endsection


