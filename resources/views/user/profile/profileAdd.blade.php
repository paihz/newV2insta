@extends('layouts.home', ['title' => 'Add new profile &middot; instaforex.my'])
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css') }}">
@endsection
@section('js')
    <script src="{{ asset('assets/vendors/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBBeLH-55O_qIuO-uZmPmK9F5JtWflPQC8&sensor=true&libraries=places"></script>
    <script src="{{ asset('assets/vendors/placepicker/placepicker.min.js') }}"></script>
    <script>
        $(function(){

          $(".placepicker").placepicker();

            $('.datepicker-only-init').datetimepicker({
                widgetPositioning: {
                    horizontal: 'left'
                },
                icons: {
                    time: "fa fa-clock-o",
                    date: "fa fa-calendar",
                    up: "fa fa-arrow-up",
                    down: "fa fa-arrow-down"
                },
                format: 'LL'
            });
        })
    </script>
@endsection

@section('content')
    <!-- Basic Form Elements -->
    <section class="panel">
        <div class="panel-heading">
            <h3>Basic Form Elements</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="margin-bottom-50">
                        <h4>Horizontal Form</h4>
                        <br />
                        <!-- Horizontal Form -->
                        <form action="{{ action('ProfileController@createProfile') }}">
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label class="form-control-label" for="l0">Name</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" value="{{ Auth::user()->name }}" class="form-control" readonly="" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label class="form-control-label" for="l2">Email Address</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" readonly="" value="{{ Auth::user()->email }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label>Gender</label>
                                </div>
                                <div class="col-md-9">
                                    <select class="form-control">
                                        <option value="0">Male</option>
                                        <option value="1">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label class="form-control-label">Phone no.</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="+60109095005">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label class="form-control-label">Date of birth</label>
                                </div>
                                <div class="col-md-9">
                                        <input type="text" class="form-control datepicker-only-init" placeholder="Select your birthdate" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label  class="form-control-label">Location</label>
                                </div>
                                <div class="col-md-9">
                                    <input id="placepicker" type="text" class="placepicker form-control" >
                                </div>
                            </div>
                        </form>
                        <form>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label class="form-control-label" for="l0">Default Input</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" placeholder="Default Input" id="l0">
                                </div>
                            </div>
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
                                    <br />
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="margin-bottom-50">
                        <h4>Vertical Form</h4>
                        <br />
                        <!-- Vertical Form -->
                        <form>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="l30">Default Input</label>
                                        <input type="text" class="form-control" placeholder="Email Address" id="l30">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="l31">Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" placeholder="Password" id="l31">
                                            <span class="input-group-addon">
                                                <i class="icmn-key"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="l32">Left Icon</label>
                                        <div class="form-input-icon">
                                            <i class="icmn-pie-chart font-green"></i>
                                            <input type="text" class="form-control" placeholder="Left icon" id="l32">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="l33">Right Icon</label>
                                        <div class="form-input-icon form-input-icon-right">
                                            <i class="icmn-download"></i>
                                            <input type="text" class="form-control" placeholder="Right icon" id="l33">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="l34">Input with Icon</label>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="icmn-search"></i>
                                            </span>
                                            <input class="input-error form-control" type="text" value="" id="l34">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="l35">Input With Spinner</label>
                                        <div class="form-input-icon form-input-icon-right">
                                            <i class="icmn-spinner11 util-spin"></i>
                                            <input type="password" class="form-control" placeholder="Password" id="l35">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="l36">Disabled</label>
                                        <input type="text" class="form-control" placeholder="Disabled" disabled="" id="l36">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="l37">Readonly</label>
                                        <input type="text" class="form-control" placeholder="Readonly" readonly="" id="l37">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="l38">Textarea</label>
                                <textarea class="form-control" rows="3" id="l38"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="l39">File input</label>
                                <br />
                                <input type="file" id="l39">
                                <br />
                                <small>Technical information for user</small>
                            </div>
                            <div class="form-actions">
                                <button type="button" class="btn btn-primary width-150">Submit</button>
                                <button type="button" class="btn btn-default">Cancel</button>
                            </div>
                        </form>
                        <!-- End Vertical Form -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="margin-bottom-50">
                        <h4>Rounded Inputs</h4>
                        <br />
                        <!-- Rounded Inputs -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label" for="l81">Rounded Input</label>
                                    <input type="text" class="form-control form-control-rounded" id="l81">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <label class="form-label" for="l82">Disabled Rounded Input</label>
                                <input type="password" class="form-control form-control-rounded" disabled="" placeholder="Password" id="l82">
                            </div>
                        </div>
                        <!-- End Rounded Inputs -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="margin-bottom-50">
                        <h4>Input States</h4>
                        <br />
                        <!-- Input States -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group has-success">
                                    <label class="form-label" for="l51">Input with success</label>
                                    <input type="text" class="form-control form-control-success" id="l51">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group has-warning">
                                    <label class="form-label" for="l52">Input with warning</label>
                                    <input type="text" class="form-control form-control-warning" id="l52">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group has-danger">
                                    <label class="form-label" for="l53">Input with danger</label>
                                    <input type="text" class="form-control form-control-danger" id="l53">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group has-focused">
                                    <label class="form-label" for="l54">Focused state</label>
                                    <input type="text" class="form-control form-control-success" id="l54">
                                </div>
                            </div>
                        </div>
                        <!-- End Input States -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="margin-bottom-50">
                        <h4>Inline Form</h4>
                        <br />
                        <!-- Inline Form -->
                        <form class="form-inline">
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputAmount">Amount</label>
                                <div class="input-group">
                                    <div class="input-group-addon">$</div>
                                    <input type="text" class="form-control" id="exampleInputAmount" placeholder="Amount">
                                    <div class="input-group-addon">.00</div>
                                </div>
                            </div>
                            <a href="javascript: void(0);" class="btn btn-primary">Transfer cash</a>
                        </form>
                        <!-- End Inline Form -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div>
                        <h4>Column Sizing</h4>
                        <br />
                        <!-- Column Sizing -->
                        <form role="form">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder=".col-md-2">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder=".col-md-3">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder=".col-md-4">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder=".col-md-2">
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- End Column Sizing -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End -->
@endsection
