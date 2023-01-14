@extends('layout.master')

@section('content')
<div class=" container mx-auto">
        <div class=" my-10">
            <h1 class=" text-2xl font-bold text-center">Employee Create</h1>
            <form  action="{{ route('employee#create') }}" method="POST" class=" my-10 mx-10">
                @csrf
                <div class=" flex flex-col mb-2">
                    <label for="name" class=" text-lg ">Name</label>
                    <input type="text" name="name" class=" w-86 py-3 px-4 outline-none border-b-2 border-b-red-400" placeholder="Enter Name">
                </div>
                <div class=" flex flex-col mb-2">
                    <label for="job" class=" text-lg ">Job</label>
                    <input type="text" name="job" class=" w-86 py-3 px-4 outline-none border-b-2 border-b-red-400" placeholder="eg - web dev">
                </div>
                <div class=" flex flex-col mb-2">
                    <label for="phone" class=" text-lg ">Phone</label>
                    <input type="number" name="phone" class=" w-86 py-3 px-4 outline-none border-b-2 border-b-red-400" placeholder="09xxxxxxxx">
                </div>
                <div class=" flex flex-col mb-2">
                    <label for="address" class=" text-lg ">Address</label>
                    <input type="text" name="address" class=" w-86 py-3 px-4 outline-none border-b-2 border-b-red-400" placeholder="Enter Address">
                </div>
                <div class=" flex flex-col mb-2">
                    <label for="age" class=" text-lg ">Age</label>
                    <input type="number" name="age" class=" w-86 py-3 px-4 outline-none border-b-2 border-b-red-400" placeholder="Enter age">
                </div>
                <div class=" flex flex-col mt-5">
                    <a  href="{{ route('employee#list') }}" type="submit" class=" bg-purple-400 mb-3 text-center hover:bg-purple-500 py-2 text-white">Back</a>
                    <button  type="submit" class=" bg-orange-400 hover:bg-orange-500 py-2 text-white">Create</button>
                </div>

            </form>
        </div>
</div>

@endsection
