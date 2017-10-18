<?php
/**
 * Created by PhpStorm.
 * User: ultron
 * Date: 2017/10/17
 * Time: 11:08
 */
?>

<div id="StatusPublishForm">
    @include('shared._errors')
    {{ csrf_field() }}
    <textarea class="form-control" rows="3" placeholder="聊聊新鲜事儿..."
              name="content">{{ old('content') }}</textarea>
    <button type="button" class="btn btn-primary pull-right" name="btnPublish">发布</button>
</div>
