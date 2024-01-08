<div wire:poll.keep-alive>
    <table class="table table-hover transaction-all table-responsive">
        <thead class="t-history">
        <tr>
            <th scope="col"><input class="form-check-input mt-0 admin-all-checkbox" type="checkbox" value="" aria-label="Checkbox for following text input"> ID</th>
            <th scope="col">{{ __('admin.Title') }}</th>
            <th scope="col">{{ __('admin.Message') }}</th>
            <th scope="col">{{ __('admin.Date') }}</th>
        </tr>
        </thead>
        <tbody class="">

        @forelse($notifications as $notification)
            <tr
                @if($notification->unread()) style="background: --bs-table-color-state: var(--bs-table-hover-color);    --bs-table-bg-state: var(--bs-table-hover-bg);" @endif
            wire:click="markAsRead('{{ $notification->id }}')">
                <td style="vertical-align: middle;"><input class="form-check-input mt-0  admin-all-checkbox" type="checkbox" value="" aria-label="Checkbox for following text input">
                    @if($notification->unread())
                        <badge>{{ __('admin.New') }}</badge>
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
            </tr>
        @empty

        @endforelse
        </tbody>
    </table>
    <div class="row pagination-padding">
        <div class="pagination-next-prev">
            {{ $notifications->links() }}
        </div>
    </div>

</div>
