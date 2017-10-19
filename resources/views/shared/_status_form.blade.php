<?php
/**
 * Created by PhpStorm.
 * User: ultron
 * Date: 2017/10/17
 * Time: 11:08
 */
?>

{{--<form action="{{ route('statuses.store') }}" method="post">--}}
{{--@include('shared._errors')--}}
{{--{{ csrf_field() }}--}}
{{--<textarea class="form-control" rows="3" placeholder="聊聊新鲜事儿..."--}}
{{--name="content">{{ old('content') }}</textarea>--}}
{{--<button type="submit" class="btn btn-primary pull-right">发布</button>--}}
{{--</form>--}}

<div>
    @include('shared._errors')
    {{ csrf_field() }}
    <textarea id="statusTextArea" class="form-control" rows="3" placeholder="聊聊新鲜事儿..."
              name="content">{{ old('content') }}</textarea>
</div>
<button type="button" class="btn btn-primary pull-right" name="btnPublish">发布</button>
