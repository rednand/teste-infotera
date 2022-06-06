<?php
if ((str_contains($_SERVER['REQUEST_URI'], 'search.php?destination=&checkin=&checkout=')) || (str_contains($_SERVER['REQUEST_URI'], 'detail.php?id='))) {
    echo "<header class='header-search'>    
    <nav>
    <a class='header__logo' href='./'> Infotravel </a>
    <div class='header_left'><a href='#'>Iniciar sessão</a>
    <a class='header__sessao' href='#'> <img src='./img/headersessao.svg' alt='' width='15px'><span>Iniciar sessão</span></a>
    </div>
    </nav>
 </header>";
} else {
    echo "<header>
    <nav>
        <a class='header__logo' href='./'> Infotravel </a>
        <a class='header__sessao' href='#'> <img src='./img/headersessao.svg' alt='' width='15px'><span>Iniciar sessão</span></a>
    </nav>
</header>";
}
