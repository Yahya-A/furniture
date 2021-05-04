<?= $this->extend('template/template_admin');?>

<?= $this->section('content');?>

<main class="content">
    <div class="container-fluid p-0">

        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>Logs</strong> Activity</h3>
            </div>

            <div class="col-auto ms-auto text-end mt-n1">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
                        <li class="breadcrumb-item"><a href="#">AdminKit</a></li>
                        <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Analytics</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-xxl-3 d-flex order-1 order-xxl-1">
                <div class="card flex-fill">
                    <div class="card-header">

                        <h5 class="card-title mb-0">Logs Login</h5>
                    </div>
                    <div class="card-body d-flex">
                        <div class=" w-100">
                            <table class="table mb-0">
                                <tbody>
                                    <tr>
                                        <td>Today</td>
                                        <td width="5%"><span class="badge bg-success"><?= $day_logs?></span></td>
                                        <td width="10%"><a href="/furniture-admin/logs/detail?q=<?= base64_encode(date('Y-m-d'))?>" class="btn btn-primary btn-sm">Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td>This Month</td>
                                        <td><span class="badge bg-success"><?= $month_logs?></span></td>
                                        <td><a href="#" class="btn btn-primary btn-sm">Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td>This Year</td>
                                        <td><span class="badge bg-success"><?= $year_logs?></span></td>
                                        <td><a href="#" class="btn btn-primary btn-sm">Detail</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-xxl-3 d-flex order-2 order-xxl-3">
                <div class="card flex-fill w-100">
                    <div class="card-header">

                        <h5 class="card-title mb-0">Browser Usage</h5>
                    </div>
                    <div class="card-body d-flex">
                        <div class="align-self-center w-100">
                            <div class="py-3">
                                <div class="chart chart-xs">
                                    <canvas id="chartjs-dashboard-pie"></canvas>
                                </div>
                            </div>

                            <table class="table mb-0">
                                <tbody>
                                    <?php foreach($browser as $b):?>
                                    <tr>
                                        <td><?= $b['browser']?></td>
                                        <td class="text-end"><?= $b['email']?></td>
                                    </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>



    </div>
</main>

<?= $this->endSection();?>

<?= $this->section('config');?>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Pie chart
        new Chart(document.getElementById("chartjs-dashboard-pie"), {
            type: "pie",
            data: {
                labels: [
                    <?php foreach($browser as $b) : ?>
                    "<?= $b['browser']?>",
                    <?php endforeach; ?>
                ],
                datasets: [{
                    data: [
                        <?php foreach($browser as $b) : ?>
                        "<?= $b['email']?>",
                        <?php endforeach; ?>
                    ],
                    backgroundColor: [
                        window.theme.primary,
                        window.theme.warning,
                        window.theme.danger,
                        window.theme.info,
                        window.theme.success,
                        window.theme.secondary,
                    ],
                    borderWidth: 5
                }]
            },
            options: {
                responsive: !window.MSInputMethodContext,
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
                cutoutPercentage: 75
            }
        });
    });
</script>

<?= $this->endSection();?>