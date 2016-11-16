@extends('layouts.admin')
@section('title', 'Đơn hàng')
@section('pageHeader','Đơn hàng')
@section('detailHeader','tạo/chỉnh sửa đơn hàng')
@section('content')

    <div class="row">
        <div class="col-md-8 col-xs-12">
            <!-- Name and Description -->
            <div class="x_panel">
                <h2>Chi tiết đơn hàng</h2>

                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Tìm tạo mới sản phẩm" id="txtName"
                           required>
                </div>
                <input type="hidden" class="form-control" name="slug" placeholder="slug" id="txtSlug" required>

                <div class="form-group">
                    <div class="col-md-6 col-xs-12">
                        <label>Ghi chú</label>
                        <textarea class="form-control" rows="5" name="note"></textarea>
                        <label><a href="" class="add_attr"><i class="fa fa-plus-circle" aria-hidden="true"></i> Thuộc
                                tính</a></label>

                        <div class="clear"></div>
                        <div class="form_attr">
                            <div class="row ">
                                <div class="col-md-5">
                                    <input type="text" name="name_attr[]" class="form-inline form-control"
                                           placeholder="tên"/></div>
                                <div class="col-md-5">
                                    <input type="text" name="value_attr[]" class="form-inline form-control"
                                           placeholder="giá trị"/>
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-raised btn-primary" data-method="clear" title="Clear">
                          <span class="docs-tooltip" data-toggle="tooltip" title="xóa">
                            <span class="fa fa-remove"></span>
                          </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12 text-right">
                        <p>Tổng giá trị sản phẩm <span>0 đ</span></p>

                        <p><a href="" class="add_attr" data-toggle="modal" data-target=".bs-example-modal-km"><i
                                        class="fa fa-plus-circle" aria-hidden="true"></i> Thêm khuyến mãi</a>
                            <span>0 đ</span></p>

                        <p><a href="" class="add_attr" class="add_attr" data-toggle="modal"
                              data-target=".bs-example-modal-pvc"><i class="fa fa-plus-circle" aria-hidden="true"></i>
                                Thêm phí vận chuyển</a> <span>0 đ</span></p>

                        <p> Số tiền phải thanh toán 0 ₫</p>

                    </div>
                </div>

                <div class="clear"></div>
                <hr>
                <div class="footer_order">
                    <span><i class="fa fa-id-card-o" aria-hidden="true"></i> XÁC NHẬN THANH TOÁN VÀ TẠO ĐƠN HÀNG </span>
                    <button type="button" class="btn btn-raised btn-success" style="font-size: 12px">Đã thanh toán</button>
                    <button type="button" class="btn btn-raised btn-primary"  style="font-size: 12px">Thanh toán sau</button>
                </div>


            </div>

        </div>
        <div class="col-md-4 col-xs-12">
            <!-- Show/Hide -->
            <div class="x_panel">
                <div class="wrapper-content">

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-raised btn-primary">Hủy</button>
                        <button type="submit" class="btn btn-raised btn-success">Lưu</button>
                    </div>
                </div>
            </div>
            <div class="x_panel">
                <div class="wrapper-content mt20">
                    <div class="pd-all-20 border-top-title-main">
                        <div class="form-group">
                            <label class="control-label">Khách hàng</label>

                            <input type="text" name="country" id="autocomplete-custom-append"
                                   class="form-control col-md-10"/>

                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- modals -->
    <!-- Large modal -->

    <div class="modal fade bs-example-modal-km" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog bs-example-modal-km">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Thêm khuyến mãi</h4>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label>Giảm giá đơn hàng theo</label>

                        <div id="gender" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                   data-toggle-passive-class="btn-default">
                                <input type="radio" name="gender" value="male"> %
                            </label>
                            <label class="btn  btn-primary" data-toggle-class="btn-primary"
                                   data-toggle-passive-class="btn-default">
                                <input type="radio" name="gender" value="female"> đ
                            </label>
                        </div>

                        <input class="form-control" type="text" id="last-name" name="last-name" required="required">
                    </div>
                    <div class="form-group">
                        <label>Lý do:</label>
                          <textarea id="message" required="required" class="form-control" name="message"
                                    data-parsley-trigger="keyup" data-parsley-minlength="20"
                                    data-parsley-maxlength="100"
                                    data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                                    data-parsley-validation-threshold="10"></textarea>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-raised btn-default" data-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-raised btn-primary">Thêm khuyến mãi</button>
                </div>

            </div>
        </div>
    </div>


    <div class="modal fade bs-example-modal-pvc" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog bs-example-modal-pvc">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Thêm phí vận chuyển</h4>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <div class="alert alert-warning" role="alert">
                            <h3>Làm sao để chọn phí vận chuyển đã cấu hình ?</h3>
                            Hãy thêm thông tin khách hàng với địa chỉ giao hàng đầy đủ để thấy các mức phí vận chuyển đã cấu hình.
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="radio">
                            <label>
                                <input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios"> Miễn phí
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios"> Tùy chọn
                            </label>
                        </div>
                        <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                            <input type="text" placeholder="Tên phí vận chuyển" class="form-control">
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                            <input type="text" placeholder="Đ" class="form-control">
                        </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-raised btn-default" data-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-raised btn-primary">Thêm phí vận chuyển</button>
                </div>

            </div>
        </div>
    </div>
    @endsection


    @section('add_scripts')
            <!-- jQuery autocomplete -->
    <script src="{{asset('plugin/devbridge-autocomplete/dist/jquery.autocomplete.min.js')}}"></script>
    <!-- jQuery autocomplete -->
    <script>
        $(document).ready(function () {
            var countries = {
                AD: "Andorra",
                A2: "Andorra Test",
                AE: "United Arab Emirates",
                AF: "Afghanistan",
                AG: "Antigua and Barbuda",
                AI: "Anguilla",
                AL: "Albania",
                AM: "Armenia",
                AN: "Netherlands Antilles",
                AO: "Angola",
                AQ: "Antarctica",
                AR: "Argentina",
                AS: "American Samoa",
                AT: "Austria",
                AU: "Australia",
                AW: "Aruba",
                AX: "Åland Islands",
                AZ: "Azerbaijan",
                BA: "Bosnia and Herzegovina",
                BB: "Barbados",
                BD: "Bangladesh",
                BE: "Belgium",
                BF: "Burkina Faso",
                BG: "Bulgaria",
                BH: "Bahrain",
                BI: "Burundi",
                BJ: "Benin",
                BL: "Saint Barthélemy",
                BM: "Bermuda",
                BN: "Brunei",
                BO: "Bolivia",
                BQ: "British Antarctic Territory",
                BR: "Brazil",
                BS: "Bahamas",
                BT: "Bhutan",
                BV: "Bouvet Island",
                BW: "Botswana",
                BY: "Belarus",
                BZ: "Belize",
                CA: "Canada",
                CC: "Cocos [Keeling] Islands",
                CD: "Congo - Kinshasa",
                CF: "Central African Republic",
                CG: "Congo - Brazzaville",
                CH: "Switzerland",
                CI: "Côte d’Ivoire",
                CK: "Cook Islands",
                CL: "Chile",
                CM: "Cameroon",
                CN: "China",
                CO: "Colombia",
                CR: "Costa Rica",
                CS: "Serbia and Montenegro",
                CT: "Canton and Enderbury Islands",
                CU: "Cuba",
                CV: "Cape Verde",
                CX: "Christmas Island",
                CY: "Cyprus",
                CZ: "Czech Republic",
                DD: "East Germany",
                DE: "Germany",
                DJ: "Djibouti",
                DK: "Denmark",
                DM: "Dominica",
                DO: "Dominican Republic",
                DZ: "Algeria",
                EC: "Ecuador",
                EE: "Estonia",
                EG: "Egypt",
                EH: "Western Sahara",
                ER: "Eritrea",
                ES: "Spain",
                ET: "Ethiopia",
                FI: "Finland",
                FJ: "Fiji",
                FK: "Falkland Islands",
                FM: "Micronesia",
                FO: "Faroe Islands",
                FQ: "French Southern and Antarctic Territories",
                FR: "France",
                FX: "Metropolitan France",
                GA: "Gabon",
                GB: "United Kingdom",
                GD: "Grenada",
                GE: "Georgia",
                GF: "French Guiana",
                GG: "Guernsey",
                GH: "Ghana",
                GI: "Gibraltar",
                GL: "Greenland",
                GM: "Gambia",
                GN: "Guinea",
                GP: "Guadeloupe",
                GQ: "Equatorial Guinea",
                GR: "Greece",
                GS: "South Georgia and the South Sandwich Islands",
                GT: "Guatemala",
                GU: "Guam",
                GW: "Guinea-Bissau",
                GY: "Guyana",
                HK: "Hong Kong SAR China",
                HM: "Heard Island and McDonald Islands",
                HN: "Honduras",
                HR: "Croatia",
                HT: "Haiti",
                HU: "Hungary",
                ID: "Indonesia",
                IE: "Ireland",
                IL: "Israel",
                IM: "Isle of Man",
                IN: "India",
                IO: "British Indian Ocean Territory",
                IQ: "Iraq",
                IR: "Iran",
                IS: "Iceland",
                IT: "Italy",
                JE: "Jersey",
                JM: "Jamaica",
                JO: "Jordan",
                JP: "Japan",
                JT: "Johnston Island",
                KE: "Kenya",
                KG: "Kyrgyzstan",
                KH: "Cambodia",
                KI: "Kiribati",
                KM: "Comoros",
                KN: "Saint Kitts and Nevis",
                KP: "North Korea",
                KR: "South Korea",
                KW: "Kuwait",
                KY: "Cayman Islands",
                KZ: "Kazakhstan",
                LA: "Laos",
                LB: "Lebanon",
                LC: "Saint Lucia",
                LI: "Liechtenstein",
                LK: "Sri Lanka",
                LR: "Liberia",
                LS: "Lesotho",
                LT: "Lithuania",
                LU: "Luxembourg",
                LV: "Latvia",
                LY: "Libya",
                MA: "Morocco",
                MC: "Monaco",
                MD: "Moldova",
                ME: "Montenegro",
                MF: "Saint Martin",
                MG: "Madagascar",
                MH: "Marshall Islands",
                MI: "Midway Islands",
                MK: "Macedonia",
                ML: "Mali",
                MM: "Myanmar [Burma]",
                MN: "Mongolia",
                MO: "Macau SAR China",
                MP: "Northern Mariana Islands",
                MQ: "Martinique",
                MR: "Mauritania",
                MS: "Montserrat",
                MT: "Malta",
                MU: "Mauritius",
                MV: "Maldives",
                MW: "Malawi",
                MX: "Mexico",
                MY: "Malaysia",
                MZ: "Mozambique",
                NA: "Namibia",
                NC: "New Caledonia",
                NE: "Niger",
                NF: "Norfolk Island",
                NG: "Nigeria",
                NI: "Nicaragua",
                NL: "Netherlands",
                NO: "Norway",
                NP: "Nepal",
                NQ: "Dronning Maud Land",
                NR: "Nauru",
                NT: "Neutral Zone",
                NU: "Niue",
                NZ: "New Zealand",
                OM: "Oman",
                PA: "Panama",
                PC: "Pacific Islands Trust Territory",
                PE: "Peru",
                PF: "French Polynesia",
                PG: "Papua New Guinea",
                PH: "Philippines",
                PK: "Pakistan",
                PL: "Poland",
                PM: "Saint Pierre and Miquelon",
                PN: "Pitcairn Islands",
                PR: "Puerto Rico",
                PS: "Palestinian Territories",
                PT: "Portugal",
                PU: "U.S. Miscellaneous Pacific Islands",
                PW: "Palau",
                PY: "Paraguay",
                PZ: "Panama Canal Zone",
                QA: "Qatar",
                RE: "Réunion",
                RO: "Romania",
                RS: "Serbia",
                RU: "Russia",
                RW: "Rwanda",
                SA: "Saudi Arabia",
                SB: "Solomon Islands",
                SC: "Seychelles",
                SD: "Sudan",
                SE: "Sweden",
                SG: "Singapore",
                SH: "Saint Helena",
                SI: "Slovenia",
                SJ: "Svalbard and Jan Mayen",
                SK: "Slovakia",
                SL: "Sierra Leone",
                SM: "San Marino",
                SN: "Senegal",
                SO: "Somalia",
                SR: "Suriname",
                ST: "São Tomé and Príncipe",
                SU: "Union of Soviet Socialist Republics",
                SV: "El Salvador",
                SY: "Syria",
                SZ: "Swaziland",
                TC: "Turks and Caicos Islands",
                TD: "Chad",
                TF: "French Southern Territories",
                TG: "Togo",
                TH: "Thailand",
                TJ: "Tajikistan",
                TK: "Tokelau",
                TL: "Timor-Leste",
                TM: "Turkmenistan",
                TN: "Tunisia",
                TO: "Tonga",
                TR: "Turkey",
                TT: "Trinidad and Tobago",
                TV: "Tuvalu",
                TW: "Taiwan",
                TZ: "Tanzania",
                UA: "Ukraine",
                UG: "Uganda",
                UM: "U.S. Minor Outlying Islands",
                US: "United States",
                UY: "Uruguay",
                UZ: "Uzbekistan",
                VA: "Vatican City",
                VC: "Saint Vincent and the Grenadines",
                VD: "North Vietnam",
                VE: "Venezuela",
                VG: "British Virgin Islands",
                VI: "U.S. Virgin Islands",
                VN: "Vietnam",
                VU: "Vanuatu",
                WF: "Wallis and Futuna",
                WK: "Wake Island",
                WS: "Samoa",
                YD: "People's Democratic Republic of Yemen",
                YE: "Yemen",
                YT: "Mayotte",
                ZA: "South Africa",
                ZM: "Zambia",
                ZW: "Zimbabwe",
                ZZ: "Unknown or Invalid Region"
            };

            var countriesArray = $.map(countries, function (value, key) {
                return {
                    value: value,
                    data: key
                };
            });

            // initialize autocomplete with custom appendTo
            $('#autocomplete-custom-append').autocomplete({
                lookup: countriesArray
            });
        });
    </script>
    <!-- /jQuery autocomplete -->
    <!-- jQuery Tags Input -->
    <script src="{{asset('plugin/jquery.tagsinput/src/jquery.tagsinput.js')}}"></script>
    <!-- jQuery Tags Input -->
    <script>
        function onAddTag(tag) {
            alert("Added a tag: " + tag);
        }

        function onRemoveTag(tag) {
            alert("Removed a tag: " + tag);
        }

        function onChangeTag(input, tag) {
            alert("Changed a tag: " + tag);
        }

        $(document).ready(function () {
            $('#tags_1').tagsInput({
                width: 'auto'
            });
        });
    </script>
    <!-- /jQuery Tags Input -->
@endsection