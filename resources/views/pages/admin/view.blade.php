@extends('layouts.admin')

@section('title', 'View Hospital')

@section('style')
    <!-- Bootstrap Core CSS -->
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="asset/css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="asset/css/startmin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="asset/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="asset/css/timeline.css">

    <meta name="csrf-token" content="{{ csrf_token() }}"/>
@endsection

@section('content')
<div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">View hospital information </h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>ID Hospital</th>
                                                    <th>User Name</th>
                                                    <th>Password</th>
                                                    <th>Name</th>
                                                    <th>Address</th>
                                                    <th>description</th>
                                                    <th>level</th>
                                                     <th>Edit</th>
                                                    <th>Delete</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                 @foreach($Hospital as $tl)
                                                <tr class="odd gradeX">
                                                    <td>{{$tl->id}}</td>
                                                    <td>{{$tl->username}}</td>
                                                    <td>{{$tl->password}}</td>
                                                    <td class="center">{{$tl->name}}</td>
                                                    <td class="center">{{$tl->address}}</td>
                                                    <td class="center">{{$tl->description}}</td>
                                                    <td class="center">{{$tl->level}}</td>
                                                    <td class="center" ><a href="pages.admin.edit/{{$tl->id}}">Edit</a></td>
                                                    <td class="center"><a href="pages.admin.delete/{{$tl->id}}">Delete</a></td>

                                                  

                                           

                                        </div>
                                                </tr>
                                                  @endforeach
                                                <!-- <tr class="odd gradeX">
                                                    <td>H002</td>
                                                    <td>VietDuc@gmail.com</td>
                                                    <td>26820978f20e76fcf074b42dae7dcedb</td>
                                                    <td class="center">Hospital Viet Duc</td>
                                                    <td class="center">Hà Nội</td>
                                                    <td class="center">Specialist: Surgery, infertility</td>
                                                    <td class="center">Big city(Last route)</td>
                                                    <td class="center" ><a href="dsacasd">Edit</a></td>
                                                    <td class="center"><a href="dsacasd">Delete</a></td>
                                                </tr>
                                                <tr class="odd gradeX">
                                                    <td>H003</td>
                                                    <td>DaBac123@gmail.com</td>
                                                    <td>3336987548f20e76fcf074b42dae7dcemn</td>
                                                    <td class="center">Hospital Da Bac</td>
                                                    <td class="center">Hòa Bình</td>
                                                    <td class="center">Specialty: osteoarthritis</td>
                                                    <td class="center">Commune- District (First route)</td>
                                                    <td class="center" ><a href="dsacasd">Edit</a></td>
                                                    <td class="center"><a href="dsacasd">Delete</a></td>
                                                </tr>
                                                <tr class="odd gradeX">
                                                    <td>H004</td>
                                                    <td>108@gmail.com</td>
                                                    <td>csa1276fcf074b42dae7dcedb</td>
                                                    <td class="center">Hospital 108</td>
                                                    <td class="center">Hà Nội</td>
                                                    <td class="center">Specialist: brain, bone and joint</td>
                                                    <td class="center">Big city(Last route)</td>
                                                    <td class="center" ><a href="dsacasd">Edit</a></td>
                                                    <td class="center"><a href="dsacasd">Delete</a></td>
                                                </tr>
                                                <tr class="odd gradeX">
                                                    <td>H005</td>
                                                    <td>qy@gmail.com</td>
                                                    <td>fd3dkl3476fcf074b42dae7dcedb</td>
                                                    <td class="center">Hospital Quan Y</td>
                                                    <td class="center">Hà Nội</td>
                                                    <td class="center">Specialist: infertility</td>
                                                    <td class="center">Big city(Last route)</td>
                                                    <td class="center" ><a href="dsacasd">Edit</a></td>
                                                    <td class="center"><a href="dsacasd">Delete</a></td>
                                                </tr>
                                                <tr class="odd gradeX">
                                                    <td>H006</td>
                                                    <td>ChoRay@gmail.com</td>
                                                    <td>gh12k3476fcf074b42dae7dcedb</td>
                                                    <td class="center">Hospital Cho Ray</td>
                                                    <td class="center">Hà Nội</td>
                                                    <td class="center">Specialist: kidney</td>
                                                    <td class="center">Big city(Last route)</td>
                                                    <td class="center" ><a href="dsacasd">Edit</a></td>
                                                    <td class="center"><a href="dsacasd">Delete</a></td>
                                                </tr>-->
                                               
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                    
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
@endsection
@section('script')
    <!-- jQuery -->
    <script src="asset/js/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="asset/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="asset/js/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="asset/js/startmin.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).ready(function () {
            $("#province").change(function () {
                $.ajax({
                    method: "GET",
                    url: "dashboard/ajax-district/" + $(this).val(),
                }).done(function (data) {
                    $('#district').html(data);
                    $('#ward').html("");
                });
            });
            $("#district").change(function () {
                $.ajax({
                    method: "GET",
                    url: "dashboard/ajax-ward/" + $('#province').val() + "/" + $(this).val(),
                }).done(function (data) {
                    $('#ward').html(data);
                });
            });
        });
    </script>
@endsection