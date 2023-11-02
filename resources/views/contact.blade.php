@extends('layouts.template')
@section("content")
{{-- @include('auth.contact') --}}
<div class="bg-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-0">
        <a href="index.html">Home</a> <span class="mx-2 mb-0">/</span>
        <strong class="text-black">Contact</strong>
      </div>
    </div>
  </div>
</div>
<title>pharmacy</title>
<style media="screen">



.text {

  margin: auto 80px;

  text-transform: uppercase;
  font-family: verdana;
  font-size: 5em;
  font-weight: 900;
  color: palevioletred;
  text-shadow: 1px 1px 1px #919191,
      1px 2px 1px #919191,
      1px 3px 1px #919191,
      1px 4px 1px #919191,
      1px 5px 1px #919191,
      1px 6px 1px #919191,
      1px 7px 1px #919191,
      1px 8px 1px #919191,
      1px 9px 1px #919191,
      1px 10px 1px #919191,
  1px 18px 6px rgba(16,16,16,0.4),
  1px 22px 10px rgba(16,16,16,0.2),
  1px 25px 35px rgba(16,16,16,0.2),
  1px 30px 60px rgba(16,16,16,0.4);
}
</style>
</head>
<body>
<span class="text"> Al Ghadeer pharmacy</span>
</body>
</html>
<div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="h3 mb-5 text-black">Get In Touch</h2>
        </div>
        <div class="col-md-12">
  
          <form action="#" method="post">
  
            <div class="p-3 p-lg-5 border">
              <div class="form-group row">
                <div class="col-md-6">
                  <label for="c_fname" class="text-black">First Name <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_fname" name="c_fname">
                </div>
                <div class="col-md-6">
                  <label for="c_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_lname" name="c_lname">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_email" class="text-black">Email <span class="text-danger">*</span></label>
                  <input type="email" class="form-control" id="c_email" name="c_email" placeholder="">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_subject" class="text-black">Subject </label>
                  <input type="text" class="form-control" id="c_subject" name="c_subject">
                </div>
              </div>
  
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_message" class="text-black">Message </label>
                  <textarea name="c_message" id="c_message" cols="30" rows="7" class="form-control"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-lg-12">
                  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Send Message">
                </div>
              </div>
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </div>
  
  @endsection