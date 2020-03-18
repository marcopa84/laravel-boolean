@extends('layouts.layout')


@section('content')

    
   <div class="container">
        <div class="boolean__career__salary__head">
            <h2 class="max-title">I nostri ex studenti su LinkedIn</h2>
        </div>
        {{-- <div class="boolean__career__salary__body"> --}}
            <div class="boolean__career__student">
                <img src={{$student['img']}} alt={{$student['name']}}>
                <h3>{{$student['name']}} <span class="age">({{$student['age']}} anni)</span></h3>
                <span>  Assunt{{ ($student['genre'] == 'f') ? 'a' : 'o' }}  da {{$student['company']}} come {{$student['role']}} </span>
                
                <p>{{$student['description']}}</p>
                <a target="_blank" href={{$student['sociallink']}}><i class="fab fa-linkedin"></i></a>
            </div>
        {{-- </div> --}}
        <a href="{{route('students')}}">Torna alla lista</a>
    </div>
    
@endsection