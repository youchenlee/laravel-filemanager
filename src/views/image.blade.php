<a data-type="{{ (int)$item->is_file }}" data-path="{{ $item->path }}">
  <div class="square">
    @if($item->thumb_url)
    <img src="{{ $item->thumb_url }}">
    @else
    <i class="fa {{ $item->icon }} fa-5x"></i>
    @endif
  </div>

  <div>
    <div class="item_name">{{ $item->name }}</div>
    <time>{{ date('Y-m-d h:m', $item->time) }}</time>
  </div>
</a>