@extends('layouts.app')

@section('content')
<!-- we_do -->
<div class="we_do">
    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="titlepage text_align_center">
              <h2>Web Development</h2>
            </div>
          </div>
        </div>
        <div class="row">
                        <div class="col-md-4">
                          <div id="bo_ho" class="we_box text_align_center">
                            <i><img src="{{ asset('assets/images/we1.png') }}" alt="#" /></i>
                            <h3>website development</h3>
                          </div>
                        </div>
                        <div class="col-md-8">
                          <div class="we_box text-align-left">
                          
                            <p>
                              many variations of passages of Lorem Ipsum
                              available, but the majority have suffered
                              alteration in some form, by injected humour, or
                              randomised words which <br>

                              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa accusamus fugit, temporibus veniam voluptas illo nihil sequi corrupti, molestias ratione ullam! Officiis nobis, voluptatum quos voluptas distinctio soluta deserunt veritatis!
                              <br>
                              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet minus fuga similique et, enim labore ipsam ut eius repudiandae quos consequatur illum doloribus, aperiam possimus, laboriosam perspiciatis voluptates? Corporis, fuga?
                            </p>
                          </div>                        
                        </div>
    </div>
</div>
    <!-- end we_do -->

@endsection