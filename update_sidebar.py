import sys

file_path = r'c:\Users\siwar\Desktop\Boussole_Symfony\templates\back_base.html.twig'

with open(file_path, 'r', encoding='utf-8') as f:
    text = f.read()

# 1. Replace main logo
old_logo = '''\t<!-- Navbar brand for xl START -->
\t<div class="d-flex align-items-center">
\t\t<a class="navbar-brand" href="index.html">
\t\t\t<img class="navbar-brand-item" src="{{ asset('assets/images/logo-light.svg') }}" alt="">
\t\t</a>
\t</div>
\t<!-- Navbar brand for xl END -->'''

new_logo = '''\t<!-- Navbar brand for xl START -->
\t<div class="d-flex align-items-center mt-2 px-3 pb-2 pt-2 border-bottom border-secondary border-opacity-25" style="background-color: #1a1b24;">
\t\t<a class="navbar-brand d-flex align-items-center" href="{{ path('app_siege_dashboard') }}">
\t\t\t<div class="header-logo-icon rounded me-3 d-flex align-items-center justify-content-center" style="width: 45px; height: 45px; border: 2px solid #00e5ff !important; box-shadow: 0 0 12px rgba(0, 229, 255, 0.4); background-color: transparent;">
                <i class="bi bi-display text-white fs-4"></i>
            </div>
            <div>
                <h4 class="text-white mb-0 fw-bold" style="letter-spacing: 0.5px;">Boussole</h4>
                <small class="mb-0 fw-bold" style="color: #00e5ff; font-size: 0.65rem; letter-spacing: 1.5px;">MANAGEMENT</small>
            </div>
\t\t</a>
\t</div>
\t<!-- Navbar brand for xl END -->'''

text = text.replace(old_logo, new_logo)

# 2. Replace Mobile Logo
old_mobile = '''\t\t\t\t<!-- Logo START -->
\t\t\t\t<div class="d-flex align-items-center d-xl-none">
\t\t\t\t\t<a class="navbar-brand" href="index.html">
\t\t\t\t\t\t<img class="light-mode-item navbar-brand-item h-30px" src="{{ asset('assets/images/logo-mobile.svg') }}" alt="">
\t\t\t\t\t\t<img class="dark-mode-item navbar-brand-item h-30px" src="{{ asset('assets/images/logo-mobile-light.svg') }}" alt="">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<!-- Logo END -->'''

new_mobile = '''\t\t\t\t<!-- Logo START -->
\t\t\t\t<div class="d-flex align-items-center d-xl-none">
\t\t\t\t\t<a class="navbar-brand d-flex align-items-center" href="{{ path('app_siege_dashboard') }}">
\t\t\t\t\t\t<div class="header-logo-icon rounded me-2 d-flex align-items-center justify-content-center" style="width: 30px; height: 30px; border: 2px solid #00e5ff !important; box-shadow: 0 0 10px rgba(0, 229, 255, 0.5); background-color: transparent;">
                            <i class="bi bi-display text-white" style="font-size: 0.8rem;"></i>
                        </div>
                        <h5 class="text-white mb-0 fw-bold ms-2">Boussole</h5>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<!-- Logo END -->'''

text = text.replace(old_mobile, new_mobile)

# 3. Replace Sidebar
start_marker = '\t\t\t<!-- Sidebar menu START -->'
end_marker = '\t\t\t<!-- Sidebar footer END -->'

start_idx = text.find(start_marker)
end_idx = text.find(end_marker) + len(end_marker)

