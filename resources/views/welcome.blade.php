@extends('layouts.app')

@section('content')
<div class="blurb">
    <div class="container">
        <p>Penguin is the ultimate app for finding the perfect brand name for your upcoming business or startup. It can check dozens of social media services and the most popular domain extensions all at once.</p>
        <div class="downloads">
            <img class="app-icon" src="{{ asset('/img/app_icon.png') }}" alt="App Icon" width="60" height="60">
            <a href="#"><img src="{{ asset('/img/ComingSoonBadge_WHT.svg') }}" alt="Download on the App Store today!"></a>
        </div>
        <img class="device-frame" src="{{ asset('/img/iPhone.png') }}" alt="iPhone X device frame with screenshot of app inside">
    </div>
</div>

<section>
    <div class="container">
        <div class="row">
            <div class="column">
                <i class="fas fa-puzzle-piece fa-2x"></i>
                <div class="feature-text">
                    <h4>Dozens of Services</h4>
                    <p>Penguin supports over 10 different social media and gaming services as well as the most popular domain name extensions.</p>
                </div>
            </div>
            <div class="column">
                <i class="fas fa-clock fa-2x"></i>
                <div class="feature-text">
                    <h4>Extremely Fast</h4>
                    <p>Penguin excels at getting you results as fast as possible, so you can spend less time finding the perfect name for your brand.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="column">
                <i class="fas fa-code-branch fa-2x"></i>
                <div class="feature-text">
                    <h4>Simple Developer API</h4>
                    <p>Penguin offers a breathtakingly refreshing and simple REST API for developers to use in their apps that takes the fuss out of checking username availability by providing consistent JSON responses.</p>
                </div>
            </div>
            <div class="column">
                <i class="fas fa-paint-brush fa-2x"></i>
                <div class="feature-text">
                    <h4>Modern Design</h4>
                    <p>Who says utility apps can’t look as good as they function? Penguin has a modern, fun look that adheres to platform-specific guidelines.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="column">
                <i class="fas fa-th fa-2x"></i>
                <div class="feature-text">
                    <div class="feature-title">
                        <h4>Bulk Mode</h4>
                        <span class="pro-badge">PRO</span>
                    </div>
                    <p>For the power users, Penguin introduces a one-of-a-kind bulk mode to check entire word lists in mere seconds.</p>
                </div>
            </div>
            <div class="column">
                <i class="fa fa-paint-brush fa-2x"></i>
                <div class="feature-text">
                    <div class="feature-title">
                        <h4>Themes</h4>
                        <span class="pro-badge">PRO</span>
                    </div>
                    <p>Penguin comes packed with a beautiful set of themes to customize the interface to suit your personal style.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="social-blurb">
    <div class="container">
        <div class="column app-store-download">
            <img class="app-icon" src="{{ asset('/img/app_icon.png') }}" alt="App Icon" width="60" height="60">
            <a href="#"><img src="{{ asset('/img/ComingSoonBadge_WHT.svg') }}" alt="Download on the App Store today!"></a>
        </div>
        <div class="column social-media">
            <a href="https://twitter.com/getpenguinapp" class="social-link"><i class="fab fa-twitter fa-2x"></i></a>
            <a href="https://instagram.com/getpenguin" class="social-link"><i class="fab fa-instagram fa-2x"></i></a>
            <a href="https://facebook.com/getpenguin" class="social-link"><i class="fab fa-facebook fa-2x"></i></a>
            <!-- <a href="#" class="social-link"><i class="fab fa-youtube fa-2x"></i></a> -->
        </div>
    </div>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="column">
                <h5>Need Support?</h5>
                <ul>
                    <li><a href="{{ route('forum') }}">Community Forum</a></li>
                    <li><a href="{{ route('discord') }}">Discord Server</a></li>
                </ul>
            </div>
            <div class="column">
                <h5>Helpful Links</h5>
                <ul>
                    <li><a href="{{ route('api-docs') }}">API Documentation</a></li>
                    <li><a href="{{ route('github-issues') }}">Bug Tracker</a></li>
                    <li><a href="">Release Notes</a></li>
                </ul>
            </div>
            <div class="column">
                <h5>Resources</h5>
                <ul>
                    <li><a href="">Press / Advertising</a></li>
                    <li><a href="">Other Downloads</a></li>
                </ul>
            </div>
            <div class="column">
                <h5>Customer Area</h5>
                <ul>
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
@endsection
