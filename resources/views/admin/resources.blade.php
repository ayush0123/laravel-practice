@extends('layouts.admintemplate')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Resource Summary</div>
                <div class="card-body">
                    <div class="col-xs-6 col-sm-3 col-sm-pull-9 sidebar-offcanvas float-left" id="sidebar">
                        <div class="list-group">
                            <a href="{{ url('admin/dashboard')}}" class="list-group-item">Dashboard</a>
                            <a href="{{ url('admin/received-reports')}}" class="list-group-item">Received Reports</a>
                            <a href="#" class="list-group-item active">Resources</a>
                        </div>
                    </div><!--/.sidebar-offcanvas-->

                    <div class="float-left">
                        <div class="col-xs-6 col-sm-12 col-sm-pull-9 float-left border">
							<img src="{{ asset('demo-images/monitoring-officer-resources.png') }}" width="650px"/>
                        </div>
                        <div class="float-none"></div>

                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection

