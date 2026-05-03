<section id="about" class="py-20 bg-gray-50 dark:bg-gray-900">
    <div class="container px-6 mx-auto">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-2 text-sm font-semibold text-blue-600 bg-blue-100 rounded-full dark:bg-blue-900/30 dark:text-blue-400 mb-4">
                About Me
            </span>
            <h2 class="text-4xl font-bold text-gray-900 dark:text-white lg:text-5xl">
                Crafting Digital Excellence
            </h2>
            <p class="mt-4 text-lg text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                Passionate developer creating innovative solutions that bridge technology and user experience
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Image/Visual Section -->
            <div class="relative">
                <!-- Main Image -->
                <div class="relative z-10">
                    <div class="aspect-square rounded-2xl bg-gradient-to-br from-blue-500 to-purple-600 overflow-hidden shadow-2xl">
                        <div class="w-full h-full bg-gray-200 dark:bg-gray-800 flex items-center justify-center">
                            <img src= "{{asset("./portfolio-img.png")}}" alt='Profile' class="">
                        </div>
                    </div>
                </div>

                <!-- Floating Elements -->
                <div class="absolute -top-4 -left-4 w-24 h-24 bg-yellow-400 rounded-2xl rotate-12 opacity-20"></div>
                <div class="absolute -bottom-4 -right-4 w-32 h-32 bg-green-400 rounded-3xl -rotate-12 opacity-20"></div>

                <!-- Experience Badge -->
                <div class="absolute bottom-6 -right-6 bg-white dark:bg-gray-800 rounded-2xl shadow-2xl p-6 text-center">
                    <p class="text-3xl font-bold text-gray-900 dark:text-white">5+</p>
                    <p class="text-sm text-gray-600 dark:text-gray-400">Years Experience</p>
                </div>
            </div>

            <!-- Content Section -->
            <div class="space-y-6">
                <h3 class="text-2xl font-bold text-gray-900 dark:text-white">
                    Innovative Developer & Problem Solver
                </h3>

                <p class="text-lg text-gray-600 dark:text-gray-300 leading-relaxed">
                    I'm a passionate full-stack developer with over 5 years of experience creating digital solutions
                    that make a difference. I specialize in turning complex problems into elegant, user-friendly applications.
                </p>

                <p class="text-lg text-gray-600 dark:text-gray-300 leading-relaxed">
                    My approach combines technical expertise with creative problem-solving, ensuring every project
                    not only meets but exceeds expectations. I believe in writing clean, maintainable code and
                    creating experiences that users love.
                </p>

                <!-- Skills Tags -->
                <div class="pt-4">
                    <h4 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Technologies I Work With</h4>
                    <div class="flex flex-wrap gap-3">
                        <span class="px-4 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-full text-sm font-medium">
                            JavaScript/TypeScript
                        </span>
                        <span class="px-4 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-full text-sm font-medium">
                            React & Next.js
                        </span>
                        <span class="px-4 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-full text-sm font-medium">
                            Node.js
                        </span>
                        <span class="px-4 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-full text-sm font-medium">
                            Python
                        </span>
                        <span class="px-4 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-full text-sm font-medium">
                            Tailwind CSS
                        </span>
                        <span class="px-4 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-full text-sm font-medium">
                            AWS & DevOps
                        </span>
                    </div>
                </div>

                <!-- Stats -->
                <div class="grid grid-cols-2 md:grid-cols-3 gap-6 pt-8">
                    <div class="text-center">
                        <p class="text-3xl font-bold text-blue-600 dark:text-blue-400">50+</p>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Projects Completed</p>
                    </div>
                    <div class="text-center">
                        <p class="text-3xl font-bold text-green-600 dark:text-green-400">98%</p>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Client Satisfaction</p>
                    </div>
                    <div class="text-center">
                        <p class="text-3xl font-bold text-purple-600 dark:text-purple-400">25+</p>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Happy Clients</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Info Section -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-20">
            <!-- Mission -->
            <div class="text-center p-6 rounded-2xl bg-white dark:bg-gray-800 shadow-lg hover:shadow-xl transition-shadow duration-300">
                <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900/30 rounded-lg flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h4 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">My Mission</h4>
                <p class="text-gray-600 dark:text-gray-400">
                    To create digital experiences that are not only functional but also delightful and meaningful.
                </p>
            </div>

            <!-- Approach -->
            <div class="text-center p-6 rounded-2xl bg-white dark:bg-gray-800 shadow-lg hover:shadow-xl transition-shadow duration-300">
                <div class="w-12 h-12 bg-green-100 dark:bg-green-900/30 rounded-lg flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h4 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">My Approach</h4>
                <p class="text-gray-600 dark:text-gray-400">
                    User-centered design, agile development, and continuous learning drive my creative process.
                </p>
            </div>

            <!-- Vision -->
            <div class="text-center p-6 rounded-2xl bg-white dark:bg-gray-800 shadow-lg hover:shadow-xl transition-shadow duration-300">
                <div class="w-12 h-12 bg-purple-100 dark:bg-purple-900/30 rounded-lg flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                    </svg>
                </div>
                <h4 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">My Vision</h4>
                <p class="text-gray-600 dark:text-gray-400">
                    To push the boundaries of what's possible in web development and inspire innovation.
                </p>
            </div>
        </div>
    </div>
</section>
