@extends('layout.client')
@section('title')
    Products
@endsection

@section('content')
    <table>
        @if (!empty($detail));        

            {{-- @foreach ($detail as $key => $item) --}}

                <div class="container" style="margin: 15px 5px">

                    <div class="row" style="margin-bottom: 10px">
                        <div class="col-4">
                            <img src="{{asset('assets/clients/image/1.png')}}" alt="">
                            {{-- <td><span style="margin-left: 50px">{{$item->name}}</span></td>
                            <td><span style="margin-left: 20px">{{$item->price}}</span></td> --}}
                        </div>
                        <div class="col-4">
                            <img src="{{asset('assets/clients/image/2.png')}}" alt="">
                            {{-- <td><span style="margin-left: 50px">{{$item->name}}</span></td>
                            <td><span style="margin-left: 20px">{{$item->price}}</span></td> --}}
                        </div>
                        <div class="col-4">
                            <img src="{{asset('assets/clients/image/3.png')}}" alt="">
                            {{-- <td><div style="margin-left: 50px">{{$item->name}}</div></td>
                            <td><div style="margin-left: 20px">{{$item->price}}</div></td> --}}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <img src="{{asset('assets/clients/image/1.png')}}" alt="">
                            {{-- <div style="margin-left: 50px">{{$item->name}}</div>
                            <div style="margin-left: 20px">{{$item->price}}</div> --}}
                        </div>
                        <div class="col-4">
                            <img src="{{asset('assets/clients/image/2.png')}}" alt="">
                            {{-- <div style="margin-left: 50px">{{$item->name}}</div>
                            <div style="margin-left: 20px">{{$item->price}}</div> --}}
                        </div>
                        <div class="col-4">
                            <img src="{{asset('assets/clients/image/3.png')}}" alt="">
                            {{-- <div style="margin-left: 50px">{{$item->name}}</div>
                            <div style="margin-left: 20px">{{$item->price}}</div> --}}
                        </div>
                    </div>
                </div>

            {{-- @endforeach --}}

        @endif

    </table>
    
@endsection