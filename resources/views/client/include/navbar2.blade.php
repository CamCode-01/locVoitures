<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="index.html">
                <i class="ti-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false"
                aria-controls="form-elements">
                <i class="ti-clipboard menu-icon"></i>
                <span class="menu-title">Creation</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{URL::to('/ajoutercategorie')}}">Ajouter categorie</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{URL::to('/ajoutervoiture')}}">Ajouter Voiture</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{URL::to('/ajouterslider')}}">Ajouter slider</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                <i class="ti-layout menu-icon"></i>
                <span class="menu-title">Affichages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="basic-table.html">Categories</a></li>
                    <li class="nav-item"> <a class="nav-link" href="data-table.html">Voitures</a></li>
                    <li class="nav-item"> <a class="nav-link" href="js-grid.html">Sliders</a></li>
                    <li class="nav-item"> <a class="nav-link" href="sortable-table.html">Reservations</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
