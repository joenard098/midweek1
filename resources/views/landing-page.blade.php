
@extends('base')

@section('content')

<style>
    body, html {
  height: 80%;
}

* {
}



.bg-text {
 
  color: white;
  font-weight: bold;
  
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
  font-family:monospace;
}
</style>

<div class="bg-text">
<h1 class="text-uppercase font-weight-bold">Startup Business</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi nemo doloribus eius facere accusantium suscipit similique odit minima laboriosam et, voluptates obcaecati, amet quisquam nostrum quasi ut consectetur dolore. Reiciendis.</p>
                <section class="col-12">
                  <a class="btn btn-danger text-uppercase mt-5" href="/register">Register Now</a>
                </section>
  </div>