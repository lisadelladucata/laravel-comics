@extends('layouts.app')

@section('content')
<section class="hero">
        <div class="container">

        </div>
    </section>

    <section class="current-series-wrapper">
        <div class="container">
            <h2 class="current-series-title">CURRENT SERIES</h2>
            <div class="comics-grid">
                @foreach ($comics as $comic)
                    <div class="comic-item">
                        <a href="#">
                            <div class="thumb">
                                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                            </div>
                            <div class="title">
                                {{ $comic['title'] }}
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <button class="load-more">LOAD MORE</button>
        </div>
    </section>

    <section class="services">
        <div class="container">
            <ul>
                <li>
                    <a href="#">
                        <img src="{{ asset('/images/buy-comics-digital-comics.png') }}" alt="Digital Comics">
                        <span>DIGITAL COMICS</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ asset('/images/buy-comics-merchandise.png') }}" alt="DC Merchandise">
                        <span>DC MERCHANDISE</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ asset('/images/buy-comics-subscriptions.png') }}" alt="Subscription">
                        <span>SUBSCRIPTION</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ asset('/images/buy-comics-shop-locator.png') }}" alt="Comic Shop Locator">
                        <span>COMIC SHOP LOCATOR</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ asset('/images/buy-dc-power-visa.svg') }}" alt="DC Power Visa">
                        <span>DC POWER VISA</span>
                    </a>
                </li>
            </ul>
        </div>
    </section>
@endsection