new_sidebar = '''\t\t\t<!-- Sidebar menu START -->
\t\t\t<ul class="navbar-nav flex-column mt-3" id="navbar-sidebar">

\t\t\t\t<!-- Title -->
\t\t\t\t<li class="nav-item ms-3 my-2" style="font-size: 0.75rem; letter-spacing: 1px; color: #6c757d; font-weight: bold; text-transform: uppercase;">Principal</li>

\t\t\t\t<!-- Menu item -->
\t\t\t\t<li class="nav-item mb-1">
                    <a href="{{ path('app_siege_dashboard') }}" class="nav-link active d-flex align-items-center py-2 px-3" style="background-color: rgba(0, 229, 255, 0.08); color: #00e5ff; border-radius: 8px; margin-left: 10px; margin-right: 10px; border-left: 3px solid #00e5ff;">
                        <i class="bi bi-grid fa-fw me-3"></i>Vue d'ensemble
                    </a>
                </li>
\t\t\t\t
                <li class="nav-item mt-1"><a class="nav-link py-2 px-4" href="#" style="color: #a1a1a8;"><i class="bi bi-people fa-fw me-3 fs-6"></i>Utilisateurs</a></li>
                <li class="nav-item"><a class="nav-link py-2 px-4" href="#" style="color: #a1a1a8;"><i class="bi bi-building fa-fw me-3 fs-6"></i>Entreprises</a></li>
                <li class="nav-item"><a class="nav-link py-2 px-4" href="#" style="color: #a1a1a8;"><i class="bi bi-bag fa-fw me-3 fs-6"></i>Gestion catalogue</a></li>
                <li class="nav-item"><a class="nav-link py-2 px-4" href="#" style="color: #a1a1a8;"><i class="bi bi-download fa-fw me-3 fs-6"></i>Commandes reçues</a></li>

\t\t\t\t<!-- Title -->
\t\t\t\t<li class="nav-item ms-3 mt-4 mb-2" style="font-size: 0.75rem; letter-spacing: 1px; color: #6c757d; font-weight: bold; text-transform: uppercase;">Outils</li>

                <li class="nav-item"><a class="nav-link py-2 px-4" href="#" style="color: #a1a1a8;"><i class="bi bi-cash fa-fw me-3 fs-6"></i>Charges</a></li>
                <li class="nav-item"><a class="nav-link py-2 px-4" href="#" style="color: #a1a1a8;"><i class="bi bi-truck fa-fw me-3 fs-6"></i>Fournisseurs</a></li>
                <li class="nav-item"><a class="nav-link py-2 px-4" href="#" style="color: #a1a1a8;"><i class="bi bi-megaphone fa-fw me-3 fs-6"></i>Réclamations</a></li>
                <li class="nav-item"><a class="nav-link py-2 px-4" href="#" style="color: #a1a1a8;"><i class="bi bi-robot fa-fw me-3 fs-6"></i>Alertes IA</a></li>
                <li class="nav-item"><a class="nav-link py-2 px-4" href="#" style="color: #a1a1a8;"><i class="bi bi-globe fa-fw me-3 fs-6"></i>Carte franchises</a></li>
                <li class="nav-item"><a class="nav-link py-2 px-4" href="#" style="color: #a1a1a8;"><i class="bi bi-bar-chart-line fa-fw me-3 fs-6"></i>Bilans</a></li>
                <li class="nav-item"><a class="nav-link py-2 px-4" href="#" style="color: #a1a1a8;"><i class="bi bi-piggy-bank fa-fw me-3 fs-6"></i>Budgets</a></li>

\t\t\t</ul>
\t\t\t<!-- Sidebar menu end -->

\t\t\t<!-- Sidebar footer START -->
\t\t\t<div class="px-3 mt-auto pt-3 pb-4">
                <!-- User profile box -->
\t\t\t\t<div class="d-flex align-items-center p-3 mb-3 rounded shadow" style="background-color: #2b2b36;">
                    <div class="avatar avatar-sm me-3 d-flex align-items-center justify-content-center fw-bold" style="background-color: #00e5ff; color: #1a1a24; border-radius: 8px; width: 35px; height: 35px;">
                        AD
                    </div>
                    <div>
                        <h6 class="mb-0 text-white fw-bold" style="font-size: 0.85rem;">admin@boussole.tn</h6>
                        <small class="mb-0" style="color: #00ff88; font-size: 0.75rem;"><i class="bi bi-circle-fill me-1" style="font-size: 0.5rem;"></i>En ligne</small>
                    </div>
\t\t\t\t</div>
                
                <!-- Logout -->
                <a class="h6 mb-0 text-danger d-flex align-items-center ms-1 d-inline-block" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Déconnexion" style="transition: all 0.3s;">
                    <i class="bi bi-power me-2 text-danger"></i> Déconnexion
                </a>
\t\t\t</div>
\t\t\t<!-- Sidebar footer END -->'''

text = text[:start_idx] + new_sidebar + text[end_idx:]

with open(file_path, 'w', encoding='utf-8') as f:
    f.write(text)

print('Done updating file!')
