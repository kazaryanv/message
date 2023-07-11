@extends('layout.welcome')
@section('title')
    Show_LINKS
@endsection
@section('content')
    <div style="width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;margin-top: 30px;">
        <div id="text" style="color: #B3B3B3;width: 820px;height: 150px;background: #1A222C8F;border-radius: 5px;padding: 12px;font-family: Inter;font-size: 14px;font-weight: 400;line-height: 17px;letter-spacing: 0em;text-align: left;">
            @foreach($links as $link)
                    <p>{{$link->content}}</p>
            @endforeach
        </div>
    </div>
@endsection