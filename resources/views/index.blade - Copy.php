	@extends('inc.master')
    <!-- / main menu-->
    @section('title', 'Dashboard')

    <div class="app-content content container-fluid">
  	<div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body">
    	<div class="row">
    		<div class="col-xl-3 col-lg-6 col-xs-12">
		        <div class="card">
		            <div class="card-body">
		                <div class="card-block">
		                    <div class="media">
		                        <div class="media-body text-xs-left">
		                            <h3 class="pink">5</h3>
		                            <span>Today New Arrivals</span>
		                        </div>
		                        <div class="media-right media-middle">
		                            <i class="icon-bag2 pink font-large-2 float-xs-right"></i>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		    <div class="col-xl-3 col-lg-6 col-xs-12">
		        <div class="card">
		            <div class="card-body">
		                <div class="card-block">
		                    <div class="media">
		                        <div class="media-body text-xs-left">
		                            <h3 class="pink">278</h3>
		                            <span>New Projects</span>
		                        </div>
		                        <div class="media-right media-middle">
		                            <i class="icon-bag2 pink font-large-2 float-xs-right"></i>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		    <div class="col-xl-3 col-lg-6 col-xs-12">
		        <div class="card">
		            <div class="card-body">
		                <div class="card-block">
		                    <div class="media">
		                        <div class="media-body text-xs-left">
		                            <h3 class="pink">278</h3>
		                            <span>New Projects</span>
		                        </div>
		                        <div class="media-right media-middle">
		                            <i class="icon-bag2 pink font-large-2 float-xs-right"></i>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		    <div class="col-xl-3 col-lg-6 col-xs-12">
		        <div class="card">
		            <div class="card-body">
		                <div class="card-block">
		                    <div class="media">
		                        <div class="media-body text-xs-left">
		                            <h3 class="pink">278</h3>
		                            <span>New Projects</span>
		                        </div>
		                        <div class="media-right media-middle">
		                            <i class="icon-bag2 pink font-large-2 float-xs-right"></i>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
    	</div>
    </div>

    <div class="content-body">
    	<div class="row">
		    <div class="col-xl-4 col-lg-12">
		        <div class="card">
		            <div class="card-body">
		                <div class="earning-chart position-relative">
		                    <div class="chart-title position-absolute mt-2 ml-2">
		                        <h1 class="display-4">$9865</h1>
		                        <span class="text-muted">Total Earning</span>
		                    </div>
		                    <canvas id="earning-chart" class="height-450 block"></canvas>
		                    <div class="chart-stats position-absolute position-bottom-0 position-right-0 mb-2 mr-3">
		                        <a href="#" class="btn bg-cyan mr-1 white">Statistics <i class="icon-stats-bars"></i></a> <span class="text-muted">for the <a href="#" class="primary darken-2">last year.</a></span>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		    <div class="col-xl-8 col-lg-12">
		        <div class="card">
		            <div class="card-body">
		                <div class="card-block">
		                    <canvas id="posts-visits" class="height-400"></canvas>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
    </div>

    <div class="content-body">
    	<div class="row">
    		 <div class="col-xl-8 col-lg-12">
		        <div class="card">
		            <div class="card-header">
		                <h4 class="card-title">On going Blending</h4>
		                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
		                <div class="heading-elements">
		                    <ul class="list-inline mb-0">
		                        <li><a data-action="reload"><i class="icon-reload"></i></a></li>
		                        <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
		                    </ul>
		                </div>
		            </div>
		            <div class="card-body">
		                <div class="card-block">
		                    <p class="m-0">Total ongoing projects 6<span class="float-xs-right"><a href="#" target="_blank">Project Summary <i class="icon-arrow-right2"></i></a></span></p>
		                </div>
		                <div class="table-responsive">
		                    <table class="table table-hover mb-0">
		                        <thead>
		                            <tr>
		                                <th>Project</th>
		                                <th>Owner</th>
		                                <th>Priority</th>
		                                <th>Progress</th>
		                            </tr>
		                        </thead>
		                        <tbody>
		                            <tr>
		                                <td class="text-truncate">ReactJS App</td>
		                                <td class="text-truncate">
		                                    <span class="avatar avatar-xs"><img src="../../app-assets/images/portrait/small/avatar-s-4.png" alt="avatar"></span> <span>Sarah W.</span>
		                                </td>
		                                <td class="text-truncate"><span class="tag tag-success">Low</span></td>
		                                <td class="valign-middle">
		                                    <progress value="88" max="100" class="progress progress-xs progress-success m-0">88%</progress>
		                                </td>
		                            </tr>
		                            <tr>
		                                <td class="text-truncate">Fitness App</td>
		                                <td class="text-truncate">
		                                    <span class="avatar avatar-xs"><img src="../../app-assets/images/portrait/small/avatar-s-5.png" alt="avatar"></span> <span>Edward C.</span>
		                                </td>
		                                <td class="text-truncate"><span class="tag tag-warning">Medium</span></td>
		                                <td class="valign-middle">
		                                    <progress value="55" max="100" class="progress progress-xs progress-warning m-0">55%</progress>
		                                </td>
		                            </tr>
		                            <tr>
		                                <td class="text-truncate">SOU plugin</td>
		                                <td class="text-truncate">
		                                    <span class="avatar avatar-xs"><img src="../../app-assets/images/portrait/small/avatar-s-6.png" alt="avatar"></span> <span>Carol E.</span>
		                                </td>
		                                <td class="text-truncate"><span class="tag tag-danger">Critical</span></td>
		                                <td class="valign-middle">
		                                    <progress value="25" max="100" class="progress progress-xs progress-danger m-0">25%</progress>
		                                </td>
		                            </tr>
		                            <tr>
		                                <td class="text-truncate">Android App</td>
		                                <td class="text-truncate">
		                                    <span class="avatar avatar-xs"><img src="../../app-assets/images/portrait/small/avatar-s-7.png" alt="avatar"></span> <span>Gregory L.</span>
		                                </td>
		                                <td class="text-truncate"><span class="tag tag-success">Low</span></td>
		                                <td class="valign-middle">
		                                    <progress value="95" max="100" class="progress progress-xs progress-success m-0">95%</progress>
		                                </td>
		                            </tr>
		                            <tr>
		                                <td class="text-truncate">ABC Inc. UI/UX</td>
		                                <td class="text-truncate">
		                                    <span class="avatar avatar-xs"><img src="../../app-assets/images/portrait/small/avatar-s-8.png" alt="avatar"></span> <span>Susan S.</span>
		                                </td>
		                                <td class="text-truncate"><span class="tag tag-warning">Medium</span></td>
		                                <td class="valign-middle">
		                                    <progress value="45" max="100" class="progress progress-xs progress-warning m-0">45%</progress>
		                                </td>
		                            </tr>
		                            <tr>
		                                <td class="text-truncate">Product UI</td>
		                                <td class="text-truncate">
		                                    <span class="avatar avatar-xs"><img src="../../app-assets/images/portrait/small/avatar-s-9.png" alt="avatar"></span> <span>Walter K.</span>
		                                </td>
		                                <td class="text-truncate"><span class="tag tag-danger">Critical</span></td>
		                                <td class="valign-middle">
		                                    <progress value="15" max="100" class="progress progress-xs progress-danger m-0">15%</progress>
		                                </td>
		                            </tr>
		                            <tr>
		                                <td class="text-truncate">Fitness App</td>
		                                <td class="text-truncate">
		                                    <span class="avatar avatar-xs"><img src="../../app-assets/images/portrait/small/avatar-s-5.png" alt="avatar"></span> <span>Edward C.</span>
		                                </td>
		                                <td class="text-truncate"><span class="tag tag-warning">Medium</span></td>
		                                <td class="valign-middle">
		                                    <progress value="55" max="100" class="progress progress-xs progress-warning m-0">55%</progress>
		                                </td>
		                            </tr>
		                        </tbody>
		                    </table>
		                </div>
		            </div>
		        </div>
		    </div>
    	</div>
    </div>