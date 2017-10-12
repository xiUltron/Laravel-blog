<?php
/**
 * Created by PhpStorm.
 * User: ultron
 * Date: 2017/8/31
 * Time: 10:35
 */
?>

@foreach(['danger', 'warning', 'success', 'info'] as $msg)
    @if(session()->has($msg))
        <div class="flash-message">
            <p class="alert alert-{{ $msg }}">
                {{ session()->get($msg) }}
                <a href="#" class="close" data-dismiss="alert">&times;</a>
            </p>
        </div>
    @endif
@endforeach