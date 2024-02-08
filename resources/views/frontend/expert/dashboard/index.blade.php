@extends('frontend.layouts.app')
@section('content')
    <section class="page-section-sm">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="sidebar-layout right-sidebar-layout expert-dashboard-layout">
                        <div class="page-content p-0">
                            <livewire:expert-profile.project-list />
                        </div>
                        <div class="page-sidebar">
                            <livewire:profile.summary />
                            <div class="profile-widget">
                                <div class="d-flex gap-3 justify-content-between mb-2">
                                    <h4 class="widget-title mb-0">Available Now</h4>
                                    <span>
                                <label class="widget-title-switch widget-on-off-switch">
                                    <input type="checkbox" role="switch" name="project-type">
                                    <span class="switch-label">
                                        <span class="switch-track">
                                            <span class="switch-indicator"></span>
                                        </span>
                                    </span>
                                </label>
                            </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
