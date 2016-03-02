<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Admin login</title>        
        <link rel="stylesheet" href="{!! url('public/css/login-form.css') !!}"/>
    </head>
    <body>
        <form class="login" action="{!! route('admin.postLogin') !!}" method="POST">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
            <h1>Log In</h1>
            <fieldset class="inputs">
                <input class="username" id="user" name="user" placeholder="Tên đăng nhập" autofocus="" required="" type="text">   
                <input class="password" id="pass" name="pass" placeholder="Mật khẩu" required="" type="password">
            </fieldset>
            <fieldset class="actions">
                <input class="submit" value="Log in" type="submit">
                <a href="">Quên mật khẩu?</a>
                <a href="">Đăng kí</a>
            </fieldset>
        </form>
    </body>
</html>