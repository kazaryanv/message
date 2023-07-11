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
@endsection

@section('content')
    <form action="{{route('create')}}">
        <div style="max-width: 1440px;height: 765px; width: 100%;">
            <div>
                <div style="width: 100%;height: auto;display: flex;align-items: center;justify-content: space-around;margin-top: 105px;">
                    <h1 class="memo">New Memo</h1>
                    <a href="#">
                        <div class="interrogative">
                            <img src="../../image/shape.png" alt="">
                        </div>
                    </a>
                </div>
            </div>
         <div style="width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;margin-top: 30px;">
             <div id="text" style="color: #B3B3B3;
    width: 820px;
    height: 150px;
    background: #1A222C8F;border-radius: 5px;display: none;padding: 12px;font-family: Inter;
font-size: 14px;
font-weight: 400;
line-height: 17px;
letter-spacing: 0em;
text-align: left;
"></div>
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
         </div>
            <div style="width: 100%;display: flex;align-items: center;justify-content: center;">
                <textarea class="NewMemory" name="content" id="textarea" cols="30" rows="10" placeholder="Write your text here..."></textarea>
            </div>
            <div>
                <div style="display: flex;align-items: center;justify-content: center;">
                    <input class="btnShow" type="submit" value="Create a Note" style="margin-right:290px;">
                    <input class="btnShow" type="button" value="Show Options" id="add"/>
                </div>
            </div>
        </div>
    </form>

    <script>
        const text = document.getElementById('textarea');
        const btn = document.getElementById('add');
        const div = document.getElementById('text');


        function fun1() {
            div.style.display = "block";
            div.innerHTML = text.value;
        }
        btn.addEventListener('click',fun1);
        // $(document).ready(function() {
        //     $("#add").click(function () {
        //         let content = $("#textarea");
        //         let area = $("#text");
        //         let verj = '<h1>' + content.val() +'</h1>';
        //         area.innerHTML = verj;
        //         console.log(verj);
        //     });
        // });
    </script>
@endsection