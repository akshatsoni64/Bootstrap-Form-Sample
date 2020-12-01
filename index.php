<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ipaytotal Checkout Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
  <link rel="stylesheet" href="CSS/styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container-fluid">
      <img class="mt-2" src="https://ipaytotal.solutions/newTheme/assets/img/logo.png" style="margin-left:40%;width:20%;height:auto">
      <form class="mt-3" action="server.php" method="POST">
        <div class="border mx-5 p-4">
          <!-- Row 1 -->
          <div class="row">
            <div class="col">            
              <div class="form-group">
                <label for="usr">First Name<code>*</code></label>
                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" required>
              </div>
            </div>
            <div class="col">            
              <div class="form-group">
                <label for="usr">Last Name<code>*</code></label>
                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" required>
              </div>
            </div>
          </div>
          <!-- Row 2 -->
          <div class="row">
            <div class="col">            
              <div class="form-group">
                <label for="usr">Address<code>*</code></label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Address" required>
              </div>
            </div>
            <div class="col">            
              <div class="form-group">
                <label for="usr">Customer Order ID Number<code>*</code></label>
                <input type="text" class="form-control" name="sulte_apt_no" placeholder="Customer Order ID Number" required>
              </div>
            </div>
          </div>
          <!-- Row 3 -->
          <div class="row">
            <div class="col">            
              <div class="form-group">
                <label for="sel1">Country<code>*</code></label>
                <select class="form-control" id="country" name="country" required>
                  <option selected disabled>-- Select Country Type --</option>
                  <option value="AF">Afghanistan</option>
                  <option value="AX">Åland Islands</option>
                  <option value="AL">Albania</option>
                  <option value="DZ">Algeria</option>
                  <option value="AS">American Samoa</option>
                  <option value="AD">Andorra</option>
                  <option value="AO">Angola</option>
                  <option value="AI">Anguilla</option>
                  <option value="AQ">Antarctica</option>
                  <option value="AG">Antigua and Barbuda</option>
                  <option value="AR">Argentina</option>
                  <option value="AM">Armenia</option>
                  <option value="AW">Aruba</option>
                  <option value="AU">Australia</option>
                  <option value="AT">Austria</option>
                  <option value="AZ">Azerbaijan</option>
                  <option value="BS">Bahamas</option>
                  <option value="BH">Bahrain</option>
                  <option value="BD">Bangladesh</option>
                  <option value="BB">Barbados</option>
                  <option value="BY">Belarus</option>
                  <option value="BE">Belgium</option>
                  <option value="BZ">Belize</option>
                  <option value="BJ">Benin</option>
                  <option value="BM">Bermuda</option>
                  <option value="BT">Bhutan</option>
                  <option value="BO">Bolivia</option>
                  <option value="BA">Bosnia and Herzegovina</option>
                  <option value="BW">Botswana</option>
                  <option value="BV">Bouvet Island</option>
                  <option value="BR">Brazil</option>
                  <option value="IO">British Indian Ocean Territory</option>
                  <option value="BN">Brunei Darussalam</option>
                  <option value="BG">Bulgaria</option>
                  <option value="BF">Burkina Faso</option>
                  <option value="BI">Burundi</option>
                  <option value="KH">Cambodia</option>
                  <option value="CM">Cameroon</option>
                  <option value="CA">Canada</option>
                  <option value="CV">Cape Verde</option>
                  <option value="KY">Cayman Islands</option>
                  <option value="CF">Central African Republic</option>
                  <option value="TD">Chad</option>
                  <option value="CL">Chile</option>
                  <option value="CN">China</option>
                  <option value="CX">Christmas Island</option>
                  <option value="CC">Cocos (Keeling) Islands</option>
                  <option value="CO">Colombia</option>
                  <option value="KM">Comoros</option>
                  <option value="CG">Congo</option>
                  <option value="CD">Congo, The Democratic Republic of The</option>
                  <option value="CK">Cook Islands</option>
                  <option value="CR">Costa Rica</option>
                  <option value="CI">Cote D&#039;ivoire</option>
                  <option value="HR">Croatia</option>
                  <option value="CU">Cuba</option>
                  <option value="CY">Cyprus</option>
                  <option value="CZ">Czech Republic</option>
                  <option value="DK">Denmark</option>
                  <option value="DJ">Djibouti</option>
                  <option value="DM">Dominica</option>
                  <option value="DO">Dominican Republic</option>
                  <option value="EC">Ecuador</option>
                  <option value="EG">Egypt</option>
                  <option value="SV">El Salvador</option>
                  <option value="GQ">Equatorial Guinea</option>
                  <option value="ER">Eritrea</option>
                  <option value="EE">Estonia</option>
                  <option value="ET">Ethiopia</option>
                  <option value="FK">Falkland Islands (Malvinas)</option>
                  <option value="FO">Faroe Islands</option>
                  <option value="FJ">Fiji</option>
                  <option value="FI">Finland</option>
                  <option value="FR">France</option>
                  <option value="GF">French Guiana</option>
                  <option value="PF">French Polynesia</option>
                  <option value="TF">French Southern Territories</option>
                  <option value="GA">Gabon</option>
                  <option value="GM">Gambia</option>
                  <option value="GE">Georgia</option>
                  <option value="DE">Germany</option>
                  <option value="GH">Ghana</option>
                  <option value="GI">Gibraltar</option>
                  <option value="GR">Greece</option>
                  <option value="GL">Greenland</option>
                  <option value="GD">Grenada</option>
                  <option value="GP">Guadeloupe</option>
                  <option value="GU">Guam</option>
                  <option value="GT">Guatemala</option>
                  <option value="GG">Guernsey</option>
                  <option value="GN">Guinea</option>
                  <option value="GW">Guinea-bissau</option>
                  <option value="GY">Guyana</option>
                  <option value="HT">Haiti</option>
                  <option value="HM">Heard Island and Mcdonald Islands</option>
                  <option value="VA">Holy See (Vatican City State)</option>
                  <option value="HN">Honduras</option>
                  <option value="HK">Hong Kong</option>
                  <option value="HU">Hungary</option>
                  <option value="IS">Iceland</option>
                  <option value="IN">India</option>
                  <option value="ID">Indonesia</option>
                  <option value="IR">Iran, Islamic Republic of</option>
                  <option value="IQ">Iraq</option>
                  <option value="IE">Ireland</option>
                  <option value="IM">Isle of Man</option>
                  <option value="IL">Israel</option>
                  <option value="IT">Italy</option>
                  <option value="JM">Jamaica</option>
                  <option value="JP">Japan</option>
                  <option value="JE">Jersey</option>
                  <option value="JO">Jordan</option>
                  <option value="KZ">Kazakhstan</option>
                  <option value="KE">Kenya</option>
                  <option value="KI">Kiribati</option>
                  <option value="KP">Korea, Democratic People&#039;s Republic of</option>
                  <option value="KR">Korea, Republic of</option>
                  <option value="KW">Kuwait</option>
                  <option value="KG">Kyrgyzstan</option>
                  <option value="LA">Lao People&#039;s Democratic Republic</option>
                  <option value="LV">Latvia</option>
                  <option value="LB">Lebanon</option>
                  <option value="LS">Lesotho</option>
                  <option value="LR">Liberia</option>
                  <option value="LY">Libyan Arab Jamahiriya</option>
                  <option value="LI">Liechtenstein</option>
                  <option value="LT">Lithuania</option>
                  <option value="LU">Luxembourg</option>
                  <option value="MO">Macao</option>
                  <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
                  <option value="MG">Madagascar</option>
                  <option value="MW">Malawi</option>
                  <option value="MY">Malaysia</option>
                  <option value="MV">Maldives</option>
                  <option value="ML">Mali</option>
                  <option value="MT">Malta</option>
                  <option value="MH">Marshall Islands</option>
                  <option value="MQ">Martinique</option>
                  <option value="MR">Mauritania</option>
                  <option value="MU">Mauritius</option>
                  <option value="YT">Mayotte</option>
                  <option value="MX">Mexico</option>
                  <option value="FM">Micronesia, Federated States of</option>
                  <option value="MD">Moldova, Republic of</option>
                  <option value="MC">Monaco</option>
                  <option value="MN">Mongolia</option>
                  <option value="ME">Montenegro</option>
                  <option value="MS">Montserrat</option>
                  <option value="MA">Morocco</option>
                  <option value="MZ">Mozambique</option>
                  <option value="MM">Myanmar</option>
                  <option value="NA">Namibia</option>
                  <option value="NR">Nauru</option>
                  <option value="NP">Nepal</option>
                  <option value="NL">Netherlands</option>
                  <option value="AN">Netherlands Antilles</option>
                  <option value="NC">New Caledonia</option>
                  <option value="NZ">New Zealand</option>
                  <option value="NI">Nicaragua</option>
                  <option value="NE">Niger</option>
                  <option value="NG">Nigeria</option>
                  <option value="NU">Niue</option>
                  <option value="NF">Norfolk Island</option>
                  <option value="MP">Northern Mariana Islands</option>
                  <option value="NO">Norway</option>
                  <option value="OM">Oman</option>
                  <option value="PK">Pakistan</option>
                  <option value="PW">Palau</option>
                  <option value="PS">Palestinian Territory, Occupied</option>
                  <option value="PA">Panama</option>
                  <option value="PG">Papua New Guinea</option>
                  <option value="PY">Paraguay</option>
                  <option value="PE">Peru</option>
                  <option value="PH">Philippines</option>
                  <option value="PN">Pitcairn</option>
                  <option value="PL">Poland</option>
                  <option value="PT">Portugal</option>
                  <option value="PR">Puerto Rico</option>
                  <option value="QA">Qatar</option>
                  <option value="RE">Reunion</option>
                  <option value="RO">Romania</option>
                  <option value="RU">Russian Federation</option>
                  <option value="RW">Rwanda</option>
                  <option value="SH">Saint Helena</option>
                  <option value="KN">Saint Kitts and Nevis</option>
                  <option value="LC">Saint Lucia</option>
                  <option value="PM">Saint Pierre and Miquelon</option>
                  <option value="VC">Saint Vincent and The Grenadines</option>
                  <option value="WS">Samoa</option>
                  <option value="SM">San Marino</option>
                  <option value="ST">Sao Tome and Principe</option>
                  <option value="SA">Saudi Arabia</option>
                  <option value="SN">Senegal</option>
                  <option value="RS">Serbia</option>
                  <option value="SC">Seychelles</option>
                  <option value="SL">Sierra Leone</option>
                  <option value="SG">Singapore</option>
                  <option value="SK">Slovakia</option>
                  <option value="SI">Slovenia</option>
                  <option value="SB">Solomon Islands</option>
                  <option value="SO">Somalia</option>
                  <option value="ZA">South Africa</option>
                  <option value="GS">South Georgia and The South Sandwich Islands</option>
                  <option value="ES">Spain</option>
                  <option value="LK">Sri Lanka</option>
                  <option value="SD">Sudan</option>
                  <option value="SR">Suriname</option>
                  <option value="SJ">Svalbard and Jan Mayen</option>
                  <option value="SZ">Swaziland</option>
                  <option value="SE">Sweden</option>
                  <option value="CH">Switzerland</option>
                  <option value="SY">Syrian Arab Republic</option>
                  <option value="TW">Taiwan, Province of China</option>
                  <option value="TJ">Tajikistan</option>
                  <option value="TZ">Tanzania, United Republic of</option>
                  <option value="TH">Thailand</option>
                  <option value="TL">Timor-leste</option>
                  <option value="TG">Togo</option>
                  <option value="TK">Tokelau</option>
                  <option value="TO">Tonga</option>
                  <option value="TT">Trinidad and Tobago</option>
                  <option value="TN">Tunisia</option>
                  <option value="TR">Turkey</option>
                  <option value="TM">Turkmenistan</option>
                  <option value="TC">Turks and Caicos Islands</option>
                  <option value="TV">Tuvalu</option>
                  <option value="UG">Uganda</option>
                  <option value="UA">Ukraine</option>
                  <option value="AE">United Arab Emirates</option>
                  <option value="GB">United Kingdom</option>
                  <option value="US">United States</option>
                  <option value="UM">United States Minor Outlying Islands</option>
                  <option value="UY">Uruguay</option>
                  <option value="UZ">Uzbekistan</option>
                  <option value="VU">Vanuatu</option>
                  <option value="VE">Venezuela</option>
                  <option value="VN">Viet Nam</option>
                  <option value="VG">Virgin Islands, British</option>
                  <option value="VI">Virgin Islands, U.S.</option>
                  <option value="WF">Wallis and Futuna</option>
                  <option value="EH">Western Sahara</option>
                  <option value="YE">Yemen</option>
                  <option value="ZM">Zambia</option>
                  <option value="ZW">Zimbabwe</option>
                </select>
              </div>
            </div>
            <div class="col">            
              <div class="form-group">
                <label for="state">State<code>*</code></label>
                <input type="text" class="form-control" id="state" name="state" placeholder="State" required>
              </div>
            </div>
          </div>
          <!-- Row 4 -->
          <div class="row">
            <div class="col">            
              <div class="form-group">
                <label for="city">City<code>*</code></label>
                <input type="text" class="form-control" id="city" name="city" placeholder="City" required>
              </div>
            </div>
            <div class="col">            
              <div class="form-group">
                <label for="zip">Zip Code<code>*</code></label>
                <input type="number" class="form-control" id="zip" name="zip" placeholder="Zip Code" required>
              </div>
            </div>
          </div>
          <!-- Row 5 -->
          <div class="row">
            <div class="col"> 
              <label for="email">Email<code>*</code></label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fa fa-envelope"></i>
                  </span>
                </div>
                <input type="email" class="form-control" placeholder="Email" id="email" name="email" required>
              </div>
            </div>
            <div class="col">
              <label for="phone_no">Phone No.<code>*</code></label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fa fa-mobile"></i>
                  </span>
                </div>
                <input type="number" class="form-control" placeholder="Phone No." id="phone_no" name="phone_no" required>
                <code style="font-size:12px;font-weight:normal;">Note : Enter the phone number in the following format '+Country Code-Phone Number'; e.g."+441234567890"</code>
              </div>
            </div>
          </div>
          <!-- Row 6 -->
          <div class="row">
            <div class="col mt-2"> 
              <label for="amount">Amount<code>*</code></label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                  <i class="fa fa-money"></i>
                  </span>
                </div>
                <input type="number" class="form-control" placeholder="Amount" id="amount" name="amount" required>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="currency">Currency<code style="font-size:20px">*</code></label>
                <select class="form-control" id="currency" name="currency" required>
                  <option selected disabled>-- Select Currency --</option>
                  <option value="USD" selected>USD</option>
                  <option value="HKD">HKD</option>
                  <option value="GBP">GBP</option>
                  <option value="JPY">JPY</option>
                  <option value="EUR">EUR</option>
                  <option value="AUD">AUD</option>
                  <option value="CAD">CAD</option>
                  <option value="SGD">SGD</option>
                  <option value="NZD">NZD</option>
                  <option value="TWD">TWD</option>
                  <option value="KRW">KRW</option>
                  <option value="DKK">DKK</option>
                  <option value="TRL">TRL</option>
                  <option value="MYR">MYR</option>
                  <option value="THB">THB</option>
                  <option value="INR">INR</option>
                  <option value="PHP">PHP</option>
                  <option value="CHF">CHF</option>
                  <option value="SEK">SEK</option>
                  <option value="ILS">ILS</option>
                  <option value="ZAR">ZAR</option>
                  <option value="RUB">RUB</option>
                  <option value="NOK">NOK</option>
                  <option value="AED">AED</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="border border-left-0 border-right-0 mx-5 p-3 mt-3">
          <input type="submit" name="submit" class="btn btn-sm py-2 px-3 btn-success" value="Submit">
          <input type="reset" class="btn btn-sm p-2 px-3 btn-warning" value="Cancel">
        </div>
      </form>
      <div class="footer text-center ml-5 py-3">
          <img src="https://ipaytotal.solutions/imgs/card-logos.jpg" alt="Master Card And Visa" title="Master Card And Visa" border="0" style="width: 80px;">
          <a href="javascript:"><img src="https://ipaytotal.solutions/imgs/pci_logo_footer.jpg" alt="PCI-DSS - certified by SISA" title="PCI-DSS - certified by SISA" border="0"></a>
          <a href="#" target="_blank" title="Norton Secured Powered by VeriSign"><img src="https://ipaytotal.solutions/imgs/norton_logo_footer.jpg " alt="Norton Secured Powered by VeriSign" title="Norton Secured Powered by VeriSign" border="0"></a>
          <img src="https://ipaytotal.solutions/imgs/mastercard_logo_footer.jpg" alt="MasterCard SecureCode" title="MasterCard SecureCode" border="0">
          <img src="https://ipaytotal.solutions/imgs/visa_logo_footer.jpg" alt="Verified by VISA" title="Verified by VISA" border="0">
          <img src="https://ipaytotal.solutions/imgs/american_exp_footer.jpg" alt="American Express SafeKey" title="American Express SafeKey" border="0">
          <img src="https://ipaytotal.solutions/imgs/SafeSecureLogo.jpg" alt="SafeSecure" title="SafeSecure" border="0" style="width: 70px;">
          <img src="https://ipaytotal.solutions/imgs/ssl.png" alt="SSL" title="SSL" border="0" style="width: 70px;">
          <img src="https://ipaytotal.solutions/imgs/sitelock.png" alt="sitelock" title="sitelock" border="0" style="width: 70px;">
          <img src="https://ipaytotal.solutions/imgs/jcb_logo_footer.jpg" alt="JCB J/Secure" title="JCB J/Secure" border="0">
          <img src="https://ipaytotal.solutions/imgs/comodo.png" alt="Comode" title="Comode" border="0" style="width: 80px;">
        </div>
    </div>
</body>
</html>