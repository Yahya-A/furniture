<?= $this->extend('template/template_admin');?>

<?= $this->section('content');?>

<main class="content">
    <div class="container-fluid p-0">

        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>Detail Logs</strong></h3>
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
            <div class="col-12 col-lg-8 col-xxl-9 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">

                        <h5 class="card-title mb-0">Today</h5>
                    </div>
                    <table class="table table-hover my-0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Email</th>
                                <th>Login Date</th>
                                <th>IP Address</th>
                                <th>Browser</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no = 1; foreach($day_logs as $dl):?>
                            <tr>
                                <td><?= $no?></td>
                                <td><?= $dl['email']?></td>
                                <td><?= date('Y-m-d h:i:s', $dl['login_date'])?></td>
                                <td><?= $dl['ip_address']?></td>
                                <td><?= $dl['browser']?></td>
                            </tr>
                        <?php $no++; endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-12 col-md-4 col-xxl-3 d-flex order-2 order-xxl-3">
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