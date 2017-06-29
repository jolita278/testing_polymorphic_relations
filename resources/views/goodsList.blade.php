<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<div id="list">
    <div class="container">

        <h2>Goods</h2>

        <table class="table table-hover">

            @if(sizeof($list)>0)
                <tbody>
                @foreach ($list as $key => $record)

                    <tr>
                        @foreach ($record as $key => $value)


                            <td>{{$key}}</td>

                        @endforeach

                    </tr>

                @endforeach

                </tbody>
            @else
                <h3>No items in database!</h3>
            @endif
        </table>
    </div>
</div>