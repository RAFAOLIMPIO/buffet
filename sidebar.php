<!-- Sidebar -->
<div class="bg-dark text-white p-3 vh-100" style="width: 250px;">
    <h4 class="text-center">Oficina<span class="text-warning">PRO</span></h4>
    <hr class="bg-white">
    <ul class="nav nav-pills flex-column">
        <li class="nav-item">
            <a href="index.php" class="nav-link text-white <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active bg-warning text-dark' : ''; ?>">
                <i class="fas fa-tachometer-alt me-2"></i> Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a href="clientes.php" class="nav-link text-white">
                <i class="fas fa-users me-2"></i> Clientes
            </a>
        </li>
        <li class="nav-item">
            <a href="veiculos.php" class="nav-link text-white">
                <i class="fas fa-car me-2"></i> Veículos
            </a>
        </li>
        <li class="nav-item">
            <a href="ordens.php" class="nav-link text-white">
                <i class="fas fa-clipboard-list me-2"></i> Ordens de Serviço
            </a>
        </li>
        <li class="nav-item">
            <a href="pecas.php" class="nav-link text-white">
                <i class="fas fa-cogs me-2"></i> Peças
            </a>
        </li>
        <li class="nav-item">
            <a href="relatorios.php" class="nav-link text-white">
                <i class="fas fa-chart-bar me-2"></i> Relatórios
            </a>
        </li>
    </ul>
</div>