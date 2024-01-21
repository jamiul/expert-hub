<div
    x-data="{
        notifications: [],
        add(e) {
            console.log(e.timeStamp);
            this.notifications.push({
                id: e.timeStamp,
                type: e.detail.type,
                content: e.detail.content,
            })
        },
        remove(notification) {
            this.notifications = this.notifications.filter(i => i.id !== notification.id)
        },
    }"
    @notify.window="add($event)"
    @if(session('notify'))
        x-init="notifications.push({
            id: Date.now(),
            type: '{{ session('notify')['type'] }}',
            content: '{{ session('notify')['content'] }}',
        })"
    @endif
    class="position-fixed bottom-0 end-0 d-flex flex-column pe-4 pb-4 w-full max-w-xs space-y-4 sm:justify-start z-3"
    role="status"
    aria-live="polite"
>
    <!-- Notification -->
    <template x-for="notification in notifications" :key="notification.id">
        <div
            x-data="{
                show: false,
                init() {
                    this.$nextTick(() => this.show = true)
 
                    setTimeout(() => this.transitionOut(), {{ config('toast.timeout') }})
                },
                transitionOut() {
                    this.show = false
 
                    setTimeout(() => this.remove(this.notification), 500)
                },
            }"
            x-show="show"
            x-transition.duration.500ms
            class="alert-wrapper"
        >

            <div x-show="notification.type === 'success'" class="alert edux-alert edux-alert-success" role="alert">
                <x-icon.check-circle fill="#fff"/>
                <span x-text="notification.content">Success!</span>
                <button x-on:click="transitionOut()" type="button" class="close" aria-label="Close">
                    <span aria-hidden="true"><x-icon.close fill="#fff"/></span>
                </button>
            </div>
            <div x-show="notification.type === 'warning'" class="alert edux-alert edux-alert-warning" role="alert">
                <x-icon.warning fill="#fff"/>
                <span x-text="notification.content">Warning!</span>
                <button x-on:click="transitionOut()" type="button" class="close" aria-label="Close">
                    <span aria-hidden="true"><x-icon.close fill="#fff"/></span>
                </button>
            </div>
            <div x-show="notification.type === 'info'" class="alert edux-alert edux-alert-primary" role="alert">
                <x-icon.info fill="#fff"/>
                <span x-text="notification.content">Info!</span>
                <button x-on:click="transitionOut()" type="button" class="close" aria-label="Close">
                    <span aria-hidden="true"><x-icon.close fill="#fff"/></span>
                </button>
            </div>
            <div x-show="notification.type === 'danger'" class="alert edux-alert edux-alert-danger" role="alert">
                <x-icon.dangerous fill="#fff"/>
                <span x-text="notification.content">Danger!</span>
                <button x-on:click="transitionOut()" type="button" class="close" aria-label="Close">
                    <span aria-hidden="true"><x-icon.close fill="#fff"/></span>
                </button>
            </div>
        </div>
    </template>
</div>