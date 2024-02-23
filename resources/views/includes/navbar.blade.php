{{-- <div class="container-fluid">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li><a id="len1" class="hoverable" href="#">Home</a></li>
                <li><a id="len2" class="hoverable" href="#">About</a></li>
                <li><a id="len3" class="hoverable" href="#">Portfolio</a></li>
                <li><a id="len4" class="hoverable" href="#">Contact</a></li>
            </ul>
        </div>
    </nav>
    <div id="what-the-hell-is-this">
        <div class="page-title">
            <h2>Simple Navigation</h2>
            <p class="lead">
                Based on Hover.css, the goal of this pen
                is to create a simple navigation bar <br />
                that can be easily reused in both mobile and native displays. Mouse over the nav text for animation!
            </p>
        </div>
    </div>
</div> --}}

<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand nav-brand" href="#">GFood</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('product') }}">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Keranjang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
