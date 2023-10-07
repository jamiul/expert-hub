@extends('admin.layouts.app')

@section('content')
<div class="row">
  <div class="col-xl-4">
    <div class="card">
      <div class="card-body text-center">
        <h1>Expert meeting page</h1>
        <span class="avatar avatar-xxl mb-3">
          @if ($user->photo != null)
          <img src="{{ customAsset($user->photo)}}">
          @else
          <img src="{{ asset('assets/frontend/default/img/avatar-place.png') }}">
          @endif
          <span class="badge badge-dot badge-circle badge-success badge-status badge-md"></span>
        </span>
        <div class="rating rating-sm">
          {{ renderStarRating(getAverageRating($user->id)) }}
        </div>
        <h1 class="h5 mb-1">{{ $user->name }}</h1>
        <h5 class="mb-3 fs-12 opacity-60">{{ '@' . $user->user_name }}</h5>
        <div class="text-center">
          @if ($userProfile->package != null)
          <span class="avatar avatar-square avatar-xxs" title="{{ $userProfile->package->name }}">
            <img src="{{ customAsset($userProfile->package->badge) }}">
          </span>
          @endif
          @foreach ($user->badges as $key => $userBadge)
          @if ($userBadge->badge != null)
          <span class="avatar avatar-square avatar-xxs" title="{{ $userBadge->badge->name }}"><img
              src="{{ asset($userBadge->badge->icon) }}"></span>
          @endif
          @endforeach
        </div>
        <div class="mt-5 text-left">
          <h6 class="separator mb-4 text-left"><span class="bg-white pr-3">{{ translate('Verification') }}</span></h6>
          <p class="text-muted text-capitalize">
            <span>{{ translate('Email Verification') }} :</span>
            @if ($user->email_verified_at != null)
            <span class="badge badge-sm float-right badge-circle badge-success"> <i class="las la-check"></i> </span>
            @else
            <span class="badge badge-sm float-right badge-circle badge-secondary"> <i class="las la-times"></i> </span>
            @endif
          </p>

          @if ($user->verifications != null)
          @foreach ($user->verifications as $key => $verification)
          <p class="text-muted text-capitalize"><span>{{ str_replace('_', ' ', $verification->type) }} :</span>
            @if ($verification->verified != 0)
            @if ($verification->type == 'identity_verification')
            <span class="badge badge-sm float-right badge-circle badge-success"> <i class="las la-check"></i> </span>
            @else
            <span class="badge badge-sm float-right badge-circle badge-success"> <i class="las la-check"></i> </span>
            @endif
            @else
            @if ($verification->type == 'identity_verification')
            <span class="badge badge-sm float-right badge-circle badge-secondary"> <i class="las la-times"></i> </span>
            @else
            <span class="badge badge-sm float-right badge-circle badge-secondary"> <i class="las la-times"></i> </span>
            @endif
            @endif
          </p>
          @endforeach
          @endif
        </div>
        <div class="text-left mt-5">
          <h6 class="separator mb-4 text-left"><span class="bg-white pr-3">{{ translate('Account Information') }}</span>
          </h6>

          <p class="text-muted">
            <strong>{{ translate('Full Name') }} :</strong>
            <span class="ml-2">{{ $user->name }}</span>
          </p>
          <p class="text-muted">
            <strong>{{ translate('Gender') }} :</strong>
            <span class="ml-2">{{ $userProfile->gender }}</span>
          </p>
          <p class="text-muted">
            <strong>{{ translate('Mobile') }} :</strong>
            <span class="ml-2">{{ $user->address->phone }}</span>
          </p>
          <p class="text-muted">
            <strong>{{ translate('Email') }} :</strong>
            <span class="ml-2">{{ $user->email }}</span>
          </p>
          <p class="text-muted">
            <strong>{{ translate('Location') }} :</strong>
            <span class="ml-2">
              @if ($user->address->street != null) {{ $user->address->street }} @endif
              @if ($user->address->city != null) {{ $user->address->city->name }} @endif
              @if ($user->address->country != null) {{ $user->address->country->name }} @endif
            </span>
          </p>
          <p class="text-muted">
            <strong>{{ translate('Postal Code') }} :</strong>
            <span class="ml-2">
              @if ($user->address->postal_code != null) {{ $user->address->postal_code }} @endif
            </span>
          </p>
          <p class="text-muted">
            <strong>{{ translate('Skills') }} :</strong>
            <span class="ml-2">
              @if ($userProfile->skills != null)
              @foreach (json_decode($userProfile->skills) as $key => $skillId)
              @php
              $skill = \App\Models\Skill::find($skillId);
              @endphp
              @if ($skill != null)
              <span class="badge badge-inline badge-secondary">{{ $skill->name }}</span>
              @endif
              @endforeach
              @endif
            </span>
          </p>
          <p class="text-muted">
            <strong>{{ translate('Running Package') }} :</strong>
            <span class="ml-2">
              @if ($userProfile->user->userPackage != null && $userProfile->user->userPackage->package != null)
              {{$userProfile->user->userPackage->package->name}}
              @else
              {{translate('Package Removed')}}
              @endif
            </span>
          </p>
          <p class="text-muted"><strong>{{ translate('Balance') }} :</strong>
            <span class="ml-2">
              {{ singlePrice($userProfile->balance) }}
            </span>
          </p>

        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-8">

    @if ($userProfile->bio != null)
    <div class="card">
      <div class="card-header">
        <h6 class="mb-0">{{ translate('Bio') }}</h6>
      </div>
      <div class="card-body">
        {{ $userProfile->bio }}
      </div>
    </div>
    @endif
    @if ($userAccount != null)
    <div class="card">
      <div class="card-header">
        <h5 class="mb-0 h6">{{ $user->name }} {{ translate('Account Information') }}</h5>
      </div>
      <div class="card-body">
        <div class="text-left">
          <p class="text-muted"><strong>{{ translate('Bank Name') }} :</strong> <span
              class="ml-2">{{ $userAccount->bank_name }}</span></p>

          <p class="text-muted"><strong>{{ translate('Bank Account Name') }} :</strong><span
              class="ml-2">{{ $userAccount->bank_account_name }}</span></p>

          <p class="text-muted"><strong>{{ translate('Bank Account Number') }} :</strong><span
              class="ml-2">{{ $userAccount->bank_account_number }}</span></p>

          <p class="text-muted"><strong>{{ translate('Paypal Account') }} :</strong> <span
              class="ml-2">{{ $userAccount->paypal_acc_name }}</span></p>

          <p class="text-muted"><strong>{{ translate('Paypal Email') }} :</strong> <span
              class="ml-2">{{ $userAccount->paypal_email }}</span></p>

        </div>
      </div>
    </div>
    @endif
    @if ($user->workExperiences != null)
    <div class="card">
      <div class="card-header">
        <h5 class="mb-0 h6">{{ translate('Work experiences') }}</h5>
      </div>
      <div class="card-body">
        @foreach ($user->workExperiences as $key => $userWorkExp)
        <div class="text-left">
          <p class="text-muted text-capitalize"><strong>{{ translate('Company Name') }} :</strong>
            <span class="ml-2">{{ $userWorkExp->company_name }}</span>
          </p>
          <p class="text-muted text-capitalize"><strong>{{ translate('Company Website') }} :</strong>
            <span class="ml-0"><a href="{{ $userWorkExp->company_website }}"
                target="_blank">{{ $userWorkExp->company_website }}</a></span>
          </p>
          <p class="text-muted text-capitalize"><strong>{{ translate('Designation') }} :</strong>
            <span class="ml-2">{{ $userWorkExp->designation }}</span>
          </p>
          <p class="text-muted text-capitalize"><strong>{{ translate('Location') }} :</strong>
            <span class="ml-2">{{ $userWorkExp->location }}</span>
          </p>
          <p class="text-muted text-capitalize"><strong>{{ translate('Joining Date') }} :</strong>
            <span class="ml-2">{{ $userWorkExp->start }}</span>
          </p>
          @if ($userWorkExp->present == '1')
          <p class="text-muted text-capitalize"><strong>{{ translate('Leaving Date') }} :</strong>
            <span class="ml-2">{{ translate('Present') }}</span>
          </p>
          @else
          <p class="text-muted text-capitalize"><strong>{{ translate('Leaving Date') }} :</strong>
            <span class="ml-2">{{ $userWorkExp->end }}</span>
          </p>
          @endif
          <hr />
        </div>
        @endforeach
      </div>
    </div>
    @endif

  </div>
</div>
@endsection
