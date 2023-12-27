<div
    x-data="{
        notifications: [],
        add(e) {
            console.log(e.detail.content);
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
    class="position-fixed bottom-0 end-0 d-flex flex-column pe-4 pb-4 w-full max-w-xs space-y-4 sm:justify-start"
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
 
                    setTimeout(() => this.transitionOut(), 5000)
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

            <div x-show="notification.type === 'success'" class="alert edux-alert alert-success" role="alert">
                <x-icon.check-circle/>
                <span x-text="notification.content"><strong>Holy guacamole!</strong> You should check in on some of those fields below.</span>
                <button @click="transitionOut()" type="button" class="close" aria-label="Close">
                    <span aria-hidden="true"><x-icon.close/></span>
                </button>
            </div>
            <div x-show="notification.type === 'warning'" class="alert edux-alert alert-warning" role="alert">
                <x-icon.warning/>
                <span x-text="notification.content"><strong>Holy guacamole!</strong> You should check in on some of those fields below.</span>
                <button @click="transitionOut()" type="button" class="close" aria-label="Close">
                    <span aria-hidden="true"><x-icon.close/></span>
                </button>
            </div>
            <div x-show="notification.type === 'info'" class="alert edux-alert alert-info" role="alert">
                <x-icon.info/>
                <span x-text="notification.content"><strong>Holy guacamole!</strong> You should check in on some of those fields below.</span>
                <button @click="transitionOut()" type="button" class="close" aria-label="Close">
                    <span aria-hidden="true"><x-icon.close/></span>
                </button>
            </div>
            <div x-show="notification.type === 'danger'" class="alert edux-alert alert-danger" role="alert">
                <x-icon.info/>
                <span x-text="notification.content"><strong>Holy guacamole!</strong> You should check in on some of those fields below.</span>
                <button @click="transitionOut()" type="button" class="close" aria-label="Close">
                    <span aria-hidden="true"><x-icon.close/></span>
                </button>
            </div>
        </div>
    </template>
</div>