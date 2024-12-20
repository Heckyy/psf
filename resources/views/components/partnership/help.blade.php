<section>
    <div class="container" style="margin-top: 200px;">
        <div class="row">
            <div class="col-md-12 d-flex flex-column justify-content-center align-items-center">
                <h1 class="fs-2" style="font-family: Campton;">{{ __("How You Can Help") }}</h1>
                <p class="fs-5 mb-4 mt-4" style="font-family: Campton;text-align: center;">{{ __("Your support and partnership will enable us to continue our work to") }} <br>{{ __("design a bright future for the nation. Let's work together to ensure") }} <br>{{ __("that every Indonesian has the opportunity to reach their full potential.") }}</p>
                <div>
                    <a href="{{ route("partners.how-to-involve", ['locale' => app()->getLocale()]) }}">
                    <button class="btn btn-primary" type="button" style="font-family: Campton;">{{ __("Read More") }}&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 20 20" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2929 5.29289C12.6834 4.90237 13.3166 4.90237 13.7071 5.29289L17.7071 9.29289C18.0976 9.68342 18.0976 10.3166 17.7071 10.7071L13.7071 14.7071C13.3166 15.0976 12.6834 15.0976 12.2929 14.7071C11.9024 14.3166 11.9024 13.6834 12.2929 13.2929L14.5858 11H3C2.44772 11 2 10.5523 2 10C2 9.44772 2.44772 9 3 9H14.5858L12.2929 6.70711C11.9024 6.31658 11.9024 5.68342 12.2929 5.29289Z" fill="currentColor"></path>
                        </svg>
                    </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
