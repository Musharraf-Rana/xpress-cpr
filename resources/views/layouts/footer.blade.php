<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
    integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<footer>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xl-4 col-12 col-xxl-4 col-md-4">
                    <div class="about">
                        <h5>About
                        </h5>
                        <p>X PRESS CPR is working to save lives by spreading awareness about CPR throughout the
                            world.</p>
                    </div>
                </div>
                <div class="col-lg-2 col-xl-2 col-12 col-xxl-2 col-md-2">
                    <div class="products">
                        <h5>Products
                        </h5>
                        <ul>
                            <li><a href="#">Covid Safety</a></li>
                            <li><a href="#">Limited Class</a></li>
                            {{-- <li><a href="#">Merch</a></li>
                              <li><a href="#">(CPR SHILDS)</a></li>
                              <li><a href="#">Books</a></li> --}}
                            <!-- 			<li><a href="#">Keychains</a></li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-xl-2 col-12 col-xxl-2 col-md-2">
                    <div class="Company">
                        <h5>Company
                        </h5>
                        <ul>
                            <li><a href="{{ route('about') }}">About Us</a></li>
                            {{-- <li><a href="#">Limited Class</a></li>
                              <li><a href="#">Merch</a></li>
                              <li><a href="#">(CPR SHILDS)</a></li>
                              <li><a href="#">Books</a></li> --}}
                            <!-- 			<li><a href="#">Keychains</a></li> -->
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-xl-4 col-12 col-xxl-4 col-md-4">
                    <div class="Subscribe">
                        <form class="newsletterForm">
                            <h5>Join </h5>

                            <input type="email" name="email" required placeholder="Your Email Here...">
                            <br>
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="copyright">
        <p>Copyright 2022. All Right Reserved

        </p>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $('.newsletterForm').on('submit', function(e) {
        e.preventDefault()
        var elem = $(this).serialize()
        $('.newsletterForm').find('button[type="submit"]').attr('disabled', true)
        $.post('{{ env('API_URL') }}storenewzletter', elem, function(d) {
            $('.newsletterForm').find('input[name="email"]').val('')
            if (d.success == false) {
                console.log('false')
                toastr.error(d.msg)
            }
            if (d.success == true) {
                toastr.success(d.msg)
            }
            $('.newsletterForm').find('button[type="submit"]').attr('disabled', false)

        }, 'json')
    })
</script>
