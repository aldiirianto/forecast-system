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
                        <table style="width:100%" class="table table-bordered">
                        <thead>
                        <tr>
                            <th class="text-center" width="100">No</th>
                            <th class="text-center" width="100">Periode (Bulan)</th>
                            <th class="text-center" width="100">Penjualan (m2)</th>
                            <th class="text-center" width="100">F (3-Month)</th>
                            <th class="text-center" width="100">F (5-Month)</th>
                            <th class="text-center" width="100">F (a = 0.1)</th>
                            <th class="text-center" width="100">F (a = 0.5)</th>
                            <th class="text-center" width="100">F (a = 0.9)</th>
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
                            <td style="text-align:center">-</td>
                            <td style="text-align:center">-</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">2</td>
                            <td style="text-align:center">Feb-20</td>
                            <td style="text-align:center">56</td>
                            <td style="text-align:center">-</td>
                            <td style="text-align:center">-</td>
                            <td style="text-align:center">28,1</td>   
                            <td style="text-align:center">40,5</td>
                            <td style="text-align:center">52,9</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">3</td>
                            <td style="text-align:center">Mar-20</td>
                            <td style="text-align:center">14</td>
                            <td style="text-align:center">-</td>
                            <td style="text-align:center">-</td>
                            <td style="text-align:center">51,8</td>   
                            <td style="text-align:center">35</td>
                            <td style="text-align:center">18,2</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">4</td>
                            <td style="text-align:center">Apr-20</td>
                            <td style="text-align:center">20</td>
                            <td style="text-align:center">31,66666667</td>
                            <td style="text-align:center">-</td>
                            <td style="text-align:center">14,6</td>   
                            <td style="text-align:center">17</td>
                            <td style="text-align:center">19,4</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">5</td>
                            <td style="text-align:center">Mei-20</td>
                            <td style="text-align:center">30</td>
                            <td style="text-align:center">30</td>
                            <td style="text-align:center">-</td>
                            <td style="text-align:center">21</td>   
                            <td style="text-align:center">25</td>
                            <td style="text-align:center">29</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">6</td>
                            <td style="text-align:center">Jun-20</td>
                            <td style="text-align:center">19</td>
                            <td style="text-align:center">21,3</td>
                            <td style="text-align:center">29</td>
                            <td style="text-align:center">28,9</td>   
                            <td style="text-align:center">24,5</td>
                            <td style="text-align:center">20,1</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">7</td>
                            <td style="text-align:center">Jul-20</td>
                            <td style="text-align:center">19</td>
                            <td style="text-align:center">21,3</td>
                            <td style="text-align:center">29</td>
                            <td style="text-align:center">28,9</td>  
                            <td style="text-align:center">24,5</td>
                            <td style="text-align:center">20,1</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">8</td>
                            <td style="text-align:center">Agu-20</td>
                            <td style="text-align:center">21</td>
                            <td style="text-align:center">24,6666667</td>
                            <td style="text-align:center">21,6</td>
                            <td style="text-align:center">24,6</td>   
                            <td style="text-align:center">23</td>
                            <td style="text-align:center">21,4</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">10</td>
                            <td style="text-align:center">Sept-20</td>
                            <td style="text-align:center">11</td>
                            <td style="text-align:center">21,66666667</td>
                            <td style="text-align:center">23</td>
                            <td style="text-align:center">20</td>   
                            <td style="text-align:center">16</td>
                            <td style="text-align:center">12</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">9</td>
                            <td style="text-align:center">Okt-20</td>
                            <td style="text-align:center">18</td>  
                            <td style="text-align:center">19</td>
                            <td style="text-align:center">21,2</td>
                            <td style="text-align:center">11,7</td>
                            <td style="text-align:center">14,5</td>   
                            <td style="text-align:center">17,3</td>
                        </tr>
                        <tr>
                            <td style="text-align:center">11</td>
                            <td style="text-align:center">Nov-20</td>
                            <td style="text-align:center">50</td>
                            <td style="text-align:center">16,66666667</td>
                            <td style="text-align:center">18,8</td>
                            <td style="text-align:center">21,2</td>   
                            <td style="text-align:center">34</td>
                            <td style="text-align:center">46,8</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">12</td>
                            <td style="text-align:center">Des-20</td>
                            <td style="text-align:center">43</td>
                            <td style="text-align:center">26,33333333</td>
                            <td style="text-align:center">25</td>
                            <td style="text-align:center">48,4</td>   
                            <td style="text-align:center">42</td>
                            <td style="text-align:center">35,6</td>   
                        </tr>
                        <tr style="background-color:yellow">
                            <td style="text-align:center">13</td>
                            <td style="text-align:center">Jan-21</td>
                            <td style="text-align:center">-</td>   
                            <td style="text-align:center">34</td>
                            <td style="text-align:center">26,8</td>
                            <td style="text-align:center">30,6</td>
                            <td style="text-align:center">17</td>   
                            <td style="text-align:center">3,4</td>
                        </tr>
                        </tbody>
                        </table>
                        </div>
                    </div>
                    <div class="card-body">
                    <h4>Ubin Teraso Cetak - Cordon Blue</h4><br>
                        <div class="table-responsive-md">
                        <table style="width:100%" class="table table-bordered">
                        <thead>
                        <tr>
                            <th class="text-center" width="100">No</th>
                            <th class="text-center" width="100">Periode (Bulan)</th>
                            <th class="text-center" width="100">Penjualan (m2)</th>
                            <th class="text-center" width="100">F (3-Month)</th>
                            <th class="text-center" width="100">F (5-Month)</th>
                            <th class="text-center" width="100">F (a = 0.1)</th>
                            <th class="text-center" width="100">F (a = 0.5)</th>
                            <th class="text-center" width="100">F (a = 0.9)</th>
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
                            <td style="text-align:center">-</td>
                            <td style="text-align:center">-</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">2</td>
                            <td style="text-align:center">Feb-20</td>
                            <td style="text-align:center">56</td>
                            <td style="text-align:center">-</td>
                            <td style="text-align:center">-</td>
                            <td style="text-align:center">28,1</td>   
                            <td style="text-align:center">40,5</td>
                            <td style="text-align:center">52,9</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">3</td>
                            <td style="text-align:center">Mar-20</td>
                            <td style="text-align:center">14</td>
                            <td style="text-align:center">-</td>
                            <td style="text-align:center">-</td>
                            <td style="text-align:center">51,8</td>   
                            <td style="text-align:center">35</td>
                            <td style="text-align:center">18,2</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">4</td>
                            <td style="text-align:center">Apr-20</td>
                            <td style="text-align:center">20</td>
                            <td style="text-align:center">31,66666667</td>
                            <td style="text-align:center">-</td>
                            <td style="text-align:center">14,6</td>   
                            <td style="text-align:center">17</td>
                            <td style="text-align:center">19,4</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">5</td>
                            <td style="text-align:center">Mei-20</td>
                            <td style="text-align:center">30</td>
                            <td style="text-align:center">30</td>
                            <td style="text-align:center">-</td>
                            <td style="text-align:center">21</td>   
                            <td style="text-align:center">25</td>
                            <td style="text-align:center">29</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">6</td>
                            <td style="text-align:center">Jun-20</td>
                            <td style="text-align:center">19</td>
                            <td style="text-align:center">21,3</td>
                            <td style="text-align:center">29</td>
                            <td style="text-align:center">28,9</td>   
                            <td style="text-align:center">24,5</td>
                            <td style="text-align:center">20,1</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">7</td>
                            <td style="text-align:center">Jul-20</td>
                            <td style="text-align:center">19</td>
                            <td style="text-align:center">21,3</td>
                            <td style="text-align:center">29</td>
                            <td style="text-align:center">28,9</td>  
                            <td style="text-align:center">24,5</td>
                            <td style="text-align:center">20,1</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">8</td>
                            <td style="text-align:center">Agu-20</td>
                            <td style="text-align:center">21</td>
                            <td style="text-align:center">24,6666667</td>
                            <td style="text-align:center">21,6</td>
                            <td style="text-align:center">24,6</td>   
                            <td style="text-align:center">23</td>
                            <td style="text-align:center">21,4</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">10</td>
                            <td style="text-align:center">Sept-20</td>
                            <td style="text-align:center">11</td>
                            <td style="text-align:center">21,66666667</td>
                            <td style="text-align:center">23</td>
                            <td style="text-align:center">20</td>   
                            <td style="text-align:center">16</td>
                            <td style="text-align:center">12</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">9</td>
                            <td style="text-align:center">Okt-20</td>
                            <td style="text-align:center">18</td>  
                            <td style="text-align:center">19</td>
                            <td style="text-align:center">21,2</td>
                            <td style="text-align:center">11,7</td>
                            <td style="text-align:center">14,5</td>   
                            <td style="text-align:center">17,3</td>
                        </tr>
                        <tr>
                            <td style="text-align:center">11</td>
                            <td style="text-align:center">Nov-20</td>
                            <td style="text-align:center">50</td>
                            <td style="text-align:center">16,66666667</td>
                            <td style="text-align:center">18,8</td>
                            <td style="text-align:center">21,2</td>   
                            <td style="text-align:center">34</td>
                            <td style="text-align:center">46,8</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">12</td>
                            <td style="text-align:center">Des-20</td>
                            <td style="text-align:center">43</td>
                            <td style="text-align:center">26,33333333</td>
                            <td style="text-align:center">25</td>
                            <td style="text-align:center">48,4</td>   
                            <td style="text-align:center">42</td>
                            <td style="text-align:center">35,6</td>   
                        </tr>
                        <tr style="background-color:yellow">
                            <td style="text-align:center">13</td>
                            <td style="text-align:center">Jan-21</td>
                            <td style="text-align:center">-</td>   
                            <td style="text-align:center">34</td>
                            <td style="text-align:center">26,8</td>
                            <td style="text-align:center">30,6</td>
                            <td style="text-align:center">17</td>   
                            <td style="text-align:center">3,4</td>
                        </tr>
                        </tbody>
                        </table>
                        </div>
                    </div>
                    <div class="card-body">
                    <h4>Ubin Teraso Cetak - Coral Pink</h4><br>
                        <div class="table-responsive-md">
                        <table style="width:100%" class="table table-bordered">
                        <thead>
                        <tr>
                            <th class="text-center" width="100">No</th>
                            <th class="text-center" width="100">Periode (Bulan)</th>
                            <th class="text-center" width="100">Penjualan (m2)</th>
                            <th class="text-center" width="100">F (3-Month)</th>
                            <th class="text-center" width="100">F (5-Month)</th>
                            <th class="text-center" width="100">F (a = 0.1)</th>
                            <th class="text-center" width="100">F (a = 0.5)</th>
                            <th class="text-center" width="100">F (a = 0.9)</th>
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
                            <td style="text-align:center">-</td>
                            <td style="text-align:center">-</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">2</td>
                            <td style="text-align:center">Feb-20</td>
                            <td style="text-align:center">56</td>
                            <td style="text-align:center">-</td>
                            <td style="text-align:center">-</td>
                            <td style="text-align:center">28,1</td>   
                            <td style="text-align:center">40,5</td>
                            <td style="text-align:center">52,9</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">3</td>
                            <td style="text-align:center">Mar-20</td>
                            <td style="text-align:center">14</td>
                            <td style="text-align:center">-</td>
                            <td style="text-align:center">-</td>
                            <td style="text-align:center">51,8</td>   
                            <td style="text-align:center">35</td>
                            <td style="text-align:center">18,2</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">4</td>
                            <td style="text-align:center">Apr-20</td>
                            <td style="text-align:center">20</td>
                            <td style="text-align:center">31,66666667</td>
                            <td style="text-align:center">-</td>
                            <td style="text-align:center">14,6</td>   
                            <td style="text-align:center">17</td>
                            <td style="text-align:center">19,4</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">5</td>
                            <td style="text-align:center">Mei-20</td>
                            <td style="text-align:center">30</td>
                            <td style="text-align:center">30</td>
                            <td style="text-align:center">-</td>
                            <td style="text-align:center">21</td>   
                            <td style="text-align:center">25</td>
                            <td style="text-align:center">29</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">6</td>
                            <td style="text-align:center">Jun-20</td>
                            <td style="text-align:center">19</td>
                            <td style="text-align:center">21,3</td>
                            <td style="text-align:center">29</td>
                            <td style="text-align:center">28,9</td>   
                            <td style="text-align:center">24,5</td>
                            <td style="text-align:center">20,1</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">7</td>
                            <td style="text-align:center">Jul-20</td>
                            <td style="text-align:center">19</td>
                            <td style="text-align:center">21,3</td>
                            <td style="text-align:center">29</td>
                            <td style="text-align:center">28,9</td>  
                            <td style="text-align:center">24,5</td>
                            <td style="text-align:center">20,1</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">8</td>
                            <td style="text-align:center">Agu-20</td>
                            <td style="text-align:center">21</td>
                            <td style="text-align:center">24,6666667</td>
                            <td style="text-align:center">21,6</td>
                            <td style="text-align:center">24,6</td>   
                            <td style="text-align:center">23</td>
                            <td style="text-align:center">21,4</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">10</td>
                            <td style="text-align:center">Sept-20</td>
                            <td style="text-align:center">11</td>
                            <td style="text-align:center">21,66666667</td>
                            <td style="text-align:center">23</td>
                            <td style="text-align:center">20</td>   
                            <td style="text-align:center">16</td>
                            <td style="text-align:center">12</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">9</td>
                            <td style="text-align:center">Okt-20</td>
                            <td style="text-align:center">18</td>  
                            <td style="text-align:center">19</td>
                            <td style="text-align:center">21,2</td>
                            <td style="text-align:center">11,7</td>
                            <td style="text-align:center">14,5</td>   
                            <td style="text-align:center">17,3</td>
                        </tr>
                        <tr>
                            <td style="text-align:center">11</td>
                            <td style="text-align:center">Nov-20</td>
                            <td style="text-align:center">50</td>
                            <td style="text-align:center">16,66666667</td>
                            <td style="text-align:center">18,8</td>
                            <td style="text-align:center">21,2</td>   
                            <td style="text-align:center">34</td>
                            <td style="text-align:center">46,8</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">12</td>
                            <td style="text-align:center">Des-20</td>
                            <td style="text-align:center">43</td>
                            <td style="text-align:center">26,33333333</td>
                            <td style="text-align:center">25</td>
                            <td style="text-align:center">48,4</td>   
                            <td style="text-align:center">42</td>
                            <td style="text-align:center">35,6</td>   
                        </tr>
                        <tr style="background-color:yellow">
                            <td style="text-align:center">13</td>
                            <td style="text-align:center">Jan-21</td>
                            <td style="text-align:center">-</td>   
                            <td style="text-align:center">34</td>
                            <td style="text-align:center">26,8</td>
                            <td style="text-align:center">30,6</td>
                            <td style="text-align:center">17</td>   
                            <td style="text-align:center">3,4</td>
                        </tr>
                        </tbody>
                        </table>
                        </div>
                    </div>
                    <div class="card-body">
                    <h4>Ubin Teraso Cetak - Green Army</h4><br>
                        <div class="table-responsive-md">
                        <table style="width:100%" class="table table-bordered">
                        <thead>
                        <tr>
                            <th class="text-center" width="100">No</th>
                            <th class="text-center" width="100">Periode (Bulan)</th>
                            <th class="text-center" width="100">Penjualan (m2)</th>
                            <th class="text-center" width="100">F (3-Month)</th>
                            <th class="text-center" width="100">F (5-Month)</th>
                            <th class="text-center" width="100">F (a = 0.1)</th>
                            <th class="text-center" width="100">F (a = 0.5)</th>
                            <th class="text-center" width="100">F (a = 0.9)</th>
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
                            <td style="text-align:center">-</td>
                            <td style="text-align:center">-</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">2</td>
                            <td style="text-align:center">Feb-20</td>
                            <td style="text-align:center">56</td>
                            <td style="text-align:center">-</td>
                            <td style="text-align:center">-</td>
                            <td style="text-align:center">28,1</td>   
                            <td style="text-align:center">40,5</td>
                            <td style="text-align:center">52,9</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">3</td>
                            <td style="text-align:center">Mar-20</td>
                            <td style="text-align:center">14</td>
                            <td style="text-align:center">-</td>
                            <td style="text-align:center">-</td>
                            <td style="text-align:center">51,8</td>   
                            <td style="text-align:center">35</td>
                            <td style="text-align:center">18,2</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">4</td>
                            <td style="text-align:center">Apr-20</td>
                            <td style="text-align:center">20</td>
                            <td style="text-align:center">31,66666667</td>
                            <td style="text-align:center">-</td>
                            <td style="text-align:center">14,6</td>   
                            <td style="text-align:center">17</td>
                            <td style="text-align:center">19,4</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">5</td>
                            <td style="text-align:center">Mei-20</td>
                            <td style="text-align:center">30</td>
                            <td style="text-align:center">30</td>
                            <td style="text-align:center">-</td>
                            <td style="text-align:center">21</td>   
                            <td style="text-align:center">25</td>
                            <td style="text-align:center">29</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">6</td>
                            <td style="text-align:center">Jun-20</td>
                            <td style="text-align:center">19</td>
                            <td style="text-align:center">21,3</td>
                            <td style="text-align:center">29</td>
                            <td style="text-align:center">28,9</td>   
                            <td style="text-align:center">24,5</td>
                            <td style="text-align:center">20,1</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">7</td>
                            <td style="text-align:center">Jul-20</td>
                            <td style="text-align:center">19</td>
                            <td style="text-align:center">21,3</td>
                            <td style="text-align:center">29</td>
                            <td style="text-align:center">28,9</td>  
                            <td style="text-align:center">24,5</td>
                            <td style="text-align:center">20,1</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">8</td>
                            <td style="text-align:center">Agu-20</td>
                            <td style="text-align:center">21</td>
                            <td style="text-align:center">24,6666667</td>
                            <td style="text-align:center">21,6</td>
                            <td style="text-align:center">24,6</td>   
                            <td style="text-align:center">23</td>
                            <td style="text-align:center">21,4</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">10</td>
                            <td style="text-align:center">Sept-20</td>
                            <td style="text-align:center">11</td>
                            <td style="text-align:center">21,66666667</td>
                            <td style="text-align:center">23</td>
                            <td style="text-align:center">20</td>   
                            <td style="text-align:center">16</td>
                            <td style="text-align:center">12</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">9</td>
                            <td style="text-align:center">Okt-20</td>
                            <td style="text-align:center">18</td>  
                            <td style="text-align:center">19</td>
                            <td style="text-align:center">21,2</td>
                            <td style="text-align:center">11,7</td>
                            <td style="text-align:center">14,5</td>   
                            <td style="text-align:center">17,3</td>
                        </tr>
                        <tr>
                            <td style="text-align:center">11</td>
                            <td style="text-align:center">Nov-20</td>
                            <td style="text-align:center">50</td>
                            <td style="text-align:center">16,66666667</td>
                            <td style="text-align:center">18,8</td>
                            <td style="text-align:center">21,2</td>   
                            <td style="text-align:center">34</td>
                            <td style="text-align:center">46,8</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">12</td>
                            <td style="text-align:center">Des-20</td>
                            <td style="text-align:center">43</td>
                            <td style="text-align:center">26,33333333</td>
                            <td style="text-align:center">25</td>
                            <td style="text-align:center">48,4</td>   
                            <td style="text-align:center">42</td>
                            <td style="text-align:center">35,6</td>   
                        </tr>
                        <tr style="background-color:yellow">
                            <td style="text-align:center">13</td>
                            <td style="text-align:center">Jan-21</td>
                            <td style="text-align:center">-</td>   
                            <td style="text-align:center">34</td>
                            <td style="text-align:center">26,8</td>
                            <td style="text-align:center">30,6</td>
                            <td style="text-align:center">17</td>   
                            <td style="text-align:center">3,4</td>
                        </tr>
                        </tbody>
                        </table>
                        </div>
                    </div>
                    <div class="card-body">
                    <h4>Terramix</h4><br>
                        <div class="table-responsive-md">
                        <table style="width:100%" class="table table-bordered">
                        <thead>
                        <tr>
                            <th class="text-center" width="100">No</th>
                            <th class="text-center" width="100">Periode (Bulan)</th>
                            <th class="text-center" width="100">Penjualan (m2)</th>
                            <th class="text-center" width="100">F (3-Month)</th>
                            <th class="text-center" width="100">F (5-Month)</th>
                            <th class="text-center" width="100">F (a = 0.1)</th>
                            <th class="text-center" width="100">F (a = 0.5)</th>
                            <th class="text-center" width="100">F (a = 0.9)</th>
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
                            <td style="text-align:center">-</td>
                            <td style="text-align:center">-</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">2</td>
                            <td style="text-align:center">Feb-20</td>
                            <td style="text-align:center">56</td>
                            <td style="text-align:center">-</td>
                            <td style="text-align:center">-</td>
                            <td style="text-align:center">28,1</td>   
                            <td style="text-align:center">40,5</td>
                            <td style="text-align:center">52,9</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">3</td>
                            <td style="text-align:center">Mar-20</td>
                            <td style="text-align:center">14</td>
                            <td style="text-align:center">-</td>
                            <td style="text-align:center">-</td>
                            <td style="text-align:center">51,8</td>   
                            <td style="text-align:center">35</td>
                            <td style="text-align:center">18,2</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">4</td>
                            <td style="text-align:center">Apr-20</td>
                            <td style="text-align:center">20</td>
                            <td style="text-align:center">31,66666667</td>
                            <td style="text-align:center">-</td>
                            <td style="text-align:center">14,6</td>   
                            <td style="text-align:center">17</td>
                            <td style="text-align:center">19,4</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">5</td>
                            <td style="text-align:center">Mei-20</td>
                            <td style="text-align:center">30</td>
                            <td style="text-align:center">30</td>
                            <td style="text-align:center">-</td>
                            <td style="text-align:center">21</td>   
                            <td style="text-align:center">25</td>
                            <td style="text-align:center">29</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">6</td>
                            <td style="text-align:center">Jun-20</td>
                            <td style="text-align:center">19</td>
                            <td style="text-align:center">21,3</td>
                            <td style="text-align:center">29</td>
                            <td style="text-align:center">28,9</td>   
                            <td style="text-align:center">24,5</td>
                            <td style="text-align:center">20,1</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">7</td>
                            <td style="text-align:center">Jul-20</td>
                            <td style="text-align:center">19</td>
                            <td style="text-align:center">21,3</td>
                            <td style="text-align:center">29</td>
                            <td style="text-align:center">28,9</td>  
                            <td style="text-align:center">24,5</td>
                            <td style="text-align:center">20,1</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">8</td>
                            <td style="text-align:center">Agu-20</td>
                            <td style="text-align:center">21</td>
                            <td style="text-align:center">24,6666667</td>
                            <td style="text-align:center">21,6</td>
                            <td style="text-align:center">24,6</td>   
                            <td style="text-align:center">23</td>
                            <td style="text-align:center">21,4</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">10</td>
                            <td style="text-align:center">Sept-20</td>
                            <td style="text-align:center">11</td>
                            <td style="text-align:center">21,66666667</td>
                            <td style="text-align:center">23</td>
                            <td style="text-align:center">20</td>   
                            <td style="text-align:center">16</td>
                            <td style="text-align:center">12</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">9</td>
                            <td style="text-align:center">Okt-20</td>
                            <td style="text-align:center">18</td>  
                            <td style="text-align:center">19</td>
                            <td style="text-align:center">21,2</td>
                            <td style="text-align:center">11,7</td>
                            <td style="text-align:center">14,5</td>   
                            <td style="text-align:center">17,3</td>
                        </tr>
                        <tr>
                            <td style="text-align:center">11</td>
                            <td style="text-align:center">Nov-20</td>
                            <td style="text-align:center">50</td>
                            <td style="text-align:center">16,66666667</td>
                            <td style="text-align:center">18,8</td>
                            <td style="text-align:center">21,2</td>   
                            <td style="text-align:center">34</td>
                            <td style="text-align:center">46,8</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">12</td>
                            <td style="text-align:center">Des-20</td>
                            <td style="text-align:center">43</td>
                            <td style="text-align:center">26,33333333</td>
                            <td style="text-align:center">25</td>
                            <td style="text-align:center">48,4</td>   
                            <td style="text-align:center">42</td>
                            <td style="text-align:center">35,6</td>   
                        </tr>
                        <tr style="background-color:yellow">
                            <td style="text-align:center">13</td>
                            <td style="text-align:center">Jan-21</td>
                            <td style="text-align:center">-</td>   
                            <td style="text-align:center">34</td>
                            <td style="text-align:center">26,8</td>
                            <td style="text-align:center">30,6</td>
                            <td style="text-align:center">17</td>   
                            <td style="text-align:center">3,4</td>
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