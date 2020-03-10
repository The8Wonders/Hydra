<?php require_once "../extras/barra.php"; ?>
<div id="content">
                    <div class="outer">
                        <div class="inner bg-light lter">
                            <style>
    .form-control.col-lg-6 {
        width: 50% !important;
    }
</style>
<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <header class="dark">
                <div class="icons"><i class="fa fa-check"></i></div>
                <h5>Popup Validation</h5>
                <!-- .toolbar -->
            <div class="toolbar">
              <nav style="padding: 8px;">
                  <a href="javascript:;" class="btn btn-default btn-xs collapse-box">
                      <i class="fa fa-minus"></i>
                  </a>
                  <a href="javascript:;" class="btn btn-default btn-xs full-box">
                      <i class="fa fa-expand"></i>
                  </a>
                  <a href="javascript:;" class="btn btn-danger btn-xs close-box">
                      <i class="fa fa-times"></i>
                  </a>
              </nav>
            </div>            <!-- /.toolbar -->

            </header>
            <div id="collapse2" class="body">
                <form class="form-horizontal" id="popup-validation">

                    <div class="form-group">
                        <label class="control-label col-lg-4">Required</label>
                        <div class="col-lg-4">
                            <input type="text" class="validate[required] form-control" name="req" id="req">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4">Select</label>
                        <div class="col-lg-4">
                            <select name="sport" id="sport" class="validate[required] form-control">
                                <option value="">Choose a sport</option>
                                <option value="option1">Tennis</option>
                                <option value="option2">Football</option>
                                <option value="option3">Golf</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4">Multiple Select</label>

                        <div class="col-lg-4">
                            <select name="sport2" id="sport2" multiple class="validate[required] form-control">
                                <option value="">Choose a sport</option>
                                <option value="option1">Tennis</option>
                                <option value="option2">Football</option>
                                <option value="option3">Golf</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4">Url</label>

                        <div class=" col-lg-4">
                            <input value="http://" class="validate[required,custom[url]] form-control" type="text"
                                   name="url1" id="url1"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4">E-mail</label>

                        <div class=" col-lg-4">
                            <input class="validate[required,custom[email]] form-control" type="text" name="email1"
                                   id="email1"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4">Password</label>

                        <div class=" col-lg-4">
                            <input class="validate[required] form-control" type="password" name="pass1" id="pass1"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">Confirm Password</label>

                        <div class=" col-lg-4">
                            <input class="validate[required,equals[pass1]] form-control" type="password" name="pass2"
                                   id="pass2"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4">Minimum field size (6)</label>

                        <div class=" col-lg-4">
                            <input value="" class="validate[required,minSize[6]] form-control" type="text" name="minsize1"
                                   id="minsize1"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4">Maximum field size, optional</label>

                        <div class=" col-lg-4">
                            <input value="0123456789" class="validate[optional,maxSize[6]] form-control" type="text"
                                   name="maxsize1" id="maxsize1"/>
                            <span class="help-block">note that the field is optional - it won't fail if it has no value</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4">Number</label>

                        <div class=" col-lg-4">
                            <input value="-33.87a" class="validate[required,custom[number]] form-control" type="text"
                                   name="numbe2r" id="number2"/>
                            <span class="help-block">a signed floating number, ie: -3849.354, 38.00, 38, .77</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4">IP</label>

                        <div class=" col-lg-4">
                            <input value="192.168.3." class="validate[required,custom[ipv4]] form-control" type="text"
                                   name="ip" id="ip"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4">Date</label>

                        <div class=" col-lg-4">
                            <input value="201-12-01" class="validate[required,custom[date]] form-control" type="text"
                                   name="date3" id="date3"/>
                            <span class="help-block">ISO 8601 dates only YYYY-mm-dd</span>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-lg-4">Date Earlier</label>

                        <div class=" col-lg-4">
                            <input value="2012/12/16" class="validate[custom[date],past[2012/09/13]] form-control"
                                   type="text" name="past" id="past"/>
                            <span class="help-block">Please enter a date ealier than 2012/09/13</span>
                        </div>
                    </div>

                    <div class="form-actions no-margin-bottom">
                        <input type="submit" value="Validate" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <header>
                <div class="icons"><i class="fa fa-th-large"></i></div>
                <h5>Block Validation</h5>
                <!-- .toolbar -->
            <div class="toolbar">
              <nav style="padding: 8px;">
                  <a href="javascript:;" class="btn btn-default btn-xs collapse-box">
                      <i class="fa fa-minus"></i>
                  </a>
                  <a href="javascript:;" class="btn btn-default btn-xs full-box">
                      <i class="fa fa-expand"></i>
                  </a>
                  <a href="javascript:;" class="btn btn-danger btn-xs close-box">
                      <i class="fa fa-times"></i>
                  </a>
              </nav>
            </div>            <!-- /.toolbar -->

            </header>
            <div id="collapseOne" class="body">
                <form action="#" class="form-horizontal" id="block-validate">

                    <div class="form-group">
                        <label class="control-label col-lg-4">Required</label>
                        <div class="col-lg-4">
                            <input type="text" id="required2" name="required2" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">E-mail</label>

                        <div class="col-lg-4">
                            <input type="email" id="email2" name="email2" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">Password</label>

                        <div class="col-lg-4">
                            <input type="password" id="password2" name="password2" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">Confirm Password</label>

                        <div class="col-lg-4">
                            <input type="password" id="confirm_password2" name="confirm_password2" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">Date</label>

                        <div class="col-lg-4">
                            <input type="date" id="date2" name="date2" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">Url</label>

                        <div class="col-lg-4">
                            <input type="url" id="url2" name="url2" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">Digits Only</label>

                        <div class="col-lg-4">
                            <input type="text" id="digits" name="digits" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">Range [6,16]</label>

                        <div class="col-lg-4">
                            <input type="text" id="range" name="range" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4">Please agree to our policy</label>

                        <div class="col-lg-4">
                            <input type="checkbox" id="agree2" name="agree2" class="form-control">
                        </div>
                    </div>
                    <div class="form-actions no-margin-bottom">
                        <input type="submit" value="Validate" class="btn btn-primary">
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->


<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <header>
                <div class="icons"><i class="fa fa-ellipsis-h"></i></div>
                <h5>Inline Validation</h5>
                <!-- .toolbar -->
            <div class="toolbar">
              <nav style="padding: 8px;">
                  <a href="javascript:;" class="btn btn-default btn-xs collapse-box">
                      <i class="fa fa-minus"></i>
                  </a>
                  <a href="javascript:;" class="btn btn-default btn-xs full-box">
                      <i class="fa fa-expand"></i>
                  </a>
                  <a href="javascript:;" class="btn btn-danger btn-xs close-box">
                      <i class="fa fa-times"></i>
                  </a>
              </nav>
            </div>            <!-- /.toolbar -->

            </header>
            <div id="collapse3" class="body">
                <form action="#" class="form-horizontal" id="inline-validate">
                    <div class="form-group">
                        <label class="control-label col-lg-4">Required</label>

                        <div class="col-lg-8">
                            <input type="text" id="required" name="required" class="form-control col-lg-6">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">E-mail</label>

                        <div class="col-lg-8">
                            <input type="email" id="email" name="email" class="form-control col-lg-6">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">Password</label>

                        <div class="col-lg-8">
                            <input type="password" id="password" name="password" class="form-control col-lg-6">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">Confirm Password</label>

                        <div class="col-lg-8">
                            <input type="password" id="confirm_password" name="confirm_password" class="form-control col-lg-6">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">Date</label>

                        <div class="col-lg-8">
                            <input type="date" id="date" name="date" class="form-control col-lg-6">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">Url</label>

                        <div class="col-lg-8">
                            <input type="url" id="url" name="url" class="form-control col-lg-6">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">Please agree to our policy</label>

                        <div class="col-lg-8">
                            <input type="checkbox" id="agree" name="agree" class="form-control col-lg-6">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">Minimum 3 Chars</label>

                        <div class="col-lg-8">
                            <input type="text" id="minsize" name="minsize" class="form-control col-lg-6">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">Maximum 6 Chars</label>

                        <div class="col-lg-8">
                            <input type="text" id="maxsize" name="maxsize" class="form-control col-lg-6">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">Minimum 3 </label>

                        <div class="col-lg-8">
                            <input type="text" id="minNum" name="minNum" class="form-control col-lg-6">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">Maximum 16 </label>

                        <div class="col-lg-8">
                            <input type="text" id="maxNum" name="maxNum" class="form-control col-lg-6">
                        </div>
                    </div>
                    <div class="form-actions">
                        <input type="submit" value="Validate" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->

                        </div>
                        <!-- /.inner -->
                    </div>
                    <!-- /.outer -->
                </div>
                <!-- /#content -->
