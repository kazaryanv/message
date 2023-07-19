<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <!-- CSS only -->
{{--        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">--}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">    </head>
    <style>
        @yield('css')
    body {
        background-image: url({{asset('../../image/Mask.png')}});
    }
    .font{
        color: #FFF;
        font-family: Inter;
        font-size: 16px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
        margin-top: unset;
    }
        a{
            text-decoration: none;
        }
        .divIn {
            position: relative;
        }
        .form-select {
            appearance: none;
            -webkit-appearance: none; /* Safari и Chrome */
            -moz-appearance: none; /* Mozilla */
            -ms-appearance: none; /* IE */
            background-image: url("{{asset('../../image/more.svg')}}");
            background-repeat: no-repeat;
            background-position: calc(100% - 5px) center;
        }
    </style>
    <body style="margin: unset;max-width: 1440px;height: 765px; width: 100%;">
    <header>
        <div style="max-width: 1440px;
    height: 80px;
    width: 100%;
    background: #466A93;
    display: flex;
    flex-direction: column;
    justify-content: center;">
            <div style="display: flex;align-items: center;justify-content: space-between">
                <div style="margin-left: 100px;width: 530px;height: 55px;display:flex;align-items: center;justify-content: center">
                    <div><a href="{{route('SmsLinks')}}"><img src="{{asset('../../image/Group.png')}}" alt="" ></a></div>
                <div style="display: flex;align-items: center;justify-content: flex-start;"><p style="width: 190px;height: 45px;color: #FFFFFF;cursor:default;font-family: Inter;font-size: 12px;font-weight: 300;line-height: 15px;letter-spacing: 0em;text-align: left;display: flex;align-items: flex-end;margin-left: 25px;margin-bottom: unset">Send notes that will self destruct after being read.</p></div>
                </div>
                <div class="divIn" style="margin-right: 100px;width: 120px;height: 35px;display: flex;align-items: center;justify-content: center;">
                    <select class="form-select" name="" id="" style="background-position: calc(100% - 5px) center;padding-left: 10px;width: 100%;height: 100%;cursor: default;border-radius: 5px;outline: none;">
                        <option value="">English</option>
                        <option value="">Russian</option>
                    </select>
                </div>
            </div>
        </div>
    </header>
    <div style="min-height: 765px;height: auto;">
        @yield('content')
    </div>
    <footer>
        <div style="max-width: 1440px;min-height: 180px;width: 100%;height: auto;background: #466A93;">
            <div style="display: flex;align-items: center;justify-content: space-between">
                <div style="width: 100%;display: flex;align-items: center;justify-content: center;margin-top: 25px;margin-bottom: 25px;">
                    <div><img style="width: 145px;height: 35px;" src="{{asset('../../image/Group.png')}}" alt="" ></div>
                </div>
            </div>
            <div style="width: 100%;display: flex;align-items: center;justify-content: center;">
                <div style="width: 1240.002px;height: 1px;background: wheat;"></div>
            </div>
           <div style="margin-top: 20px">
               <div style="display: flex;align-items: center;justify-content: space-between;margin-left: 110px;margin-right: 110px;">
                   <div>
                       <h1 style="cursor: default" class="font">Write a New Memo</h1>
                       <a href="#"><p class="font">A Comment</p></a>
                   </div>
                   <div>
                       <h1 style="cursor: default" class="font">Confidentiality</h1>
                       <a href="#"><p class="font">Support</p></a>
                   </div>
                   <div>
                       <h1 style="cursor: default" class="font">Blog</h1>
                       <a href="#"><p class="font">About Us</p></a>
                   </div>
                   <div>
                       <h1 style="cursor: default" class="font">Social Media</h1>
                       <div>
                           <div style="display: flex;align-items: center;justify-content: space-evenly;">
                               <a href="#"><img src="{{asset('../../image/Facebook2.png')}}" alt=""></a>
                               <a href="#"><img src="{{asset('../../image/Twitter.png')}}" alt=""></a>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
        </div>
    </footer>
    </body>
</html>
