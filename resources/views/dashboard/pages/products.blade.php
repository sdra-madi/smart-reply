@extends('dashboard.layout.layoutdashboard')
@section('body')
    <style>
        :root {
            --background-color: #ffffff;
            --default-color: #444444;
            --heading-color: #1b9cfc;
            --accent-color: #34495e;
            --surface-color: #ffffff;
            --contrast-color: #ffffff;
        }

        :root {
            --nav-color: #1b9cfc;
            --nav-hover-color: #34495e;
            --nav-mobile-background-color: #ffffff;
            --nav-dropdown-background-color: #ffffff;
            --nav-dropdown-color: #212529;
            --nav-dropdown-hover-color: #34495e;
        }

        .pricing {
            margin-top: 110px;
            margin-bottom: 110px;
        }

        .pricing .pricing-tem {
            background-color: var(--surface-color);
            box-shadow: 0px 0 30px rgba(0, 0, 0, 0.1);
            padding: 40px 20px;
            text-align: center;
            border-radius: 4px;
            position: relative;
            overflow: hidden;
            transition: 0.3s;
            height: 100%;
        }

        @media (min-width: 1200px) {
            .pricing .pricing-tem:hover {
                transform: scale(1.1);
                box-shadow: 0px 0 30px rgba(0, 0, 0, 0.1);
            }
        }

        .pricing h3 {
            font-weight: 700;
            font-size: 18px;
            margin-bottom: 15px;
        }

        .pricing .price {
            font-size: 36px;
            color: var(--heading-color);
            font-weight: 600;
            font-family: var(--heading-font);
        }

        .pricing .price sup {
            font-size: 20px;
            top: -15px;
            left: -3px;
        }

        .pricing .price span {
            color: color-mix(in srgb, var(--default-color), transparent 50%);
            font-size: 16px;
            font-weight: 300;
        }

        .pricing .icon {
            padding: 20px 0;
            width: 100%;
            margin: 20px 0 40px 0;
            display: inline-block;
        }

        .pricing .icon i {
            font-size: 48px;
        }

        .pricing ul {
            padding: 0;
            list-style: none;
            color: var(--default-color);
            text-align: center;
            line-height: 26px;
            font-size: 16px;
            margin-bottom: 25px;
        }

        .pricing ul li {
            padding-bottom: 10px;
        }

        .pricing ul .na {
            color: color-mix(in srgb, var(--default-color), transparent 70%);
            text-decoration: line-through;
        }

        .pricing .btn-buy {
            display: inline-block;
            padding: 8px 40px 10px 40px;
            border-radius: 50px;
            color: var(--accent-color);
            transition: none;
            font-size: 16px;
            font-weight: 400;
            font-family: var(--heading-font);
            font-weight: 600;
            transition: 0.3s;
            border: 1px solid var(--accent-color);
        }

        .pricing .btn-buy:hover {
            background: var(--accent-color);
            color: var(--contrast-color);
        }

        .pricing .featured {
            width: 200px;
            position: absolute;
            top: 18px;
            right: -68px;
            transform: rotate(45deg);
            z-index: 1;
            font-size: 14px;
            padding: 1px 0 3px 0;
            background: var(--accent-color);
            color: var(--contrast-color);
        }

        .section-title {
            text-align: center;
            padding-bottom: 60px;
            position: relative;
        }

        .section-title h2 {
            font-size: 13px;
            letter-spacing: 1px;
            font-weight: 700;
            padding: 8px 20px;
            margin: 0;
            background: color-mix(in srgb, var(--accent-color), transparent 90%);
            color: var(--accent-color);
            display: inline-block;
            text-transform: uppercase;
            border-radius: 50px;
            font-family: var(--default-font);
        }

        .section-title p {
            color: var(--heading-color);
            margin: 10px 0 0 0;
            font-size: 32px;
            font-weight: 700;
            font-family: var(--heading-font);
        }

        .section-title p .description-title {
            color: var(--accent-color);
        }
    </style>
    @include('portal.sections.pricing')
@endsection
