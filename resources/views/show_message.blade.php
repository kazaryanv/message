@extends('layout.welcome')
@section('title')
    Show_LINKS
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
    width: 100%;
    font-family: Montserrat Thin;
    font-size: 30px;
    font-weight: 600;
    line-height: 37px;
    letter-spacing: 0em;
    text-align: left;
    color: #FFFFFF;
    padding-left: 20px;
    margin-bottom: 20px;
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
                <h1 class="memo">
                    eto sobshenie uje udaleno esli xotite ego saxranit copiruyte ego prejde chem viyti iz okna
                    @if($show_message->content == null)
                        eto sobshenie uje udaleno
                    @endif
                </h1>
            </div>
            <div style="margin-bottom:30px;color: #B3B3B3;width: 820px;height: 150px;background: #1A222C8F;border-radius: 5px;display: block;padding: 12px;font-family: Inter;font-size: 14px;font-weight: 400;line-height: 17px;letter-spacing: 0em;text-align: left;">
                <p>{{$show_message->content}}</p>
            </div>
        </div>
        <div>

        </div>
    </div>
@endsection