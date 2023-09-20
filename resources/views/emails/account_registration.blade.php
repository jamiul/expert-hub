<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <style>
        .mail-wrapper {
            margin:0 auto;
            width:100%;
            max-width: 600px;
            padding:25px;
            border: 1px solid #CCCCCC;
            box-sizing: border-box;
            font-size: 12px;
            font-family: Verdana, Roboto, 'Droid Sans', 'Hiragino Sans', 'Hiragino Kaku Gothic ProN', Meiryo, sans-serif;
            font-weight:400;
            line-height:14px;
            color: #000000;
        }
        .mail-logo {
            text-align:center;
            margin:16px 0 35px;
        }
		.logo {
			width: 100%;
			height: 60px;
			background: #2a3242;
			border-radius: 6px;
		}
        .register-confirm {
            margin:28px 0 59px;
        }
        .register-confirm a {
            margin:0 auto;
            width: 240px;
            background: #387FE6;
            border-radius: 6px;
            padding: 18px 50px 16px;
            font-size: 14px;
            line-height: 16px;
            color: #FFFFFF;
            text-decoration:none;
            text-align: center;
        }
        .site-link {
            margin:5px 0 35px;
            color: #387FE6;
        }
        .site-link a {
            text-decoration:none;
        }
        .site-link a:hover {
            text-decoration:underline;
        }
    </style>
</head>
<body>
  <div class="mail-wrapper">
    <div class="mail-logo" align="center">
		<img style="margin-bottom:16px;" class="logo" src="{{ asset('assets/frontend/default/img/logo.png') }}">
	</div>
    <div>
		Please register your account information by clicking the "Register an account" button below.
    </div>
    <div style="margin-top: 7px;">
      登録メールアドレス： {{ $details['email'] }}
    </div>
    <div class="register-confirm" align="center">
        <a style="text-align:center;display:inline-block; background: #387FE6; color: #FFFFFF; padding: 15px 25px; margin: 20px auto;" href="{{ $details['url'] }}">Register an account</a>
    </div>
    <div>
      <div>
       {{$details['body']}}
      </div>
      <div style="margin-top: 50px;">
		{{-- Web Application Portal --}}
      </div>
      <div class="site-link">
        <a href="{{ url('/') }}" target="_blank">{{ url('/') }}</a>
      </div>
    </div>
  </div>

  <div style="text-align: center">
      <p style="font-size: 13px;margin-top: 10px;">(c) 2021 SP2 </p>
  </div>

</body>
</html>
