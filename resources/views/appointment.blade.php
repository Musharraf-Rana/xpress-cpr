@extends('layouts.main')
@section('page_css')
    <link
        rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('content')

    <section>
        <div class="banner-page-sec" onmouseover="hoverclick()">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h1>Appointment</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="main-box-content">
                    <div class="flex-point">
                        <div class="sidebar">
                            <div class="items-list">

                                <div class="box-main-item">

                                    <div class="box-item">
                                        <span>Course Selection</span>
                                        <small id="target_service"> <label class="container-check">
                                                <input id="service_section_uncheck" type="checkbox" disabled>
                                                <span class="checkmark"></span>
                                            </label></small>
                                    </div>
                                    <div class="inner-set-items">
                                        <ul>
                                            <li class="courseli"></li>
                                            <li class="locationli"></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="box-main-item">

                                    <div class="box-item">
                                        <span>Date & Time</span>
                                        <small id="target_data_and_time"> <label class="container-check">
                                                <input id="date_and_time_checked" type="checkbox" disabled>
                                                <span class="checkmark"></span>
                                            </label></small>
                                    </div>

                                    <div class="inner-set-items">
                                        <ul>
                                            <li class="dateTimeli"></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="box-main-item">
                                    <div class="box-item">
                                        <span>Your Information</span>
                                        <small id="target_Your_information">
                                            <label class="container-check">
                                                <input id="your_information_checked" type="checkbox" disabled>
                                                <span class="checkmark"></span>
                                            </label>
                                        </small>
                                    </div>
                                    <div class="inner-set-items">
                                        <ul>
                                            <li class="wow nameli"></li>
                                            <li class="wow emailli"></li>
                                            <li class="wow phoneli"></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="box-main-item">
                                    <div class="box-item">
                                        <span>Payments</span>
                                        <small id="target_Payments"> <label class="container-check">
                                                <input id="Payments_checked" type="checkbox" disabled>
                                                <span class="checkmark"></span>
                                            </label></small>
                                    </div>
                                    <div class="inner-set-items">
                                        <ul>
                                            <li class="wow"></li>
                                            <li class="wow"></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="right0content">
                            <form id="submitForm">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="main-content">


                                    <div class="inner-conntent-div" id="service-section">
                                        <div class="inner-top-header">
                                            <h4>Couses Selection
                                            </h4>
                                        </div>
                                        <div class="mobile-tabs">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                        <div class="main-form-group">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Course:</label>
                                                <select class="form-control course_id" name="course_id" id="course_id">
                                                    <option value="" disabled selected> Select Course</option>
                                                    @if (!empty($courses))
                                                        @foreach ($courses as $course)
                                                            <option value="{{ $course['id'] }}"
                                                                data-price="{{ $course['price'] }}">{{ $course['title'] }}
                                                                <span style="color: red">$50</span>
                                                            </option>
                                                        @endforeach
                                                    @endif

                                                </select>
                                                <span class="badge col text-danger course_error" style="display: none">
                                                    Please Select Course </span>
                                            </div>

                                            <div class="form-group subCoursediv" style="display: none">
                                                <label for="exampleFormControlSelect1">Sub Course:</label>
                                                <select class="form-control parent_course" name="parent_course"
                                                    id="parent_course">
                                                    <option value="" disabled selected> Select Sub Course</option>

                                                </select>
                                                <span class="badge col text-danger parent_course_error"
                                                    style="display: none">
                                                    Please Select Sub Course </span>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Location:</label>
                                                <select class="form-control location_id" name="location_id"
                                                    id="location_id">

                                                </select>
                                                <span class="badge col text-danger location_id_error" style="display: none">
                                                    Please Select Location</span>
                                            </div>
                                        </div>
                                        <div class="footer-inner">
                                            <button type="button" id="service_continue_btn"
                                                class="btn btn-danger">Continue</button>
                                        </div>
                                    </div>

                                    <div class="inner-conntent-div" id="your-information">

                                        <div class="inner-top-header">
                                            <h4>Date & Time
                                            </h4>
                                        </div>
                                        <div class="mobile-tabs">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                        <div class="main-form-group">

                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlInput1">First Name:</label>
                                                        <input type="text" class="form-control first_name"
                                                            name="first_name" id="first_name" placeholder="First Name">
                                                        <span class="badge col text-danger first_name_error"
                                                            style="display: none">Please Fill First Name</span>
                                                    </div>

                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlInput1">Last Name:</label>
                                                        <input type="text" class="form-control last_name"
                                                            name="last_name" id="last_name" placeholder="Last Name">
                                                        <span class="badge col text-danger last_name_error"
                                                            style="display: none">Please Fill Last Name</span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlInput1">Email:</label>
                                                        <input type="email" class="form-control email" name="email"
                                                            id="email" placeholder="name@example.com">

                                                        <span class="badge col text-danger email_error"
                                                            style="display: none">Please Fill Email Name</span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlInput1">Phone:</label>
                                                        <input type="number" class="form-control contact_no"
                                                            name="contact_no" id="contact_no" placeholder="000 000 000">
                                                        <span class="badge col text-danger contact_no_error"
                                                            style="display: none">Please Fill Email Name</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="footer-inner">
                                            <button type="button" id="your_information_back"
                                                class="btn btn-danger space_btn">Back</button>
                                            <button type="button" id="your_information_action"
                                                class="btn btn-danger infoContinue">Continue</button>
                                        </div>
                                    </div>


                                    <div class="inner-conntent-div" id="date-and-time">

                                        <div class="inner-top-header">
                                            <h4>Date & Time Selection
                                            </h4>
                                        </div>
                                        <div class="mobile-tabs">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>

                                        <div class="main-form-group todo-width">
                                            <div class="mb-10 ">
                                                <div id="datepicker" data-date="{{ date('d/m/Y') }}"></div>
                                                <input type="hidden" id="my_hidden_input" name="datetime">
                                                <span class="badge col text-danger datetime_error" style="display: none">
                                                    Date Required</span>
                                                <input type="hidden" id="slot_id" name="slot_id">
                                                <span class="badge col text-danger slot_error" style="display: none"> Slot
                                                    Required</span>
                                            </div>

                                            <div class="mb-3 mt-5 row appendDiv">

                                            </div>
                                        </div>

                                        <div class="footer-inner">
                                            <button type="button" id="date_and_time_back"
                                                class="btn btn-danger space_btn">Back</button>
                                            <button type="button" id="date&and&time_action"
                                                class="btn btn-danger">Continue</button>
                                        </div>

                                        <script>
                                            $('body').on('click', '.btnyoyoyoy', function(e) {
                                                $('.btnyoyoyoy').removeClass('active')
                                                $(this).addClass('active')
                                            })
                                        </script>

                                    </div>

                                    <div class="inner-conntent-div" id="payment-section">
                                        <div class="inner-top-header">
                                            <h4>Service Selection
                                            </h4>
                                        </div>
                                        <div class="mobile-tabs">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                        <div class="main-form-group">
                                            <h6>Summary</h6>

                                            <div class="box-payment">
                                                <div class="inner-box-payment">
                                                    <small>Services</small>
                                                    <div class="box-bill">
                                                        <span class="course_span">Heart Saver ($50.00) x 1 person</span>
                                                        <span class="text-end  course_price">$50.00</span>
                                                    </div>
                                                </div>

                                                <div class="inner-div-payment">
                                                    <span>
                                                        <h6>Subtotal:
                                                        </h6>
                                                    </span>
                                                    <span class="text-end">
                                                        <h6 class="course_price">$50.00
                                                        </h6>
                                                    </span>
                                                </div>

                                                <div class="inner-div-payment2">
                                                    <div class="element1">
                                                        <span>Coupon:</span>
                                                    </div>
                                                    <div class="element2">
                                                        <input type="text">
                                                    </div>
                                                    <div class="element3">
                                                        <button type="button" class="btn btn-danger">Add</button>
                                                    </div>
                                                </div>

                                                <div class="inner-div-payment2">
                                                    <div class="element4">
                                                        <span>Total Amount:
                                                        </span>
                                                    </div>
                                                    <div class="element5">
                                                        <span class="course_price">$50.00</span>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="inner-text">
                                                <span>The payment will be done on-site. </span>
                                            </div>
                                        </div>
                                        <div class="footer-inner">
                                            <button type="button" id="payments_back"
                                                class="btn btn-danger space_btn">Back</button>
                                            <button type="button" id="payment_action"
                                                class="btn btn-danger paymentContinue">Continue</button>
                                        </div>
                                    </div>

                                    <div class="inner-conntent-div" id="summary-section">
                                        <div class="inner-top-header">
                                            <h4>Service Selection
                                            </h4>
                                        </div>
                                        <div class="mobile-tabs">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                        <div class="main-form-group">
                                            <div class="box-logo">
                                                <img src="{{ asset('assets/images/congratulations.svg') }}" alt=""
                                                    srcset="">
                                                <br>
                                                <strong>Congratulations</strong>

                                                {{-- <p>Appointment ID #8</p> --}}
                                            </div>

                                            <div class="list-item-sumary">
                                                <div class="show-list">
                                                    <div class="sum-com sum-list-st">
                                                        <span>Date:</span>
                                                    </div>
                                                    <div class="sum-com sum-list">
                                                        <span class="dateSpan"></span>
                                                    </div>
                                                </div>

                                                <div class="show-list">
                                                    <div class="sum-com sum-list-st">
                                                        <span>Course:</span>
                                                    </div>
                                                    <div class="sum-com sum-list">
                                                        <span class="courseSpan"></span>
                                                    </div>
                                                </div>

                                                <div class="show-list">
                                                    <div class="sum-com sum-list-st">
                                                        <span>Location:</span>
                                                    </div>
                                                    <div class="sum-com sum-list">
                                                        <span class="locationSpan"></span>
                                                    </div>
                                                </div>

                                                <div class="show-list">
                                                    <div class="sum-com sum-list-st">
                                                        <span>Payment:</span>
                                                    </div>
                                                    <div class="sum-com sum-list">
                                                        <span class="priceSpan"></span>
                                                    </div>
                                                </div>

                                                <hr>

                                                <div class="show-list">
                                                    <div class="sum-com sum-list-st">
                                                        <span>Your Name:</span>
                                                    </div>
                                                    <div class="sum-com sum-list">
                                                        <span class="nameSpan"></span>
                                                    </div>
                                                </div>

                                                <div class="show-list">
                                                    <div class="sum-com sum-list-st">
                                                        <span>Your Email:</span>
                                                    </div>
                                                    <div class="sum-com sum-list">
                                                        <span class="emailSpan"></span>
                                                    </div>
                                                </div>

                                                <div class="show-list">
                                                    <div class="sum-com sum-list-st">
                                                        <span>Your Phone:</span>
                                                    </div>
                                                    <div class="sum-com sum-list">
                                                        <span class="phoneSpan"></span>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="footer-inner">
                                            <button type="submit" id="payment_action"
                                                class="btn btn-danger finishbtn"><span
                                                    class="finishSpan"></span>Finish</button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection
<script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
@section('page_script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection

<script>
    $(document).ready(function() {
        var subCourseVar = false;
        const service_section = document.getElementById("service-section");
        const your_information = document.getElementById("your-information");
        const payment_section = document.getElementById("payment-section");
        const date_and_time = document.getElementById("date-and-time");
        const summary_section = document.getElementById("summary-section");


        const service_selection_action = document.getElementById("service_continue_btn");
        const date_and_time_back = document.getElementById("date_and_time_back");
        const date_and_time_action = document.getElementById("date&and&time_action");
        const your_information_back = document.getElementById("your_information_back");
        const your_information_action = document.getElementById("your_information_action");
        const payments_back = document.getElementById("payments_back");
        const payment_action = document.getElementById("payment_action");
        var checkedElement =
            "<label class=container-check><input id=service_section_uncheck type=checkbox checked=checked disabled> <span class=checkmark ></span></label>";
        var UncheckedElement =
            "<label class=container-check><input id=service_section_uncheck type=checkbox><span class=checkmark disabled></span></label>";

        service_selection_action.addEventListener("click", function() {
            if (!$('#course_id').val()) {
                $('.course_error').show()
                return false
            }
            if (subCourseVar) {
                if (!$('#parent_course').val()) {
                    $('.parent_course_error').show()
                    return false
                }
            }


            $('.course_error').hide()
            if (!$('#location_id').val()) {
                $('.location_id_error').show()
                return false
            }
            $('.location_id_error').hide()

            service_section.style.display = 'none'
            your_information.style.display = 'none'
            payment_section.style.display = 'none'
            date_and_time.style.display = 'block'
            document.getElementById("target_service").innerHTML = checkedElement;
        });
        date_and_time_action.addEventListener("click", function() {
            if (!$('#my_hidden_input').val()) {
                $('.datetime_error').show()
                return false
            }
            $('.datetime_error').hide()
            if (!$('#slot_id').val()) {
                $('.slot_error').show()
                return false
            }
            $('.slot_error').hide()

            service_section.style.display = 'none'
            your_information.style.display = 'block'
            payment_section.style.display = 'none'
            date_and_time.style.display = 'none'
            document.getElementById("target_data_and_time").innerHTML = checkedElement;
        });
        date_and_time_back.addEventListener("click", function() {
            service_section.style.display = 'block'
            your_information.style.display = 'none'
            payment_section.style.display = 'none'
            date_and_time.style.display = 'none'
            document.getElementById("target_service").innerHTML = UncheckedElement;
        });
        your_information_action.addEventListener("click", function() {
            if (!$('.first_name').val()) {
                $('.first_name_error').show()
                return false
            }
            $('.first_name_error').hide()

            if (!$('.last_name').val()) {
                $('.last_name_error').show()
                return false
            }
            $('.last_name_error').hide()

            if (!$('.email').val()) {
                $('.email_error').show()
                return false
            }
            $('.email_error').hide()

            if (!$('.contact_no').val()) {
                $('.contact_no_error').show()
                return false
            }
            $('.contact_no_error').hide()

            service_section.style.display = 'none'
            your_information.style.display = 'none'
            payment_section.style.display = 'block'
            date_and_time.style.display = 'none'
            document.getElementById("target_Your_information").innerHTML = checkedElement;
        });
        your_information_back.addEventListener("click", function() {
            service_section.style.display = 'none'
            your_information.style.display = 'none'
            payment_section.style.display = 'none'
            date_and_time.style.display = 'block'
            document.getElementById("target_data_and_time").innerHTML = UncheckedElement;
        });
        payment_action.addEventListener("click", function() {

            service_section.style.display = 'none'
            your_information.style.display = 'none'
            payment_section.style.display = 'none'
            date_and_time.style.display = 'none'
            summary_section.style.display = 'block'
            document.getElementById("target_Payments").innerHTML = checkedElement;
        });
        payments_back.addEventListener("click", function() {
            service_section.style.display = 'none'
            your_information.style.display = 'block'
            payment_section.style.display = 'none'
            date_and_time.style.display = 'none'
            document.getElementById("target_Your_information").innerHTML = UncheckedElement;
            document.getElementById("target_Payments").innerHTML = UncheckedElement;
        });

        var disabled_day = [];
        var url = '{{ env('API_URL') }}';

        function tConvert(time) {
            // Check correct time format and split into components
            time = time.toString().match(/^([01]\d|2[0-3])(:)([0-5]\d)(:[0-5]\d)?$/) || [time];

            if (time.length > 1) { // If time format correct
                time = time.slice(1); // Remove full string match value
                time[3] = +time[0] < 12 ? ' AM' : ' PM'; // Set AM/PM
                time[0] = +time[0] % 12 || 12; // Adjust hours
            }
            return time.join(''); // return adjusted time or original string
        }

        $('#datepicker').on('changeDate', function() {

            $('#my_hidden_input').val(
                $('#datepicker').datepicker('getFormattedDate')
            );
            $('.appendDiv').empty();
            $.get(url + 'getslots', {
                course_id: $('#course_id').val(),
                dateSeleted: $('#datepicker').datepicker('getFormattedDate')
            }, function(d) {
                $.each(d, function(i, v) {
                    var html =
                        ' <div class="col-md-6"><button type="button" class="btnyoyoyoy badge-danger btn col-md-12 mb-2 slotbtn" data-startdate="' +
                        v.day_slots.time_to + '"     data-id="' +
                        v.day_slots.id + '">' +
                        tConvert(v.day_slots.time_to) + ' - ' + tConvert(v.day_slots
                            .time_from) +
                        '</button> </div>';
                    $('.appendDiv').append(html);

                })

            }, 'json')
        });

        $('body').on('click', '.slotbtn', function(e) {
            var id = $(this).data('id');
            var startdate = $(this).data('startdate');
            var selecteDate = $('#datepicker').datepicker('getFormattedDate')
            $('.dateTimeli').html(selecteDate + " " + tConvert(startdate))
            $('#slot_id').val(id)

        })

        $('.course_id').change(function(e) {
            var id = $(this).val();
            var val = $(".course_id option:selected").text();
            var price = $(".course_id option:selected").attr('data-price');
            $('.subCoursediv').hide()
            $('.appendDiv').empty()
            subCourseVar = false;
            $('.courseli').html(val)
            $('#location_id').empty();
            $('#parent_course').empty();
            $('.course_span').html(val);
            $('.course_price').html('$' + price + ".00");
            $.get(url + 'courselocation', {
                id: id
            }, function(d) {
                $('#datepicker').datepicker('destroy');
                $('#datepicker').show();
                disabled_day = d.disabledDays;
                $('#datepicker').datepicker({
                    startDate: '-0d',
                    showTodayButton: true,
                    changeMonth: true,
                    format: 'dd-M-yyyy',
                    daysOfWeekDisabled: disabled_day
                });

                $('#location_id').append(
                    '<option value="" disabled selected> Select Location </option>')
                $.each(d.locations, function(i, v) {
                    $('#location_id').append('<option value="' + v.id + '">' + v
                        .name +
                        ' </option>')
                })
                if (d.subCourse.length > 0) {
                    subCourseVar = true
                    $('.subCoursediv').show()
                }

                $('#parent_course').append(
                    '<option value="" disabled selected> Select Sub Course </option>')
                $.each(d.subCourse, function(i, v) {
                    $('#parent_course').append('<option value="' + v.id + '">' + v
                        .title +
                        ' </option>')
                })

                $('.table-condensed').addClass('container');


            }, 'json')
        })

        $('#location_id').change(function() {
            var val = $("#location_id option:selected").text();
            $('.locationli').html(val)
        })

        $('#submitForm').submit(function(e) {
            e.preventDefault()
            var elem = $(this).serialize()
            $(this).find('button[type="submit"]').attr('disabled', true)
            $(this).find('button[type="submit"]').find('span').addClass(
                'spinner-border spinner-border-sm')
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.post(url + 'store', elem, function(d) {
                toastr.success(d.msg)
                setTimeout(() => {
                    window.location.href = "{{ route('thankyou') }}";
                }, 1000);
            }, 'json')

        })

        $('.infoContinue').click(function(e) {
            var first_name = $('.first_name').val()
            var last_name = $('.last_name').val()
            var email = $('.email').val()
            var phone = $('.contact_no').val()
            $('.nameli').html(first_name + " " + last_name)
            $('.emailli').html(email)
            $('.phoneli').html(phone)
        })

        $('.paymentContinue').click(function() {
            var selecteDate = $('#datepicker').datepicker('getFormattedDate');
            var course = $(".course_id option:selected").text();
            var location = $("#location_id option:selected").text();
            var price = $(".course_id option:selected").attr('data-price');
            var first_name = $('.first_name').val()
            var last_name = $('.last_name').val()
            var email = $('.email').val()
            var phone = $('.contact_no').val()

            $('.dateSpan').html(selecteDate)
            $('.courseSpan').html(course)
            $('.locationSpan').html(location)
            $('.priceSpan').html(price)

            $('.nameSpan').html(first_name + " " + last_name)
            $('.emailSpan').html(email)
            $('.phoneSpan').html(phone)
        })

    })
</script>
