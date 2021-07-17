<main> 
<nav class="navbar">
        <div class="navbar-brand @if(url()->current() == url('contact') or url()->current() == url('blogs') or url()->current() == url('team')) active1 @endif">
            <a href="/"><h2>Clove Therapy</h2></a>
        </div>
        <div class="navbar-links @if(url()->current() == url('contact') or url()->current() == url('team') or url()->current() == url('blogs')) active1 @endif">
            <ul>
                <li><a href="/" class=" @if(url()->current() == url('/')) active @endif">Home</a></li>
                <li><a href="/about" class=" @if(url()->current() == url('/about')) active @endif">About</a></li>
                <li><a href="/services" class=" @if(url()->current() == url('services')) active @endif">Services</a></li>
                <li><a href="/team" class=" @if(url()->current() == url('/team')) active2 @endif">Team</a></li>
                <li><a href="/blogs" class=" @if(url()->current() == url('/blogs')) active2 @endif">Blog</a></li>
                <li><a href="/contact" class=" @if(url()->current() == url('contact')) active2 @endif">Contacts</a></li>
                <li><a href="/get-started">GET STARTED</a></li>
            </ul>
        </div>
    </nav>
</main>

