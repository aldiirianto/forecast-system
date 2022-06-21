	<!-- Page container -->
	<div class="page-container" style="min-height:412.99999618530273px">
		<!-- Page content -->
		<div class="page-content">
			<!-- Main sidebar -->
			<div class="sidebar sidebar-main">
				<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-user-material">
						<div class="category-content">
							<div class="sidebar-user-material-content">
								<a href="#" class="legitRipple">
									
</a>

							</div>
						</div>
					</div>
					<!-- /user menu -->
					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">

								<!-- Main -->
								<li class="navigation-header">
									<span>Main</span>
									<i class="icon-menu" title="" data-original-title="Main pages"></i>
								</li>
								<li class="">
									<a href="?p=home" class="legitRipple">
										<i class="icon-home4"></i>
										<span>Dashboard</span>
									</a>

								</li>
								
									<li class="">
										<a href="#" class="has-ul legitRipple">
											<i class="icon-grid"></i>
											<span>Produk</span>
										</a>
										<ul class="hidden-ul" style="display: none;">
											<li>
												<a href="{{ url('/dataproduk') }}" class="legitRipple">Data Produk</a>
											</li>
										
												<li>
													<a href="?p=addproduk" class="legitRipple">Tambah Produk</a>
												</li>
											

										</ul>
									</li>

									<!-- <li class="">
																																																																																													</li> -->
										<li class="">
											<a href="" class="has-ul legitRipple">
												<i class="icon-graph"></i>
												<span>Penjualan</span>

											</a>
											<ul class="hidden-ul" style="display: none;">
												<li>
													<a href="?p=datapenjualan" class="legitRipple">Data Penjualan</a>
												</li>
												<li>
													<a href="?p=adddatapenjualan" class="legitRipple">Tambah Data Penjualan</a>
												</li>

											</ul>
										</li>

										<li class="">
											<a href="?p=akun" class="legitRipple">
												<i class="icon-users4"></i>
												<span>Manajemen Akun</span>
											</a>

										</li>
								
										<li class="">
											<a href="?p=preorder" class="legitRipple">
												<i class="icon-copy"></i>
												<span>Data Pre Order</span>
											</a>

										</li>
								
									<li class="">

										<a href="?p=reportpenjualan" class="legitRipple"><i class="icon-graph"></i>Report Penjualan</a>

									</li>

									<li class="">
										<a href="?p=akun" class="legitRipple">
											<i class="icon-user"></i>
											<span>Manajemen Akun</span>
										</a>
									</li>


						
								<li class="">
									<a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
													 class="legitRipple">
										<i class="icon-switch2	"></i>
										{{ __('Logout') }}
									</a>

								</li>
								
								<form id="logout-form" action="{{ route('logout') }}" method="post" class="d-none">
                                @csrf
                                </form>
							</ul>
						</div>
					</div>
					<!-- /main navigation -->
				</div>
			</div>
			<!-- /main sidebar -->
			<!-- Main content -->
			<div class="content-wrapper">
				<!-- Content area -->
				<div class="content">
				
					<!-- Main charts -->
					<!-- /main charts -->
					<!-- Dashboard content -->
					<!-- /dashboard content -->
					<!-- Footer -->
					<div class="footer text-muted">
						© 2022. 
						<a href="#">Stone Depot</a>

					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->