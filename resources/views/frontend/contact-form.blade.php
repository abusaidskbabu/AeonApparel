<div class="container text-black py-5">
    <div class="text-center">
        <h1>Contact Us</h1>

    </div>
    <div class="">
        <form action="/contact" method="POST">
            @csrf
            <h3 class="pb-3">Drop Us a Line</h3>
            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="form-group">
                        <input class="form-control" name="name" type="text" placeholder="Name *">
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="email" type="email" placeholder="Email *">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" style="height: 150px;" placeholder="Message *"></textarea>
                    </div>
                    <div class="form-group">
                        <input class="btn buttonCustom" type="submit" value="Submit">
                    </div>

                </div>
                <div class="col-lg-8 col-md-6 ">
                    <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=%2026%20Shahjalal%20Avenue,%20Sector-04,%20Uttara+(MM%20Clothing%20BD%20Ltd.)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>
                </div>
            </div>
            <!-- /row -->
        </form>
    </div>
    <!-- /row -->
</div>
