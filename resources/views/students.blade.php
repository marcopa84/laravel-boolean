@extends('layouts.layout')


@section('content')
    
   <div class="container">
        <div class="boolean__career__salary__head">
            <h2 class="max-title">I nostri ex studenti su LinkedIn</h2>
            <label for="agefilter">Filtra per età</label>
            <select name="agefilter" id="agefilter">
                <option value="all">all</option>
                @for ($i = 0; $i < count($agearray); $i++)
                    <option value="{{$agearray[$i]}}">{{$agearray[$i]}}</option>
                @endfor
            </select>
            
            <label for="rolefilter">Filtra per professione</label>
            <select name="rolefilter" id="rolefilter">
                <option value="all">all</option>
                @for ($i = 0; $i < count($rolearray); $i++)
                    <option value="{{$rolearray[$i]}}">{{$rolearray[$i]}}</option>
                @endfor
            </select>
        </div>
        <div class="boolean__career__salary__body">
                
            @foreach ($students as $key => $student)
                <div class="boolean__career__student">
                    <button class="open-card"><i class="fas fa-plus"></i></button>
                    <img src={{$student['img']}} alt={{$student['name']}}>
                    <h3>{{$student['name']}} <span class="age">({{$student['age']}} anni)</span></h3>
                    <span>  Assunt{{ ($student['genre'] == 'f') ? 'a' : 'o' }}  da {{$student['company']}} come {{$student['role']}} </span>
                    <a target="_blank" href={{$student['sociallink']}}><i class="fab fa-linkedin"></i></a>
                    <a id="scopri" target="_blank" href={{route('student', ['id' => $key])}}><i class="fas fa-plus"></i></a>
                    <p>{{$student['description']}}</p>
                </div>
            @endforeach

        </div>
    </div>
    
@endsection