@extends("layouts.app")

@section("title")
    Mahasiswa List
@endsection

@section("content")
    <div class="bg-light rounded">
        <div class="card">
            <div class="card-body">

                <div class="mt-2">
                    <p>Total Mahasiswa: {{ $totalMahasiswa }}</p>
                </div>

                <div class="mt-2">
                    <h5>Gender Statistics</h5>
                    <canvas id="genderChart" width="300" height="100"></canvas>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var ctx = document.getElementById('genderChart').getContext('2d');
            var genderChart = new Chart(ctx, {
                type: 'pie', // Mengubah tipe chart menjadi pie chart
                data: {
                    labels: {!! json_encode($genderStatistics->pluck("gender")) !!},
                    datasets: [{
                        label: 'Total',
                        data: {!! json_encode($genderStatistics->pluck("total")) !!},
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            // Tambahkan warna sesuai kebutuhan
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            // Tambahkan warna border sesuai kebutuhan
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        });

        $(document).ready(function() {
            $('#query').on('keyup', function() {
                var value = $(this).val().toLowerCase();
                $('#mahasiswa-list tr').filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
@endsection
