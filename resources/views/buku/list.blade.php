<h2>Daftar Buku</h2>
<h3>{{$sub_judul}}</h3>
<p>Perintah kondisional</p>
@if ($poin > 80 && $poin <= 100)
    Rating A<br>
@elseif ($poin > 60 && $poin <= 80)
    Rating B<br>
@elseifif ($poin > 40 && $poin <= 60)
    Rating C<br>
@elseifif ($poin > 20 && $poin <= 40)
    Rating D<br>
@elseifif ($poin > 0 && $poin <= 20)
    Rating E<br>
@else
    Salah nilai<br>
@endif
<p>Perintah Perulangan</p>
<p>Perintah Switch</p>
@switch($flag)
    @case(1)
        Jenis Pemograman<br/>
    @break
    @case(2)
    Jenis Struktur Data<br/>
    @break
    @case(3)
        Jenis Basis Data<br />
    @break
    @default
        Bukan buku komputer
    @endswitch
@foreach($buku as $b)
    {{$b}}<br/>
@endforeach