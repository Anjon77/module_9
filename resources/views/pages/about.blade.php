@extends('layouts.app')

@section('content')
  <div class="container-fluid">
      {{-- navbar                     --}}
      @include('components.navbar')
      {{-- end-navbar --}}

      {{-- Hreo --}}
      @include('components.about_me')
     
      @include('components.footer_bottom')
      {{-- end-footer_bottom --}}

      
                        
      
  </div>
@endsection