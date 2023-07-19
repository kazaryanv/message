@extends('layout.welcome')
@section('title')
    SMS_LINKS
@endsection
@section('css')
    .memo{
    width: 320px;
    font-family: 'Montserrat', sans-serif;
    font-size: 30px;
    font-weight: 600;
    line-height: 37px;
    letter-spacing: 0em;
    text-align: left;
    color: #FFFFFF;
    }
    .js-copytextarea{
    width: 816px;
    height: 83px;
    border-radius: 4px 4px 0px 0px;
    background: #DDE5EB;
    padding-top: 30px;
    padding-left: 30px;
    font-family: Inter;
    font-size: 20px;
    font-weight: 500;
    line-height: 24px;
    letter-spacing: 0em;
    text-align: left;
    color: #4D4D4D;
    }
    .btnShow{
    width: 180px;
    height: 50px;
    margin-top: 60px;
    cursor: pointer;
    background: #51A2E1;
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
    .btn_outline{
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
    margin-bottom: 140px;
    display: flex;
    align-items: center;
    justify-content: center;
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
        <div style="width: 850px;
    height: auto;">
            <div>
                <div style="width: 100%;height: auto;display: flex;align-items: center;justify-content: space-between;">
                    <h1 class="memo">Read and destroy?</h1>
                </div>
                <div class="js-copytextarea">
                    <p>You are about to read and destroy the note with id .</p>
                </div>
                <div style="display: flex;justify-content: space-between;">
                    <form action="{{route('SmsLinks')}}">
                        <div>
                            <div>
                                <input style="width: 290px;height: 55px;" class="btnShow" type="submit" value="Destroy note now"/>
                            </div>
                        </div>
                    </form>
                    @if(isset($link))
                    <form action="{{route('destroyNow')}}">
                        <div>
                            <div>
                                <input  class="btn_outline" type="submit" value="Select link"/>
                            </div>
                        </div>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection