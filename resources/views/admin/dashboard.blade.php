<x-app-layout>

    @auth
        @if (auth()->user()->usertype === 'admin')

        <style>
            html, body {
                overflow: hidden;
                height: 100%;
            }

            .main-content {
                margin-left: 250px;
                padding-left: 70px;
                padding-right: 70px;
                width: calc(100% - 250px);
                min-height: 100vh;
                background-color: #f0f0f5;
                overflow: hidden;
            }

            .dashboard-content {
                margin-top: 30px;
            }

            .header {
                display: flex;
                align-items: center;
                margin-top: 10px;
            }

            .header h1 {
                margin-top: 30px;
                color: #1E1E8F;
                font-size: 1.5em;
                margin-left: 15px;
                font-family: 'Poppins', sans-serif;
                font-weight: 900;
                letter-spacing: -0.5px;
                text-shadow: 0.5px 0 0 currentColor;
            }

            .header img {
                width: 40px;
                margin-top: 20px;
            }
        </style>

        <div class="main-content">
            <div class="dashboard-content">

                <!-- Header -->
                <div class="header">
                    <img src="{{ asset('images/dashboard_blue.png') }}" alt="Product Icon">
                    <h1>Dashboard</h1>
                </div>

                @php
                $cards = [
                    [
                        "label" => "Total Employees",
                        "value" => 120,
                        "icon" => '<svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-3-3h-2m-4 5v-2a3 3 0 00-3-3H7a3 3 0 00-3 3v2h5m4-5a3 3 0 100-6 3 3 0 000 6zm6 0a3 3 0 100-6 3 3 0 000 6zM7 10a3 3 0 100-6 3 3 0 000 6z"/></svg>',
                        "bg" => "bg-blue-50"
                    ],
                    [
                        "label" => "Present Today",
                        "value" => 92,
                        "icon" => '<svg class="w-8 h-8 text-green-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>',
                        "bg" => "bg-green-50"
                    ],
                    [
                        "label" => "Absent Today",
                        "value" => 18,
                        "icon" => '<svg class="w-8 h-8 text-red-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>',
                        "bg" => "bg-red-50"
                    ],
                    [
                        "label" => "On Leave",
                        "value" => 10,
                        "icon" => '<svg class="w-8 h-8 text-yellow-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>',
                        "bg" => "bg-yellow-50"
                    ],
                ];
                @endphp

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mt-6">
                    @foreach ($cards as $card)
                        <div class="rounded-2xl shadow-md p-6 flex justify-between items-center {{ $card['bg'] }}">
                            <div>
                                <div class="text-2xl font-semibold">{{ $card['value'] }}</div>
                                <div class="text-gray-600 text-sm">{{ $card['label'] }}</div>
                            </div>
                            {!! $card['icon'] !!}
                        </div>
                    @endforeach
                </div>

                <!-- Department Card -->
                <div class="bg-white rounded-lg shadow p-2 w-60 h-64 mt-6">
                    <h2 class="text-sm font-semibold mb-1">Department</h2>
                    <img src="https://quickchart.io/chart?c={type:'doughnut',data:{labels:['Developer','Designer','Sales','HR'],datasets:[{data:[60,20,16,4]}]}}" 
                        alt="Chart" class="w-full h-28 object-contain">
                    <ul class="mt-2 space-y-0.5 text-xs text-gray-600 leading-tight">
                        <li><span class="text-blue-600 font-bold">•</span> Developer</li>
                        <li><span class="text-yellow-400 font-bold">•</span> Designer</li>
                        <li><span class="text-green-500 font-bold">•</span> Sales</li>
                        <li><span class="text-purple-500 font-bold">•</span> HR</li>
                    </ul>
                </div>

                <!-- Today's Leave -->
                <div class="bg-white rounded-lg shadow p-3 w-72 mt-6">
                    <div class="flex justify-between items-center mb-2">
                        <h2 class="text-sm font-semibold">Today's Leave</h2>
                        <button class="text-xs text-blue-600 hover:underline">View all</button>
                    </div>
                    <div class="space-y-2">
                        <div class="flex items-center gap-3">
                            <img src="https://randomuser.me/api/portraits/lego/{{ rand(1,9) }}.jpg" class="w-8 h-8 rounded-full" alt="">
                            <div class="leading-tight">
                                <div class="text-sm font-medium">John Doe</div>
                                <div class="text-xs text-gray-500">Sick Leave</div>
                            </div>
                            <div class="ml-auto text-xs font-semibold text-red-500">Today</div>
                        </div>
                    </div>
                </div>

                <!-- Leave Requests -->
                <div class="bg-white rounded-2xl shadow-md p-3 w-full max-w-screen-xl mt-6">
                    <div class="flex justify-between items-center mb-3">
                        <h2 class="text-md font-semibold">Leave Request</h2>
                        <button class="text-xs text-blue-600 hover:underline">View all</button>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-3">
                        <div class="border rounded-xl p-2 bg-gray-50">
                            <img src="https://randomuser.me/api/portraits/women/50.jpg" class="w-full h-20 object-cover rounded mb-1" alt="Employee">
                            <div class="text-sm font-semibold leading-tight">Jane Smith</div>
                            <div class="text-xs text-gray-600 leading-tight">Day(s): 2</div>
                            <div class="text-xs text-gray-600 leading-tight">Date: Apr 10-11</div>
                            <div class="text-xs text-gray-600 leading-tight">Type: Vacation</div>
                            <div class="text-xs text-gray-600 leading-tight mb-1">Approver: Admin</div>
                            <button class="bg-indigo-500 text-white px-2 py-0.5 text-xs rounded hover:bg-indigo-600">View</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        @endif
    @endauth

</x-app-layout>
