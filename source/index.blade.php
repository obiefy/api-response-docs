@extends('_layouts.master')

@section('body')
<section class="container max-w-6xl mx-auto px-6 py-10 md:py-12">
    <div class="flex flex-col mb-10 lg:flex-row lg:mb-24">
        <div class="mt-8">
            <h1 id="intro-docs-template">{{ $page->siteName }}</h1>

            <h2 id="intro-powered-by-jigsaw" class="font-light mt-4">{{ $page->siteDescription }}</h2>

            <p class="text-lg">Develop clean and developers friendly API. <br class="hidden sm:block">Contributions are welcomed on GitHub</p>

            <div class="flex my-10">
                <a href="/docs/getting-started" title="{{ $page->siteName }} getting started" class="bg-teal-500 hover:bg-teal-600 font-normal text-white hover:text-white rounded mr-4 py-2 px-6">Get Started</a>

                <a href="https://github.com/obiefy/api-response" target="_blank" title="GitHub repo" class="bg-teal-200 hover:bg-teal-300 text-teal-500 font-normal hover:text-teal-700 rounded py-2 px-6">
                    Source code
                </a>
            </div>
        </div>

        <div class="mt-5 mr-4 mb-6 lg:mb-0 text-2xl">
            @include('_partials.examples.main')
        </div>
    </div>

    <hr class="block my-8 border">
    <h1 class="mb-6">Main Features: </h1>
    <br>
    <div class="md:flex -mx-2 -mx-4">
        <div class="mb-8 mx-3 px-2 md:w-1/2">
            <h3 id="intro-laravel" class="text-2xl text-blue-900 mb-0">
                (1) Simplicity
            </h3>
            <p>
                Simple, familiar and easy to use syntax.
            </p>
            @include('_partials.examples.simplicity')
        </div>

        <div class="mb-8 mx-3 px-2 md:w-1/2">
            <h3 id="intro-laravel" class="text-2xl text-blue-900 mb-0">
                (2) Extendable
            </h3>
            <p>
                You can extend the functionality by using
                <code>Macroable</code>
                <a href="https://laravel.com/api/7.x/Illuminate/Support/Traits/Macroable.html">
                    trait.
                </a>.
            </p>
            @include('_partials.examples.macro')
        </div>
    </div>
    <div class="md:flex -mx-2 -mx-4">
        <div class="mb-8 mx-3 px-2 md:w-1/2">
            <h3 id="intro-laravel" class="text-2xl text-blue-900 mb-0">
                (3) Supports Automatic Injection
            </h3>
            <p>
                You can type hint
                <code>Obiefy\API\Contracts\ApiInterface</code>
                and get <code>ApiResponse</code>
                instance.
            </p>
            @include('_partials.examples.injection')
        </div>
    </div>
</section>
@endsection
