<!DOCTYPE html>
<html lang="en">
  <head>

    @include("template.partials._head")

  </head>
  <body>

	  @include("template.partials._nav")

   <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">

          @yield("content")
          
          @include("template.partials._main")
          @include("template.partials._sidebar")

        </div>
      </div>
    </section> <!-- .section -->

    
@include("template.partials._footer")
@include("template.partials._scripts")