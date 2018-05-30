@extends('layouts.master')
@section('title', 'Today timeslots')
@section('content')
    <h2>Timeslots today {{Carbon\Carbon::now()->format('d-m-Y')}}</h2>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Slot ID</th>
            <th scope="col">Timeslot</th>
            <th scope="col">Subject</th>
            <th scope="col">Class ID</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($slot as $s)
            <tr>
                <th scope="row">1</th>
                <td>{{$s->id}}</td>
                <td>{{$s->slotId}}</td>
                <td>{{$s->subjectId}}</td>
                <td>{{$s->classId}}</td>
                <td></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop
