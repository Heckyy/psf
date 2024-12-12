<footer style="background: #7B070B;" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 my-0 py-3">
                <img class="img-fluid" src="{{ asset("assets/img/Logo/PSF%20Logo.webp") }}"
                                                 width="228" height="150">
                <div class="d-flex flex-column mx-0 px-2 my-3"><a class="fw-light link-light" href="#"
                                                                  style="font-family: Campton;">{{ __("Privacy Policy") }}</a><a
                        class="fw-light link-light" href="#" style="font-family: Campton;">{{ __("Terms and Conditions") }}</a><a
                        class="fw-light link-light" href="{{ route("career", ['locale' => app()->getLocale()]) }}" style="font-family: Campton;">{{ __("Career") }}</a></div>
                <div class="d-flex flex-row mx-0 px-2"><a class="fw-light link-light me-2"
                                                          href="https://www.instagram.com/puterasampoernafoundation/"
                                                          style="font-family: Campton;"><img
                            style="width: 20px;height: 20px;" src="{{ asset("assets/img/Icon/ri_instagram-fill.svg") }}"></a><a
                        class="fw-light link-light me-2" href="https://www.facebook.com/putrasampoernafoundation"
                        style="font-family: Campton;"><img style="width: 20px;height: 20px;"
                                                           src="{{ asset("assets/img/Icon/mdi_facebook.svg") }}"></a><a
                        class="fw-light link-light me-2" href="https://www.youtube.com/@puterasampoernafoundation"
                        style="font-family: Campton;"><img style="width: 20px;height: 20px;"
                                                           src="{{ asset("assets/img/Icon/mdi_youtube.svg") }}"></a><a
                        class="fw-light link-light me-2" href="https://www.linkedin.com/company/sampoerna-foundation/"
                        style="font-family: Campton;"><img style="width: 20px;height: 20px;"
                                                           src="{{ asset("assets/img/Icon/mdi_linkedin.svg") }}"></a></div>
            </div>
            <div class="col col-6 col-sm-6 col-lg-4 my-2 py-0">
                <div>
                    <div class="py-2" style="height: 252px;">
                        <h1 class="fs-5 mb-3" style="font-family: Campton;color: var(--bs-light);">{{ __("ABOUT US") }}</h1>
                        <div class="d-flex flex-column mb-0"><a class="fs-6 fw-light link-light mb-2"
                                                                href="{{ route("aboutus", ['locale' => app()->getLocale()]) }}" style="font-family: Campton;">{{ __("Putera Sampoerna Foundation") }}</a><a class="fs-6 fw-light link-light mb-2"
                                                           href="{{ route("aboutus.ourjourney", ['locale' => app()->getLocale()]) }}"
                                                           style="font-family: Campton;">{{ __("Our Journey") }}</a><a
                                class="fs-6 fw-light link-light mb-2" href="{{ route("aboutus.boardmember", ['locale' => app()->getLocale()]) }}"
                                style="font-family: Campton;">{{ __("Board Members") }}</a><a class="fs-6 fw-light link-light mb-2"
                                                                                  href="{{ route("contact-us", ['locale' => app()->getLocale()]) }}"
                                                                                  style="font-family: Campton;">{{ __("Contact Us") }}</a></div>
                    </div>
                    <div class="py-2">
                        <h1 class="fs-5 mb-3" style="font-family: Campton;color: var(--bs-light);">{{ __("MEDIA") }}</h1>
                        <div class="d-flex flex-column mb-0"><a class="fs-6 fw-light link-light mb-2"
                                                                href="{{ route("media.news", ['locale' => app()->getLocale()]) }}"
                                                                style="font-family: Campton;">{{ __("Latest News") }}</a><a
                                class="fs-6 fw-light link-light mb-2" href="{{ route("media.annual-reports", ['locale' => app()->getLocale()]) }}"
                                style="font-family: Campton;">{{ __("Annual Report") }}</a></div>
                    </div>
                </div>
            </div>
            <div class="col col-6 col-sm-6 col-lg-4 my-2">
                <div>
                    <div class="py-2" style="height: 252px;">
                        <h1 class="fs-5 mb-3" style="font-family: Campton;color: var(--bs-light);">{{ __("PARTNER") }}</h1>
                        <div class="d-flex flex-column mb-0"><a class="fs-6 fw-light link-light mb-2"
                                                                href="{{ route("partners.government-sector", ['locale' => app()->getLocale()]) }}"
                                                                style="font-family: Campton;">{{ __("Government Sector") }}</a><a
                                class="fs-6 fw-light link-light mb-2" href="{{ route("partners.private-sector", ['locale' => app()->getLocale()]) }}"
                                style="font-family: Campton;">{{ __("Private Sector") }}</a><a class="fs-6 fw-light link-light mb-2"
                                                                                   href="{{ route("partners.how-to-involve", ['locale' => app()->getLocale()]) }}"
                                                                                   style="font-family: Campton;">{{ __("How to Involve") }}</a></div>
                    </div>
                    <div class="py-2">
                        <h1 class="fs-5 mb-3" style="font-family: Campton;color: var(--bs-light);">{{ __("OUR PILLAR") }}</h1>
                        <div class="d-flex flex-column mb-0"><a class="fs-6 fw-light link-light mb-2"
                                                                href="{{ route("ourpillar.sampoerna-school-system", ['locale' => app()->getLocale()]) }}"
                                                                style="font-family: Campton;">{{ __("Sampoerna School System") }}</a><a class="fs-6 fw-light link-light mb-2"
                                             href="{{ route("ourpillar.school-development", ['locale' => app()->getLocale()]) }}"
                                             style="font-family: Campton;">{{ __("School Development Outreach") }}</a><a
                                class="fs-6 fw-light link-light mb-2" href="{{ route("ourpillar.scholarship", ['locale' => app()->getLocale()]) }}"
                                style="font-family: Campton;">{{ __("Scholarship") }}</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 py-2">
                <hr style="color: rgba(255,255,255,0.25);">
                <p class="text-uppercase fs-6 fw-light text-center text-light">©2024 {{ __("putera sampoerna foundation. All Rights Reserved") }}</p>
            </div>
        </div>
    </div>
</footer>
