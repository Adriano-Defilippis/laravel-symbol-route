@foreach ($my_arr as $cube)

  <div class="square bg_col_{{ $bg_col }} ">
    <p> {{ $cube }} </p>
  </div>

@endforeach
