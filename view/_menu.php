
<ul class="header-menu">
    <?php foreach ($menu as $item): ?>
        <li class="header-menu__item"><a href="/" class="header-menu__link"><?= $item->name; ?></a></li>

    <li class="header-menu__item"><a href="/" class="header-menu__link">Home</a></li>
    <li class="header-menu__item"><a href="/about" class="header-menu__link">About</a></li>
    <li class="header-menu__item"><a href="/portfolio" class="header-menu__link">Portfolio</a></li>
    <li class="header-menu__item"><a href="/contacts" class="header-menu__link">Contacts</a></li>
    <?php endforeach; ?>
</ul>