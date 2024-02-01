@extends('frontend.layouts.app')
@section('content')
@livewire('messaging')


@endsection

@push('bottom_scripts')
<script>

    function toggleClasses(parentSelector, className) {
        var parentElement = document.querySelector(parentSelector);
        if (parentElement) {
            // Toggle the specified class on the parent element
            parentElement.classList.toggle(className);
        } else {
            console.error('Parent element not found!');
        }
    }

    function removeClass(elementSelector, className) {
        var element = document.querySelector(elementSelector);

        if (element) {
            // Remove the specified class from the element
            element.classList.remove(className);
        } else {
            console.error('Element not found!');
        }
    }

    function startMessageEdit() {
        var parentSelector = document.querySelector('.chatbox-wrapper');

        // Check if the edit mode is not already activated
        if (!parentSelector.classList.contains('chatbox-editmode-activated')) {
            // Create and append the .chatbox-overly div
            var overlyDiv = document.createElement('div');
            overlyDiv.classList.add('chatbox-overly');
            parentSelector.appendChild(overlyDiv);

            // Add the class to .chatbox-wrapper
            parentSelector.classList.add('chatbox-editmode-activated');

            // Add click event listener to .chatbox-overly
            overlyDiv.addEventListener('click', stopMessageEdit);
        }
    }

    function startMobileMessageEdit() {
        startMessageEdit();
        removeClass('.chatbox-message-mobile-action', 'chatbox-message-mobile-action-activated')
    }

    function stopMessageEdit() {
        var parentSelector = document.querySelector('.chatbox-wrapper');

        // Remove the .chatbox-overly div
        var overlyDiv = document.querySelector('.chatbox-overly');
        if (overlyDiv) {
            overlyDiv.remove();
        }

        // Remove the class from .chatbox-wrapper
        parentSelector.classList.remove('chatbox-editmode-activated');
    }

    function showMobileMessageAction(element) {
        element.classList.toggle("chatbox-selected-message");
        toggleClasses(".chatbox-message-mobile-action", "chatbox-message-mobile-action-activated");
    }


    // Function to add class based on window size

    function updateClass() {
        // console.log("HI");
        var chatboxContentArea = document.querySelector('.chatbox-content-area');
        var chatboxConversationSummaryShow = 'chatbox-conversation-summary-show';

        if (window.innerWidth > 1200) {
            // Add the class if window size is greater than 800px
            chatboxContentArea.classList.add(chatboxConversationSummaryShow);
        } else {
            // Remove the class if window size is 800px or smaller
            chatboxContentArea.classList.remove(chatboxConversationSummaryShow);
        }
    }

    // Wait for the DOM to be fully loaded
    document.addEventListener('DOMContentLoaded', function () {
        // Initial call to set the class based on the window size
        updateClass();

        // Event listener to update the class when the window is resized
        window.addEventListener('resize', updateClass);
    });

    function scrollToBottom(selectorElement) {
        let selector = document.querySelector(selectorElement);        
        selector.scrollTop = selector.scrollHeight;
    }

    setTimeout(function () {
        scrollToBottom('.chatbox-message-list');

    }, 500)

        
</script>
@endpush