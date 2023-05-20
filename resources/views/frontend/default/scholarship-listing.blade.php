@extends('frontend.default.layouts.app')

@section('content')
<section class="container">
    <div class="mt-2 fw-bold fs-19 mb-3">
        Scholarships Australia is a scholarship consultancy platform. Our
        consultants will assist you to submit a competitive scholarship
        application that stands out. Our scholarship search tool will assist
        in finding the right scholarship for you.
    </div>
    <div class="d-lg-flex d-md-flex w-100 justify-content-center my-5  ">
        <div class="position-relative px-2 w-100 dropdown ">
            <select class=" py-2 px-2 w-100  text-black border-2 rounded-2 shadow-sm  ">
                <option class="fs-bold dropdown inline text-black disabled ">
                    Select type of scholarship
                </option>
                <option value="Postgraduate">Postgraduate</option>
                <option value="Undergraduate">Undergraduate</option>
            </select>
        </div>

        <div class="position-relative w-100 px-2  w-lg-75 dropdown ">
            <select class=" py-2 px-2 w-100  bg-white  text-black border-2  rounded-2 shadow-sm outline-none appearance-none ">
                <option class="font-sans fs-bold text-black disabled">
                    Select a level of study
                </option>
                <option value="Postgraduate">Postgraduate</option>
                <option value="Undergraduate">Undergraduate</option>
            </select>
        </div>

        <button class="position-relative w-100 w-lg-75 border-0 p-1 ml-1 px-3 py-2   rounded-2 shadow-sm outline-none appearance-none  text-white c-pointer font-sans" style="background-color:#275846;">
            Search
        </button>

    </div>
    <div>

    </div>
</section>
@endsection

@section('script')
<script type="text/javascript">
    function applyFilter() {
        $('#project-filter-form').submit();
    }

    function rangefilter(arg) {
        $('input[name=min_price]').val(arg[0]);
        $('input[name=max_price]').val(arg[1]);
        applyFilter();
    };
</script>
@endsection
