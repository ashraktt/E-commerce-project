@extends('layout.home')
@section('slideshow')
<div class="row">
          <div class="col-xs-12">
            <div class="slidshow">
              <div class="slideshow-container">

                <div class="mySlides fade">
                  <div class="numbertext">1 / 3</div>
                  <img src="images/10.jpg">
                 
                </div>
                
                <div class="mySlides fade">
                  <div class="numbertext">2 / 3</div>
                  <img src="images/14.png">
                 
                </div>
                
                <div class="mySlides fade">
                  <div class="numbertext">3 / 3</div>
                  <img src="images/11.png">
                  
                </div>
                <span style="text-align:center">
                  <span class="dot"></span> 
                  <span class="dot"></span> 
                  <span class="dot"></span> 
                </span>
                </div>
                
                
                

              </div></div>
          </div>  
@endsection
@section('tablist')
<div class="row" style="margin-bottom: 20px;">
            <div class="col-xs-12">
              <ul class="nav nav-pills nav-justified" id="myTab" role="tablist">
              <li role="presentation" class="active"><a href="/main">Home</a></li>
              <li role="presentation"><a href="/labtop">Laptops</a></li>
              <li role="presentation"><a href="/computer">Computers</a></li>
              <li role="presentation"><a href="/electronic">Electric machines</a></li>
              <li role="presentation"><a href="/Projectors">Projectors</a></li>
              <li role="presentation"><a href="/tapmop">Mobiles/Tablets</a></li>
              <li role="presentation"><a href="/printer">Printers</a></li>

            </ul>
            </div>
          </div>
          @endsection
@section('content')


          <div class="col-xs-12">
            <div class="oscontent">
            
              <div class="row">

                <div class="col-xs-6 col-md-3">
                  <div class="thumbnail">
                    <img class="oscontentimg" src="img/laptopp.jpg" alt="...">
                    <div class="caption">
                      <h3>Thumbnail label</h3>
                      <p>.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit....Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit...</p>
                      <p><a href="#" class="btn btn-primary" role="button">ADD +</a> <a href="/product" class="btn btn-default" role="button">Show</a></p>
                    </div>
                  </div>
                </div>

                <div class="col-xs-6 col-md-3">
                  <div class="thumbnail">
                    <img class="oscontentimg" src="img/p.jpg" alt="...">
                    <div class="caption">
                      <h3>Thumbnail label</h3>
                      <p>.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit....Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit...</p>
                      <p><a href="#" class="btn btn-primary" role="button">ADD +</a> <a href="/product" class="btn btn-default" role="button">Show</a></p>
                    </div>
                  </div>
                </div>

                <div class="col-xs-6 col-md-3">
                  <div class="thumbnail">
                    <img class="oscontentimg" src="img/computer.jpg" alt="...">
                    <div class="caption">
                      <h3>Thumbnail label</h3>
                      <p>.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit....Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit...</p>
                      <p><a href="#" class="btn btn-primary" role="button">ADD +</a> <a href="/product" class="btn btn-default" role="button">Show</a></p>
                    </div>
                  </div>
                </div>

                <div class="col-xs-6 col-md-3">
                  <div class="thumbnail">
                    <img class="oscontentimg" src="img/mobile.jpg" alt="...">
                    <div class="caption">
                      <h3>Thumbnail label</h3>
                      <p>.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit....Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit...</p>
                      <p><a href="#" class="btn btn-primary" role="button">ADD +</a> <a href="/product" class="btn btn-default" role="button">Show</a></p>
                    </div>
                  </div>
                </div>
              
             
                <div class="col-xs-6 col-md-3">
                  <div class="thumbnail">
                    <img class="oscontentimg" src="img/tablett.jpg" alt="...">
                    <div class="caption">
                      <h3>Thumbnail label</h3>
                      <p>.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at...</p>
                      <p><a href="#" class="btn btn-primary" role="button">ADD +</a> <a href="/product" class="btn btn-default" role="button">Show</a></p>
                    </div>
                  </div>
                </div>

                <div class="col-xs-6 col-md-3">
                  <div class="thumbnail">
                    <img class="oscontentimg" src="img/electric machiness.jpg" alt="...">
                    <div class="caption">
                      <h3>Thumbnail label</h3>
                      <p>.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at...</p>
                      <p><a href="#" class="btn btn-primary" role="button">ADD +</a> <a href="/product" class="btn btn-default" role="button">Show</a></p>
                    </div>
                  </div>
                </div>

                <div class="col-xs-6 col-md-3">
                  <div class="thumbnail">
                    <img class="oscontentimg" src="img/computer.jpg" alt="...">
                    <div class="caption">
                      <h3>Thumbnail label</h3>
                      <p>.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at...</p>
                      <p><a href="#" class="btn btn-primary" role="button">ADD +</a> <a href="/product" class="btn btn-default" role="button">Show</a></p>
                    </div>
                  </div>
                </div>

                
                <div class="col-xs-6 col-md-3">
                  <div class="thumbnail">
                    <img class="oscontentimg" src="img/projector.jpg" alt="...">
                    <div class="caption">
                      <h3>Thumbnail label</h3>
                      <p>.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at...</p>
                      <p><a href="#" class="btn btn-primary" role="button">ADD +</a> <a href="/product" class="btn btn-default" role="button">Show</a></p>
                    </div>
                  </div>
                </div>

              </div>
            </div>

          </div>
   
   @endsection
   @section('js')
   js/myjs.js
   @endsection