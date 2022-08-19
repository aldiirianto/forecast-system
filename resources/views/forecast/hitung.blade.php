@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                <h3>Tabel Hasil Peramalan Jumlah Shipment Exponential Smoothing α = 0,9</h3>
                </div>
                    <div class="card-body">
                    <h4>Jenis Produk : Terramix</h4><br>
                        <div class="table-responsive-md">
                        <table style="width:50%" class="table table-bordered">
                        <thead>
                        <tr style="background-color:grey">
                            <th class="text-center" width="25">No</th>
                            <th class="text-center" width="100">Periode (Bulan)</th>
                            <th class="text-center" width="100">Penjualan (m2)</th>
                            <th class="text-center" width="100">F (α = 0.9)</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td style="text-align:center">1</td>
                            <td style="text-align:center">Jan-20</td>
                            <td style="text-align:center">16</td>
                            <td style="text-align:center">-</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">2</td>
                            <td style="text-align:center">Feb-20</td>
                            <td style="text-align:center">30</td>
                            <td style="text-align:center">28,6</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">3</td>
                            <td style="text-align:center">Mar-20</td>
                            <td style="text-align:center">50</td>
                            <td style="text-align:center">48</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">4</td>
                            <td style="text-align:center">Apr-20</td>
                            <td style="text-align:center">20</td>   
                            <td style="text-align:center">23</td>
                        </tr>
                        <tr>
                            <td style="text-align:center">5</td>
                            <td style="text-align:center">Mei-20</td>
                            <td style="text-align:center">30</td>
                            <td style="text-align:center">29</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">6</td>
                            <td style="text-align:center">Jun-20</td>
                            <td style="text-align:center">19</td>
                            <td style="text-align:center">20,1</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">7</td>
                            <td style="text-align:center">Jul-20</td>
                            <td style="text-align:center">23</td>
                            <td style="text-align:center">22,6</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">8</td>
                            <td style="text-align:center">Agu-20</td>
                            <td style="text-align:center">26</td>
                            <td style="text-align:center">25,7</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">10</td>
                            <td style="text-align:center">Sept-20</td>
                            <td style="text-align:center">34</td>
                            <td style="text-align:center">33,2</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">9</td>
                            <td style="text-align:center">Okt-20</td>
                            <td style="text-align:center">23</td>  
                            <td style="text-align:center">24,1</td>
                        </tr>
                        <tr>
                            <td style="text-align:center">11</td>
                            <td style="text-align:center">Nov-20</td>
                            <td style="text-align:center">37</td>
                            <td style="text-align:center">35,6</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">12</td>
                            <td style="text-align:center">Des-20</td>
                            <td style="text-align:center">26</td>
                            <td style="text-align:center">27,1</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">13</td>
                            <td style="text-align:center">Jan-21</td>
                            <td style="text-align:center">30</td>   
                            <td style="text-align:center">29,6</td>
                        </tr>
                        <tr>
                            <td style="text-align:center">14</td>
                            <td style="text-align:center">Feb-21</td>
                            <td style="text-align:center">23</td>
                            <td style="text-align:center">23,7</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">15</td>
                            <td style="text-align:center">Mar-21</td>
                            <td style="text-align:center">32</td>
                            <td style="text-align:center">32,1</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">16</td>
                            <td style="text-align:center">Apr-21</td>
                            <td style="text-align:center">41</td>
                            <td style="text-align:center">40,1</td>      
                        </tr>
                        <tr>
                            <td style="text-align:center">17</td>
                            <td style="text-align:center">Mei-21</td>
                            <td style="text-align:center">35</td>
                            <td style="text-align:center">35,6</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">18</td>
                            <td style="text-align:center">Jun-21</td>
                            <td style="text-align:center">34</td>
                            <td style="text-align:center">34,1</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">19</td>
                            <td style="text-align:center">Jul-21</td>
                            <td style="text-align:center">33</td>
                            <td style="text-align:center">33,1</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">20</td>
                            <td style="text-align:center">Agu-21</td>
                            <td style="text-align:center">40</td>
                            <td style="text-align:center">39,3</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">21</td>
                            <td style="text-align:center">Sept-21</td>
                            <td style="text-align:center">45</td>
                            <td style="text-align:center">44,5</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">22</td>
                            <td style="text-align:center">Okt-21</td>
                            <td style="text-align:center">48</td>  
                            <td style="text-align:center">47,7</td>
                        </tr>
                        <tr>
                            <td style="text-align:center">23</td>
                            <td style="text-align:center">Nov-21</td>
                            <td style="text-align:center">42</td>
                            <td style="text-align:center">42,6</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">24</td>
                            <td style="text-align:center">Des-21</td>
                            <td style="text-align:center">31</td>
                            <td style="text-align:center; background-color:yellow;" >32,1</td>   
                        </tr>
                        </tbody>
                        </table>
                        </div>
                        <p> Jadi, ramalan jumlah penjualan produk Terramix untuk bulan Januari 2022 dengan metode 
                        Eksponential Smoothing α = 0,9 adalah 32,1 m2.  </p>
                    </div>
                    <div class="card-body">
                    <h4>Jenis Produk : Ubin Teraso Black Casto</h4><br>
                        <div class="table-responsive-md">
                        <table style="width:50%" class="table table-bordered">
                        <thead>
                        <tr style="background-color:grey">
                            <th class="text-center" width="25">No</th>
                            <th class="text-center" width="100">Periode (Bulan)</th>
                            <th class="text-center" width="100">Penjualan (m2)</th>
                            <th class="text-center" width="100">F (α = 0.9)</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td style="text-align:center">1</td>
                            <td style="text-align:center">Jan-20</td>
                            <td style="text-align:center">100</td>
                            <td style="text-align:center">-</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">2</td>
                            <td style="text-align:center">Feb-20</td>
                            <td style="text-align:center">45</td>
                            <td style="text-align:center">50,5</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">3</td>
                            <td style="text-align:center">Mar-20</td>
                            <td style="text-align:center">25</td>
                            <td style="text-align:center">27</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">4</td>
                            <td style="text-align:center">Apr-20</td>
                            <td style="text-align:center">56</td>   
                            <td style="text-align:center">52,9</td>
                        </tr>
                        <tr>
                            <td style="text-align:center">5</td>
                            <td style="text-align:center">Mei-20</td>
                            <td style="text-align:center">15</td>
                            <td style="text-align:center">19,1</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">6</td>
                            <td style="text-align:center">Jun-20</td>
                            <td style="text-align:center">100</td>
                            <td style="text-align:center">91,5</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">7</td>
                            <td style="text-align:center">Jul-20</td>
                            <td style="text-align:center">25</td>
                            <td style="text-align:center">32,5</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">8</td>
                            <td style="text-align:center">Agu-20</td>
                            <td style="text-align:center">0</td>
                            <td style="text-align:center">2,5</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">10</td>
                            <td style="text-align:center">Sept-20</td>
                            <td style="text-align:center">0</td>
                            <td style="text-align:center">0</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">9</td>
                            <td style="text-align:center">Okt-20</td>
                            <td style="text-align:center">25</td>  
                            <td style="text-align:center">22,5</td>
                        </tr>
                        <tr>
                            <td style="text-align:center">11</td>
                            <td style="text-align:center">Nov-20</td>
                            <td style="text-align:center">60</td>
                            <td style="text-align:center">56,5</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">12</td>
                            <td style="text-align:center">Des-20</td>
                            <td style="text-align:center">53</td>
                            <td style="text-align:center">53,7</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">13</td>
                            <td style="text-align:center">Jan-21</td>
                            <td style="text-align:center">50</td>   
                            <td style="text-align:center">50,3</td>
                        </tr>
                        <tr>
                            <td style="text-align:center">14</td>
                            <td style="text-align:center">Feb-21</td>
                            <td style="text-align:center">42</td>
                            <td style="text-align:center">42,8</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">15</td>
                            <td style="text-align:center">Mar-21</td>
                            <td style="text-align:center">35</td>
                            <td style="text-align:center">35,7</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">16</td>
                            <td style="text-align:center">Apr-21</td>
                            <td style="text-align:center">60</td>
                            <td style="text-align:center">57,5</td>      
                        </tr>
                        <tr>
                            <td style="text-align:center">17</td>
                            <td style="text-align:center">Mei-21</td>
                            <td style="text-align:center">51</td>
                            <td style="text-align:center">51,9</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">18</td>
                            <td style="text-align:center">Jun-21</td>
                            <td style="text-align:center">34</td>
                            <td style="text-align:center">34,1</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">19</td>
                            <td style="text-align:center">Jul-21</td>
                            <td style="text-align:center">70</td>
                            <td style="text-align:center">68,1</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">20</td>
                            <td style="text-align:center">Agu-21</td>
                            <td style="text-align:center">88</td>
                            <td style="text-align:center">83,2</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">21</td>
                            <td style="text-align:center">Sept-21</td>
                            <td style="text-align:center">90</td>
                            <td style="text-align:center">89,8</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">22</td>
                            <td style="text-align:center">Okt-21</td>
                            <td style="text-align:center">80</td>  
                            <td style="text-align:center">81</td>
                        </tr>
                        <tr>
                            <td style="text-align:center">23</td>
                            <td style="text-align:center">Nov-21</td>
                            <td style="text-align:center">75</td>
                            <td style="text-align:center">75,5</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">24</td>
                            <td style="text-align:center">Des-21</td>
                            <td style="text-align:center">50</td>
                            <td style="text-align:center; background-color:yellow;">52,5</td>   
                        </tr>
                        </tbody>
                        </table>
                        </div>
                        <p> Jadi, ramalan jumlah penjualan produk Ubin Teraso Black Casto untuk bulan Januari 2022 dengan metode 
                        Eksponential Smoothing α = 0,9 adalah 52,5 m2.  </p>
                    </div>
                <div class="card-body">
                    <h4>Jenis Produk : Ubin Teraso Cordon Blue</h4><br>
                        <div class="table-responsive-md">
                        <table style="width:50%" class="table table-bordered">
                        <thead>
                        <tr style="background-color:grey">
                            <th class="text-center" width="25">No</th>
                            <th class="text-center" width="100">Periode (Bulan)</th>
                            <th class="text-center" width="100">Penjualan (m2)</th>
                            <th class="text-center" width="100">F (α = 0.9)</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td style="text-align:center">1</td>
                            <td style="text-align:center">Jan-20</td>
                            <td style="text-align:center">55</td>
                            <td style="text-align:center">-</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">2</td>
                            <td style="text-align:center">Feb-20</td>
                            <td style="text-align:center">15</td>
                            <td style="text-align:center">19</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">3</td>
                            <td style="text-align:center">Mar-20</td>
                            <td style="text-align:center">25</td>
                            <td style="text-align:center">24</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">4</td>
                            <td style="text-align:center">Apr-20</td>
                            <td style="text-align:center">25</td>   
                            <td style="text-align:center">25</td>
                        </tr>
                        <tr>
                            <td style="text-align:center">5</td>
                            <td style="text-align:center">Mei-20</td>
                            <td style="text-align:center">80</td>
                            <td style="text-align:center">74,5</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">6</td>
                            <td style="text-align:center">Jun-20</td>
                            <td style="text-align:center">50</td>
                            <td style="text-align:center">53</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">7</td>
                            <td style="text-align:center">Jul-20</td>
                            <td style="text-align:center">20</td>
                            <td style="text-align:center">23</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">8</td>
                            <td style="text-align:center">Agu-20</td>
                            <td style="text-align:center">120</td>
                            <td style="text-align:center">110</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">10</td>
                            <td style="text-align:center">Sept-20</td>
                            <td style="text-align:center">40</td>
                            <td style="text-align:center">48</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">9</td>
                            <td style="text-align:center">Okt-20</td>
                            <td style="text-align:center">90</td>  
                            <td style="text-align:center">85</td>
                        </tr>
                        <tr>
                            <td style="text-align:center">11</td>
                            <td style="text-align:center">Nov-20</td>
                            <td style="text-align:center">32</td>
                            <td style="text-align:center">37,8</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">12</td>
                            <td style="text-align:center">Des-20</td>
                            <td style="text-align:center">30</td>
                            <td style="text-align:center">30,2</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">13</td>
                            <td style="text-align:center">Jan-21</td>
                            <td style="text-align:center">77</td>   
                            <td style="text-align:center">72,3</td>
                        </tr>
                        <tr>
                            <td style="text-align:center">14</td>
                            <td style="text-align:center">Feb-21</td>
                            <td style="text-align:center">141</td>
                            <td style="text-align:center">134,6</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">15</td>
                            <td style="text-align:center">Mar-21</td>
                            <td style="text-align:center">86</td>
                            <td style="text-align:center">91,5</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">16</td>
                            <td style="text-align:center">Apr-21</td>
                            <td style="text-align:center">70</td>
                            <td style="text-align:center">71,6</td>      
                        </tr>
                        <tr>
                            <td style="text-align:center">17</td>
                            <td style="text-align:center">Mei-21</td>
                            <td style="text-align:center">55</td>
                            <td style="text-align:center">56,5</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">18</td>
                            <td style="text-align:center">Jun-21</td>
                            <td style="text-align:center">16</td>
                            <td style="text-align:center">19,9</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">19</td>
                            <td style="text-align:center">Jul-21</td>
                            <td style="text-align:center">80</td>
                            <td style="text-align:center">73,6</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">20</td>
                            <td style="text-align:center">Agu-21</td>
                            <td style="text-align:center">68</td>
                            <td style="text-align:center">69,2</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">21</td>
                            <td style="text-align:center">Sept-21</td>
                            <td style="text-align:center">112</td>
                            <td style="text-align:center">107,6</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">22</td>
                            <td style="text-align:center">Okt-21</td>
                            <td style="text-align:center">58</td>  
                            <td style="text-align:center">63,4</td>
                        </tr>
                        <tr>
                            <td style="text-align:center">23</td>
                            <td style="text-align:center">Nov-21</td>
                            <td style="text-align:center">67</td>
                            <td style="text-align:center">66,1</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">24</td>
                            <td style="text-align:center">Des-21</td>
                            <td style="text-align:center">70</td>
                            <td style="text-align:center; background-color:yellow;">69,7</td>   
                        </tr>
                        </tbody>
                        </table>
                        </div>
                        <p> Jadi, ramalan jumlah penjualan produk Ubin Teraso Cordon Blue untuk bulan Januari 2022 dengan metode 
                        Eksponential Smoothing α = 0,9 adalah 69,7 m2.  </p>
                    </div>
                <div class="card-body">
                    <h4>Jenis Produk : Ubin Teraso Green Army</h4><br>
                        <div class="table-responsive-md">
                        <table style="width:50%" class="table table-bordered">
                        <thead>
                        <tr style="background-color:grey">
                            <th class="text-center" width="25">No</th>
                            <th class="text-center" width="100">Periode (Bulan)</th>
                            <th class="text-center" width="100">Penjualan (m2)</th>
                            <th class="text-center" width="100">F (α = 0.9)</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td style="text-align:center">1</td>
                            <td style="text-align:center">Jan-20</td>
                            <td style="text-align:center">25</td>
                            <td style="text-align:center">-</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">2</td>
                            <td style="text-align:center">Feb-20</td>
                            <td style="text-align:center">80</td>
                            <td style="text-align:center">74,5</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">3</td>
                            <td style="text-align:center">Mar-20</td>
                            <td style="text-align:center">50</td>
                            <td style="text-align:center">53</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">4</td>
                            <td style="text-align:center">Apr-20</td>
                            <td style="text-align:center">15</td>   
                            <td style="text-align:center">18,5</td>
                        </tr>
                        <tr>
                            <td style="text-align:center">5</td>
                            <td style="text-align:center">Mei-20</td>
                            <td style="text-align:center">5</td>
                            <td style="text-align:center">6</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">6</td>
                            <td style="text-align:center">Jun-20</td>
                            <td style="text-align:center">25</td>
                            <td style="text-align:center">23</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">7</td>
                            <td style="text-align:center">Jul-20</td>
                            <td style="text-align:center">110</td>
                            <td style="text-align:center">101,5</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">8</td>
                            <td style="text-align:center">Agu-20</td>
                            <td style="text-align:center">60</td>
                            <td style="text-align:center">65</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">10</td>
                            <td style="text-align:center">Sept-20</td>
                            <td style="text-align:center">10</td>
                            <td style="text-align:center">15</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">9</td>
                            <td style="text-align:center">Okt-20</td>
                            <td style="text-align:center">50</td>  
                            <td style="text-align:center">46</td>
                        </tr>
                        <tr>
                            <td style="text-align:center">11</td>
                            <td style="text-align:center">Nov-20</td>
                            <td style="text-align:center">115</td>
                            <td style="text-align:center">108,5</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">12</td>
                            <td style="text-align:center">Des-20</td>
                            <td style="text-align:center">97</td>
                            <td style="text-align:center">98,8</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">13</td>
                            <td style="text-align:center">Jan-21</td>
                            <td style="text-align:center">65</td>   
                            <td style="text-align:center">68,2</td>
                        </tr>
                        <tr>
                            <td style="text-align:center">14</td>
                            <td style="text-align:center">Feb-21</td>
                            <td style="text-align:center">27</td>
                            <td style="text-align:center">30,8</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">15</td>
                            <td style="text-align:center">Mar-21</td>
                            <td style="text-align:center">80</td>
                            <td style="text-align:center">74,7</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">16</td>
                            <td style="text-align:center">Apr-21</td>
                            <td style="text-align:center">100</td>
                            <td style="text-align:center">98</td>      
                        </tr>
                        <tr>
                            <td style="text-align:center">17</td>
                            <td style="text-align:center">Mei-21</td>
                            <td style="text-align:center">67</td>
                            <td style="text-align:center">70,3</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">18</td>
                            <td style="text-align:center">Jun-21</td>
                            <td style="text-align:center">88</td>
                            <td style="text-align:center">86,7</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">19</td>
                            <td style="text-align:center">Jul-21</td>
                            <td style="text-align:center">28</td>
                            <td style="text-align:center">31,2</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">20</td>
                            <td style="text-align:center">Agu-21</td>
                            <td style="text-align:center">75</td>
                            <td style="text-align:center">70,3</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">21</td>
                            <td style="text-align:center">Sept-21</td>
                            <td style="text-align:center">88</td>
                            <td style="text-align:center">86,7</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">22</td>
                            <td style="text-align:center">Okt-21</td>
                            <td style="text-align:center">35</td>  
                            <td style="text-align:center">40,3</td>
                        </tr>
                        <tr>
                            <td style="text-align:center">23</td>
                            <td style="text-align:center">Nov-21</td>
                            <td style="text-align:center">68</td>
                            <td style="text-align:center">64,7</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">24</td>
                            <td style="text-align:center">Des-21</td>
                            <td style="text-align:center">65</td>
                            <td style="text-align:center; background-color:yellow;">65,3</td>   
                        </tr>
                        </tbody>
                        </table>
                        </div>
                        <p> Jadi, ramalan jumlah penjualan produk Ubin Teraso Green Army untuk bulan Januari 2022 dengan metode 
                        Eksponential Smoothing α = 0,9 adalah 65,3 m2.  </p>
                    </div>
                <div class="card-body">
                    <h4>Jenis Produk : Ubin Teraso Coral Pink</h4><br>
                        <div class="table-responsive-md">
                        <table style="width:50%" class="table table-bordered">
                        <thead>
                        <tr style="background-color:grey">
                            <th class="text-center" width="25">No</th>
                            <th class="text-center" width="100">Periode (Bulan)</th>
                            <th class="text-center" width="100">Penjualan (m2)</th>
                            <th class="text-center" width="100">F (α = 0.9)</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td style="text-align:center">1</td>
                            <td style="text-align:center">Jan-20</td>
                            <td style="text-align:center">0</td>
                            <td style="text-align:center">-</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">2</td>
                            <td style="text-align:center">Feb-20</td>
                            <td style="text-align:center">25</td>
                            <td style="text-align:center">22,5</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">3</td>
                            <td style="text-align:center">Mar-20</td>
                            <td style="text-align:center">15</td>
                            <td style="text-align:center">16</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">4</td>
                            <td style="text-align:center">Apr-20</td>
                            <td style="text-align:center">23</td>   
                            <td style="text-align:center">22,2</td>
                        </tr>
                        <tr>
                            <td style="text-align:center">5</td>
                            <td style="text-align:center">Mei-20</td>
                            <td style="text-align:center">10</td>
                            <td style="text-align:center">11,3</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">6</td>
                            <td style="text-align:center">Jun-20</td>
                            <td style="text-align:center">15</td>
                            <td style="text-align:center">14,5</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">7</td>
                            <td style="text-align:center">Jul-20</td>
                            <td style="text-align:center">90</td>
                            <td style="text-align:center">82,5</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">8</td>
                            <td style="text-align:center">Agu-20</td>
                            <td style="text-align:center">105</td>
                            <td style="text-align:center">103,5</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">10</td>
                            <td style="text-align:center">Sept-20</td>
                            <td style="text-align:center">85</td>
                            <td style="text-align:center">87</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">9</td>
                            <td style="text-align:center">Okt-20</td>
                            <td style="text-align:center">35</td>  
                            <td style="text-align:center">40</td>
                        </tr>
                        <tr>
                            <td style="text-align:center">11</td>
                            <td style="text-align:center">Nov-20</td>
                            <td style="text-align:center">70</td>
                            <td style="text-align:center">66,5</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">12</td>
                            <td style="text-align:center">Des-20</td>
                            <td style="text-align:center">20</td>
                            <td style="text-align:center">22,5</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">13</td>
                            <td style="text-align:center">Jan-21</td>
                            <td style="text-align:center">14</td>   
                            <td style="text-align:center">14,6</td>
                        </tr>
                        <tr>
                            <td style="text-align:center">14</td>
                            <td style="text-align:center">Feb-21</td>
                            <td style="text-align:center">15</td>
                            <td style="text-align:center">14,9</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">15</td>
                            <td style="text-align:center">Mar-21</td>
                            <td style="text-align:center">30</td>
                            <td style="text-align:center">28,5</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">16</td>
                            <td style="text-align:center">Apr-21</td>
                            <td style="text-align:center">30</td>
                            <td style="text-align:center">30</td>      
                        </tr>
                        <tr>
                            <td style="text-align:center">17</td>
                            <td style="text-align:center">Mei-21</td>
                            <td style="text-align:center">50</td>
                            <td style="text-align:center">48</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">18</td>
                            <td style="text-align:center">Jun-21</td>
                            <td style="text-align:center">40</td>
                            <td style="text-align:center">41</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">19</td>
                            <td style="text-align:center">Jul-21</td>
                            <td style="text-align:center">51</td>
                            <td style="text-align:center">49,9</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">20</td>
                            <td style="text-align:center">Agu-21</td>
                            <td style="text-align:center">60</td>
                            <td style="text-align:center">59,1</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">21</td>
                            <td style="text-align:center">Sept-21</td>
                            <td style="text-align:center">63</td>
                            <td style="text-align:center">62,7</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">22</td>
                            <td style="text-align:center">Okt-21</td>
                            <td style="text-align:center">50</td>  
                            <td style="text-align:center">51,3</td>
                        </tr>
                        <tr>
                            <td style="text-align:center">23</td>
                            <td style="text-align:center">Nov-21</td>
                            <td style="text-align:center">67</td>
                            <td style="text-align:center">65,3</td>   
                        </tr>
                        <tr>
                            <td style="text-align:center">24</td>
                            <td style="text-align:center">Des-21</td>
                            <td style="text-align:center">40</td>
                            <td style="text-align:center; background-color:yellow;">42,7</td>   
                        </tr>
                        </tbody>
                        </table>
                        </div>
                        <p> Jadi, ramalan jumlah penjualan produk Ubin Teraso Coral Pink untuk bulan Januari 2022 dengan metode 
                        Eksponential Smoothing α = 0,9 adalah 42,7 m2.  </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection