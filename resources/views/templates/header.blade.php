<div class="logo-website">
    <img src="/images/logo.png" alt="Logo"/>
</div>
<nav>
    <ul>
        <li class="{{ Request::route()->getName() === 'homepage' ? 'active' : '' }}" >
            <a href="{{ route('homepage') }}">
            Prodotti</a></li>
        <li><a href="">News</a></li>
    </ul>
</nav>