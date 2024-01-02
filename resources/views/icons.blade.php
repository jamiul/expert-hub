@extends('frontend.layouts.app')
@section('content')
    @php
        $iconComponentFiles = File::files(resource_path('views/components/icon'));
        $iconComponentFileNames = [];
        foreach($iconComponentFiles as $file){
            $iconComponentFileNames[] = 'icon.' . Str::before($file->getFileName(), '.blade.php');
        }
    @endphp
    <h1 class="mt-5 text-center">Icon Components</h1>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="icon-component-list">
                    @foreach ($iconComponentFileNames as $iconComponentFileName)


                        <div onclick="copyCode(this)">
                            <x-dynamic-component :component="$iconComponentFileName"/>
                            <p><code>{{ '<x-' . $iconComponentFileName . '/>' }}</code></p>
                        </div>


                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <style>
        .icon-component-list {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 20px;
            margin: 50px 0;
        }

        .icon-component-list > div {
            background-color: #fff;
            padding: 5px;
            border: 1px solid #ececec;
            cursor: pointer;
            transition: 0.2s;
            border-radius: 4px;
        }

        .icon-component-list > div:hover {
            background-color: #f7f9ff;
            border-color: #e0e8ff;
            transform: translateY(-5px);
        }

        .icon-component-list > div svg {
            width: 35px;
            height: 35px;
        }

        .icon-component-list > div path {
            fill: #000000;
        }
    </style>

    <script>
        function copyCode(element) {
            // Get the text content of the code tag inside the clicked div
            var codeContent = element.querySelector('code').innerText;

            // Create a textarea element and set its value to the code content
            var textarea = document.createElement('textarea');
            textarea.value = codeContent;

            // Append the textarea to the body
            document.body.appendChild(textarea);

            // Select the text in the textarea
            textarea.select();

            // Copy the selected text
            document.execCommand('copy');

            // Remove the textarea from the body
            document.body.removeChild(textarea);

            // Optionally, provide some feedback to the user
            alert('Code copied to clipboard!');
        }
    </script>


@endsection
