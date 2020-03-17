@extends('layouts.layout')


@section('content')
    
   <div class="container">
        <div class="boolean__career__salary__head">
            <h2 class="max-title">I nostri ex studenti su LinkedIn</h2>
        </div>
        <div class="boolean__career__salary__body">
                
            @foreach ($students as $student)
                <div class="boolean__career__student">
                    <button class="open-card"><i class="fas fa-plus"></i></button>
                    <img src={{$student['img']}} alt={{$student['name']}}>
                    <h3>{{$student['name']}} <span class="age">({{$student['age']}} anni)</span></h3>
                    <span>  Assunt{{ ($student['genre'] == 'f') ? 'a' : 'o' }}  da {{$student['company']}} come {{$student['role']}} </span>
                    <a target="_blank" href={{$student['sociallink']}}><i class="fab fa-linkedin"></i></a>
                    <p>{{$student['description']}}</p>
                </div>
            @endforeach

        </div>
    </div>
    
@endsection