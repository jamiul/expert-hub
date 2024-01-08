<div class="">
    @forelse($notifications as $notification)
        <tr @if($notification->unread()) style="background: --bs-table-color-state: var(--bs-table-hover-color);    --bs-table-bg-state: var(--bs-table-hover-bg);" @endif>
            <td style="vertical-align: middle;"><input class="form-check-input mt-0  admin-all-checkbox" type="checkbox" value="" aria-label="Checkbox for following text input">
                @if($notification->unread())
                    <badge>@lang('admin.new')</badge>
                @endif
                <div class="notification-details-thumb">
                    <img
                        src="{{ $notification->data['avatar']  }}"
                        class="" alt="avatar">
                </div>
            </td>
            <td style="vertical-align: middle;">{{ @$notification->data['title'] }}</td>
            <td class="balance-text">{{ @$notification->data['message'] }}</td>
            <td style="vertical-align: middle;">{{ $notification->created_at->diffForHumans() }}</td>
            <td style="vertical-align: middle;">
                <div class="policy-option">
                    <div class="draft-options">
                        <div class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                            </a>
                            <ul class="dropdown-menu admin-d-item">
                                <li>
                                    <a class="dropdown-item " href="#">View time sheet</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Message to client</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">View profile</a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="#">Contact expert</a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="#">Send to review team</a>
                                </li>

                            </ul>
                        </div>
                    </div>

                </div>
            </td>
        </tr>
    @empty

    @endforelse

    {{ $notifications->links() }}
</div>
