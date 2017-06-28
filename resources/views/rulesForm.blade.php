<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<div class="container">

    <h2>Create new rule</h2>

    {!! Form::open(['url' => route('app.rules.create')]) !!}
    <br>

    {{ Form::label('name', 'Name')}}<br>
    {{Form::text('name')}}
    <br>
    {{ Form::label('from', 'From')}}<br>
    {{Form::text('from')}}
    <br>
    {{ Form::label('to', 'To')}}<br>
    {{Form::text('to')}}
    <br>
    {{ Form::label('type', 'Choose type')}}<br>
    {{Form::select('type', $type)}}
    <br>
    {{ Form::label('amount', 'Amount')}}<br>
    {{Form::text('amount')}}

    <h4>As gift: </h4>

    {{ Form::label('rulable_id', 'Affected good')}}<br>
    {{Form::select('rulable_id', $good, null, ['placeholder' => 'Please Select'])}}
    <br>
    <br>
    {{ Form::label('gift_quantity', 'Gifts quantity')}}<br>
    {{Form::text('gift_quantity')}}
    <br> <br>
    <h4>Affected: </h4>

    {{ Form::label('rulable_id', 'Affected good')}}<br>
    {{Form::select('rulable_id', $good, null, ['placeholder' => 'Please Select'])}}
    <br>

    {{ Form::label('rulable_id', 'Affected category')}}<br>
    {{Form::select('rulable_id', $category, null, ['placeholder' => 'Please Select'])}}
    <br><br>

    {{ Form::submit('Submit') }}
    {!! Form::close() !!}
</div>