<div {{ $attributes->merge(['class' => 'toast align-items-center fixed-bottom ms-4 mb-4 ' . 
($color == 'light' ? 'bg-light' : 'text-white bg-' . $color),
 'role' => 'alert', 'aria-live' => 'assertive', 'aria-atomic' => 'true']) }}>
  <div class="d-flex">
    <div class="toast-body">
      {{ $message }}
    </div>
    <button type="button" class="btn-close me-2 {{ $color == 'light' ? '' : 'btn-close-white' }} m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
</div>
