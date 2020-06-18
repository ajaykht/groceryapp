@extends('layouts.adminheader')

@section('content')

<section class="page-wrapper">
    <div class="content-wrapper"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h3 class="text-white">Manage Vendors</h3>
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">vendors</li>
                </ol>
            </div>
            <div class="col-md-10">
                <button name="">Add Product</button>
            </div>
        </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead class="bg-gradiand text-white">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                                <th scope="col">Status</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td><div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                    <label class="custom-control-label" for="customSwitch1"></label>
                                </div></td>
                                <td><span class="badge badge-pill badge-success">Paid</span></td>
                                <td><a href="" class="btm-sm text-dark" title="View"><span class="material-icons">
                                    visibility
                                    </span></a> 
                                    <a href="" class="btm-sm text-dark"  title="Edit"><span class="material-icons">
                                        edit
                                        </span></a>
                                    
                                    <a href="" class="btm-sm text-dark"  title="delete"><span class="material-icons">
                                        <span class="material-icons">
                                            delete_outline
                                            </span>
                                        </span></a>
                                    </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <td><div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                    <label class="custom-control-label" for="customSwitch2"></label>
                                </div></td>
                                <td><span class="badge badge-pill badge-success">Paid</span></td>
                                <td><a href="" class="btm-sm text-dark" title="View"><span class="material-icons">
                                    visibility
                                    </span></a> 
                                    <a href="" class="btm-sm text-dark"  title="Edit"><span class="material-icons">
                                        edit
                                        </span></a>
                                    
                                    <a href="" class="btm-sm text-dark"  title="delete"><span class="material-icons">
                                        <span class="material-icons">
                                            delete_outline
                                            </span>
                                        </span></a>
                                    </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                                <td><div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch3">
                                    <label class="custom-control-label" for="customSwitch3"></label>
                                </div></td>
                                <td><span class="badge badge-pill badge-success">Paid</span></td>
                                <td><a href="" class="btm-sm text-dark" title="View"><span class="material-icons">
                                    visibility
                                    </span></a> 
                                    <a href="" class="btm-sm text-dark"  title="Edit"><span class="material-icons">
                                        edit
                                        </span></a>
                                    
                                    <a href="" class="btm-sm text-dark"  title="delete"><span class="material-icons">
                                        <span class="material-icons">
                                            delete_outline
                                            </span>
                                        </span></a>
                                    </td>
                            </tr>                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <nav class="float-right">
                <ul class="pagination">
                <li class="page-item">
                    <span class="page-link">Previous</span>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active">
                    <span class="page-link">
                    2
                    <span class="sr-only">(current)</span>
                    </span>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
                </ul>
            </nav>
        </div>
    </div>

</section>
@endsection

