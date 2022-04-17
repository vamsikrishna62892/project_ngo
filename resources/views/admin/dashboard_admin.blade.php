@extends('layouts.dashboard')

@section('name')
    {{ $admin_name }}
@endsection

@section('content')
		
<br>	
<div class="container" id="stats">
    <h4 align="center">Site Analytics</h4>
    <br>
	<div class="row">
		<div class="col-sm-3">
		    <div class="card shadow p-4 mb-5 bg-white rounded">
		        <div class="card-body">
			        <h5 class="card-title" align="center">Users</h5>
			        <h1 align="center">{{ $users_count }}</h1>
			        <p class="card-text" align="center">Active Users in Sahaayak</p>
			        <center><a href="/admin/getOverallReport" class="btn btn-primary" target="_blank" style="background-color: #5768ad;">See Analytics</a></center>
		        </div>
		    </div>
		</div>
        <div class="col-sm-6">
            <div class="card shadow p-0 mb-5 bg-white rounded">
                <div class="card-body">
                    <?php $curr_date = \Carbon\Carbon::now(); ?>
                    <p class="card-text" align="center" style="padding: 0px 0px 0px 0px;"><b>{{ $curr_date->format('F') }} Appointments</b></p>
                    <table class="table table-hover progress-table text-center">
                        <thead class="text-uppercase">
                            <tr>
                                <th scope="col">S.No</th>
                                <th scope="col">Counsellor Name</th>
                                <th scope="col">#Appointments</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                         </tbody>
                    </table>
                    <center>
                        
                        <a href="/admin/getCurrentMonthReport" target="_blank" class="btn btn-primary" style="background-color: #5768ad;">Download {{ $curr_date->format('F') }} Report</a>
                    </center>
                </div>
            </div>
        </div>
		<div class="col-sm-3">
		    <div class="card shadow p-4 mb-5 bg-white rounded">
			</div>
		</div>
	</div>
</div>
<br>

<!-- flash messages section begin -->
    <div class="flash-message">
      @foreach (['danger', 'warning', 'success', 'info'] as $msg)
        @if(Session::has('alert-' . $msg))
            <center><p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}</p></center>
        @endif
      @endforeach
    </div>
<!-- flash messages section end -->


<!-- trading history area start -->
<div class="col-lg-12 mt-sm-30 mt-xs-30" id="forms">
    <div class="card shadow p-4 mb-5 bg-white rounded">
        <div class="card-body">
            <h4 class="header-title">Form Handles</h4>
            <div class="d-sm-flex justify-content-between align-items-center">
                
                <div class="trd-history-tabs">
                    <ul class="nav" role="tablist" style="float: right;">
                        <li>
                            <a class="active" data-toggle="tab" href="#addcounsellor" role="tab">Add Counsellor</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#dialyquote" role="tab">Dialy Quote</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#expert_talks" role="tab">Talks</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#news" role="tab">News</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#inspire_me" role="tab">Inspire_me</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#videos" role="tab">Videos</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#playlists" role="tab">Playlists</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#gallery" role="tab">Gallery</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#assessments" role="tab">Assessments</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#reports" role="tab">Reports</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="trad-history mt-4">
                <div class="tab-content" id="myTabContent">
                    
                    <!-- Dialy Quote Form begin  -->
                    <div class="tab-pane fade" id="dialyquote" role="tabpanel">
                        @include('quotes.dialyquote')
                    </div>
                    <!-- Dialy Quote Form end -->

                    <!-- news form begin -->
                     <div class="tab-pane fade" id="news" role="tabpanel">
                        <h4 align="center">News Form</h4>
                        @include('news.create')
                    </div>
                    <!-- news form end -->

                    <!-- Galley form begin -->
                    <div class="tab-pane fade" id="gallery" role="tabpanel">
                        @include('gallery.create')
                    </div>          
                    <!-- Gallery form end -->

                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- trading history area end -->
<br>



<!-- trading history area start -->
<div class="col-lg-12 mt-sm-30 mt-xs-30" id="forms">
    <div class="card shadow p-4 mb-5 bg-white rounded">
        <div class="card-body">
            <div class="d-sm-flex justify-content-between align-items-center">
                <h4 class="header-title">Shared Handles</h4>
                <div class="trd-history-tabs">
                    <ul class="nav" role="tablist">
                        <li>
                            <a class="active" data-toggle="tab" href="#counsellor_accepted" role="tab">Counsellors</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#shared_news" role="tab">News</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#shared_talks" role="tab">Talks</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#shared_inspire_me" role="tab">Quotes</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#shared_videos" role="tab">Videos</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#shared_playlists" role="tab">Playlists</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#shared_gallery" role="tab">Gallery</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#comments" role="tab">Comments</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#suggestions" role="tab">Suggestions</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="trad-history mt-4">
                <div class="tab-content" id="myTabContent">

                    <!-- shared_news form begin -->
                    <div class="tab-pane fade show" id="shared_news" role="tabpanel">
                        <h4 align="center">Shared News</h4>
                        @include('news.shared_news')
                    </div>
                    <!-- shared_news form end -->  
                </div>
            </div>
        </div>
    </div>
</div>
<!-- trading history area end -->

@endsection