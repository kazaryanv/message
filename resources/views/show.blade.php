@extends('layout.welcome')
@section('title')
    Show_LINKS
@endsection
@section('css')
.btnShow:hover{
width: 290px;
height: 55px;
margin-top: 60px;
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

.btnShow{
width: 290px;
height: 55px;
margin-top: 60px;
cursor: pointer;
background: #51A2E0;
color: #E5E5E5;
font-family: Inter;
font-size: 18px;
font-weight: 500;
line-height: 22px;
letter-spacing: 0em;
text-align: center;
border: none;
border-radius: 5px;
margin-bottom: 140px;
}
@endsection
@section('content')
    <div style="width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;margin-top: 30px;">
        <div id="text" style="color: #B3B3B3;width: 820px;height: 150px;background: #1A222C8F;border-radius: 5px;padding: 12px;font-family: Inter;font-size: 14px;font-weight: 400;line-height: 17px;letter-spacing: 0em;text-align: left;">
            @if(isset($links))
            @foreach($links as $link)
                <p>{{$link->content}}</p>
            <form action="{{route('destroy',$link->id)}}">
                    <div style="max-width: 1440px;height: 765px; width: 100%;">
                        <div>
                            <div style="display: flex;align-items: center;justify-content: center;">
                                <input class="btnShow" onclick="fun1()" type="submit" value="Prasmotreno" id="add"/>
                            </div>
                        </div>
                    </div>
                </form>
            @endforeach
            @endif
        </div>
    </div>
    <script>
        function fun1() {
            document.getElementById("add").style.display = "none";
        }
    </script>
@endsection