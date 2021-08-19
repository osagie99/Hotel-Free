@extends('index')
@section('content')
<header>
    <nav id="navbar">
        <div class="">
            <h1 class="logo">
                <a href="/index">HBT</a>
            </h1>
            <ul>
                <li><a class="current" href="/index">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </div>
    </nav>
    <div id="showcase"
            <div class="">
                <div class="showcase-content">
                    <h1><span class="text-primary">Enjoy</span> Your Stay</h1>
                    <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum sequi 
                        excepturi in sapiente sint accusantium iure nemo nisi officia repudiandae! Doloremque adipisci amet itaque necessitatibus 
                        voluptatibus animi officia alias tempora.
                    </p>
                    <a class="btn" href="/about">About Our Hotel</a>
                </div>
            </div>
        </div>
</header>
    <section id="home-info" class="bg-dark">
        <div class="info-img"></div>
        <div class="info-content">
            <h2><span class="text-primary">The History</span> Of Our Hotel</h2>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias eos assumenda voluptatibus 
                 a numquam, veritatis reiciendis dignissimos beatae, enim 
                nostrum, aspernatur soluta magnam? Fuga porro doloremque dolor, magnam quisquam deserunt.
            </p>
            <a href="/about" class="btn btn-light">Read More</a>
        </div>
    </section>
    <section id="features">
        <div class="box bg-light">
            <i class="fas fa-hotel fa-3x"></i>
            <h3>Great Location</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, nesciunt.</p>
        </div>
        <div class="box bg-primary">
            <i class="fas fa-utensils fa-3x"></i>
            <h3>Free Meals</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, nesciunt.</p>
        </div>
        <div class="box bg-light">
            <i class="fas fa-dumbbell fa-3x"></i>
            <h3>Fitness Room</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, nesciunt.</p>
        </div>
    </section>
    <div class="clr"></div>
@endsection
        
 