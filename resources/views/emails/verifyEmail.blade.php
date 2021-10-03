
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />   <title>پیدا سرویس ماندگار</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="{{ URL::asset('main/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link href="{{ URL::asset('main/css/materialdesignicons.min.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ URL::asset('main/unicons.iconscout.com/release/v3.0.6/css/line.css')}}">
    <!-- Main Css -->
    <link href="{{ URL::asset('main/css/style.min.css')}}" rel="stylesheet" type="text/css" id="theme-opt" />
    <link href="{{ URL::asset('main/css/colors/purple.css')}}" rel="stylesheet" id="color-opt">
</head>

<body>
<!-- شوع آن -->
<div style="margin-top: 50px;">
    <table cellpadding="0" cellspacing="0" style="direction: rtl; text-align: right; font-family: IRANSansfanum; font-size: 15px; font-weight: 400; max-width: 600px; border: none; margin: 0 auto; border-radius: 6px; overflow: hidden; background-color: #fff; box-shadow: 0 0 3px rgba(60, 72, 88, 0.15);">
        <thead>
        <tr style="background-color: #2f55d4; padding: 3px 0; border: none; line-height: 68px; text-align: center; color: #fff; font-size: 24px; letter-spacing: 1px;">
            <th scope="col"><img src="{{URL::asset('front/img/logo-white-1.png')}}" height="100" alt=""></th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td style="padding: 48px 24px 0; color: #161c2d; font-size: 18px; font-weight: 600;">
                سلام {{$user->getFullNameAttribute($user)}}
            </td>
        </tr>
        <tr>
            <td style="padding: 15px 24px 15px; color: #8492a6;">
                جهت فعالسازی ایمیل خود روی لینک زیر کلیک کنید.
            </td>
        </tr>

        <tr>
            <td style="padding: 15px 24px;">
                <a href="{{route('verification.verify',['userid'=>$user->id,'hash'=>$hash])}}" style="padding: 8px 20px; outline: none; text-decoration: none; font-size: 16px; letter-spacing: 0.5px; transition: all 0.3s; font-weight: 600; border-radius: 6px; background-color: #2f55d4; border: 1px solid #2f55d4; color: #ffffff;">تایید آدرس ایمیل</a>
            </td>
        </tr>

        <tr>
            <td style="padding: 15px 24px 0; color: #8492a6;">
                این پیوند از زمان ارسال این ایمیل به مدت 30 دقیقه فعال خواهد بود.
            </td>
        </tr>

        <tr>
            <td style="padding: 15px 24px 15px; color: #8492a6;">
                پیدا سرویس ماندگار <br> تیم پشتیبان
            </td>
        </tr>

        <tr>
            <td style="padding: 16px 8px; color: #8492a6; background-color: #f8f9fc; text-align: center;">
                © <script>document.write(new Date().getFullYear())</script> پیدا سرویس ماندگار
            </td>
        </tr>
        </tbody>
    </table>
</div>
<!-- پایان آن -->
</body>

</html>
