<div id="navigation">
    <!-- Navigation Menu-->
    <ul class="navigation-menu">
        <li>
            <a href="frontend/#">Home</a>
        </li>

        <li>
            <a href="frontend/#">About</a>
        </li>

        <li>
            <a href="#">Blog</a>
        </li>

        <li>
            <a href="frontend/#">Contact</a>
        </li>

        <li class="has-submenu">
            <a href="{{ route('home') }}">Dashboard</a>
            <ul class="submenu">
                <li>
                    <a href="{{ route('home') }}">Dashboard</a>
                </li>
                <li>
                    <a href="{{ route('login') }}">Login</a>
                </li>

                <li>
                    <a href="{{ route('login') }}">Register</a>
                </li>
            </ul>
        </li>



    </ul>
    <!-- End navigation menu        -->
</div>