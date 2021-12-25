@extends('layouts.main')

@section("isiWeb")
    <div class="calendar">
        <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker" inline="true">
            <input placeholder="Select date" type="text" id="example" class="form-control">
            <label for="example">Try me...</label>
            <i class="fas fa-calendar input-prefix"></i>
        </div>
    </div>
    <script>
        // Data Picker Initialization
        $('.datepicker').datepicker({
        inline: true
        });
    </script>

<?php

$users = DB::table('admin')->get();

foreach ($users as $user)
{
    var_dump($user);
}

?>
@endsection
