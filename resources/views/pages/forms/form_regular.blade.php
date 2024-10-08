@extends('layouts.app', ['activePage' => 'form_regular', 'menuParent' => 'forms', 'titlePage' => __('Regular Forms')])

@section('content')
<div class="content">
  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Stacked Form 2</h4>
        </div>
        <div class="card-body">
          <form action="#">
            <label>Email address</label>
            <div class="form-group">
              <input type="email" class="form-control">
            </div>
            <label>Password</label>
            <div class="form-group">
              <input type="password" class="form-control">
            </div>
            <div class="form-check mt-3">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox">
                <span class="form-check-sign"></span>
                Subscribe to newsletter
              </label>
            </div>
          </form>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-fill btn-primary">Submit</button>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Horizontal Form</h4>
        </div>
        <div class="card-body">
          <form class="form-horizontal">
            <div class="row">
              <label class="col-md-3 col-form-label">Username</label>
              <div class="col-md-9">
                <div class="form-group">
                  <input type="text" class="form-control">
                </div>
              </div>
            </div>
            <div class="row">
              <label class="col-md-3 col-form-label">Email</label>
              <div class="col-md-9">
                <div class="form-group">
                  <input type="email" class="form-control">
                </div>
              </div>
            </div>
            <div class="row">
              <label class="col-md-3 col-form-label">Password</label>
              <div class="col-md-9">
                <div class="form-group">
                  <input type="password" class="form-control">
                </div>
              </div>
            </div>
            <div class="row">
              <label class="col-md-3 col-form-label"></label>
              <div class="col-md-9">
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox">
                    <span class="form-check-sign"></span>
                    Remember me
                  </label>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="card-footer">
          <form class="form-horizontal">
            <div class="row">
              <label class="col-md-3 col-form-label"></label>
              <div class="col-md-9">
                <button type="submit" class="btn btn-fill btn-primary">Sign in</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Form Elements</h4>
        </div>
        <div class="card-body">
          <form method="get" action="/" class="form-horizontal">
            <div class="row">
              <label class="col-sm-2 col-form-label">With help</label>
              <div class="col-sm-10">
                <div class="form-group">
                  <input type="text" class="form-control">
                  <span class="form-text">A block of help text that breaks onto a new line.</span>
                </div>
              </div>
            </div>
            <div class="row">
              <label class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                <div class="form-group">
                  <input type="password" class="form-control">
                </div>
              </div>
            </div>
            <div class="row">
              <label class="col-sm-2 col-form-label">Placeholder</label>
              <div class="col-sm-10">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="placeholder">
                </div>
              </div>
            </div>
            <div class="row">
              <label class="col-sm-2 col-form-label">Disabled</label>
              <div class="col-sm-10">
                <div class="form-group">
                  <input type="text" class="form-control" value="Disabled input here.." disabled>
                </div>
              </div>
            </div>
            <div class="row">
              <label class="col-sm-2 col-form-label">Static control</label>
              <div class="col-sm-10">
                <div class="form-group">
                  <p class="form-control-static">hello@creative-tim.com</p>
                </div>
              </div>
            </div>
            <div class="row">
              <label class="col-sm-2 col-form-label">Checkboxes and radios</label>
              <div class="col-sm-10 checkbox-radios">
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox">
                    <span class="form-check-sign"></span>
                    First Checkbox
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox">
                    <span class="form-check-sign"></span>
                    Second Checkbox
                  </label>
                </div>
                <div class="form-check form-check-radio">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <span class="form-check-sign"></span>
                    First Radio
                  </label>
                </div>
                <div class="form-check form-check-radio">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    <span class="form-check-sign"></span>
                    Second Radio
                  </label>
                </div>
              </div>
            </div>
            <div class="row">
              <label class="col-sm-2 col-form-label">Inline checkboxes</label>
              <div class="col-sm-10">
                <div class="form-check form-check-inline">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox">
                    <span class="form-check-sign"></span>
                    a
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox">
                    <span class="form-check-sign"></span>
                    b
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox">
                    <span class="form-check-sign"></span>
                    c
                  </label>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Input Variants</h4>
        </div>
        <div class="card-body">
          <form method="get" action="/" class="form-horizontal">
            <div class="row">
              <label class="col-sm-2 col-form-label">Custom Checkboxes &amp; radios</label>
              <div class="col-sm-4 col-sm-offset-1 checkbox-radios">
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox">
                    <span class="form-check-sign"></span>
                    Unchecked
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" checked>
                    <span class="form-check-sign"></span>
                    Checked
                  </label>
                </div>
                <div class="form-check disabled">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" disabled>
                    <span class="form-check-sign"></span>
                    Disabled Unchecked
                  </label>
                </div>
                <div class="form-check disabled">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" disabled>
                    <span class="form-check-sign"></span>
                    Disabled Checked
                  </label>
                </div>
              </div>
              <div class="col-sm-5 checkbox-radios">
                <div class="form-check form-check-radio">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="exampleRadio" id="exampleRadios3" value="option1">
                    <span class="form-check-sign"></span>
                    Radio is off
                  </label>
                </div>
                <div class="form-check form-check-radio">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="exampleRadio" id="exampleRadios4" value="option2" checked>
                    <span class="form-check-sign"></span>
                    Radio is on
                  </label>
                </div>
                <div class="form-check form-check-radio disabled">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="exampleRadio1" id="exampleRadios5" value="option1" disabled>
                    <span class="form-check-sign"></span>
                    Radio is off
                  </label>
                </div>
                <div class="form-check form-check-radio disabled">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="exampleRadio1" id="exampleRadios6" value="option2" checked disabled>
                    <span class="form-check-sign"></span>
                    Radio is on
                  </label>
                </div>
              </div>
            </div>
            <div class="row">
              <label class="col-sm-2 col-form-label">Input with success</label>
              <div class="col-sm-10">
                <div class="form-group has-success">
                  <input type="text" class="form-control" value="Success">
                </div>
              </div>
            </div>
            <div class="row">
              <label class="col-sm-2 col-form-label">Input with error</label>
              <div class="col-sm-10">
                <div class="form-group has-danger">
                  <input type="text" class="form-control" value="Error">
                </div>
              </div>
            </div>
            <div class="row">
              <label class="col-sm-2 col-form-label">Column sizing</label>
              <div class="col-sm-10">
                <div class="row">
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
                  <div class="col-md-5">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder=".col-md-5">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection