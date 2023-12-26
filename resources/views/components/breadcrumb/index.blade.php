@props([
    'title' => '',
])
<div class="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="breadcrumb-left">
                    <ul>
                    <li><a href="/"><x-icon.home/></a></li>
                    <li><x-icon.chevron-right/></li>
                    <li>{{ $title }}</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="breadcrumb-right">
                    <a href="javascript:void(0)" class="btnShareCurrentPage" data-bs-toggle="modal" data-bs-target="#shareModel">
                    <img src="{{asset('assets/frontend/img/share-icon.png')}}">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>