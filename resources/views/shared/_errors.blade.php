<?php
/**
 * Created by PhpStorm.
 * User: ultron
 * Date: 2017/8/30
 * Time: 15:32
 */
?>

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <a class="close" href="#" data-dismiss="alert">&times;</a>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif