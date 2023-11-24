@extends('layouts.app')

@section('content')
  <div class="container-fluid">
      {{-- navbar      --}}
      @include('components.navbar')


      {{-- testimonials --}}
      @include('components.contact')
      {{-- end-testimonials --}}
                
      {{-- footer_bottom --}}
      @include('components.footer_bottom')
      {{-- end-footer_bottom --}}

      
                        
      
  </div>
@endsection