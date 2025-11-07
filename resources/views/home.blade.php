@extends('layouts.default')

@section('title', 'Home Page')

@section('content')
    <div class="jumbotron jumbotron-custom" style="color : #222;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-left">
                    <h1 class="display-4">Welcome to LoanManaging</h1>
                    <p class="lead">Your one-stop solution for managing loans efficiently.</p>
                    <hr class="my-4">
                    <p>Explore our products and services to find the best fit for your needs.</p>
                    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                </div>
                <div class="col-md-6 text-left">
                    <h2>Products</h2>
                    <p>Discover our range of loan management products designed to simplify your financial operations.</p>
                    <a class="btn btn-secondary" href="#" role="button">View Products</a>
                </div>
            </div>
        </div>
    </div <!-- HERO SECTION -->
    <section class="hero text-center py-5 bg-light">
        <h1>Manage Your Loans Effortlessly</h1>
        <p>Streamline your financial operations and take control of all your loan products in one place.</p>
        <a href="#" class="btn btn-primary btn-lg m-2">Get Started</a>
        <a href="#" class="btn btn-secondary btn-lg m-2">Learn More</a>
    </section>

    <!-- PRODUCTS SECTION -->
    <section class="products container py-5">
        <h2>Our Loan Products</h2>
        <p>Choose the right solution for your financial needs.</p>

        <div class="row mt-4">
            <div class="col-md-4 mb-3">
                <h3>Personal Loan</h3>
                <p>Flexible loans designed to help you cover unexpected expenses or personal projects with ease.</p>
                <a href="#" class="btn btn-secondary">Learn More</a>
            </div>
            <div class="col-md-4 mb-3">
                <h3>Business Loan</h3>
                <p>Fuel your business growth with tailored loans offering competitive interest rates and repayment options.
                </p>
                <a href="#" class="btn btn-secondary">Learn More</a>
            </div>
            <div class="col-md-4 mb-3">
                <h3>Mortgage Loan</h3>
                <p>Find the perfect home financing solution with simple terms and fast approval processes.</p>
                <a href="#" class="btn btn-secondary">Learn More</a>
            </div>
        </div>
    </section>

    <!-- HOW IT WORKS SECTION -->
    <section class="how-it-works container py-5 bg-light">
        <h2>How It Works</h2>
        <div class="mt-3">
            <p><strong>Step 1:</strong> Sign Up – Create your account in minutes.</p>
            <p><strong>Step 2:</strong> Apply – Choose your loan product and submit an application.</p>
            <p><strong>Step 3:</strong> Get Approved – Receive instant notifications about your approval status.</p>
            <p><strong>Step 4:</strong> Manage – Track and repay your loans easily from your dashboard.</p>
        </div>
    </section>

    <!-- TESTIMONIALS SECTION -->
    <section class="testimonials container py-5">
        <h2>What Our Clients Say</h2>
        <div class="row mt-3">
            <div class="col-md-6 mb-3">
                <p>“This platform made managing my loans so much easier. Highly recommended!” – Jane D.</p>
            </div>
            <div class="col-md-6 mb-3">
                <p>“Fast approvals and great support. I can see all my loans in one place.” – Mark S.</p>
            </div>
        </div>
    </section>

    <!-- FAQ SECTION -->
    <section class="faq container py-5 bg-light">
        <h2>Frequently Asked Questions</h2>
        <div class="mt-3">
            <p><strong>Q1:</strong> How long does it take to get approved?</p>
            <p><strong>A1:</strong> Most applications are processed within 24 hours.</p>

            <p><strong>Q2:</strong> Can I apply for multiple loans?</p>
            <p><strong>A2:</strong> Yes, you can apply for multiple products depending on eligibility.</p>

            <p><strong>Q3:</strong> Is my data secure?</p>
            <p><strong>A3:</strong> Absolutely. We use advanced encryption to protect all your information.</p>
        </div>
    </section>
    

@endsection
