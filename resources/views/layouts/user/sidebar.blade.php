<div class="">
    <div class="flex flex-col lg:flex-row">
        <!-- Sidebar -->
        <div id="sidebar-btn"
            class="hidden lg:block bg-white text-gray-700 shadow-md w-full lg:w-[250px] px-6 pb-4 lg:min-h-screen">
            <div class="flex flex-col items-start h-full overflow-hidden rounded">
                <div class="w-full px-2">
                    <div class="flex flex-col items-center w-full border-gray-300">
                        <!-- Dashboard Link -->
                        <a class="flex items-center justify-start group w-[184px] h-9 mt-3" href="{{ route('auth') }}">
                            <button
                                class="text-black font-raleway text-sm hover:font-medium rounded-full py-2 px-4 pr-12 hover:bg-[#F3C941]">
                                Dashboard
                            </button>
                        </a>

                        <!-- View Plan Link -->
                        <a class="flex items-center justify-start group w-[184px] h-9 mt-2"
                            href="{{ route('user.manage_subscriptions.index') }}">
                            <button
                                class="text-black font-raleway text-sm hover:font-medium rounded-full py-2 px-4 pr-[px] group-hover:bg-[#F3C941]">
                                Manage Subscription
                            </button>
                        </a>

                        <!-- Unsubscribe Link -->
                        <a class="flex items-center justify-start group w-[184px] h-9 mt-3"
                            href="{{ route('user.unsubscribe.index') }}">
                            <button
                                class="text-black font-raleway text-sm hover:font-medium rounded-full py-2 px-4 hover:bg-[#F3C941]">
                                Unsubscribe
                            </button>
                        </a>

                        <a class="flex items-center justify-start group w-[184px] h-9 mt-3 cursor-pointer"
                            onclick="document.getElementById('logout-form').submit();">
                            <button
                                class="text-black font-raleway text-sm hover:font-medium rounded-full py-2 px-4 pr-[40px] hover:bg-[#F3C941]">
                                Logout
                            </button>
                        </a>

                        <!-- Hidden Logout Form -->
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                    </div>
                </div>
            </div>
        </div>
