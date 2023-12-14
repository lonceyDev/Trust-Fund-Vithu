@include('layouts.front.header')
<main>
    <section class="py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-9 col-lg-6 col-xlwd-4 text-center py-5 en">
                    <h1 style="font-weight: 900; font-size: 150px;color:var(--theme-primary)">404</h1>
                    <h2>Ohh! Page Not Found</h2>
                    <p>It looks like nothing was found at this location. Click the button below to return home.</p>

                    <a href="{{ route('home') }}" class="btn bg-theme " data-hover="Back to Home">
                        <i class="fa fa-home"></i> Back to Home
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>
</div>
@include('layouts.front.footer')
