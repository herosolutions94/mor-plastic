@extends('layouts.adminlayout')
@section('page_meta')
<meta name="description" content={{ !empty($site_settings) ? $site_settings->site_meta_desc : '' }}">
<meta name="keywords" content="{{ !empty($site_settings) ? $site_settings->site_meta_keyword : '' }}">
<meta name="author" content="{{ !empty($site_settings->site_name) ? $site_settings->site_name : 'Login' }}">
<title>Admin - {{ $site_settings->site_name }}</title>
@endsection
@section('page_content')
{!! breadcrumb('Website Pages') !!}
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="table-responsive">
                <table class="table table-bordered text-nowrap align-middle dataTable basic-datatable">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Page Name</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td width="65%">CTA SECTION</td>
                            <td>
                                <a href="{{ url('admin/pages/cta_section') }}" class="btn btn-primary active">Edit
                                    Section</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td width="65%">Home</td>
                            <td>
                                <a href="{{ url('admin/pages/home') }}" class="btn btn-primary active">Edit
                                    Page</a>
                            </td>
                        </tr>

                       


                        <tr>
                            <td>3</td>
                            <td width="65%">Contact Us</td>
                            <td>
                                <a href="{{ url('admin/pages/contact_us') }}" class="btn btn-primary active">Edit
                                    Page</a>
                            </td>
                        </tr>





                        

                        <tr>
                            <td>4</td>
                            <td width="65%">Capabilities</td>
                            <td>
                                <a href="{{ url('admin/pages/capabilities') }}" class="btn btn-primary active">Edit
                                    Page</a>
                            </td>
                        </tr>



                        

                        <tr>
                            <td>5</td>
                            <td width="65%">About us</td>
                            <td>
                                <a href="{{ url('admin/pages/about_us') }}" class="btn btn-primary active">Edit
                                    Page</a>
                            </td>
                        </tr>


                        <tr>
                            <td>6</td>
                            <td width="65%">Products</td>
                            <td>
                                <a href="{{ url('admin/pages/products') }}" class="btn btn-primary active">Edit
                                    Page</a>
                            </td>
                        </tr>
                       

                       





                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection