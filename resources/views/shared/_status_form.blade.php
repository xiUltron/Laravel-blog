<?php
/**
 * Created by PhpStorm.
 * User: ultron
 * Date: 2017/10/17
 * Time: 11:08
 */
?>

<form action="{{ route('statuses.store') }}" method="post">
    @include('shared._errors')
    {{ csrf_field() }}
    <textarea name="content" rows="3" class="form-control" placeholder="聊聊新鲜事儿......">
        {{ old('content') }}
    </textarea>
    <button type="submit" class="btn btn-primary pull-right">发布</button>
</form>
