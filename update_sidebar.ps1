$filePath = "c:\Users\siwar\Desktop\Boussole_Symfony\templates\back_base.html.twig"
$content = Get-Content -Raw $filePath

$startMarker = "			<!-- Sidebar menu START -->"
$endMarker = "			<!-- Sidebar footer END -->"

$startIndex = $content.IndexOf($startMarker)
$endIndex = $content.IndexOf($endMarker)

if ($startIndex -ge 0 -and $endIndex -gt $startIndex) {
    $endIndex += $endMarker.Length
    
    $newSidebar = @"
			<!-- Sidebar menu START -->
			<ul class="navbar-nav flex-column mt-3" id="navbar-sidebar">

				<!-- Title -->
				<li class="nav-item ms-3 my-2" style="font-size: 0.75rem; letter-spacing: 1px; color: #6c757d; font-weight: bold; text-transform: uppercase;">Principal</li>

				<!-- Menu item -->
				<li class="nav-item mb-1">
                    <a href="{{ path('app_siege_dashboard') }}" class="nav-link active d-flex align-items-center py-2 px-3" style="background-color: rgba(0, 229, 255, 0.08); color: #00e5ff; border-radius: 8px; margin-left: 10px; margin-right: 10px; border-left: 3px solid #00e5ff;">
                        <i class="bi bi-grid fa-fw me-3"></i>Vue d'ensemble
                    </a>
                </li>
				
                <li class="nav-item mt-1"><a class="nav-link text-body py-2 px-4" href="#"><i class="bi bi-people fa-fw me-3 fs-6"></i>Utilisateurs</a></li>
                <li class="nav-item"><a class="nav-link text-body py-2 px-4" href="#"><i class="bi bi-building fa-fw me-3 fs-6"></i>Entreprises</a></li>
                <li class="nav-item"><a class="nav-link text-body py-2 px-4" href="#"><i class="bi bi-bag fa-fw me-3 fs-6"></i>Gestion catalogue</a></li>
                <li class="nav-item"><a class="nav-link text-body py-2 px-4" href="#"><i class="bi bi-download fa-fw me-3 fs-6"></i>Commandes reçues</a></li>

				<!-- Title -->
				<li class="nav-item ms-3 mt-4 mb-2" style="font-size: 0.75rem; letter-spacing: 1px; color: #6c757d; font-weight: bold; text-transform: uppercase;">Outils</li>

                <li class="nav-item"><a class="nav-link text-body py-2 px-4" href="#"><i class="bi bi-cash fa-fw me-3 fs-6"></i>Charges</a></li>
                <li class="nav-item"><a class="nav-link text-body py-2 px-4" href="#"><i class="bi bi-truck fa-fw me-3 fs-6"></i>Fournisseurs</a></li>
                <li class="nav-item"><a class="nav-link text-body py-2 px-4" href="#"><i class="bi bi-megaphone fa-fw me-3 fs-6"></i>Réclamations</a></li>
                <li class="nav-item"><a class="nav-link text-body py-2 px-4" href="#"><i class="bi bi-robot fa-fw me-3 fs-6"></i>Alertes IA</a></li>
                <li class="nav-item"><a class="nav-link text-body py-2 px-4" href="#"><i class="bi bi-globe fa-fw me-3 fs-6"></i>Carte franchises</a></li>
                <li class="nav-item"><a class="nav-link text-body py-2 px-4" href="#"><i class="bi bi-bar-chart-line fa-fw me-3 fs-6"></i>Bilans</a></li>
                <li class="nav-item"><a class="nav-link text-body py-2 px-4" href="#"><i class="bi bi-piggy-bank fa-fw me-3 fs-6"></i>Budgets</a></li>

			</ul>
			<!-- Sidebar menu end -->

			<!-- Sidebar footer START -->
			<div class="px-3 mt-auto pt-3 pb-4">
                <!-- User profile box -->
				<div class="d-flex align-items-center p-3 mb-3 rounded shadow" style="background-color: #2b2b36;">
                    <div class="avatar avatar-sm me-3 d-flex align-items-center justify-content-center fw-bold" style="background-color: #00e5ff; color: #1a1a24; border-radius: 8px;">
                        AD
                    </div>
                    <div>
                        <h6 class="mb-0 text-white fw-bold" style="font-size: 0.85rem;">admin@boussole.tn</h6>
                        <small class="mb-0" style="color: #00ff88; font-size: 0.75rem;"><i class="bi bi-circle-fill me-1" style="font-size: 0.5rem;"></i>En ligne</small>
                    </div>
				</div>
                
                <!-- Logout -->
                <a class="h6 mb-0 text-danger d-flex align-items-center ms-1 d-inline-block" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Déconnexion" style="transition: all 0.3s;">
                    <i class="bi bi-power me-2 text-danger"></i> Déconnexion
                </a>
			</div>
			<!-- Sidebar footer END -->
"@
    
    $content = $content.Substring(0, $startIndex) + $newSidebar + $content.Substring($endIndex)
}

$startMarkerMobile = "				<!-- Logo START -->"
$endMarkerMobile = "				<!-- Logo END -->"

$startIndexM = $content.IndexOf($startMarkerMobile)
$endIndexM = $content.IndexOf($endMarkerMobile, $startIndexM + 1)

if ($startIndexM -ge 0 -and $endIndexM -gt $startIndexM) {
    $endIndexM += $endMarkerMobile.Length
    
    $newMobile = @"
				<!-- Logo START -->
				<div class="d-flex align-items-center d-xl-none">
					<a class="navbar-brand d-flex align-items-center" href="{{ path('app_siege_dashboard') }}">
						<div class="header-logo-icon rounded me-2 d-flex align-items-center justify-content-center" style="width: 30px; height: 30px; border: 2px solid #00e5ff !important; box-shadow: 0 0 10px rgba(0, 229, 255, 0.5); background-color: transparent;">
                            <i class="bi bi-display text-white" style="font-size: 0.8rem;"></i>
                        </div>
                        <h5 class="text-white mb-0 fw-bold ms-2">Boussole</h5>
					</a>
				</div>
				<!-- Logo END -->
"@

    $content = $content.Substring(0, $startIndexM) + $newMobile + $content.Substring($endIndexM)
}

Set-Content $filePath $content -Encoding utf8
