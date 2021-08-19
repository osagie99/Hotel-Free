@extends('index')
@section('content')
<header>
    <nav id="navbar">
        <div class="">
            <h1 class="logo">
                <a href="/index">HBT</a>
            </h1>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a class="current" href="/contact">Contact</a></li>
            </ul>
        </div>
    </nav>
</header>
<section id="contact-form" class="py-3">
    <div class="container">
        <h1 class="l-heading">
            <span class="text-primary">Contact</span>
            Us
        </h1>
        <p>PLease fill out the form below to contact us</p>
        <form action="process.php">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name">
            </div><div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
            </div><div class="form-group">
                <label for="message">Message</label>
                <textarea type="text" name="message" id="nmessage"></textarea>
            </div>
            <button type="submit" class="btn">Submit</button>
        </form>
    </div>
</section>
<section id="contact-info" class="bg-dark">
    <div class="container">
        <div class="box">
            <i class="fas fa-hotel fa-3x"></i>
            <h3>Location</h3>
            <p>50 Main st, Boston MA</p>
        </div>
        <div class="box">
            <i class="fas fa-phone fa-3x"></i>
            <h3>Phone Number</h3>
            <p>(617) 555-5555</p>
        </div>
        <div class="box">
            <i class="fas fa-envelope fa-3x"></i>
            <h3>Email Address</h3>
            <p>frontdesk@hotlink.com</p>
        </div>
    </div>
</section>
@endsection