<?php
/**
 * Created by PhpStorm.
 * User: ultron
 * Date: 2017/10/17
 * Time: 11:33
 */
?>

@if(count($feed_items))
    <ol class="statuses">
        @foreach($feed_items as $status)
            @include('statuses._status', ['user'=>$status->user])
        @endforeach
        {!! $feed_items->render() !!}
    </ol>
@endif