@extends('layouts.app', [
'noTopNav' => true,
])

<div class="card border-0 mx-auto mt-5" style="max-width: 500px;">
  <div class="card-body text-center">
    <h1 class="card-title mb-4">404 | Page not found</h1>
    <h6 class="card-subtitle text-muted mb-4">The page you were looking for does not exist</h6>
    <a class="btn btn-primary rounded-pill px-4" href="{{ route('dashboard') }}">Home</a>
  </div>
</div>