<nav class="navbar top-navbar bg-white box-shadow">
            	<div class="container-fluid">
                    <div class="row">
                        <div class="navbar-header no-padding">
                			<a class="navbar-brand" href="index.html">
                			    <!-- <img src="images/logo-dark.svg" alt="Options - Admin Template" class="logo"> -->
								Smart Services
                			</a>
                            <span class="small-nav-handle hidden-sm hidden-xs"><i class="fa fa-outdent"></i></span>
                			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                				<span class="sr-only">Toggle navigation</span>
                				<i class="fa fa-ellipsis-v"></i>
                			</button>
                            <button type="button" class="navbar-toggle mobile-nav-toggle" >
                				<i class="fa fa-bars"></i>
                			</button>
                		</div>
                        <!-- /.navbar-header -->

                		<div class="collapse navbar-collapse" id="navbar-collapse-1">

                			<ul class="nav navbar-nav navbar-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                				<li class="dropdown tour-two">
                					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
									@if(Session::has('username'))
										{{ session('username') }}
									@endif
									<span class="caret"></span></a>
                					<ul class="dropdown-menu profile-dropdown">
                						<li class="profile-menu bg-gray">
                						    <div class="">
                						        <img src="http://placehold.it/60/c2c2c2?text=User" alt="John Doe" class="img-circle profile-img">
                                                <div class="profile-name">
                                                    <h6>
														@if(Session::has('username'))
															{{ session('username') }}
														@endif
													</h6>
                                                </div>
                                                <div class="clearfix"></div>
                						    </div>
                						</li>
                						<li role="separator" class="divider"></li>
                						<li>
											<form method="POST" action="{{ route('logout') }}" class="text-center">
												@csrf

												<button class="btn btn-primary" href="logout" onclick="event.preventDefault(); this.closest('form').submit();" class="color-danger text-center"><i class="fa fa-sign-out"></i> Logout</button>
											</form>
										</li>
                					</ul>
                				</li>
                			</ul>
                            <!-- /.nav navbar-nav navbar-right -->
                		</div>
                		<!-- /.navbar-collapse -->
                    </div>
                    <!-- /.row -->
            	</div>
            	<!-- /.container-fluid -->
            </nav>