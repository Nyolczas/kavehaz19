
<?php

function navbar($pageName)
{

    switch ($pageName) {
        case "index":
            $isActive = array(" active", " ", " ", " ", " ", " ");
            break;
        case "rolunk":
            $isActive = array(" ", " active", " ", " ", " ", " ");
            break;
        case "menu":
            $isActive = array(" ", " ", " active", " ", " ", " ");
            break;
        case "galeria":
            $isActive = array(" ", " ", " ", " active", " ", " ");
            break;
        case "rendezvenyek":
            $isActive = array(" ", " ", " ", " ", " active", " ");
            break;
        case "kapcsolat":
            $isActive = array(" ", " ", " ", " ", " ", " active");
            break;
        default:
            $isActive = array(" ", " ", " ", " ", " ", " ");
            break;
    }

    echo '<!-- navbar -->
    <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-dark navbar-fixed-top navbar-center">
    <div class="container">
    <a class="navbar-brand" href="menu.html">
    <img alt="Utasellátó logó" src="img/ue-logo.png">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault"
    aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto ">
    <li class="nav-item ' . $isActive[0] . '">
    <a class="nav-link" href="index.html"> főoldal
    </a>
    </li>
    <li class="nav-item ' . $isActive[1] . '">
    <a class="nav-link" href="rolunk.html">rólunk</a>
    </li>
    <li class="nav-item ' . $isActive[2] . '">
    <a class="nav-link" href="menu.html">menü</a>
    </li>
    <li class="nav-item ' . $isActive[3] . '">
    <a class="nav-link" href="galeria.html">galéria</a>
    </li>
    </ul>
    <ul class="navbar-nav navbar-right ">
    <li class="nav-item ' . $isActive[4] . '">
    <a class="nav-link" href="rendezvenyek.html">rendezvényszervezés
    <span class="sr-only">(current)</span>
    </a>
    </li>
    <li class="nav-item ' . $isActive[5] . '">
    <a class="nav-link" href="kapcsolat.html">kapcsolat</a>
    </li>
    </ul>
    </div>
    </div>
    </nav>';
}

?>