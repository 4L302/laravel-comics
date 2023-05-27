<header>
    <div class="container py-3 d-flex justify-content-between align-items-center ovverflow-hidden">
        <div class="logo">
            <img src="../assets/img/dc-logo.png" alt="logo">
        </div>
        <nav>
            <ul class="d-flex gap-3">
                <li>
                    <a href="{{ route('recipes.index') }}" class="text-uppercase fw-bold {{ Route::currentRouteName() == 'recipes.index' ? 'active' : ''}}">Characters</a>
                </li>
                <li>
                    <a href="{{ route('recipes.index') }}" class="active text-uppercase fw-bold {{ Route::currentRouteName() == 'recipes.index' ? 'active' : ''}}">Comics</a>
                </li>
                <li>
                    <a href="{{ route('recipes.index') }}" class="text-uppercase fw-bold {{ Route::currentRouteName() == 'recipes.index' ? 'active' : ''}}">Movies</a>
                </li>
                <li>
                    <a href="{{ route('recipes.index') }}" class="text-uppercase fw-bold {{ Route::currentRouteName() == 'recipes.index' ? 'active' : ''}}">Tv</a>
                </li>
                <li>
                    <a href="{{ route('recipes.index') }}" class="text-uppercase fw-bold {{ Route::currentRouteName() == 'recipes.index' ? 'active' : ''}}">Games</a>
                </li>
                <li>
                    <a href="{{ route('recipes.index') }}{{ route('recipes.index') }}" class="text-uppercase fw-bold {{ Route::currentRouteName() == 'recipes.index' ? 'active' : ''}}">Collectibles</a>
                </li>
                <li>
                    <a href="{{ route('recipes.index') }}" class="text-uppercase fw-bold {{ Route::currentRouteName() == 'recipes.index' ? 'active' : ''}}">Videos</a>
                </li>
                <li>
                    <a href="{{ route('recipes.index') }}" class="text-uppercase fw-bold {{ Route::currentRouteName() == 'recipes.index' ? 'active' : ''}}">Fans</a>
                </li>
                <li>
                    <a href="{{ route('recipes.index') }}" class="text-uppercase fw-bold {{ Route::currentRouteName() == 'recipes.index' ? 'active' : ''}}">News</a>
                </li>
                <li>
                    <a href="{{ route('recipes.index') }}" class="text-uppercase fw-bold {{ Route::currentRouteName() == 'recipes.index' ? 'active' : ''}}">Shop</a>
                </li>
            </ul>
        </nav>
    </div>
</header>

<style lang="scss">
.logo{
    width: 100%;
}

.logo img{
    width: 80px;
}

nav a{
    text-decoration: none;
    color: #71776e;
}

nav ul li{
    list-style: none;
    padding: 0;
    margin: 0;
}

.active{
    text-underline-offset: 54px;
    text-decoration: underline 6px #0282f9;
    color: #0282f9;
}

nav ul a:hover{
    color: #0282f9;
}



</style>