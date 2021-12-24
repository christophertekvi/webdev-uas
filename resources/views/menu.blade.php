@extends('layouts.main')

@section("isiWeb")

<?php

$users = DB::table('admin')->get();

foreach ($users as $user)
{
    var_dump($user);
}

?>
@endsection
