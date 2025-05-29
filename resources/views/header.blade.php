<?php
use App\Http\Controllers\ProductController;
$total = 0;
if (Session::has('user')) {
    $total = ProductController::cartItem();
}
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/">E-COM</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
            aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarContent">
            <!-- Left-side links -->
            <ul class="navbar-nav me-5 mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Orders</a>
                </li>
            </ul>

            <!-- Search form -->
            <form action="/search" class="d-flex" role="search">
                <input class="form-control me-2 search-box" name="query" type="search" placeholder="Search"
                    aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>

            <!-- Right-side Add to Cart -->
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/cartlist">Cart Item ({{ $total }})</a>
                </li>
                @if (Session::has('user'))
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown">{{Session::get('user')['name']}}</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/logout">Logout</a></li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
