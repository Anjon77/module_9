@extends('layouts.app')

@section('content')
  <div class="container-fluid">
      {{-- navbar      --}}
      @include('components.navbar')

      {{-- Hreo --}}
      @include('components.about_me')
      {{-- end-hero --}}
                        
      {{-- Projects --}}
      @include('components.projects')
      {{-- end-products list --}}
                        
      {{-- testimonials --}}
      @include('components.contact')
      {{-- end-testimonials --}}
                
      {{-- footer_bottom --}}
      @include('components.footer_bottom')
      {{-- end-footer_bottom --}}

      
                        
      
  </div>
@endsection