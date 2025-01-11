<div class="p-4 border-2 border-gray-900 border-dashed rounded-lg m-4">
    <h1 class="text-2xl font-semibold text-text-gray-900">Dashboard</h1>
</div>

<!-- *********************************************************************
     * IMPORTANT: to uncomment section
     *            sub inner comments "~~" -> "--" & remove this comment
     *********************************************************************
--> 


<!-- 
<section class="p-4 mt-14">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-md text-center mb-8 lg:mb-12">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-gray-900">Choose your plan</h2>
            <p class="mb-5 font-light text-gray-900 sm:text-xl">Submit report of your idea as pdf file.</p>
        </div>
        <div class="space-y-8 lg:grid lg:grid-cols-2 sm:gap-6 xl:gap-10 lg:space-y-0">
            <!~~ Pricing Card ~~>
            <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-gray-100 rounded-lg border border-gray-100 shadow xl:p-8">
                <h3 class="mb-4 text-2xl font-semibold">Submit your idea / proposal</h3>
                <p class="text-gray-900 sm:text-lg">for</p>
                <div class="flex justify-center items-baseline my-8">
                    <span class="mr-2 text-5xl font-extrabold">6</span>
                    <span class="text-gray-900">months</span>
                </div>
                <!~~ List ~~>
                <ul role="list" class="list-disc list-inside mb-8 space-y-4 text-left">
                    <li class="items-center space-x-3">
                        <span>1st level: <span class="font-semibold">Idea Cultivator (2 months)</span></span>
                    </li>
                    <li class="items-center space-x-3">
                        <span>2nd level: <span class="font-semibold">Incubator (4months)</span></span>
                    </li>
                    <li class="opacity-0 items-center space-x-3">
                        <span>- <span class="font-semibold">-</span></span>
                    </li>
                </ul>
                <form>
                    <button type="submit" class="mt-4 w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Apply</button>
                </form>
            </div>
            <!~~ Pricing Card ~~>
            <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-gray-100 rounded-lg border border-gray-100 shadow xl:p-8">
                <h3 class="mb-4 text-2xl font-semibold">Submit your idea / proposal</h3>
                <p class="text-gray-900 sm:text-lg">for</p>
                <div class="flex justify-center items-baseline my-8">
                    <span class="mr-2 text-5xl font-extrabold">12</span>
                    <span class="text-gray-900">months</span>
                </div>
                <!~~ List ~~>
                <ul role="list" class="list-disc list-inside mb-8 space-y-4 text-left">
                    <li class="items-center space-x-3">
                        <span>1st level: <span class="font-semibold">Idea Cultivator (3 months)</span></span>
                    </li>
                    <li class="items-center space-x-3">
                        <span>2nd level: <span class="font-semibold">Incubator (6 months)</span></span>
                    </li>
                    <li class="items-center space-x-3">
                        <span>3rd level: <span class="font-semibold">Accelarator (3 months)</span></span>
                    </li>
                </ul>
                <form>
                    <button type="submit" class="mt-4 w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white dark:focus:ring-blue-900">Apply</button>
                </form>
            </div>
        </div>
    </div>
</section>
 -->


<section class="p-4 mt-14 flex flex-col justify-center">
    <div class="mb-14 text-4xl tracking-tight font-extrabold text-gray-900 text-center">Generate CV</div>
    <form>
        <div class="mb-4 text-2xl tracking-tight font-bold text-gray-900">General Infos</div>
        <hr class="w-1/2">
        <div>
            <row class="mb-6 flex">
                <div class="w-1/4">
                    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900">First name</label>
                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5" placeholder="Bruh" required>
                </div>
                <div class="w-1/4">
                    <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900">Last name</label>
                    <input type="text" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5" placeholder="Moment" required>
                </div>
                <div class="w-1/2"></div>
            </row>
            <row class="mb-6 flex">
                <div class="w-1/4">
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">Phone number</label>
                    <input type="tel" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                </div>
                <div class="w-1/4">
                    <label for="website" class="block mb-2 text-sm font-medium text-gray-900">Website URL</label>
                    <input type="url" id="website" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5" placeholder="www.website.com" required>
                </div>
                <div class="w-1/2"></div>
            </row>
            <row class="mb-6 flex">
                <div class="w-1/4">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email address</label>
                    <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5" placeholder="bruh@gmail.com" required>
                </div>
                <div class="w-1/4">
                    <label for="address" class="block mb-2 text-sm font-medium text-gray-900">Address</label>
                    <input type="address" id="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5" placeholder="My room, Home, Earth" required>
                </div>
                <div class="w-1/2"></div>
            </row>
        </div>

        <div class="mb-4 text-2xl tracking-tight font-bold text-gray-900">Skills</div>
        <hr class="w-1/2">
        <div>
            <row class="mb-6 flex">
                <div class="w-1/4">
                    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900">Placeholder</label>
                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5" placeholder="Placeholder" required>
                </div>
                <div class="w-1/4">
                    <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900">Placeholder</label>
                    <input type="text" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5" placeholder="Placeholder" required>
                </div>
                <div class="w-1/2"></div>
            </row>
            <row class="mb-6 flex">
                <div class="w-1/4">
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">Placeholder</label>
                    <input type="tel" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5" placeholder="Placeholder" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                </div>
                <div class="w-1/4">
                    <label for="website" class="block mb-2 text-sm font-medium text-gray-900">Placeholder</label>
                    <input type="url" id="website" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5" placeholder="Placeholder" required>
                </div>
                <div class="w-1/2"></div>
            </row>
            <row class="mb-6 flex">
                <div class="w-1/4">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Placeholder</label>
                    <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5" placeholder="Placeholder" required>
                </div>
                <div class="w-1/4">
                    <label for="address" class="block mb-2 text-sm font-medium text-gray-900">Placeholder</label>
                    <input type="address" id="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5" placeholder="Placeholder" required>
                </div>
                <div class="w-1/2"></div>
            </row>
        </div>

        <div class="mb-4 text-2xl tracking-tight font-bold text-gray-900">Placeholder</div>
        <hr class="w-1/2">
        <div>
            <row class="mb-6 flex">
                <div class="w-1/4">
                    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900">Placeholder</label>
                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5" placeholder="Placeholder" required>
                </div>
                <div class="w-1/4">
                    <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900">Placeholder</label>
                    <input type="text" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5" placeholder="Placeholder" required>
                </div>
                <div class="w-1/2"></div>
            </row>
            <row class="mb-6 flex">
                <div class="w-1/4">
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">Placeholder</label>
                    <input type="tel" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5" placeholder="Placeholder" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                </div>
                <div class="w-1/4">
                    <label for="website" class="block mb-2 text-sm font-medium text-gray-900">Placeholder</label>
                    <input type="url" id="website" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5" placeholder="Placeholder" required>
                </div>
                <div class="w-1/2"></div>
            </row>
            <row class="mb-6 flex">
                <div class="w-1/4">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Placeholder</label>
                    <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5" placeholder="Placeholder" required>
                </div>
                <div class="w-1/4">
                    <label for="address" class="block mb-2 text-sm font-medium text-gray-900">Placeholder</label>
                    <input type="address" id="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5" placeholder="Placeholder" required>
                </div>
                <div class="w-1/2"></div>
            </row>
        </div>
        <div class="flex mb-6">
        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Generate</button>
    </form>
</section>