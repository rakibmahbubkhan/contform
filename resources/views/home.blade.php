@extends('layouts.app')

@section('content')

<h1>Home</h1>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius recusandae neque iusto qui, ex at natus quas labore nesciunt, impedit cupiditate quidem ullam? In, provident numquam dolore dignissimos nihil placeat.</p>

@endsection

@section('sidebar')
@parent
    <p>This is appended to be a sidebar</p>
@endsection