<div class="card card-40">
    <div class="card-body">
        <ul class="progress-bar-nav-vertical profile-progress-bar-nav">
            <li class="@if($currentStep > 1) done-item @endif @if($currentStep == 1) running-item @endif">
                <x-auth.step-name name="Getting Started" time="1"/>
            </li>
            <li class="@if($currentStep > 2) done-item @endif @if($currentStep == 2) running-item @endif">
                <x-auth.step-name name="Position" time="1"/>
            </li>
        </ul>
    </div>
</div>