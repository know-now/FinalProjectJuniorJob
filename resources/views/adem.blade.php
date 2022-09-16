@extends('layouts.template')
@section('title', 'ADEM')

@section('content')
<h1>Send a request to ADEM to get a job permit</h1>

<form action="/action_page.php" id="usrform">
  Name: <input type="text" name="usrname">
  <input type="submit">
</form>

<textarea name="comment" form="usrform">Enter text here...</textarea> <br>
@endsection