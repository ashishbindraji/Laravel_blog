@extends('layouts.auth')
@section('content')
<!-- ====================================
    ——— CONTENT WRAPPER
    ===================================== -->
<div class="content-wrapper">
    <div class="content">
        <!-- Top Statistics -->
        <div class="row">
            <div class="col-xl-3 col-sm-6">
                <div class="card card-default card" style="height: 150px">
                    <div class="card-header">
                        <h2>{{$postCount}}</h2>
                        <div class="sub-title">
                            <span class="mr-1">Posts</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card card-default card" style="height: 150px">
                    <div class="card-header">
                        <h2>{{$tagCount}}</h2>
                        <div class="sub-title">
                            <span class="mr-1">Tags</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card card-default card" style="height: 150px">
                    <div class="card-header">
                        <h2>{{$categoryCount}}</h2>
                        <div class="sub-title">
                            <span class="mr-1">Categories</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card card-default card" style="height: 150px">
                    <div class="card-header">
                        <h2>{{$userCount}}</h2>
                        <div class="sub-title">
                            <span class="mr-1">Users</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div> 
@endsection
