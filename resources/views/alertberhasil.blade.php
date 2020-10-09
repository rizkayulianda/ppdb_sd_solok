@if ($message = session()->get('berhasil'))
<div class="alert alert-primary alert-dismissible fade show" role="alert">
  {{$message}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

@elseif($message = session()->get('peringatan'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  {{$message}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif


