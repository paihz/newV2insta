@extends('layouts.home', ['title' => 'Edit profile &middot; instaforex.my'])

@section('content')
	<section class="panel profile-user-content">
                <div class="panel-body">
                    <h5>Personal Information</h5>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="l0">Username</label>
                                <input type="text" class="form-control" id="l0">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="l1">Email</label>
                                <input type="email" class="form-control" id="l1">
                            </div>
                        </div>
                    </div>
                    <br />
                    <h5>Password</h5>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="l3">Password</label>
                                <input type="password" class="form-control" id="l3">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="l4">Password</label>
                                <input type="password" class="form-control" id="l4">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <br />
                            <h5>Profile Avatar</h5>
                            <div class="form-group">
                                <label class="form-control-label" for="l6">File Upload</label>
                                <input type="file" id="l6">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <br />
                            <h5>Profile Background</h5>
                            <div class="form-group">
                                <label class="form-control-label" for="l5">File Upload</label>
                                <input type="file" id="l5">
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="form-group">
                            <button type="button" class="btn width-150 btn-primary">Submit</button>
                            <button type="button" class="btn btn-default">Cancel</button>
                        </div>
                    </div>
                </div>
            </section>
@endsection