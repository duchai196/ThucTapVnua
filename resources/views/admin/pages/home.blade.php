@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-block">
                    <select class="custom-select pull-right">
                        <option selected>January</option>
                        <option value="1">February</option>
                        <option value="2">March</option>
                        <option value="3">April</option>
                    </select>
                    <h4 class="card-title">Projects of the Month</h4>
                    <div class="table-responsive m-t-40">
                        <table class="table stylish-table">
                            <thead>
                            <tr>
                                <th colspan="2">Assigned</th>
                                <th>Name</th>
                                <th>Budget</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td style="width:50px;"><span class="round">S</span></td>
                                <td>
                                    <h6>Sunil Joshi</h6>
                                    <small class="text-muted">Web Designer</small>
                                </td>
                                <td>Elite Admin</td>
                                <td>$3.9K</td>
                            </tr>
                            <tr class="active">
                                <td><span class="round"><img src="images/users/2.jpg" alt="user" width="50"/></span>
                                </td>
                                <td>
                                    <h6>Andrew</h6>
                                    <small class="text-muted">Project Manager</small>
                                </td>
                                <td>Real Homes</td>
                                <td>$23.9K</td>
                            </tr>
                            <tr>
                                <td><span class="round round-success">B</span></td>
                                <td>
                                    <h6>Bhavesh patel</h6>
                                    <small class="text-muted">Developer</small>
                                </td>
                                <td>MedicalPro Theme</td>
                                <td>$12.9K</td>
                            </tr>
                            <tr>
                                <td><span class="round round-primary">N</span></td>
                                <td>
                                    <h6>Nirav Joshi</h6>
                                    <small class="text-muted">Frontend Eng</small>
                                </td>
                                <td>Elite Admin</td>
                                <td>$10.9K</td>
                            </tr>
                            <tr>
                                <td><span class="round round-warning">M</span></td>
                                <td>
                                    <h6>Micheal Doe</h6>
                                    <small class="text-muted">Content Writer</small>
                                </td>
                                <td>Helping Hands</td>
                                <td>$12.9K</td>
                            </tr>
                            <tr>
                                <td><span class="round round-danger">N</span></td>
                                <td>
                                    <h6>Johnathan</h6>
                                    <small class="text-muted">Graphic</small>
                                </td>
                                <td>Digital Agency</td>
                                <td>$2.6K</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Row -->
    <!-- Row -->
    <div class="row">
        <!-- Column -->
        <div class="col-lg-4">
            <div class="card">
                <img class="card-img-top img-responsive" src="images/big/img1.jpg" alt="Card">
                <div class="card-block">
                    <ul class="list-inline font-14">
                        <li class="p-l-0">20 May 2016</li>
                        <li><a href="javascript:void(0)" class="link">3 Comment</a></li>
                    </ul>
                    <h3 class="font-normal">Featured Hydroflora Pots Garden &amp; Outdoors</h3>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-4">
            <div class="card">
                <img class="card-img-top img-responsive" src="images/big/img2.jpg" alt="Card">
                <div class="card-block">
                    <ul class="list-inline font-14">
                        <li class="p-l-0">20 May 2016</li>
                        <li><a href="javascript:void(0)" class="link">3 Comment</a></li>
                    </ul>
                    <h3 class="font-normal">Featured Hydroflora Pots Garden &amp; Outdoors</h3>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-4">
            <div class="card">
                <img class="card-img-top img-responsive" src="images/big/img4.jpg" alt="Card">
                <div class="card-block">
                    <ul class="list-inline font-14">
                        <li class="p-l-0">20 May 2016</li>
                        <li><a href="javascript:void(0)" class="link">3 Comment</a></li>
                    </ul>
                    <h3 class="font-normal">Featured Hydroflora Pots Garden &amp; Outdoors</h3>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
    <!-- Row -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer text-center">
        © 2017 Monster Admin by wrappixel.com
    </footer>
    <!-- ============================================================== -->
       
@endsection