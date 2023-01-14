@extends('layout.master')

@section('content')
<div class=" container mx-auto">
        <div class=" my-10">
            <h1 class=" text-2xl font-bold text-center">Employee Update</h1>
            <form action="{{ route('employee#update',$employee->id) }}" class=" my-10 mx-10">
                <div class=" flex flex-col mb-2">
                    <label for="name" class=" text-lg ">Name</label>
                    <input type="text" value="{{ $employee->name }}" name="name" class=" w-86 py-3 px-4 outline-none border-b-2 border-b-red-400" placeholder="Enter Name">
                </div>
                <div class=" flex flex-col mb-2">
                    <label for="name" class=" text-lg ">Job</label>
                    <input type="text" value="{{ $employee->job }}" name="job" class=" w-86 py-3 px-4 outline-none border-b-2 border-b-red-400" placeholder="eg - web dev">
                </div>
                <div class=" flex flex-col mb-2">
                    <label for="name" class=" text-lg ">Phone</label>
                    <input type="text" value="{{ $employee->phone }}" name="phone" class=" w-86 py-3 px-4 outline-none border-b-2 border-b-red-400" placeholder="09xxxxxxxx">
                </div>
                <div class=" flex flex-col mb-2">
                    <label for="name" class=" text-lg ">Address</label>
                    <input type="text" value="{{ $employee->address }}" name="address" class=" w-86 py-3 px-4 outline-none border-b-2 border-b-red-400" placeholder="Enter Address">
                </div>
                <div class=" flex flex-col mb-2">
                    <label for="name" class=" text-lg ">Age</label>
                    <input type="text" value="{{ $employee->age }}" name="age" class=" w-86 py-3 px-4 outline-none border-b-2 border-b-red-400" placeholder="Enter age">
                </div>
                <div class=" flex flex-col mt-5">
                    <a href="{{ route('employee#list') }}"  type="submit" class="text-center mb-2 bg-purple-400 hover:bg-purple-500 py-2 text-white">Cancel</a>
                    <button  type="submit" class=" bg-yellow-400 hover:bg-yellow-500 py-2 text-white">Update</button>
                </div>
            </form>
        </div>
</div>

@endsection
