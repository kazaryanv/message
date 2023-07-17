@extends('layout.welcome')
@section('title')
    Show_LINKS
@endsection
@section('css')
.btnShow:hover{
width: 180px;
height: 50px;
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
border-radius: 5px;
}

.btnShow{
width: 180px;
height: 50px;
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
                <h1 class="memo">Note link ready</h1>
                <div>
                    <button type="button" id="add" class="interrogative">
                        <img src="../../image/shape.png" alt="">
                    </button>
                </div>
            </div>
            <div id="text" style="margin-bottom:30px;color: #B3B3B3;width: 820px;height: 150px;background: #1A222C8F;border-radius: 5px;display: none;padding: 12px;font-family: Inter;font-size: 14px;font-weight: 400;line-height: 17px;letter-spacing: 0em;text-align: left;">
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
        <div>
            @if(isset($links))
                <textarea name="" id="" cols="30" rows="10" class="js-copytextarea" style="    width: 816px;height: 83px;border-radius: 4px 4px 0px 0px;background: #DDE5EB;display: flex;align-items: center;justify-content: flex-start;text-align: start;padding-top: 30px;padding-left: 30px;">@if($links->link_name != null){{route('show_link')}}{{'/message/link_name/'.$links->link_name}}@else{{route('show_link')}}{{'/message/'.$links->id}}@endif</textarea>
                <p style="width: 816px;height: 41px;border-radius: 0px 0px 4px 4px;background: #B2C3CF;padding-left: 30px;font-family: Inter;font-size: 14px;font-weight: 400;line-height: 17px;letter-spacing: 0em;text-align: left;display: flex;align-items: center;justify-content: flex-start;">
                    The note will self-destruct after reading it.
                </p>

                    <div style="width: 816px;display: flex;align-items: center;justify-content: space-between;">
                        <div style="display: flex;align-items: center;justify-content: center;">
                            <input  id="js-textareacopybtn" class="btnShow" type="button" value="Select link" style="margin-right:30px;">
                            <input class="btnShow" type="button" value="E-mail" id="ShowOption"/>
                        </div>
                        <form action="@if($links->link_name != null){{route('destroy',$links->link_name)}}@else {{route('destroy',$links->id)}}@endif">
                            <div>
                                <div>
                                    <input style="width: 290px;height: 55px;" class="btnShow" type="submit" value="Destroy note now"/>
                                </div>
                            </div>
                        </form>
                    </div>
            @endif
        </div>
        <div id="showDiv" style="max-width: 1440px;height: auto;display: none;align-items: center;justify-content: center;flex-wrap: wrap;">
            <form action="">
                <div style="margin-top: 30px">
                    <p class="texth1">Destruction Notice</p>
                    <input class="btnDel" type="email" name="email" placeholder="E-mail">
                </div>
                <button type="submit">Click</button>
            </form>
        </div>
    </div>
    <script>
        var copyTextareaBtn = document.querySelector('#js-textareacopybtn');

        copyTextareaBtn.addEventListener('click', function(event) {
            var copyTextarea = document.querySelector('.js-copytextarea');
            copyTextarea.focus();
            copyTextarea.select();

            try {
                var successful = document.execCommand('copy');
                var msg = successful ? 'successful' : 'unsuccessful';
                console.log('Copying text command was ' + msg);
            } catch (err) {
                console.log('Oops, unable to copy');
            }
        });
    </script>
    <script>
        document.getElementById('add').addEventListener('click', function (e) {
            var div = document.getElementById('text');
            div.style.display = div.style.display === 'none' ? 'block' : 'none'
        });
        document.getElementById('ShowOption').addEventListener('click', function (e) {
            var div = document.getElementById('showDiv');
            div.style.display = div.style.display === 'none' ? 'block' : 'none'
        });
    </script>
@endsection