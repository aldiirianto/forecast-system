@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                <h2>Tabel Peramalan</h2>
                </div>
                    <div class="card-body">
                    <h4>Ubin Teraso Cetak - Black Casto</h4><br>
                        <div class="table-responsive-md">
                        <table style="width:50%" class="table table-bordered">
                        <thead>
                        <tr>
                            <th class="text-center" width="100">No</th>
                            <th class="text-center" width="100">Periode (Bulan)</th>
                            <th class="text-center" width="100">Penjualan (m2)</th>
                            <th class="text-center" width="100">S't</th>
                            <th class="text-center" width="100">|At - Ft|</th>
                            <th class="text-center" width="100">(|At - Ft|)^2</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td style="text-align:center">1</td>
                            <td style="text-align:center">Jan-20</td>
                            <td style="text-align:center">25</td>
                            <td style="text-align:center">-</td>
                            <td style="text-align:center">-</td>
                            <td style="text-align:center">-</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">2</td>
                            <td style="text-align:center">Feb-20</td>
                            <td style="text-align:center">56</td>
                            <td style="text-align:center">52,9</td>
                            <td style="text-align:center">3,91</td>
                            <td style="text-align:center">9,61</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">3</td>
                            <td style="text-align:center">Mar-20</td>
                            <td style="text-align:center">14</td>
                            <td style="text-align:center">18,2</td>
                            <td style="text-align:center">4,2</td>
                            <td style="text-align:center">17,64</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">4</td>
                            <td style="text-align:center">Apr-20</td>
                            <td style="text-align:center">20</td>
                            <td style="text-align:center">19,4</td>
                            <td style="text-align:center">0,6</td>
                            <td style="text-align:center">0,36</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">5</td>
                            <td style="text-align:center">Mei-20</td>
                            <td style="text-align:center">30</td>
                            <td style="text-align:center">29</td>
                            <td style="text-align:center">1</td>
                            <td style="text-align:center">1</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">6</td>
                            <td style="text-align:center">Jun-20</td>
                            <td style="text-align:center">19</td>
                            <td style="text-align:center">20,1</td>
                            <td style="text-align:center">1,1</td>
                            <td style="text-align:center">1,21</td>   
                        </tr>
                        <tr>
                        <td colspan='4'><b>Jumlah</b></td>
                        <td style="text-align:center">10,81</td>
                        <td style="text-align:center">29,82</td>
                        </tr>
                        <tr>
                        <td colspan='4'><b>MAD dan MSE</b></td>
                        <td style="text-align:center">2,162</td>
                        <td style="text-align:center">5,964</td>
                        </tr>
                        </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection