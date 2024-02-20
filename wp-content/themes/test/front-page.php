<!DOCTYPE html>
<html>

<head>

    <meta name="viewport" content="width=device-width">
    <meta charset="utf-8">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

    <?php
    wp_head();
    ?>
</head>

<body>
    <div id="__next">
        <div>
            <div style="margin-top:0;padding-top:12px;margin-left:0" class="header-public row">
                <div class="offset-sm-1 col-6 col-sm-5 col-md-5 col-lg-5"></div>

                <div style="text-align:right;padding-top:15px" class="col-6 col-sm-5 col-md-5 col-lg-5">
                    <div style="float:right;margin-top:-5px" class="toplink">
                        <div class="dropdown">
                            <button class="btn btn-secondary" style="width:30px;background-color:transparent;padding:0;border-color:white" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><span class="flag-icon flag-icon-us me-1"></span></button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li>
                                    <a class="dropdown-item active" href="#"><span class="flag-icon flag-icon-us me-1"></span><span>English</span></a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-sa me-1"></span><span>Arabic</span> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div style="float:right;cursor:pointer" class="toplink">All advantages</div>

                </div>
            </div>
        </div>
        <div style="margin-top:50px" class="container">
            <form>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-7">
                        <div class="checkout">
                            <div class="row">
                                <div class="offset-sm-1 col-12 col-sm-10">
                                    <div class="row">
                                        <div style="margin-top:30px;display:block" class="t-none col-11">
                                            <div class="p-title">Registration &amp; Booking at GoStudent</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="t-none col-11">
                                            <div class="s-title">The leading platform for online tutoring.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div style="margin-top:30px" class="offset-sm-1 col-12 col-sm-10">
                                    <div class="form-group">
                                        <label for="formGroupInput" class="handynummer">LOGIN PHONE NUMBER
                                            <span style="text-transform:none;color:black">(<!-- -->preferably
                                                <span style="text-decoration:underline">the student's</span><!-- -->)</span>
                                        </label>
                                        <div class="input-group">
                                            <input type="text" class="form-control phone1" id="formGroupInput">
                                        </div>
                                    </div>

                                    <div style="margin-top:30px" class="form-group">
                                        <label for="formGroupInput" class="handynummer">CONTACT PHONE NUMBER
                                            <span style="text-transform:none;color:black">(<!-- -->preferably
                                                <span style="text-decoration:underline">the parent's</span><!-- -->)</span>
                                        </label>
                                        <div class="input-group">
                                            <input type="text" class="form-control phone2" id="formGroupInput">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div style="margin-top:10px" class="offset-sm-1 col-12 col-sm-10">
                                    <div class="form-group">
                                        <label for="email" class="handynummer">CONTACT EMAIL ADDRESS<!-- -->
                                            <span style="text-transform:none;color:black">(<!-- -->preferably
                                                <span style="text-decoration:underline">the parent's</span>)
                                            </span>
                                        </label>
                                        <div class="input-group">
                                            <input type="email" value="" name="email" id="email" class="form-control" fdprocessedid="n7s9qg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div style="margin-top:10px" class="offset-sm-1 col-12 col-sm-10">
                                    <div class="form-group">
                                        <label for="name" class="handynummer">
                                            CONTACT NAME
                                        </label>
                                        <div class="input-group">
                                            <input type="text" name="name" value="" id="name" class="form-control" fdprocessedid="9iuvhs">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="row">
                                    <div style="margin-top:10px" class="offset-sm-1 col-12 col-sm-10">
                                        <div class="row">
                                            <div class="col col-sm-9 form-group"><label for="address" class="handynummer">BILLING ADDRESS</label>
                                                <div><input type="text" value="" name="adresse" id="adresse" placeholder="Address" class="form-control" fdprocessedid="zngn6p"></div>
                                            </div>
                                            <div class="col col-sm-3 form-group"><label class="">&nbsp;</label>
                                                <div><input type="text" value="" name="haus" id="haus" placeholder="Nr" class="form-control" fdprocessedid="n9853g"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div style="margin-top:10px" class="offset-sm-1 col-12 col-sm-10">
                                        <div class="row">
                                            <div class="col col-sm-4 form-group">
                                                <div><input type="text" value="" name="plz" id="plz" placeholder="Postal code" class="form-control" fdprocessedid="gciulm"></div>
                                            </div>
                                            <div class="col col-sm-4 form-group">
                                                <div><input type="text" value="" name="stadt" id="stadt" placeholder="City" class="form-control" fdprocessedid="oebqx"></div>
                                            </div>
                                            <div class="col col-sm-4 form-group">
                                                <div><select name="land" id="land" placeholder="Country" class="form-control" fdprocessedid="xnkhft">
                                                        <option selected="" value="">Country</option>
                                                        <option value="egypt">Egypt</option>
                                                        <option value="uae">UAE</option>

                                                    </select></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div style="margin-top:10px" class="offset-sm-1 col-12 col-sm-10">
                                    <div class="form-group"><label for="exampleSelect" class="handynummer">Monthly sessions<div style="margin-top:5px;text-transform:none;letter-spacing:0;font-size:13px;color:#131E29;font-weight:400"></div></label><select name="plan" id="plan" class="form-control" fdprocessedid="trwq6">
                                            <option selected="" value="gsSession-8-250921">8 Sessions</option>
                                            <option value="gsSession-12-250921">10 Sessions</option>
                                        </select></div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div style="background-color:#F5F7F9" class="col-12 col-sm-12 col-md-5">
                        <div class="row">
                            <div style="padding-left:0" class="offset-1 col-10 col-sm-10">
                                <div class="handynummer" style="margin-top:50px;color:black;font-weight:900">
                                    <div class="row">
                                        <div class="col-12 col-sm-12">ORDER OVERVIEW</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="offset-sm-1 col-12 col-sm-10">
                                <div class="row">
                                    <div style="margin-top:30px;margin-bottom:40px" class="du col-12 col-sm-12">
                                        <div class="row">
                                            <div style="border-color:blue" class="du-mid du col-4 col-sm-4">6 <!-- -->Months</div>
                                            <div class="du-mid du col-4 col-sm-4">9 <!-- -->Months</div>
                                            <div class="du-mid du col-4 col-sm-4">12 <!-- -->Months</div>
                                            <div class="du-mid du col-4 col-sm-4">18 <!-- -->Months</div>
                                            <div class="du-right du col-4 col-sm-4">24 <!-- -->Months</div>
                                            <div class="du-mid du col-4 col-sm-4">36 <!-- -->Months</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div style="margin-top:30px" class="col-12 col-sm-12">
                                        <div class="form-group">
                                            <div class="custom-switch custom-control"><input type="checkbox" id="infront" style="color:black" name="infrontSwitch" class="custom-control-input"><label class="custom-control-label" for="infront">Pay in advance - EXTRA 5% DISCOUNT</label></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div style="padding-left:10px;margin-top:30px" class="col-12 col-sm-12">
                                        <div class="row">
                                            <div class="summary col-10 col-sm-10">NUMBER OF SESSIONS<!-- --> <!-- -->P.M.</div>
                                            <div class="snumber col-2 col-sm-2">8</div>
                                        </div>
                                        <div class="row">
                                            <div class="summary col-8 col-sm-8">REGULAR PRICE</div>
                                            <div class="snumber col-4 col-sm-4" style="text-decoration: line-through;">29.60€</div>
                                        </div>
                                        <div class="row">
                                            <div class="summary col-8 col-sm-8">YOUR PRICE</div>
                                            <div class="snumber col-4 col-sm-4">28.40€</div>
                                        </div>
                                        <div class="row">
                                            <div class="summary col-7 col-sm-7" style="color: rgb(126, 211, 33);">Discount 4 %</div>
                                            <div class="snumber col-5 col-sm-5" style="font-size: 21px; color: rgb(126, 211, 33);">-9.60€</div>
                                        </div>
                                        <div class="hr"></div>
                                        <div class="row">
                                            <div class="summary col-7 col-sm-7" style="text-transform: none;">Setup fee</div>
                                            <div class="snumber col-5 col-sm-5" style="font-size: 21px; color: rgb(79, 95, 238);">0.00€</div>
                                        </div>
                                        <div class="row">
                                            <div style="text-transform:none" class="summary col-7 col-sm-7">TOTAL P.M.</div>
                                            <div style="font-size:21px;color:#4F5FEE" class="snumber col-5 col-sm-5">227.20€</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div style="margin-bottom:10px" class="offset-sm-1 col-12 col-sm-10">
                                <div class="form-check"><input type="checkbox" name="agreedToTerms" class="form-check-input"><label style="text-transform:none;font-size:13px;color:#93A9BF" class="form-check-label">I accept the<!-- --> <a target="_blank" rel="noopener noreferrer" href="https://www.gostudent.org/en/T&amp;Cs">Terms &amp; Conditions</a><span style="text-transform:none"> and understand my <a target="_blank" href="https://www.gostudent.org/en/T&amp;Cs#withdrawal">right of withdrawal</a> as well as the circumstances that lead to a repeal of the same.</span></label></div>
                            </div>
                        </div>
                        <div style="margin-bottom:110px" class="row">
                            <div style="padding:0" class="offset-sm-1 col-12 col-sm-10"><button class="weiter btn btn-secondary" fdprocessedid="1z3kqv">Order Now</button>
                            </div>
                        </div>
                        <div class="bottom row">
                            <div class="offset-sm-1 col-12 col-sm-10">
                                <div class="erfolg">95% Satisfaction Rate!</div>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $('.phone1').attr('placeholder', " ");
        $('.phone2').attr('placeholder', " ");


        const phoneInputField1 = document.querySelector(".phone1");
        const phoneInputField2 = document.querySelector(".phone2");
        $(document).ready(function() {
            $(".iti").width('100%');

        });


        const phoneInput1 = window.intlTelInput(phoneInputField1, {
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
        });
        const phoneInput2 = window.intlTelInput(phoneInputField2, {
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
        });
    </script>

</body>

</html>