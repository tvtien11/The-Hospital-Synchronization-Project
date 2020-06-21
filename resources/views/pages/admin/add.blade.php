@extends('layouts.admin')

@section('title', 'add Hospital')

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
                    <h1 class="page-header">Add Hospital</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form add new hospital information
                        </div>
                        {{-- begin --}}
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-2"></div>
                                  <form role="form" action="pages/admin/add" method="post">
                                {{-- <div class="col-lg-8"> --}}
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <label>User name</label>
                                                <input type="text" name="username" class="form-control user-input" required>
                                                 <label style="margin-top:16px">Province / City *</label>
                                            <select id="province" name="province" class="form-control" required style="height: 32px;background-color: #e8f0fe;">
                                                <option></option>
                                                @foreach($provinces as $p)
                                                    <option value="{{$p->id}}">{{$p->_name}}</option>
                                                @endforeach
                                            </select>
                                            </div> 
                                      <div class="col-lg-2">
                                        <div style="margin-left:100px;">
                                                <label>Password</label>
                                            <input type="Password" name="Password" style="height: 29px;border-radius: 3px;border:1px solid #ccc" >
                                                <label style="margin-top:21px">Name</label>
                                                <input type="text" name="name" style="height: 29px;border-radius: 3px;border:1px solid #ccc;background-color: #e8f0fe;"> 
                                                </div>
                                            </div>   
                                        </div>

                                        <div  style="display:flex;" style="justify-content: space-between;" >
                                            <div style="margin:16px 50px 16px 177px;">
                                             <label>Description</label>
                                            <input style="background-color: #e8f0fe;"  id="text" name="Description" class="form-control" required>
                                            </div>
                                            <div>
                                                <div style="margin: 16px 46px;">
                                            <label >Choose a level:</label>
                                            <br>
                                            <select name="level" style="height: 30px;border:1px solid #CCC;background-color: #e8f0fe">
                                                    <option >Commune- District (First route)</option>
                                                     <option>Province (Middle route)</option>
                                                       <option >Big city(Last route)</option>
                                            </select>
                                            </div>
                                            </div>
                                        
                                        </div>

                                </div>

                                {{-- phần btn --}}
<div style="display: flex;justify-content: center;" >
    <div style="margin-right: 288px;box-shadow: 0 0.0625rem 0.125rem 0 rgba(0,0,0,0.1);">
    <button type="submit" style="background-color: #009022; padding:6px 16px;color: white; border:1px solid 0 0.0625rem 0.125rem 0 rgba(0,0,0,.1)" >
        Add new
    </button>
    </div>
</div>
{{-- end btn --}}



                                  
                                        
                                        {{-- <div class="col-lg-6">
                                            <label>User name</label>
                                            <input type="text" name="username" class="form-control" required>
                                        </div> --}}
                                        {{-- <div class="col-lg-6">
                                            <label>Password</label>
                                            <input type="Password" name="Password" >
                                            <div class="form-group col-lg-6">
                                                <label>Name</label>
                                                <input type="text" name="name">
                                                
                                            </div>
                                           
                                        </div> --}}
                                        {{-- <div class="col-lg-6">
                                            <label>Province / City *</label>
                                            <select id="province" name="province" class="form-control" required>
                                                <option></option>
                                                @foreach($provinces as $p)
                                                    <option value="{{$p->id}}">{{$p->_name}}</option>
                                                @endforeach
                                            </select>
                                        </div> --}}
                                        {{-- <div class="col-lg-6">
                                            <label>Description</label>
                                            <input  id="text" name="Description" class="form-control" required>
                                            </input>
                                        </div> --}}
                                        {{-- <div> --}}
                                            {{-- <label >Choose a level:</label>
                                            <select name="level" >
                                        <option value="volvo">Commune- District (First route)</option>
                                         <option value="saab">Province (Middle route)</option>
                                           <option value="opel">Big city(Last route)</option>
                                         
                                              </select> --}}{{-- </div> --}}
                                            {{--   </div> --}}
                                        
                                        
                                       {{-- end --}}
                                       
                                <div class="col-lg-2"></div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
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
