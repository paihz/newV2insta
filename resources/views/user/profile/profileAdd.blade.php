@extends('layouts.home', ['title' => 'Add new profile &middot; instaforex.my'])
@section('css')

@endsection
@section('js')

@endsection

@section('content')
    <section class="panel panel-with-sidebar panel-with-right-sidebar">
        <div class="panel-sidebar">
            <div class="btn-group-vertical btn-group-justified">
                <button type="button" class="btn">Provide Files</button>
                <button type="button" class="btn">User Action</button>
                <button type="button" class="btn">Access History</button>
            </div>
            <br>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                industry. Lorem Ipsum has been the industry's standard dummy
                text ever since the 1500s, when an unknown printer took a galley
                of type and scrambled it to make a type specimen book.</p>
        </div>
        <div class="panel-heading">
            <h3>Create new profile</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="margin-bottom-50">
                        <h4>Horizontal Form</h4>
                        <br>
                        <!-- Horizontal Form -->
                        <form>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label class="form-control-label" for="l10">Disabled</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" placeholder="Disabled" disabled="" id="l10">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label class="form-control-label" for="l11">Readonly</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" placeholder="Readonly" readonly="" id="l11">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label class="form-control-label" for="l4">With Actions on Left</label>
                                </div>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript: void(0);">Action</a>
                                                <a class="dropdown-item" href="javascript: void(0);">Another action</a>
                                                <a class="dropdown-item" href="javascript: void(0);">Something else here</a>
                                                <li class="dropdown-divider"> </li>
                                                <a class="dropdown-item" href="javascript: void(0);">Separated link</a>
                                            </ul>
                                        </div>
                                        <input type="text" class="form-control" id="l4">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label class="form-control-label" for="l5">With Actions on Right</label>
                                </div>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="l5">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="javascript: void(0);">Action</a>
                                                <a class="dropdown-item" href="javascript: void(0);">Another action</a>
                                                <a class="dropdown-item" href="javascript: void(0);">Something else here</a>
                                                <li class="dropdown-divider"> </li>
                                                <a class="dropdown-item" href="javascript: void(0);">Separated link</a>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label class="form-control-label" for="l8">Search</label>
                                </div>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="" placeholder="Search..." id="l8">
                                        <span class="input-group-btn">
                                            <a href="javascript: void(0);" class="btn btn-success">
                                                Search files
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label class="form-control-label" for="l1">Block Help</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="Enter text" id="l1">
                                    <small>Technical information for user</small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label class="form-control-label" for="l2">Email Address</label>
                                </div>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="icmn-mail2"></i>
                                        </span>
                                        <input type="email" class="form-control" placeholder="Email Address" id="l2">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label class="form-control-label" for="l3">Password</label>
                                </div>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <input type="password" class="form-control" placeholder="Password" id="l3">
                                        <span class="input-group-addon">
                                            <i class="icmn-key"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label class="form-control-label" for="l6">Left Icon</label>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-input-icon">
                                        <i class="icmn-search"></i>
                                        <input type="text" class="form-control" placeholder="Left icon" id="l6">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label class="form-control-label" for="l7">Right Icon</label>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-input-icon form-input-icon-right">
                                        <i class="icmn-database"></i>
                                        <input type="text" class="form-control" placeholder="Right icon" id="l7">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label class="form-control-label" for="l9">Input With Spinner</label>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-input-icon form-input-icon-right">
                                        <i class="icmn-spinner11 util-spin"></i>
                                        <input type="password" class="form-control" placeholder="Password" id="l9">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label class="form-control-label">Static Control</label>
                                </div>
                                <div class="col-md-9">
                                    <p class="form-control-static"> email@example.com </p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="l13">Dropdown</label>
                                </div>
                                <div class="col-md-9">
                                    <select class="form-control" id="l13">
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                        <option>Option 4</option>
                                        <option>Option 5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label class="form-control-label" for="l14">Multiple Select</label>
                                </div>
                                <div class="col-md-9">
                                    <select multiple="" class="form-control" id="l14">
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                        <option>Option 4</option>
                                        <option>Option 5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label class="form-control-label" for="l15">Textarea</label>
                                </div>
                                <div class="col-md-9">
                                    <textarea class="form-control" rows="3" id="l15"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label class="form-control-label" for="l16">File input</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="file" id="l16">
                                    <br>
                                    <small>Technical information for user</small>
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="form-group row">
                                    <div class="col-md-9 col-md-offset-3">
                                        <button type="button" class="btn width-150 btn-primary">Submit</button>
                                        <button type="button" class="btn btn-default">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- End Horizontal Form -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
