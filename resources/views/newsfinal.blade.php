<link rel="stylesheet" href="/css/redesign.css">


<section id="redesign-main" class="body-content" role="main">
    <div class="ui-container hero-module">
        <div class="redesign-search-page container col-xs-12 col-sm-12 bg-color-gray-lightest">
            <h1 class="sr-only">Search Page</h1>
            <form action="/search-results" method="GET" class="search-hero-form col-lg-8 col-md-8 col-xs-12 col-sm-12"
                aria-label="search-form" role="search">
                {{ csrf_field() }}
                <label class="sr-only" for="search-form-label">search field</label>
                <label class="sr-only" for="search-form-clone">search field clone</label>
                <div class="twitter-typeahead" style="position: relative; display: initial; direction: ltr;"><input
                        id="search-form-clone"
                        class="search-hero-keywords col-lg-6 col-xs-10 col-sm-10 bg-color-white autocomplete-search-field tt-hint"
                        type="text" maxlength="200"
                        style="position: relative; top: 0px; left: 0px; border-color: transparent; box-shadow: none; opacity: 1; display: none; background: none 0% 0% / auto repeat scroll padding-box border-box rgb(255, 255, 255);"><input
                        id="search-form-label"
                        class="search-hero-keywords col-lg-6 col-xs-10 col-sm-10 bg-color-white autocomplete-search-field tt-input"
                        type="text" placeholder="Type to search..." maxlength="200" aria-describedby="instructions"
                        autocomplete="off" style="position: relative; vertical-align: top; background-color: white;"
                        tabindex="-1" name="q">
                    <pre aria-hidden="true"
                        style="position: absolute; visibility: hidden; white-space: pre; font-family: &quot;Graphik Regular&quot;, Arial, sans-serif; font-size: 16px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre>
                    <div class="tt-dropdown-menu col-xs-12 col-sm-10"
                        style="position: relative; top: 100%; left: 0px; z-index: 100; right: auto; display: none;">
                        <div class="tt-dataset-keywordSuggestions"></div>
                    </div>
                </div>
                <button class="btn btn-primary col-xs-2">
                    <span class="ion-ios-search"></span>
                    <span class="search-text">Search</span>
                </button>
            </form>
        </div>
    </div>

    <div id="block-searchresultsection" class="ui-container lazy  bg-color-gray-lightest" data-src=""
        style="padding-bottom: 0px;" data-analytics-template-zone="block-searchresultsection">
        <div class="row ">
            <div class="block-content col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-lg-offset-0 col-md-offset-0 col-sm-offset-0">
                    <div class="search-results-block" aria-live="polite"
                        data-analytics-module-name="searchresultsblock">

                        <div class="search-results-area search-results-area-space">
                            <div class="results-for-keyword-container col-md-8 col-lg-8" hidden=""
                                data-attribute-results-for-keyword="Results for &quot;{keyword}&quot;"
                                style="display: block;">
                                <h2 class="results-for-keyword subsection-title">Results for ""</h2>
                                <p class="total-results sr-only">Showing 782 results</p>
                            </div>

                            <div class="no-results-container" hidden=""
                                data-attribute-no-results="No results for &quot;{keyword}&quot;" style="display: none;">
                                <h2 class="no-results-header subsection-title top-nav-bar corporate-white">No results
                                    for ""</h2>
                            </div>

                            <div class="redesign-search-filters-container col-lg-4 col-md-4" aria-live="off">
                                <div class="redesign-sort col-xs-12 col-sm-6 col-md-12 col-lg-12"
                                    data-attribute-sort-by="Sort By:">
                                    <span id="redesign-sortby-label">Sort By:</span>
                                    <a id="reinvent-filter-most-relevant" href="javascript:void(0)"
                                        data-analytics-content-type="search filter"
                                        data-analytics-link-name="Most Relevant"
                                        aria-labelledby="redesign-sortby-label reinvent-filter-most-relevant"
                                        aria-pressed="true" role="button" tabindex="0" class="sort-selected">Most
                                        Relevant</a> |
                                    <a id="reinvent-filter-most-recent" href="javascript:void(0)"
                                        aria-labelledby="redesign-sortby-label reinvent-filter-most-recent"
                                        data-analytics-content-type="search filter" data-analytics-link-name="Date"
                                        aria-pressed="false" role="button" tabindex="0" class="sort-unselected">Date</a>
                                </div>

                                <h3 class="reinvent-filter-by eyebrow-title hidden-xs hidden-sm"
                                    data-attribute-filter-by="Filter By:">Filter By:
                                </h3>
                                <button
                                    class="reinvent-filter-results corporate-semibold btn btn-secondary ion-funnel drop-down-btn ucase hidden-lg hidden-md col-xs-12 col-sm-6"
                                    data-analytics-content-type="search filter"
                                    data-attribute-filter-results="Filter Results"
                                    data-attribute-modify-filters="Modify Filters ({0})" tabindex="0"
                                    aria-describedby="reinvent-filter-results-desc"
                                    data-analytics-link-name="Filter Results">Filter
                                    Button</button>
                                <div id="reinvent-filter-results-desc" class="sr-only">This will open a filter modal
                                </div>
                                <div class="focus-indicator" id="reinvent-filter-list">
                                    <div class="dropdown-menu dropdown-list col-xs-12 col-lg-4 col-md-4">
                                        <div class="search-filter-result"><span
                                                class="eyebrow-title filter-title corporate-bold">Filter
                                                Results</span><span class="ion-android-close filter-close"
                                                data-analytics-link-name="Close"
                                                data-analytics-template-zone="search filter" role="button" tabindex="0"
                                                aria-labelledby="filter-close-desc"></span></div>
                                        <div class="search-filter-panel form-horizontal" aria-live="off">
                                            <div class="redesign-search-filters corporate-regular"
                                                id="industry-redesign-facet">

                                                <div data-analytics-content-type="search filter"
                                                    class="reinvent-filter-category filter-border-top"
                                                    aria-label="Industry" role="button" tabindex="0"
                                                    data-analytics-link-name="industry - expand" aria-expanded="false"
                                                    onclick="myFunction()">

                                                    <h4>Category</h4>

                                                    <span class="ion-chevron-down reinvent-filter-icon"></span>
                                                </div>
                                                <div class="reinvent-checkbox INDUSTRY" tabindex="-1"
                                                    style="display: none; max-height: 342.625px; overflow-y: scroll;"
                                                    id="myDIV">
                                                    <fieldset>
                                                        <ul>
                                                            @foreach ($categories as $categories)
                                                                <li>
                                                                    <label for="products" class="corporate-regular">
                                                                        <input class="filter-checkbox" id="products"
                                                                            type="checkbox" name="Products"
                                                                            value="Products">
                                                                        <span
                                                                            class="ion-android-checkbox-blank icon-check-checkbox"
                                                                            role="checkbox" aria-checked="false"
                                                                            aria-label="Products filter with 40 results"
                                                                            tabindex="0"></span>
                                                                        <span aria-hidden="true" class="text-checkbox">
                                                                            {{ $categories->name }}
                                                                            (40)</span>
                                                                    </label>
                                                                </li>
                                                            @endforeach
                                                            <li>
                                                                <label for="products" class="corporate-regular">
                                                                    <input class="filter-checkbox" id="products"
                                                                        type="checkbox" name="Products"
                                                                        value="Products">
                                                                    <span
                                                                        class="ion-android-checkbox-blank icon-check-checkbox"
                                                                        role="checkbox" aria-checked="false"
                                                                        aria-label="Products filter with 40 results"
                                                                        tabindex="0"></span>
                                                                    <span aria-hidden="true"
                                                                        class="text-checkbox">Products
                                                                        (40)</span>
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <label for="products" class="corporate-regular">
                                                                    <input class="filter-checkbox" id="products"
                                                                        type="checkbox" name="Products"
                                                                        value="Products">
                                                                    <span
                                                                        class="ion-android-checkbox-blank icon-check-checkbox"
                                                                        role="checkbox" aria-checked="false"
                                                                        aria-label="Products filter with 40 results"
                                                                        tabindex="0"></span>
                                                                    <span aria-hidden="true"
                                                                        class="text-checkbox">Products
                                                                        (40)</span>
                                                                </label>
                                                            </li>
                                                        </ul>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="redesign-search-filters corporate-regular"
                                                id="contenttype-redesign-facet">
                                                <div data-analytics-content-type="search filter"
                                                    class="reinvent-filter-category" aria-label="Content Type"
                                                    role="button" tabindex="0"
                                                    data-analytics-link-name="content type - expand"
                                                    aria-expanded="false" onclick="myFunction2()">
                                                    <h4>Keywords</h4><span
                                                        class="ion-chevron-down reinvent-filter-icon"></span>
                                                </div>
                                                <div class="reinvent-checkbox CONTENTTYPE" tabindex="-1"
                                                    style="overflow-y: scroll;" id="myDIV2">
                                                    <fieldset>
                                                        <ul>
                                                            <li><label for="insights"
                                                                    data-analytics-content-type="search filter"
                                                                    data-analytics-link-name="insights"
                                                                    class="corporate-regular"><input
                                                                        class="filter-checkbox" id="insights"
                                                                        type="checkbox" name="Insights"
                                                                        value="Insights"><span
                                                                        class="ion-android-checkbox-blank icon-check-checkbox"
                                                                        role="checkbox" aria-checked="false"
                                                                        aria-label="Insights filter with 281 results"
                                                                        tabindex="0"></span><span aria-hidden="true"
                                                                        class="text-checkbox">Insights
                                                                        (281)</span></label></li>
                                                            <li><label for="client-case-study"
                                                                    data-analytics-content-type="search filter"
                                                                    data-analytics-link-name="client case study"
                                                                    class="corporate-regular"><input
                                                                        class="filter-checkbox" id="client-case-study"
                                                                        type="checkbox" name="Client Case Study"
                                                                        value="Client Case Study"><span
                                                                        class="ion-android-checkbox-blank icon-check-checkbox"
                                                                        role="checkbox" aria-checked="false"
                                                                        aria-label="Client Case Study filter with 164 results"
                                                                        tabindex="0"></span><span aria-hidden="true"
                                                                        class="text-checkbox">Client Case Study
                                                                        (164)</span></label></li>

                                                        </ul>
                                                    </fieldset>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="reinvent-filter-footer">
                                            <div class="reinvent-close-filter-button">
                                                <a href="javascript:void(0)" class="reinvent-close-filter" role="button"
                                                    data-analytics-template-zone="search filter"
                                                    data-analytics-link-name="Close"
                                                    aria-labelledby="reinvent-close-filter-desc">
                                                    <div class="btn btn-primary front ucase">Close</div>
                                                    <div class="behind ucase"></div>
                                                </a>
                                            </div>
                                            <div class="reinvent-apply-filter-button" style="display: none;">
                                                <a href="javascript:void(0)" class="reinvent-apply-filter" role="button"
                                                    data-analytics-template-zone="search filter"
                                                    data-analytics-link-name="Apply"
                                                    aria-labelledby="reinvent-apply-filter-desc">
                                                    <div class="btn btn-primary front ucase">Apply</div>
                                                    <div class="behind ucase"></div>
                                                </a>
                                            </div>
                                            <div id="reinvent-apply-filter-desc">
                                                <div class="reinvent-filter-number"
                                                    data-attribute-filters-selected="Filters Selected: {0}">Filters
                                                    Selected: 0</div>
                                                <div class="sr-only">Apply</div>
                                            </div>
                                            <div id="reinvent-close-filter-desc" class="sr-only">Close</div>
                                            <div id="filter-close-desc" class="sr-only">Exit</div>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <div class="col-md-8">
                                <hr class="redesign-line-bar" hidden="" style="display: none;">
                            </div>



                            <div class="all-results-container col-xs-12 col-sm-8 col-md-4 col-lg-4" aria-live="off"
                                hidden="" data-attribute-all-results="All Results" style="display: block;">
                                <h3 class="all-results eyebrow-title">All Results</h3>
                            </div>

                            <div class="show-number-of-results col-xs-12 col-sm-4 col-md-3 col-lg-3" aria-live="off"
                                hidden="" data-attribute-number-of-results="Showing {first}–{last} of  {total} results"
                                style="display: block;">
                                <p class="number-of-results fluid">Showing 1–10 of 10 results</p>
                            </div>

                            <div class="search-results-container col-sm-12 col-md-7 col-lg-7" aria-live="off" hidden=""
                                style="display: block;">
                                <div class="search-results-section" style="height: auto;">

                                    @foreach ($posts as $post)
                                        <div class="col-sm-12 search-results-0">
                                            <hr class="all-results-line-bar">
                                            <div class="search-results-header col-sm-8 col-md-12">
                                                <h4 class="header title quarternary-title"><a
                                                        href="/post/{{ $post->slug }}" class="search-result-link cta"
                                                        data-analytics-link-name="client case studies | accenture"
                                                        data-analytics-content-type="serp-ranked">{{ $post->title }}</a>
                                                </h4>
                                                <p class="content-description fluid dot-ellipsis"
                                                    style="overflow-wrap: break-word;">{{ $post->excerpt }}
                                                </p>
                                            </div>
                                            <div class="search-results-content col-sm-8 col-md-12">
                                                <p class="category dotdot content-title fluid">{{ $post->seo_title }}
                                                </p>
                                                <p class="search-results-divider fluid divider">|</p>
                                                <p class="date fluid">{{ $post->created_at }}</p>
                                            </div>
                                        </div>

                                    @endforeach


                                    <div class="col-sm-12 search-results-1">
                                        <hr class="all-results-line-bar">
                                        <div class="search-results-header col-sm-8 col-md-12">
                                            <h4 class="header title quarternary-title"><a
                                                    href="/gr-en/case-studies/strategy/divesting-with-focus"
                                                    class="search-result-link cta"
                                                    data-analytics-link-name="pharmaceutical, health company strengthens thru m&amp;a | accenture"
                                                    data-analytics-content-type="serp-ranked">Pharmaceutical, Health
                                                    Company Strengthens Thru M&amp;A | Accenture</a></h4>
                                            <p class="content-description fluid dot-ellipsis"
                                                style="overflow-wrap: break-word;">Read the <strong>client</strong>
                                                <strong>case</strong> <strong>study</strong> of a multinational
                                                pharmaceutical, consumer health and crop sciences company strengthening
                                                business through mergers and acquisitions.
                                            </p>
                                        </div>
                                        <div class="search-results-content col-sm-8 col-md-12">
                                            <p class="category dotdot content-title fluid">CLIENT CASE STUDY</p>
                                            <p class="search-results-divider fluid divider">|</p>
                                            <p class="date fluid">January 27, 2020</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
</section>

<script>
    function myFunction() {
        var x = document.getElementById("myDIV");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }

    function myFunction2() {
        var x = document.getElementById("myDIV2");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }

</script>
