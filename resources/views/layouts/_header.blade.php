<?php
/**
 * Created by PhpStorm.
 * User: ultron
 * Date: 2017/8/7
 * Time: 14:27
 */
?>
<script type="text/javascript">
    $(function(){
        var nav=$(".navbar"); //得到导航对象
        var win=$(window); //得到窗口对象
        var sc=$(document);//得到document文档对象。
        win.scroll(function(){
            if(sc.scrollTop()>=1000){
                nav.addClass("fixednav");
                $(".navTmp").fadeIn();
            }else{
                nav.removeClass("fixednav");
                $(".navTmp").fadeOut();
            }
        })
    })
</script>
<header class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">
        <div class="col-md-offset-1 col-md-10">
            <a href="/" id="logo">IT Skynet</a>
            <nav>
                <ul class="nav navbar-nav navbar-right">
                    @if(\Illuminate\Support\Facades\Auth::check())
                        <li><a href="{{ route('users.index') }}">用户列表</a></li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                {{ \Illuminate\Support\Facades\Auth::user()->name }}<b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('users.show', \Illuminate\Support\Facades\Auth::user()->id) }}">个人中心</a>
                                </li>
                                <li><a href="{{ route('users.edit', \Illuminate\Support\Facades\Auth::user()->id) }}">编辑资料</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#" id="logout">
                                        <form action="{{ route('logout') }}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button class="btn btn-block btn-danger" type="submit" name="button">退出
                                            </button>
                                        </form>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li><a href="{{ route('help') }}">帮助</a></li>
                        <li><a href="{{ route('login') }}">登录</a></li>
                    @endif
                </ul>
            </nav>
        </div>
    </div>
</header>
