@php
    $homepage = App\Models\Homepage::find(1);
     $data = $homepage->about;
     $about = json_decode($data);
@endphp



<style>

.change-title {
    color: {{ $about -> title_color }};
    font-size : {{ $about -> title_size }};
}

.change-subtitle {
    color: {{ $about -> subtitle_color }};
    font-size : {{ $about -> subtitle_size }};
}


.change-des {
    color: {{ $about -> des_color }};
    font-size : {{ $about -> des_size }};
}

</style>