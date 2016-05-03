<?php include 'includes/header.php'; ?>
    <h1 class="page_header">Return Form</h1>
    <hr class="decorative_break_2">
    <section id="basic_static_content">
        <p>You will need your order number in order to complete the return form and receive a prepaid shipping
            label.</p>
        <p>You can find your order number on your packing slip, or the email that you received from Samuel Hubbard when your
            order shipped, or in <a href="/customer_login.php">your account</a> if you created one previously.</p>
        <p>Otherwise contact us and we will locate your order number for you.</p>
        <ul class="contact_list">
            <li><i class="fa fa-phone-square"></i>(844) 482-4800</li>
            <li><a href="mailto:support@samuelhubbard.com"><i class="fa fa-envelope-square"></i>support@samuelhubbard.com</a>
            </li>
        </ul>
        <section class="basic_form_box">
            <div class="basic_form_box_inner">
                <form id="form-validate" method=post action=https://row.ups.com/Ship/LabelPost.aspx>
                    <!-- Authentication Information -->
                    <input type="hidden" name="Company" value="HubbardShoes"/>
                    <input type="hidden" name="LoginId" value="HubbardShoes"/>
                    <input type="hidden" name="Password" value="hubbardshoes"/>
                    <input type="hidden" name="AcctNumb" value="3Y7250"/>
                    <input type="hidden" name="PayAccount" maxLength="35" value="kJrGM619"/>
                    <!-- Prepaid or Third party acct info -->
                    <input type="hidden" name="PayInfo" value="P"/>
                    <input type="hidden" name="UseNegotiatedRates" value="False"/>


                    <h3>Shipping Label</h3>
                    <p>All fields are required unless otherwise noted</p>
                    <label for="name" class="required">Name</label>
                    <div class="input-box">
                        <input type="text" id="SFname" name="SFname" value="" title="Name" maxlength="35"
                               class="input-text required-entry">
                        <input value="" type="hidden" name="SFAttn">
                    </div><!-- end input box -->
                    <label for="addr1" class="required">Address Line 1</label>
                    <div class="input-box">
                        <input type="text" id="SFAddr1" name="SFAddr1" value="" title="Address Line 1" maxlength="35"
                               class="input-text required-entry">
                    </div><!-- end input box -->
                    <label for="addr2" class="required">Address Line 2</label>
                    <div class="input-box">
                        <input type="text" id="SFAddr2" name="SFAddr2" value="" title="Address Line 2" maxlength="35"
                               class="input-text" placeholder="(optional)">
                        <input maxLength="35" type="hidden" name="SFAddr3">
                    </div><!-- end input box -->
                    <label for="city" class="required">City</label>
                    <div class="input-box">
                        <input type="text" id="SFCity" name="SFCity" value="" title="City" maxlength="30"
                               class="input-text required-entry">
                    </div><!-- end input box -->
                    <label for="state" class="required">State</label>
                    <div class="input-box">
                        <select class="input-text required-entry" id="SFState" name="SFState" maxLength=5>
                            <option value="">- Please Select -</option>
                            <option value="AL">Alabama</option>
                            <option value="AK">Alaska</option>
                            <option value="AS">American Samoa</option>
                            <option value="AZ">Arizona</option>
                            <option value="AR">Arkansas</option>
                            <option value="CA">California</option>
                            <option value="CO">Colorado</option>
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="DC">District of Columbia</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="GU">Guam</option>
                            <option value="HI">Hawaii</option>
                            <option value="ID">Idaho</option>
                            <option value="IL">Illinois</option>
                            <option value="IN">Indiana</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="ME">Maine</option>
                            <option value="MH">Marshal Islands</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NV">Nevada</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NM">New Mexico</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="ND">North Dakota</option>
                            <option value="MP">Northern Mariana Islands</option>
                            <option value="OH">Ohio</option>
                            <option value="OK">Oklahoma</option>
                            <option value="OR">Oregon</option>
                            <option value="PW">Palau</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="PR">Puerto Rico</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="SD">South Dakota</option>
                            <option value="TN">Tennessee</option>
                            <option value="TX">Texas</option>
                            <option value="UT">Utah</option>
                            <option value="VT">Vermont</option>
                            <option value="VI">Virgin Islands</option>
                            <option value="VA">Virginia</option>
                            <option value="WA">Washington</option>
                            <option value="WV">West Virginia</option>
                            <option value="WI">Wisconsin</option>
                            <option value="WY">Wyoming</option>
                        </select>
                    </div><!-- end input box -->
                    <label for="postal" class="required">Postal Code</label>
                    <div class="input-box">
                        <input type="text" id="SFZip" name="SFZip" value="" title="Postal Code" maxlength="10"
                               class="input-text required-entry">
                        <input value="US" maxLength="2" type="hidden" name="SFCountry">
                    </div><!-- end input box -->
                    <label for="phone" class="required">Phone Number</label>
                    <div class="input-box">
                        <input type="text" id="SFPhone" name="SFPhone" value="" title="Phone Number" maxlength="15"
                               class="input-text">
                    </div><!-- end input box -->
                    <label for="email" class="required">E-Mail Address</label>
                    <div class="input-box">
                        <input type="text" id="SFEMail" name="SFEMail" value="" title="E-Mail Address" maxlength="50"
                               class="input-text validate-email required-entry">
                    </div><!-- end input box -->

                    <label for="order" class="required">Order Number</label>
                    <div class="input-box">
                        <input value="ECOMRET" type="hidden" id="PackageRef01" name="PackageRef01">
                        <input type="text" id="PackageRef03" name="PackageRef03" value="" title="Sales Order Number"
                               maxlength="35" class="input-text required-entry">

                        <input value="" maxLength="35" type="hidden" name="SFAttn">
                    </div><!-- end input box -->
                    <label for="return" class="required">Reason for Return</label>
                    <div class="input-box">
                        <select id="PackageRef02" name="PackageRef02" class="input-text required-entry">
                            <option value="">Please Select</option>
                            <option value="Does Not Fit">Does Not Fit</option>
                            <option value="Customer Not Satisfied">Customer Not Satisfied</option>
                            <option value="Gift from Someone Else">Gift from Someone Else</option>
                            <option value="Damaged">Damaged</option>
                            <option value="Defective">Defective</option>
                            <option value="Wrong Item">Wrong Item</option>
                            <option value="Other">Other</option>
                        </select>
                    </div><!-- end input box -->
                    <button type="submit" id="submit" title="Submit" class="button">Create Label</button>


                    <!-- Ship - To -->
                    <div id="shipTo" style="display: none">
                        <input value="Samuel Hubbard Shoe Company" maxLength=35 type="text"
                               name="STName">
                        <input value="Return" maxLength="35" type="text" name="STAttn">
                        <input value="30830 San Clemente St" maxLength=35 type=text name="STAddr1">
                        <input maxLength="35" type="hidden" name="STAddr3">
                        <input value="Hayward" maxLength="30" type="text" name="STCity">
                        <input value="CA" maxLength="5" type="text" name="STState">
                        <input value="94544" maxLength="9" type="text" name="STZip">
                        <input value="US" maxLength="2" type="hidden" name="STCountry">
                        <input value="exchanges@samuelhubbard.com" maxLength="50" type="hidden" name="STEMail">
                        <input maxLength="50" type="hidden" name="STAddEMail1">
                        <input maxLength="50" type="hidden" name="STAddEMail2">
                        <input maxLength="50" type="hidden" name="STAddEMail3">
                        <input value="False" type="hidden" name="STResidential"> <!-- True/False -->
                    </div><!-- end ship to -->

                    <div id="shipInfo" style="display: none">
                        <input value="1G" type="hidden" name="LabelFormatROW">
                        <!-- 1G = Gif/Laser, 2E = Eltron Thermal, 3S = Samsung Thermal, 4Z = Zebra Thermal -->
                        <input value="2R" type="hidden" name="RSType">
                        <!-- 2R = UPS Return Service, 1F = UPS Returns Flexible Access -->
                        <input value="03" type="hidden" name="ServiceCode"><!-- 2R01 = NDA, 02 = 2DA,03 = Ground-->
                        <input value="5P" type="hidden" name="DelMethodROW">
                        <!-- 5P = View/Print,4E = E-mail Label, 6A View &amp; Email -->
                        <input value="Shoes" type="hidden" name="Desc"> <!-- Description of merchandise -->
                        <input value="False" type="hidden" name="SatDelivery"> <!-- True/False -->
                        <!-- Package Information -->
                        <input value="02" type="hidden" name="PackageType"> <!-- 01 = UPS Letter, 02 = Customer Supplied -->
                        <input value="3" type="hidden" name="PackageWeight"> <!-- Decimal numeric -->

                        <input value="LBS" type="hidden" name="PackageWeightUnit"> <!-- LBS, KGS -->
                        <input type="hidden" name="PackageInsuredValue"> <!-- decimal numeric -->
                        <input value="USD" type="hidden" name="PackageInsuredCurrency">
                        <!-- Use 3-character ISO currency codes, examples: USD, CAD -->

                        <input value="MyRef4" type="hidden" name="PackageRef04"> <!-- Not used -->
                        <input value="MyRef5" type="hidden" name="PackageRef05"> <!-- Not used -->
                        <input value="MyRef6" type="hidden" name="PackageRef06"> <!-- Not used -->
                        <input value="MyRef7" type="hidden" name="PackageRef07"> <!-- Not used -->
                        <input value="MyRef8" type="hidden" name="PackageRef08"> <!-- Not used -->
                        <input value="MyRef9" type="hidden" name="PackageRef09"> <!-- Not used -->
                        <input value="MyRef10" type="hidden" name="PackageRef10"> <!-- Not used -->
                        <input type="hidden" name="PackageLength"> <!-- optional, inches -->
                        <input type="hidden" name="PackageWidth"> <!-- optional, inches -->
                        <input type="hidden" name="PackageHeight"> <!-- optional, inches -->
                        <input value="False" type="hidden" name="PackageHasAddHand">
                        <input value="False" type="hidden" name="PackageIsShipperRelease">
                        <input value="False" type="hidden" name="SFQVLabelCreated">
                        <!-- True/False - For Quantumview Label Created E-mail Notification -->
                        <input value="False" type="hidden" name="SFQVInTransit">
                        <!-- True/False - For Quantumview In-Transit E-mail Notification -->
                        <input value="False" type="hidden" name="SFQVException">
                        <!-- True/False - For Quantumview Exception E-mail Notification -->
                        <input value="False" type="hidden" name="SFQVDelivery">
                        <!-- True/False - For Quantumview Delivery E-mail Notification -->
                        <input value="False" type="hidden" name="STQVLabelCreated">
                        <!-- True/False - For Quantumview Label Created E-mail Notification -->
                        <input value="False" type="hidden" name="STQVInTransit">
                        <!-- True/False - For Quantumview In-Transit E-mail Notification -->
                        <input value="False" type="hidden" name="STQVException">
                        <!-- True/False - For Quantumview Exception E-mail Notification -->
                        <input value="False" type="hidden" name="STQVDelivery">
                        <!-- True/False - For Quantumview Delivery E-mail Notification -->
                        <input type="hidden" name="NumberOfPackages" value="1"/>
                    </div><!-- end ship to -->

                </form>
            </div><!-- end basic form box inner -->
        </section><!-- end basic form box -->
    </section><!-- end basic static content -->

<?php include 'includes/footer.php'; ?>