<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!--Replace with your tailwind.css once created-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" href="{{ asset('css/pomodoro-timer.css') }}">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .nunito {
            font-family: 'nunito', font-sans;
        }

        .border-b-1 {
            border-bottom-width: 1px;
        }

        .border-l-1 {
            border-left-width: 1px;
        }

        hover\:border-none:hover {
            border-style: none;
        }

        #sidebar {
            transition: ease-in-out all .3s;
            z-index: 9999;
        }

        #sidebar span {
            opacity: 0;
            position: absolute;
            transition: ease-in-out all .1s;
        }

        #sidebar:hover {
            width: 150px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            /*shadow-2xl*/
        }

        #sidebar:hover span {
            opacity: 1;
        }
    </style>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="flex h-screen bg-gray-100 font-sans">

    <!-- Side bar-->
    <div id="sidebar" class="h-screen w-16 menu bg-white text-white px-4 flex items-center nunito fixed shadow">

        {{ $sidebar }}

    </div>

    <div class="flex flex-row flex-wrap flex-1 flex-grow content-start pl-16">
        <div class="h-40 lg:h-20 w-full flex flex-wrap">

            <nav id="header1" class="bg-gray-100 w-auto flex-1 border-b-1 border-gray-300 order-1 lg:order-2">

                <div class="flex h-full justify-between items-center">

                    <!--Search-->
                    <div class="relative w-full max-w-3xl px-6">
                        <div class="absolute h-10 mt-1 left-0 top-0 flex items-center pl-10">
                            <svg class="h-4 w-4 fill-current text-gray-600" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20">
                                <path
                                    d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z">
                                </path>
                            </svg>
                        </div>

                        <input id="search-toggle" type="search" placeholder="search"
                            class="block w-full bg-gray-200 focus:outline-none focus:bg-white focus:shadow-md text-gray-700 font-bold rounded-full pl-12 pr-4 py-3"
                            onkeyup="updateSearchResults(this.value);">

                    </div>
                    <!-- / Search-->

                    <!--Menu-->

                    <div class="flex relative pr-6">

                        <div class="relative text-sm">
                            <button id="userButton" class="flex items-center focus:outline-none mr-3">
                                {{-- <img class="w-8 h-8 rounded-full mr-4" src="http://i.pravatar.cc/300"
                                    alt="Avatar of User"> --}} <span class="hidden md:inline-block">Hi, User </span>
                                <svg class="pl-2 h-2" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    enable-background="new 0 0 129 129">
                                    <g>
                                        <path
                                            d="m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z">
                                        </path>
                                    </g>
                                </svg>
                            </button>
                            <div id="userMenu"
                                class="bg-white nunito rounded shadow-md absolute mt-12 top-0 right-0 min-w-full overflow-auto z-30 invisible">
                                <ul class="list-reset">
                                    <li><a href="#"
                                            class="px-4 py-2 block text-gray-900 hover:bg-indigo-400 hover:text-white no-underline hover:no-underline">My
                                            account</a></li>
                                    <li><a href="#"
                                            class="px-4 py-2 block text-gray-900 hover:bg-indigo-400 hover:text-white no-underline hover:no-underline">Notifications</a>
                                    </li>
                                    <li>
                                        <hr class="border-t mx-2 border-gray-400">
                                    </li>
                                    <li><a href="javascript: void(0)"
                                            onclick="document.getElementById('logoutForm').submit()"
                                            class="px-4 py-2 block text-gray-900 hover:bg-indigo-400 hover:text-white no-underline hover:no-underline">Logout</a>
                                    </li>
                                    <form id="logoutForm" action="{{ route('logout') }}" method="post" class="hidden">
                                        @csrf</form>
                                </ul>
                            </div>
                        </div>

                    </div>

                    <!-- / Menu -->

                </div>

            </nav>
        </div>

        {{ $slot }}

    </div>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="{{ asset('js/pomodoro-timer.js') }}"></script>
    {{-- <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script> --}}
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

    {{-- <script src="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
    <script>
        /* Refer to https://gionkunz.github.io/chartist-js/examples.html for setting up the graphs */

        var mainChart = new Chartist.Line('#chart1', {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
            series: [
                [1, 5, 2, 5, 4, 3],
                [2, 3, 4, 8, 1, 2],
                [5, 4, 3, 2, 1, 0.5]
            ]
        }, {
            low: 0,
            showArea: true,
            showPoint: false,
            fullWidth: true
        });

        mainChart.on('draw', function(data) {
            if (data.type === 'line' || data.type === 'area') {
                data.element.animate({
                    d: {
                        begin: 1000 * data.index,
                        dur: 1000,
                        from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
                        to: data.path.clone().stringify(),
                        easing: Chartist.Svg.Easing.easeOutQuint
                    }
                });
            }
        });

        var chartScatter = new Chartist.Line('#chart2', {
            labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'],
            series: [
                [12, 9, 7, 8, 5, 4, 6, 2, 3, 3, 4, 6],
                [4, 5, 3, 7, 3, 5, 5, 3, 4, 4, 5, 5],
                [5, 3, 4, 5, 6, 3, 3, 4, 5, 6, 3, 4],
                [3, 4, 5, 6, 7, 6, 4, 5, 6, 7, 6, 3]
            ]
        }, {
            low: 0
        });

        chartScatter.on('draw', function(data) {
            if (data.type === 'line' || data.type === 'area') {
                data.element.animate({
                    d: {
                        begin: 500 * data.index,
                        dur: 1000,
                        from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
                        to: data.path.clone().stringify(),
                        easing: Chartist.Svg.Easing.easeOutQuint
                    }
                });
            }
        });

        var chartBar = new Chartist.Bar('#chart3', {
            labels: ['Q1', 'Q2', 'Q3', 'Q4'],
            series: [
                [800000, 1200000, 1400000, 1300000],
                [200000, 400000, 500000, 300000],
                [100000, 200000, 400000, 600000]
            ]
        }, {
            stackBars: true,
            axisY: {
                labelInterpolationFnc: function(value) {
                    return (value / 1000) + 'k';
                }
            }
        })

        chartBar.on('draw', function(data) {
            if (data.type === 'bar') {
                data.element.attr({
                        style: 'stroke-width: 30px'
                    }),
                    data.element.animate({
                        y2: {
                            dur: '0.5s',
                            from: data.y1,
                            to: data.y2
                        }
                    });
            }
        });

        var chartPie = new Chartist.Pie('#chart4', {
            series: [10, 20, 50, 20, 5, 50, 15],
            labels: [1, 2, 3, 4, 5, 6, 7]
        }, {
            donut: true,
            showLabel: true
        });

        chartPie.on('draw', function(data) {
            if (data.type === 'slice') {
                var pathLength = data.element._node.getTotalLength();
                data.element.attr({
                    'stroke-dasharray': pathLength + 'px ' + pathLength + 'px'
                });

                var animationDefinition = {
                    'stroke-dashoffset': {
                        id: 'anim' + data.index,
                        dur: 200,
                        from: -pathLength + 'px',
                        to: '0px',
                        easing: Chartist.Svg.Easing.easeOutQuint,
                        fill: 'freeze'
                    }
                };

                if (data.index !== 0) {
                    animationDefinition['stroke-dashoffset'].begin = 'anim' + (data.index - 1) + '.end';
                }

                data.element.attr({
                    'stroke-dashoffset': -pathLength + 'px'
                });

                data.element.animate(animationDefinition, false);
            }
        });
    </script> --}}
    <script>

        function createDateTimePicker(element) {
            console.log("let me init datetimepicker!", element);
            $(`input[name="${element}"]`).daterangepicker({
                autoUpdateInput: true,
                singleDatePicker: true,
                showDropdowns: true,
                timePicker: true,
                minYear: 1901,
                maxYear: parseInt(moment().format('YYYY'),10),
                locale: {
                    format: 'Y/M/DD hh:mm A'
                }
            }, function(start, end, label) {
                //var years = moment().diff(start, 'years');
                //alert("You are " + years + " years old!");
            });
        }

    </script>

    <script>
        /*Toggle dropdown list*/
        /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

        var userMenuDiv = document.getElementById("userMenu");
        var userMenu = document.getElementById("userButton");

        document.onclick = check;

        function check(e) {
            var target = (e && e.target) || (event && event.srcElement);

            //User Menu
            if (!checkParent(target, userMenuDiv)) {
                // click NOT on the menu
                if (checkParent(target, userMenu)) {
                    // click on the link
                    if (userMenuDiv.classList.contains("invisible")) {
                        userMenuDiv.classList.remove("invisible");
                    } else {
                        userMenuDiv.classList.add("invisible");
                    }
                } else {
                    // click both outside link and outside menu, hide menu
                    userMenuDiv.classList.add("invisible");
                }
            }

        }

        function checkParent(t, elm) {
            while (t.parentNode) {
                if (t == elm) {
                    return true;
                }
                t = t.parentNode;
            }
            return false;
        }

        // create add dynamic input fields
        function handler(data = [{ title: '', logger : { mark_finish: false } }]) {

            return {
                fields: data,

                addNewField() {
                    this.fields.push({
                        title: '',
                        logger : { mark_finish: false }
                    });
                },
                removeField(index) {
                    this.fields.splice(index, 1);
                }
            }
        }
    </script>

</body>

</html>
