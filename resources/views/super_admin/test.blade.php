@extends('layouts.dashboard')
@section('content')
    <div class="container">
        <style>
            .spinner {
                margin: 100px auto;
                width: 50px;
                height: 40px;
                text-align: center;
                font-size: 10px;
            }

            .spinner>div {
                background-color: #333;
                height: 100%;
                width: 6px;
                display: inline-block;

                -webkit-animation: sk-stretchdelay 1.2s infinite ease-in-out;
                animation: sk-stretchdelay 1.2s infinite ease-in-out;
            }

            .spinner .rect2 {
                -webkit-animation-delay: -1.1s;
                animation-delay: -1.1s;
            }

            .spinner .rect3 {
                -webkit-animation-delay: -1.0s;
                animation-delay: -1.0s;
            }

            .spinner .rect4 {
                -webkit-animation-delay: -0.9s;
                animation-delay: -0.9s;
            }

            .spinner .rect5 {
                -webkit-animation-delay: -0.8s;
                animation-delay: -0.8s;
            }

            @-webkit-keyframes sk-stretchdelay {

                0%,
                40%,
                100% {
                    -webkit-transform: scaleY(0.4)
                }

                20% {
                    -webkit-transform: scaleY(1.0)
                }
            }

            @keyframes sk-stretchdelay {

                0%,
                40%,
                100% {
                    transform: scaleY(0.4);
                    -webkit-transform: scaleY(0.4);
                }

                20% {
                    transform: scaleY(1.0);
                    -webkit-transform: scaleY(1.0);
                }
            }
        </style>
        <div class="spinner">
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
        </div>
    {{--<style>
        .lds-default {
            display: inline-block;
            position: relative;
            width: 64px;
            height: 64px;
        }

        .lds-default div {
            position: absolute;
            width: 5px;
            height: 5px;
            background: #fff;
            border-radius: 50%;
            animation: lds-default 1.2s linear infinite;
        }

        .lds-default div:nth-child(1) {
            animation-delay: 0s;
            top: 29px;
            left: 53px;
        }

        .lds-default div:nth-child(2) {
            animation-delay: -0.1s;
            top: 18px;
            left: 50px;
        }

        .lds-default div:nth-child(3) {
            animation-delay: -0.2s;
            top: 9px;
            left: 41px;
        }

        .lds-default div:nth-child(4) {
            animation-delay: -0.3s;
            top: 6px;
            left: 29px;
        }

        .lds-default div:nth-child(5) {
            animation-delay: -0.4s;
            top: 9px;
            left: 18px;
        }

        .lds-default div:nth-child(6) {
            animation-delay: -0.5s;
            top: 18px;
            left: 9px;
        }

        .lds-default div:nth-child(7) {
            animation-delay: -0.6s;
            top: 29px;
            left: 6px;
        }

        .lds-default div:nth-child(8) {
            animation-delay: -0.7s;
            top: 41px;
            left: 9px;
        }

        .lds-default div:nth-child(9) {
            animation-delay: -0.8s;
            top: 50px;
            left: 18px;
        }

        .lds-default div:nth-child(10) {
            animation-delay: -0.9s;
            top: 53px;
            left: 29px;
        }

        .lds-default div:nth-child(11) {
            animation-delay: -1s;
            top: 50px;
            left: 41px;
        }

        .lds-default div:nth-child(12) {
            animation-delay: -1.1s;
            top: 41px;
            left: 50px;
        }

        @keyframes lds-default {

            0%,
            20%,
            80%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.5);
            }
        }
    </style>
    <style>
        .spinner {
            width: 40px;
            height: 40px;

            position: relative;
            margin: 100px auto;
        }

        .double-bounce1,
        .double-bounce2 {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background-color: #333;
            opacity: 0.6;
            position: absolute;
            top: 0;
            left: 0;

            -webkit-animation: sk-bounce 2.0s infinite ease-in-out;
            animation: sk-bounce 2.0s infinite ease-in-out;
        }

        .double-bounce2 {
            -webkit-animation-delay: -1.0s;
            animation-delay: -1.0s;
        }

        @-webkit-keyframes sk-bounce {

            0%,
            100% {
                -webkit-transform: scale(0.0)
            }

            50% {
                -webkit-transform: scale(1.0)
            }
        }

        @keyframes sk-bounce {

            0%,
            100% {
                transform: scale(0.0);
                -webkit-transform: scale(0.0);
            }

            50% {
                transform: scale(1.0);
                -webkit-transform: scale(1.0);
            }
        }
    </style>
    <style>
        .spinner {
            margin: 100px auto;
            width: 50px;
            height: 40px;
            text-align: center;
            font-size: 10px;
        }

        .spinner>div {
            background-color: #333;
            height: 100%;
            width: 6px;
            display: inline-block;

            -webkit-animation: sk-stretchdelay 1.2s infinite ease-in-out;
            animation: sk-stretchdelay 1.2s infinite ease-in-out;
        }

        .spinner .rect2 {
            -webkit-animation-delay: -1.1s;
            animation-delay: -1.1s;
        }

        .spinner .rect3 {
            -webkit-animation-delay: -1.0s;
            animation-delay: -1.0s;
        }

        .spinner .rect4 {
            -webkit-animation-delay: -0.9s;
            animation-delay: -0.9s;
        }

        .spinner .rect5 {
            -webkit-animation-delay: -0.8s;
            animation-delay: -0.8s;
        }

        @-webkit-keyframes sk-stretchdelay {

            0%,
            40%,
            100% {
                -webkit-transform: scaleY(0.4)
            }

            20% {
                -webkit-transform: scaleY(1.0)
            }
        }

        @keyframes sk-stretchdelay {

            0%,
            40%,
            100% {
                transform: scaleY(0.4);
                -webkit-transform: scaleY(0.4);
            }

            20% {
                transform: scaleY(1.0);
                -webkit-transform: scaleY(1.0);
            }
        }
    </style>
    <div class="spinner">
        <div class="rect1"></div>
        <div class="rect2"></div>
        <div class="rect3"></div>
        <div class="rect4"></div>
        <div class="rect5"></div>
    </div>
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
    <div class="lds-default">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
    <div class="lds-css ng-scope">
        <div style="width:100%;height:100%" class="lds-dual-ring">
            <div></div>
        </div>
        <style type="text/css">
            @keyframes lds-dual-ring {
                0% {
                    -webkit-transform: rotate(0);
                    transform: rotate(0);
                }

                100% {
                    -webkit-transform: rotate(360deg);
                    transform: rotate(360deg);
                }
            }

            @-webkit-keyframes lds-dual-ring {
                0% {
                    -webkit-transform: rotate(0);
                    transform: rotate(0);
                }

                100% {
                    -webkit-transform: rotate(360deg);
                    transform: rotate(360deg);
                }
            }

            .lds-dual-ring {
                position: relative;
            }

            .lds-dual-ring div {
                position: absolute;
                width: 160px;
                height: 160px;
                top: 20px;
                left: 20px;
                border-radius: 50%;
                border: 8px solid #000;
                border-color: #269245 transparent #269245 transparent;
                -webkit-animation: lds-dual-ring 1s linear infinite;
                animation: lds-dual-ring 1s linear infinite;
            }

            .lds-dual-ring {
                width: 200px !important;
                height: 200px !important;
                -webkit-transform: translate(-100px, -100px) scale(1) translate(100px, 100px);
                transform: translate(-100px, -100px) scale(1) translate(100px, 100px);
            }
        </style>
    </div>
    <div class="lds-css ng-scope">
        <div class="lds-spinner" style="100%;height:100%">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <style type="text/css">
            @keyframes lds-spinner {
                0% {
                    opacity: 1;
                }

                100% {
                    opacity: 0;
                }
            }

            @-webkit-keyframes lds-spinner {
                0% {
                    opacity: 1;
                }

                100% {
                    opacity: 0;
                }
            }

            .lds-spinner {
                position: relative;
            }

            .lds-spinner div {
                left: 94px;
                top: 48px;
                position: absolute;
                -webkit-animation: lds-spinner linear 1s infinite;
                animation: lds-spinner linear 1s infinite;
                background: #269245;
                width: 12px;
                height: 24px;
                border-radius: 40%;
                -webkit-transform-origin: 6px 52px;
                transform-origin: 6px 52px;
            }

            .lds-spinner div:nth-child(1) {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
                -webkit-animation-delay: -0.916666666666667s;
                animation-delay: -0.916666666666667s;
            }

            .lds-spinner div:nth-child(2) {
                -webkit-transform: rotate(30deg);
                transform: rotate(30deg);
                -webkit-animation-delay: -0.833333333333333s;
                animation-delay: -0.833333333333333s;
            }

            .lds-spinner div:nth-child(3) {
                -webkit-transform: rotate(60deg);
                transform: rotate(60deg);
                -webkit-animation-delay: -0.75s;
                animation-delay: -0.75s;
            }

            .lds-spinner div:nth-child(4) {
                -webkit-transform: rotate(90deg);
                transform: rotate(90deg);
                -webkit-animation-delay: -0.666666666666667s;
                animation-delay: -0.666666666666667s;
            }

            .lds-spinner div:nth-child(5) {
                -webkit-transform: rotate(120deg);
                transform: rotate(120deg);
                -webkit-animation-delay: -0.583333333333333s;
                animation-delay: -0.583333333333333s;
            }

            .lds-spinner div:nth-child(6) {
                -webkit-transform: rotate(150deg);
                transform: rotate(150deg);
                -webkit-animation-delay: -0.5s;
                animation-delay: -0.5s;
            }

            .lds-spinner div:nth-child(7) {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
                -webkit-animation-delay: -0.416666666666667s;
                animation-delay: -0.416666666666667s;
            }

            .lds-spinner div:nth-child(8) {
                -webkit-transform: rotate(210deg);
                transform: rotate(210deg);
                -webkit-animation-delay: -0.333333333333333s;
                animation-delay: -0.333333333333333s;
            }

            .lds-spinner div:nth-child(9) {
                -webkit-transform: rotate(240deg);
                transform: rotate(240deg);
                -webkit-animation-delay: -0.25s;
                animation-delay: -0.25s;
            }

            .lds-spinner div:nth-child(10) {
                -webkit-transform: rotate(270deg);
                transform: rotate(270deg);
                -webkit-animation-delay: -0.166666666666667s;
                animation-delay: -0.166666666666667s;
            }

            .lds-spinner div:nth-child(11) {
                -webkit-transform: rotate(300deg);
                transform: rotate(300deg);
                -webkit-animation-delay: -0.083333333333333s;
                animation-delay: -0.083333333333333s;
            }

            .lds-spinner div:nth-child(12) {
                -webkit-transform: rotate(330deg);
                transform: rotate(330deg);
                -webkit-animation-delay: 0s;
                animation-delay: 0s;
            }

            .lds-spinner {
                width: 200px !important;
                height: 200px !important;
                -webkit-transform: translate(-100px, -100px) scale(1) translate(100px, 100px);
                transform: translate(-100px, -100px) scale(1) translate(100px, 100px);
            }
        </style>
    </div>
    <div class="lds-css ng-scope">
        <div class="lds-spin" style="100%;height:100%">
            <div>
                <div></div>
            </div>
            <div>
                <div></div>
            </div>
            <div>
                <div></div>
            </div>
            <div>
                <div></div>
            </div>
            <div>
                <div></div>
            </div>
            <div>
                <div></div>
            </div>
            <div>
                <div></div>
            </div>
            <div>
                <div></div>
            </div>
        </div>
        <style type="text/css">
            @keyframes lds-spin {
                0% {
                    opacity: 1;
                    -webkit-transform: scale(1.1, 1.1);
                    transform: scale(1.1, 1.1);
                }

                100% {
                    opacity: 0;
                    -webkit-transform: scale(1, 1);
                    transform: scale(1, 1);
                }
            }

            @-webkit-keyframes lds-spin {
                0% {
                    opacity: 1;
                    -webkit-transform: scale(1.1, 1.1);
                    transform: scale(1.1, 1.1);
                }

                100% {
                    opacity: 0;
                    -webkit-transform: scale(1, 1);
                    transform: scale(1, 1);
                }
            }

            .lds-spin {
                position: relative;
            }

            .lds-spin div>div {
                position: absolute;
                width: 40px;
                height: 40px;
                border-radius: 50%;
                background: #269245;
                -webkit-animation: lds-spin 1s linear infinite;
                animation: lds-spin 1s linear infinite;
            }

            .lds-spin div:nth-child(1)>div {
                left: 140px;
                top: 80px;
                -webkit-animation-delay: -0.875s;
                animation-delay: -0.875s;
            }

            .lds-spin>div:nth-child(1) {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
                -webkit-transform-origin: 160px 100px;
                transform-origin: 160px 100px;
            }

            .lds-spin div:nth-child(2)>div {
                left: 122.42640685999999px;
                top: 122.42640685999999px;
                -webkit-animation-delay: -0.75s;
                animation-delay: -0.75s;
            }

            .lds-spin>div:nth-child(2) {
                -webkit-transform: rotate(45deg);
                transform: rotate(45deg);
                -webkit-transform-origin: 142.42640686px 142.42640686px;
                transform-origin: 142.42640686px 142.42640686px;
            }

            .lds-spin div:nth-child(3)>div {
                left: 80px;
                top: 140px;
                -webkit-animation-delay: -0.625s;
                animation-delay: -0.625s;
            }

            .lds-spin>div:nth-child(3) {
                -webkit-transform: rotate(90deg);
                transform: rotate(90deg);
                -webkit-transform-origin: 100px 160px;
                transform-origin: 100px 160px;
            }

            .lds-spin div:nth-child(4)>div {
                left: 37.57359314px;
                top: 122.42640685999999px;
                -webkit-animation-delay: -0.5s;
                animation-delay: -0.5s;
            }

            .lds-spin>div:nth-child(4) {
                -webkit-transform: rotate(135deg);
                transform: rotate(135deg);
                -webkit-transform-origin: 57.57359314px 142.42640686px;
                transform-origin: 57.57359314px 142.42640686px;
            }

            .lds-spin div:nth-child(5)>div {
                left: 20px;
                top: 80px;
                -webkit-animation-delay: -0.375s;
                animation-delay: -0.375s;
            }

            .lds-spin>div:nth-child(5) {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
                -webkit-transform-origin: 40px 100px;
                transform-origin: 40px 100px;
            }

            .lds-spin div:nth-child(6)>div {
                left: 37.57359314px;
                top: 37.57359314px;
                -webkit-animation-delay: -0.25s;
                animation-delay: -0.25s;
            }

            .lds-spin>div:nth-child(6) {
                -webkit-transform: rotate(225deg);
                transform: rotate(225deg);
                -webkit-transform-origin: 57.57359314px 57.57359314px;
                transform-origin: 57.57359314px 57.57359314px;
            }

            .lds-spin div:nth-child(7)>div {
                left: 80px;
                top: 20px;
                -webkit-animation-delay: -0.125s;
                animation-delay: -0.125s;
            }

            .lds-spin>div:nth-child(7) {
                -webkit-transform: rotate(270deg);
                transform: rotate(270deg);
                -webkit-transform-origin: 100px 40px;
                transform-origin: 100px 40px;
            }

            .lds-spin div:nth-child(8)>div {
                left: 122.42640685999999px;
                top: 37.57359314px;
                -webkit-animation-delay: 0s;
                animation-delay: 0s;
            }

            .lds-spin>div:nth-child(8) {
                -webkit-transform: rotate(315deg);
                transform: rotate(315deg);
                -webkit-transform-origin: 142.42640686px 57.57359314px;
                transform-origin: 142.42640686px 57.57359314px;
            }

            .lds-spin div:nth-child(9)>div {
                left: 140px;
                top: 80px;
                -webkit-animation-delay: 0.125s;
                animation-delay: 0.125s;
            }

            .lds-spin>div:nth-child(9) {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
                -webkit-transform-origin: 160px 100px;
                transform-origin: 160px 100px;
            }

            .lds-spin {
                width: 200px !important;
                height: 200px !important;
                -webkit-transform: translate(-100px, -100px) scale(1) translate(100px, 100px);
                transform: translate(-100px, -100px) scale(1) translate(100px, 100px);
            }
        </style>
    </div>
</div>--}}
@endsection