@extends('layout.welcome')
@section('title')
    Show_LINKS
@endsection
@section('css')
    .btnShow:hover{
    width: 180px;
    height: 50px;
    cursor: pointer;
    background: #51A2E0;
    color: #E5E5E5;
    font-family: Inter;
    font-size: 18px;
    font-weight: 500;
    line-height: 22px;
    letter-spacing: 0em;
    text-align: center;
    border-radius: 5px;
    }

    .btnShow{
    width: 180px;
    height: 50px;
    cursor: pointer;
    background: bottom;
    color: #E5E5E5;
    font-family: Inter;
    font-size: 18px;
    font-weight: 500;
    line-height: 22px;
    letter-spacing: 0em;
    text-align: center;
    border-radius: 5px;
    outline: none;
    border: 5px #51A2E1 solid;
    }
    .interrogative{
    width: 40px;
    height: 40px;
    border: 2px solid black;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0px 0px 10px 5px rgb(255 255 255 / 20%);
    background: #1A222C;
    }
    .memo{
    width: 265px;
    font-family: Montserrat Thin;
    font-size: 30px;
    font-weight: 600;
    line-height: 37px;
    letter-spacing: 0em;
    text-align: left;
    color: #FFFFFF;
    }
    .btnDel{
    width: 395px;
    height: 55px;
    border-radius: 5px;
    outline: none;
    border: 1px solid #F6F5F8;
    padding-left: 20px;
    }
    .texth1{
    font-family: Inter;
    font-size: 20px;
    font-weight: 500;
    line-height: 24px;
    letter-spacing: 0em;
    text-align: left;
    color:#FFFFFF;
    }
@endsection
@section('content')
    <div style="
    max-width: 1440px;
    min-height: 765px;
    width: 100%;
    height: auto;
    display: flex;
    align-items: center;
    flex-direction: column;
    margin-top: 105px;">
        <div style="width: 820px;
    height: auto;">
            <div style="width: 100%;height: auto;display: flex;align-items: center;justify-content: space-between;margin-bottom: 20px;">
                <h1 class="memo">create password</h1>
                <div>
                    <button type="button" id="add" class="interrogative">
                        <img src="../../image/shape.png" alt="">
                    </button>
                </div>
            </div>
            <div id="text" style="margin-bottom:30px;color: #B3B3B3;width: 820px;height: 150px;background: #1A222C8F;border-radius: 5px;display: none;padding: 12px;font-family: Inter;font-size: 14px;font-weight: 400;line-height: 17px;letter-spacing: 0em;text-align: left;">
                esli xotite posmotret zapis
                <br>snachala vvidite sekretni porol esli vi ego ne znayte
                <br>sptosite ego u togo kto otpravil vam ettot liunk
            </div>
        </div>
        <form action="{{ route("login_store")}}" method="post" style="display: flex;align-items: center;justify-content: center;flex-direction: column;">
            @csrf
{{--            <div>--}}
{{--                <input name="email" type="email" class="btnDel" id="email" placeholder="email!">--}}
{{--            </div>--}}
            <div style="margin-top: 15px">
                <input name="password" type="password" class="btnDel" id="password" placeholder="password!">
            </div>
            <input class="btnShow" type="submit" value="login" style="margin-top: 15px">
        </form>
    </div>
    <script>
        document.getElementById('add').addEventListener('click', function (e) {
            var div = document.getElementById('text');
            div.style.display = div.style.display === 'none' ? 'block' : 'none'
        });
    </script>
@endsection