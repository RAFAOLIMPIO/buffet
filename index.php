<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/sidebar.php'; ?>

<!-- Top navbar (opcional) -->
<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom rounded mb-4">
    <div class="container-fluid">
        <button class="btn btn-outline-secondary" id="menu-toggle"><i class="fas fa-bars"></i></button>
        <div class="ms-auto">
            <span class="navbar-text"><i class="fas fa-user"></i> <?php echo $_SESSION['usuario_nome']; ?></span>
        </div>
    </div>
</nav>

<?php
require_once 'config/database.php';

// Total de clientes
$stmt = $pdo->query("SELECT COUNT(*) FROM clientes");
$totalClientes = $stmt->fetchColumn();

// Total de veículos
$stmt = $pdo->query("SELECT COUNT(*) FROM veiculos");
$totalVeiculos = $stmt->fetchColumn();

// OS em andamento
$stmt = $pdo->query("SELECT COUNT(*) FROM ordens_servico WHERE status = 'em_andamento'");
$osAndamento = $stmt->fetchColumn();

// Faturamento mensal (soma das OS concluídas no mês atual)
$stmt = $pdo->query("SELECT COALESCE(SUM(valor_total), 0) FROM ordens_servico WHERE status = 'concluida' AND EXTRACT(MONTH FROM data_conclusao) = EXTRACT(MONTH FROM CURRENT_DATE)");
$faturamento = $stmt->fetchColumn();

// Últimas OS
$stmt = $pdo->query("SELECT os.*, v.modelo, v.placa, c.nome as cliente 
                      FROM ordens_servico os
                      JOIN veiculos v ON os.veiculo_id = v.id
                      JOIN clientes c ON v.cliente_id = c.id
                      ORDER BY os.data_abertura DESC LIMIT 5");
$ultimasOS = $stmt->fetchAll();
?>

<!-- Cards -->
<div class="row g-4 mb-4">
    <div class="col-md-3">
        <div class="card bg-primary text-white">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <h6>Clientes</h6>
                    <h2><?php echo $totalClientes; ?></h2>
                </div>
                <i class="fas fa-users fa-3x opacity-50"></i>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card bg-success text-white">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <h6>Veículos</h6>
                    <h2><?php echo $totalVeiculos; ?></h2>
                </div>
                <i class="fas fa-car fa-3x opacity-50"></i>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card bg-warning text-white">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <h6>OS em andamento</h6>
                    <h2><?php echo $osAndamento; ?></h2>
                </div>
                <i class="fas fa-wrench fa-3x opacity-50"></i>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card bg-danger text-white">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <h6>Faturamento mensal</h6>
                    <h2>R$ <?php echo number_format($faturamento, 2, ',', '.'); ?></h2>
                </div>
                <i class="fas fa-dollar-sign fa-3x opacity-50"></i>
            </div>
        </div>
    </div>
</div>

<!-- Últimas OS -->
<div class="card">
    <div class="card-header">
        <strong><i class="fas fa-clipboard-list"></i> Últimas Ordens de Serviço</strong>
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Cliente</th>
                    <th>Veículo</th>
                    <th>Status</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ultimasOS as $os): ?>
                <tr>
                    <td><?php echo $os['id']; ?></td>
                    <td><?php echo htmlspecialchars($os['cliente']); ?></td>
                    <td><?php echo htmlspecialchars($os['modelo'] . ' - ' . $os['placa']); ?></td>
                    <td>
                        <?php
                        $status = $os['status'];
                        $class = 'secondary';
                        if ($status == 'aberta') $class = 'primary';
                        elseif ($status == 'em_andamento') $class = 'warning';
                        elseif ($status == 'concluida') $class = 'success';
                        elseif ($status == 'cancelada') $class = 'danger';
                        ?>
                        <span class="badge bg-<?php echo $class; ?>"><?php echo $status; ?></span>
                    </td>
                    <td>R$ <?php echo number_format($os['valor_total'], 2, ',', '.'); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>