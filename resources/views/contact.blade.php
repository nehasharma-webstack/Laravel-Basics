@extends('layout')
@section('title')
Contact Us
@endsection
@section('content')
<div class="container">

<div class="row">

    <div class="col-xl-8 offset-xl-2 py-5">

        <h1>Contact form</h1>

        <p class="lead">For any further queries, write to us using this form!</p>
        <!-- We're going to place the form here in the next step -->
        <form id="contact-form" method="" action="" >

<div class="messages"></div>

<div class="controls">

<div class="row">
<div class="col-md-6">
    <div class="form-group">
        <label for="form_name">Firstname *</label>
        <input id="form_name" type="text" name="firstname" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
       
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label for="form_lastname">Lastname *</label>
        <input id="form_lastname" type="text" name="lastname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
       
    </div>
</div>
</div>
<div class="row">
<div class="col-md-12">
    <div class="form-group">
        <label for="form_email">Email *</label>
        <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
        
    </div>
</div>

</div>
<div class="row">
<div class="col-md-12">
    <div class="form-group">
        <label for="form_message">Message *</label>
        <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please, leave us a message."></textarea>
        <div class="help-block with-errors"></div>
    </div>
</div>
<div class="col-md-12">
    <input type="submit" class="btn btn-success btn-send" value="Send message">
</div>
</div>
<div class="row">
<div class="col-md-12">
    
        <strong>*</strong> These fields are required. </div>
</div>
</div>

</form>

    </div>

</div>

@endsection