@extends('component.template')
@section('container')
@include('component.login')
    <section>
        @if (isset($not))
           <div style="display: flex; justify-content: center; align-items: center;  width: 100%;">
                <h1 style="color: gray; font-size: 4rem; ">Not Found</h1>
            </div>
        @elseif (isset($surat))
        @foreach ($surat as $item)
        <div class="resultSurat">
            <div class="box">
                <h3>{{ $item['ar']}}</h3>
                <h4>{{$item['id']}}</h4>
            </div>
        </div>
        @endforeach
        @else
        <div class="quran">
            @foreach ($data as $ayat)
                <a href="/AlQuran/{{$ayat['nomor']}}">
                    <div class="box-ayat">
                        <div class="box">
                            <div class="number">
                                <p>{{ $ayat['nomor'] }}</p>
                            </div>
                            <div class="surat">
                                <h6>{{ $ayat['nama'] }}</h6>
                                <p>{{ $ayat['arti'] }}</p>
                            </div>
                        </div>
                        <div class="ayat">
                            <h6>{{ $ayat['asma'] }}</h6>
                            <p>{{ $ayat['ayat'] }} <span>ayat</span></p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
        @endif
    </section>
@endsection
