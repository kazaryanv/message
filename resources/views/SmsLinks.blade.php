@extends('layout.welcome')
@section('title')
SMS_LINKS
@endsection
@section('css')
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
padding-left: 20px;
}
.NewMemory{
width: 835px;
height: 385px;
background: #DDE5EB;
border-radius: 10px;
box-shadow: 0px 0px 10px 5px rgb(71 84 99);
outline: none;
padding-top: 30px;
padding-left: 30px;
font-family: Inter;
font-size: 14px;
font-weight: 400;
line-height: 17px;
letter-spacing: 0em;
text-align: left;
color: #4D4D4D;
}
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
.btnDel{
width: 395px;
height: 55px;
border-radius: 5px;
outline: none;
border: 1px solid #F6F5F8;
margin-left: 30px;
margin-bottom: 100px;
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
margin-left: 30px;
}
@endsection

@section('content')
    <form action="{{route('create')}}" method="get">
        @csrf
        <div style="max-width: 1440px;min-height: 765px; width: 100%;height: auto;">
            <div>
                <div style="width: 100%;height: auto;display: flex;align-items: center;justify-content: space-around;margin-top: 105px;">
                    <h1 class="memo">New Memo</h1>
                    <div style="width: 55px;height: auto;">
                        <button type="button" id="add" class="interrogative">
                            <img src="../../image/shape.png" alt="">
                        </button>
                    </div>
                </div>
            </div>
         <div style="width: 100%;display: flex;align-items: center;justify-content: center;margin-bottom: 20px;margin-top: 30px;">
             @if(session('success'))
                 <div class="alert alert-success">
                     {{ session('success') }}
                 </div>
             @endif
             @if ($errors->any())
                 <div class="alert alert-danger">
                     <ul>
                         @foreach ($errors->all() as $error)
                             <li>{{ $error }}</li>
                         @endforeach
                     </ul>
                 </div>
             @endif
             @if(isset($links->content))
             {{$links->content}}
                 @endif
                 <div id="text" style="color: #B3B3B3;width: 820px;height: 150px;background: #1A222C8F;border-radius: 5px;display: none;padding: 12px;font-family: Inter;font-size: 14px;font-weight: 400;line-height: 17px;letter-spacing: 0em;text-align: left;">
                     With Privnote, you can send notes that self-destruct after being read.<br>
                     1. Write a note below, encrypt it and get a link.<br>
                     2. Send the link to whoever needs to read the note.<br>
                     3. The note will self-destruct after being read.<br>
                     <br>
                     <br>
                     By clicking the "options" button, you can specify a password to decrypt the note, set an expiration date for the note,
                     and set a read notification when the note is destroyed.
                     <br>
                     <br>
                 </div>
         </div>
            <div style="width: 100%;display: flex;align-items: center;justify-content: center;">
                <textarea class="NewMemory" name="content" id="textarea" cols="30" rows="10" placeholder="Write your text here..."></textarea>
            </div>
            <div id="showDiv" style="max-width: 1440px;height: auto;display: none;align-items: center;justify-content: center;flex-wrap: wrap;">
                <div style="width: 880px; margin: auto;display:flex;flex-wrap: wrap">
                    <div style="margin-top: 30px">
                        <p class="texth1">Note Will Self Destruct</p>
                        <select class="btnDel" name="reading" id="">
                            <option name="reading" value="">After Reading</option>
                            <option name="reading" value="1">1h</option>
                            <option name="reading" value="2">2h</option>
                            <option name="reading" value="3">3h</option>
                        </select>
                    </div>
                    <div style="margin-top: 30px">
                        <p class="texth1">Destruction Notice</p>
                        <input class="btnDel" type="email" id="email" name="email" placeholder="E-mail">
                    </div>
                    <div>
                        <p class="texth1" style="">Secret Password</p>
                        <input class="btnDel" type="password" id="password" name="password" placeholder="|" value="">
                    </div>
                    <div>
                        <p class="texth1">Note link name (optional)</p>
                        <input class="btnDel" type="text" name="link_name" placeholder="|">
                    </div>
                </div>
            </div>
            <div>
                <div style="display: flex;align-items: center;justify-content: center;">
                    <input class="btnShow" onclick="input1()" type="submit" value="Create a Note" style="margin-right:240px;">
                    <input class="btnShow" type="button" value="Show Options" id="ShowOption"/>
                </div>
            </div>
        </div>
    </form>
    <script>
        function input1(){
           let password = document.getElementById('#password').val();
           let email = document.getElementById('#email').val();
        }
        document.getElementById('add').addEventListener('click', function (e) {
            let div = document.getElementById('text');
            div.style.display = div.style.display === 'none' ? 'block' : 'none'
        });
        document.getElementById('ShowOption').addEventListener('click', function (e) {
            let div = document.getElementById('showDiv');
            div.style.display = div.style.display === 'none' ? 'block' : 'none';
        });

    </script>
@endsection