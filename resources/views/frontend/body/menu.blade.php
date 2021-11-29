<header>

    <a href="#" class="logo"><i class="fas fa-utensils"></i>resto.</a>

    <nav class="navbar">
        <a class="active" href="#home">home</a>
        <a href="{{route('restaurantslist')}}">Restaurants</a>
        <a href="#about"></a>
        <a href="#menu">menu</a>
        <a href="#review">review</a>
        <a href="#order">order</a>
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
        <a href="#" class="fas fa-heart"></a>
        <a href="{{route('cart')}}" class="fas fa-shopping-cart">[{{Session::has('cart')? Session::get('cart')->totalQty:0}}]</a>
    </div>

</header>
