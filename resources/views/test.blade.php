@extends('layouts.noparticles')

<style>
    * {
        box-sizing: border-box;
    }

    .bg-grey {
        margin: 150px;
    }

    .screen-reader-text {
        position: absolute;
        top: -9999px;
        left: -9999px;
    }

    .search-form {
        width: 35%;
        float: left;
        padding-right: 20px;
    }

    .search-term {
        width: 100%;
        margin: 0 0 5px 0;
    }

    .search-terms {
        display: table;
        margin: 0 0 10px 0;
    }

    .search-filters {
        overflow: hidden;
        margin: 0 0 10px 0;
        background: #eee;
        padding: 10px;
    }

    .search-filters-title {
        font-weight: normal;
        font-size: 1em;
        margin: 0 0 10px 0;
    }

    .filter-group {
        margin: 0 0 10px 0;
    }

    .cloned-filters {
        display: none;
    }

    .search-results {
        width: 65%;
        float: right;
    }

    .result {
        float: left;
        width: 100%;
        height: 100px;
        margin-right: 1.33%;
        margin-bottom: 1.33%;
        background: #eee;
    }

    .result:nth-child(4n) {
        margin-right: 0;
    }

    .result img {
        width: 100%;
        height: auto;
        display: block;
    }

    @media (max-width: 1000px) {
        body {
            width: 100%;
        }


    }

    @media (max-width: 600px) {

        body,
        .search-form,
        .search-results {
            width: 100%;
        }

        .search-form {
            padding: 0;
        }

        .search-terms {
            display: table;
            width: 100%;
            margin: 0;
        }

        .search-terms>div {
            display: table-row;
        }

        .search-terms>div>span {
            display: table-cell;
        }

        .search-term-wrap {
            padding-right: 10px;
        }

        .search-button {
            width: 100%;
        }

        .search-filters-title {
            color: blue;
            text-decoration: underline;
            cursor: pointer;
            margin: 0;
        }

        .search-filters.pinned {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background: rgba(0, 0, 0, 0.2);
        }

        .filter-group {
            display: none;
        }

        .filter-explanation {
            display: none;
        }

        .filters-open .filter-group,
        .filters-open .filter-explanation {
            display: block;
        }

        .filters-open .search-filters-title {
            margin: 0 0 10px 0;
        }
    }

    @media screen and (max-width: 1024px) and (min-width: 768px) {
        .container {
            margin-top: 150px !important;
            margin-bottom: 150px !important;

        }
    }

</style>

@section('content')

    <form role="search" class="search-form" id="search-form" action="#" method="post">

        <section class="search-terms">
            <label for="search-term" class="search-term-label screen-reader-text">Search Terms</label>
            <div>
                <span class="search-term-wrap">
                    <input type="search" id="search-term" class="search-term">
                </span>
                <span class="search-term-button-wrap">
                    <input type="submit" value="Search" class="search-button">
                </span>
            </div>
        </section>

        <section class="search-filters" id="search-filters">

            <h3 class="search-filters-title" id="search-filters-title">Search Filters</h3>

            <div class="size-filters filter-group">

                <div>
                    <input type="checkbox" id="filter-size-small">
                    <label for="filter-size-small">Espa</label>
                </div>

                <div>
                    <input type="checkbox" id="filter-size-medium" checked>
                    <label for="filter-size-medium">Espa2</label>
                </div>

                <div>
                    <input type="checkbox" id="filter-size-large">
                    <label for="filter-size-large">Espa3</label>
                </div>

            </div>

            <div class="content-filters filter-group">

                <div>
                    <input type="radio" id="filter-content-cats" name="filter-content">
                    <label for="filter-content-cats">Keyword1</label>
                </div>

                <div>
                    <input type="radio" id="filter-content-dogs" name="filter-content">
                    <label for="filter-content-dogs">Keyword2</label>
                </div>

                <div>
                    <input type="radio" id="filter-content-Birds" name="filter-content">
                    <label for="filter-content-birds">Keyword3</label>
                </div>
            </div>

            <small class="filter-explanation">Choosing filters automatically refines and refreshes search.</small>

        </section>
    </form>

    <section class="search-results">
        <div class="result"></div>
        <div class="result"></div>
        <div class="result"></div>
        <div class="result"></div>
        <div class="result"></div>
        <div class="result"></div>
        <div class="result"></div>
        <div class="result"></div>
        <div class="result"></div>
        <div class="result"></div>
        <div class="result"></div>

    </section>
@endsection
