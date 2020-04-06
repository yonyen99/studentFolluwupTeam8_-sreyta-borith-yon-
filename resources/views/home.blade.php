@extends('layouts.app')

@section('content')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
           
            {{-- add tutor --}}
          
        <a class="nav-link" href="{{ route('register') }}">{{ __('Add Tutor') }}</a>

        {{-- crud student --}}
        <a href="{{route('home.create')}}">Add</a>
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>FullName</th>
                    <th>Gender</th>
                    <th>Class</th>
                    <th>Year</th>
                    <th>Student-ID</th>
                    <th>Province</th>
                    <th>Status</th>
                    <th>Picture</th>
                    <th>Action</th>
                </tr>
                @foreach ($students as $student)
                <tr>
                    <td>{{$student->id}}</td>
                    <td>{{$student->firstName." ".$student->lastName}}</td>
                    <td>{{$student->gender}}</td>
                    <td>{{$student->class}}</td>
                    <td>{{$student->year}}</td>
                    <td>{{$student->student_id}}</td>
                    <td>{{$student->province}}</td>
                    <td>{{$student->status}}</td>
                    <td><img src="{{asset('images/'.$student->picture)}}" width="80" style="border-radius: 5px;" height="60" alt="User" /></td>
                    <td>
                        <a href="{{route('home.edit', $student->id)}}">Edit</a> |
                        <form method="post" class="delete_form" action="{{route('home.destroy', $student->id)}}">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE"/>
                        <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>      
        </div>
    </div>
</div>
@endsection
