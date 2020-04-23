<nav class="nav">
    <div class="container">
        <ul class="nav__links">
            <li class="nav__link-item <?= ($pagename == 'about-us') ? 'nav__link-item--active' : '' ?>">
                <a href="<?=get_site_url()?>/about-us" title="About Us"><span>About Us</span></a>
            </li>
            <li class="nav__link-item <?= ($pagename == 'groover-street') ? 'nav__link-item--active' : '' ?>">
                <a href="<?=get_site_url()?>/groover-street" title="Groover Street"><span>Groover Street</span></a>
            </li>
            <li class="nav__link-item <?= ($pagename == 'charity-support') ? 'nav__link-item--active' : '' ?>">
                <a href="<?=get_site_url()?>/charity-support" title="Charity Support"><span>Charity Support</span></a>
            </li>
            <li class="nav__link-item <?= ($pagename == 'lennys-laws') ? 'nav__link-item--active' : '' ?>">
                <a href="<?=get_site_url()?>/lennys-laws" title="Lennys Laws"><span>Lennys Laws</span></a>
            </li>
        </ul>
    </div>
</nav>