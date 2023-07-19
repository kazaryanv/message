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
cursor: pointer;
}
.memo{
width: 265px;
font-family: 'Montserrat', sans-serif;
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
.btn_outline{
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
margin-bottom: 50px;

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
margin-bottom: 50px;
}
.btnDel{
width: 395px;
height: 55px;
border-radius: 5px;
outline: none;
border: 1px solid #F6F5F8;
margin-bottom: 100px;
padding-left: 20px;
margin-left:unset;
font-family: Inter;
font-size: 16px;
font-weight: 400;
line-height: 19px;
letter-spacing: 0em;
text-align: left;

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
.custom-checkbox>input {
position: absolute;
z-index: -1;
opacity: 0;
}

/* для элемента label, связанного с .custom-checkbox */
.custom-checkbox>span {
display: inline-flex;
align-items: center;
user-select: none;
}

/* создание в label псевдоэлемента before со следующими стилями */
.custom-checkbox>span::before {
content: '';
display: inline-block;
width: 1em;
height: 1em;
flex-shrink: 0;
flex-grow: 0;
border-radius: 0.25em;
margin-right: 0.5em;
background-repeat: no-repeat;
background-position: center center;
background-size: 50% 50%;
border: 0.5px solid #E5E5E5;
}

/* стили при наведении курсора на checkbox */
.custom-checkbox>input:not(:disabled):not(:checked)+span:hover::before {
border-color: #b3d7ff;
}

/* стили для активного чекбокса (при нажатии на него) */
.custom-checkbox>input:not(:disabled):active+span::before {
background-color: #b3d7ff;
border-color: #b3d7ff;
}

/* стили для чекбокса, находящегося в фокусе */
.custom-checkbox>input:focus+span::before {
box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

/* стили для чекбокса, находящегося в фокусе и не находящегося в состоянии checked */
.custom-checkbox>input:focus:not(:checked)+span::before {
border-color: #80bdff;
}

/* стили для чекбокса, находящегося в состоянии checked */
.custom-checkbox>input:checked+span::before {
border-color: #0b76ef;
background-color: #0b76ef;
background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3e%3c/svg%3e");
}

/* стили для чекбокса, находящегося в состоянии disabled */
.custom-checkbox>input:disabled+span::before {
background-color: #e9ecef;
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
background-position: calc(100% - 15px) center;
}

#password {
outline: none;
}

.btn {
border-radius: 5px;
z-index: 2;
width: 20px;
height: 15px;
transform: translateX(2px);
background: center;
margin: unset;
cursor: pointer;
background-size: cover;
}
.btn_btn{
position: absolute;
border-radius: 5px;
z-index: 2;
border: none;
top: 80px;
right: 20px;
width: 45px;
height: 30px;
cursor: default;
color: transparent;
background-color: transparent;
transform: translateX(2px);
display: flex;
align-items: center;
justify-content: center;
}
.link_a{
width: 106px;
height: 40px;
border-radius: 4px;
background: #ECF0F3;
display: flex;
align-items: center;
justify-content: center;
}
.linker{
width: 100%;
display: flex;
align-items: center;
justify-content: flex-end;
padding-right: 15px;
padding-bottom: 15px;
}
@endsection
@section('content')
    <style>
    </style>
     <form action="{{route('create')}}" method="get">
        @csrf
        <div style="max-width: 1440px;min-height: 765px; width: 100%;height: auto;">
            <div>
                <div style="width: 100%;height: auto;display: flex;align-items: center;justify-content: space-around;margin-top: 105px;">
                    <h1 class="memo" style="cursor:default;">New Memo</h1>
                    <div style="width: 55px;height: auto;display: flex;align-items: center;justify-content: flex-end;">
                        <button type="button" id="add" class="interrogative">
                            <img style="width: 12px;height: 20px;" src="../../image/shape.png" alt="">
                        </button>
                    </div>
                </div>
            </div>
         <div style="width: 100%;display: flex;align-items: center;justify-content: center;margin-bottom: 20px;">
                 <div id="text" style="cursor:default;color: #B3B3B3;width: 820px;height: 150px;background: #1A222C8F;border-radius: 5px;display: none;padding: 12px;font-family: Inter;font-size: 14px;font-weight: 400;line-height: 17px;letter-spacing: 0em;text-align: left;">
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
                <div style="width: 880px; margin: auto;display:flex;flex-wrap: wrap;align-items: center;justify-content: space-between;">
                    <div style="margin-top: 30px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;">
                        <p class="texth1">Note Will Self Destruct</p>
                        <select style="width: 420px;height: 58px;margin-bottom: 10px" class="btnDel form-select" name="reading" id="">
                            <option name="reading" value="">After Reading</option>
                            <option name="reading" value="1">1h</option>
                            <option name="reading" value="2">2h</option>
                            <option name="reading" value="3">3h</option>
                        </select>
                        <div style="margin-bottom: 65px;display: flex;align-items: center;justify-content: center;">
                            <div class="checkbox">
                                <label class="custom-checkbox">
                                    <input type="checkbox" name="color-1" value="indigo">
                                    <span></span>
                                </label>
                            </div>
                            <p style="font-family: Inter;font-size: 8px;font-weight: 300;line-height: 10px;letter-spacing: 0em;text-align: left;color: #E5E5E5;">Do not ask for confirmation before showing and destroying the note.</p>
                        </div>

                    </div>
                    <div style="margin-top: 30px">
                        <p class="texth1">Destruction Notice</p>
                        <input class="btnDel" type="email" id="email" name="email" placeholder="E-mail">
                    </div>
                    <div class="divIn">
                        <p class="texth1" style="">Secret Password</p>
                        <input class="btnDel" type="password" id="password" name="password" placeholder="Enter password" value="">
                        <button class="btn_btn" type="button" id="btn_pass"><p class="btn" style="background-image: url({{asset('../../image/shap.png')}});" id="btn_img"></p></button>
                    </div>
                    <div>
                        <p class="texth1">Note link name (optional)</p>
                        <input class="btnDel" type="text" name="link_name" placeholder="link name">
                    </div>
                    <div class="divIn">
                        <p class="texth1" style="">Repeat password</p>
                        <input class="btnDel" type="password" id="re_password" name="re_password" placeholder="Enter password" value="">
                        <button class="btn_btn" type="button" id="btn_re_pass"><p class="btn" style="background-image: url({{asset('../../image/shap.png')}});" id="btn_re_img"></p></button>
                    </div>
                </div>
            </div>
            <div>
                <div style="width: 100%;height: auto;display: flex;align-items: center;justify-content: center;">
                    <div style="width: 870px;height: auto;display: flex;align-items: center;justify-content: space-between;">
                        <input class="btnShow" type="submit" value="Create a Note">
                        <input class="btn_outline" type="button" value="Show Options" id="ShowOption"/>
                    </div>
                </div>
            </div>
            <div style="max-width: 1440px;width: 100%;height: auto;display: flex;align-items: center;justify-content: center;"><div style="width: 870px;height: 1px;background: #E5E5E5;"></div></div>
            <div style="max-width: 1440px;width: 100%;height: auto;display: flex;align-items: center;justify-content: center;margin-top: 25px;">
                <div>
                    <p style="cursor:default;font-family: 'Montserrat', sans-serif;font-size: 16px;font-weight: 600;line-height: 20px;letter-spacing: 0em;text-align: left;color: #FFFFFF;margin: unset">This is a free online service - the only way that you can show . is by sharing us on </p>
                </div>
                <div style="margin-left: 5px;">
                    <img src="{{asset('../../image/H1img.png')}}" alt="">
                </div>
            </div>
            <div style="max-width: 1440px;width: 100%;height: auto;display: flex;align-items: center;justify-content: center;margin-top: 30px;margin-bottom: 90px;">
                <div style="width: 870px;height: 40px;display: flex;align-items: center;justify-content: space-between;">
                    <a href="https://www.facebook.com/"><div class="link_a"><img src="{{asset('../../image/Facebook.png')}}" alt=""></div></a>
                    <a href="https://twitter.com/home"><div class="link_a"><img src="{{asset('../../image/twiter.png')}}" alt=""></div></a>
                    <a href="https://www.linkedin.com/"><div class="link_a"><img src="{{asset('../../image/linkdin.png')}}" alt=""></div></a>
                    <a href="https://www.whatsapp.com/"><div class="link_a"><img src="{{asset('../../image/watsap.png')}}" alt=""></div></a>
                    <a href="https://web.telegram.org/"><div class="link_a"><img src="{{asset('../../image/telegram1.png')}}" alt=""></div></a>
                    <a href="https://www.reddit.com/"><div class="link_a"><img src="{{asset('../../image/Website.png')}}" alt=""></div></a>
                </div>
            </div>
            <div style="width: 100%;display: flex;align-items: center;justify-content: center;margin-bottom: 100px;">
                <div style="    color: #B3B3B3;max-width: 1240px;width: 100%;height: 434px;background: #1A222C8F;border-radius: 5px;display: block;padding: 12px;font-family: Inter;font-size: 14px;font-weight: 400;line-height: 17px;letter-spacing: 0em;text-align: left;">
                    <div>
                            <h1 style="cursor:default;margin-bottom: 35px;margin-top: 60px;font-family: Inter;font-size: 24px;font-weight: 400;line-height: 29px;letter-spacing: 0em;text-align: center;color: #FFFFFF;">Use safe note whenever you share your personal and sensitive information via the internet.</h1>
                            <p style="cursor:default;font-family: Inter;font-size: 16px;font-weight: 400;line-height: 24px;letter-spacing: 0em;text-align: center;margin: 0px 93px 70px 93px;">Notes Online  is the free, fast, and secure way to share files and notes with end-to-end encryption and a link that expires
                                <br>automatically. And also it's a free cloud-based service that is functioning via an encrypted SSL tunnel. Safenote
                                <br>doesn't require you to create an account before start using the service and no password or email required. This free service enables you to
                                <br>send a self-destructing message or file to someone. This means once they view the message or download the file,
                                <br>they will no longer be able to access it again after the view count has reached zero.This ensures your
                                <br>message is read by no one but the reader and all evidence of the message is erased. Messagesare also anonymous
                                <br>unless you add any identifiable information to your message. If you share your passwords or
                                <br>private, sensitive data via email or chat, copies of that data are stored in a number of locations. If you use Safenote
                                <br>instead, the data stays for a single viewing, which ensures that someone else can't read it later. It allows you to
                                <br>send sensitive information in a secure manner, ensuring that only one person can see it.</p>
                    </div>
                </div>
            </div>
            <div style="width: 100%;height: auto;display:flex;align-items: center;justify-content: center;margin-bottom: 200px;">
                <div style="width: 100%;max-width: 1265px;height: auto;display:flex;align-items: center;justify-content: space-between;">
                    <a href="#">
                        <div class="arrow" style="width: 394px;height: auto;border-radius: 4px;background: #1A222C80">
                            <div style="    display: flex;align-items: center;justify-content: center;margin-top: 25px;">
                                <img src="{{asset('../../image/FileUpload.png')}}" alt="">
                            </div>
                            <div style="display: flex;flex-direction: column;align-items: center;justify-content: center;">
                                <div>
                                    <h1 style="color:#FFFFFF;font-family: Montserrat;font-size: 24px;font-weight: 500;line-height: 29px;letter-spacing: 0em;text-align: left;">Upload File</h1>
                                </div>
                                <div style="width: 300px;height: 160px;">
                                    <p style="font-family: Montserrat;color:#FFFFFF;font-size: 15px;font-weight: 400;line-height: 18px;letter-spacing: 0em;text-align: center;">But I must explain to you how all this
                                        mistaken idea of denouncing pleasure
                                        and praising pain was born and I will
                                        give you a complete account of the
                                        system, and expound the actual
                                        teachings of the great explorer of
                                        the truth, the master-builder of human
                                        happiness.
                                    </p>
                                </div>
                                <div class="linker">
                                    <img src="{{asset('../../image/linker.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="http://127.0.0.1:8000/show">
                        <div class="arrow" style="width: 394px;height: auto;border-radius: 4px;background: #1A222C80">
                            <div style="    display: flex;align-items: center;justify-content: center;margin-top: 25px;">
                                <img src="{{asset('../../image/PrivateLink.png')}}" alt="">
                            </div>
                            <div style="display: flex;flex-direction: column;align-items: center;justify-content: center;">
                                <div>
                                    <h1 style="color:#FFFFFF;font-family: Montserrat;font-size: 24px;font-weight: 500;line-height: 29px;letter-spacing: 0em;text-align: left;">Private Link</h1>
                                </div>
                                <div style="width: 300px;height: 160px;">
                                    <p style="font-family: Montserrat;color:#FFFFFF;font-size: 15px;font-weight: 400;line-height: 18px;letter-spacing: 0em;text-align: center;">But I must explain to you how all this
                                        But I must explain to you how all this
                                        mistaken idea of denouncing pleasure
                                        and praising pain was born and I will
                                        give you a complete account of the
                                        system, and expound the actual
                                        teachings of the great explorer of
                                        the truth, the master-builder of human
                                        happiness.
                                    </p>
                                </div>
                                <div class="linker">
                                    <img src="{{asset('../../image/linkerspitak.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJlFDTztlNCVlKKgXMrLBqDDNCNzNhZgdJhBNPBtxHzqFFVLXQmVCZDntHbXKGdnxtLZXpg">
                        <div class="arrow" style="width: 394px;height: auto;border-radius: 4px;background: #1A222C80">
                            <div style="    display: flex;align-items: center;justify-content: center;margin-top: 25px;">
                                <img src="{{asset('../../image/SecureEmail.png')}}" alt="">
                            </div>
                            <div style="display: flex;flex-direction: column;align-items: center;justify-content: center;">
                                <div>
                                    <h1 style="color:#FFFFFF;font-family: Montserrat;font-size: 24px;font-weight: 500;line-height: 29px;letter-spacing: 0em;text-align: left;">Secure Email</h1>
                                </div>
                                <div style="width: 300px;height: 160px;">
                                    <p style="font-family: Montserrat;color:#FFFFFF;font-size: 15px;font-weight: 400;line-height: 18px;letter-spacing: 0em;text-align: center;">But I must explain to you how all this
                                        But I must explain to you how all this
                                        mistaken idea of denouncing pleasure
                                        and praising pain was born and I will
                                        give you a complete account of the
                                        system, and expound the actual
                                        teachings of the great explorer of
                                        the truth, the master-builder of human
                                        happiness.
                                    </p>
                                </div>
                                <div class="linker">
                                    <img  src="{{asset('../../image/linker.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </form>
    <script>
        document.getElementById('btn_pass').addEventListener('click', function (e) {
            let password = document.getElementById('password');
            let btn = document.getElementById('btn_img');
            password.type = password.type === 'password' ? 'text' : 'password';
            btn.style.backgroundImage = btn.style.backgroundImage === "url({{asset('../../image/shap.png')}})" ? "url({{asset('../../image/shap.png')}}" : "url({{asset('../../image/shap2.png')}}";
        });
        document.getElementById('btn_re_pass').addEventListener('click', function (e) {
            let password = document.getElementById('re_password');
            let btn = document.getElementById('btn_re_img');
            password.type = password.type === 'password' ? 'text' : 'password';
            btn.style.backgroundImage = btn.style.backgroundImage === "url({{asset('../../image/shap.png')}})" ? "url({{asset('../../image/shap.png')}}" : "url({{asset('../../image/shap2.png')}}";
        });
        document.getElementById('add').addEventListener('click', function (e) {
            let div = document.getElementById('text');
            div.style.display = div.style.display === 'none' ? 'block' : 'none';
        });
        document.getElementById('ShowOption').addEventListener('click', function (e) {
            let div = document.getElementById('showDiv');
            div.style.display = div.style.display === 'none' ? 'block' : 'none';
        });

    </script>
@endsection