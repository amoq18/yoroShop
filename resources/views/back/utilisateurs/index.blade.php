@extends('back.layouts.app')

@section('content')
<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Data Tables</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-2.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Data Tables</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Basic Table</h4>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="datatable table table-stripped table-hover table-center mb-0">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="/assets/back/img/profiles/avatar-08.jpg" alt="User Image"></a>
                                                <a href="profile.html">Robert Martin <span>#0006</span></a>
                                            </h2>
                                        </td>
                                        <td>997</td>
                                        <td>$18420</td>
                                        <td>1 Apr 2019</td>
                                        <td class="text-right">
                                            <div class="actions">
                                                <a href="#" class="btn btn-sm bg-success-light mr-2">
                                                    <i class="fe fe-pencil"></i> Edit
                                                </a>
                                                <a href="#" class="btn btn-sm bg-danger-light">
                                                    <i class="fe fe-trash"></i> Delete
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="/assets/back/img/profiles/avatar-08.jpg" alt="User Image"></a>
                                                <a href="profile.html">Robert Martin <span>#0006</span></a>
                                            </h2>
                                        </td>
                                        <td>997</td>
                                        <td>$18420</td>
                                        <td>1 Apr 2019</td>
                                        <td class="text-right">
                                            <div class="actions">
                                                <a href="#" class="btn btn-sm bg-success-light mr-2">
                                                    <i class="fe fe-pencil"></i> Edit
                                                </a>
                                                <a href="#" class="btn btn-sm bg-danger-light">
                                                    <i class="fe fe-trash"></i> Delete
                                                </a>
                                            </div>
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
</div>          
@endsection
