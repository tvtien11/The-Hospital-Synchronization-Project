@extends('layouts.admin')

@section('title', 'Login Hospital')

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
 <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Please Sign In</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" action="pages.admin.login">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                        </label>
                                    </div>
                                    <!-- Change this to a button or input when using this as a form -->
                                    <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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