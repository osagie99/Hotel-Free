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
                <li><a class="current" href="/about">About</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </div>
    </nav>
</header>
<section id="about-info" class="bg-light py-3">
    <div class="container">
        <div class="info-left">
            <h1 class="l-heading"> <span class="text-primary">About</span> Hotel BT</h1>
            <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti autem esse dolorum ducimus ex nesciunt dolor odio fuga incidunt, illo consequuntur maiores accusantium voluptate ea voluptas beatae quidem temporibus vel?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus ratione perferendis rem nulla repellat ab quos iusto illo corporis porro?</p>
        </div>
        <div class="info-right">
            <img src="/images/photo-2.jpg" alt="hotel">
        </div>
    </div>
</section>
<div class="clr"></div>
<section id="testimonials" class="py-3">
    <div class="container">
        <h2 class="l-heading">What Our Guests Say</h2>
        <div class="testimonial bg-primary">
            <img src="/images/person-1.jpg" alt="Olamide">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem rerum iure qui at? Adipisci quos, tenetur magni enim minima dolorum error nisi quod perspiciatis, itaque, consequatur eius. Tempora esse reprehenderit, facilis qui quo assumenda nesciunt repellendus doloremque minus et consequatur.</p>
        </div> <div class="testimonial bg-primary">
            <img src="/images/person-2.jpg" alt="Stella">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem rerum iure qui at? Adipisci quos, tenetur magni enim minima dolorum error nisi quod perspiciatis, itaque, consequatur eius. Tempora esse reprehenderit, facilis qui quo assumenda nesciunt repellendus doloremque minus et consequatur.</p>
        </div> 
    </div>
</section>
<div class="clr"></div>
@endsection