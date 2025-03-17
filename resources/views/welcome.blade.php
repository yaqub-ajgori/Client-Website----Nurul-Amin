<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nurul Amin - Software Developer</title>
    <meta name="description"
        content="Professional portfolio of Nurul Amin, a Software Developer specializing in PHP, Laravel, and WordPress">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Tailwind CSS -->
    @vite('resources/css/app.css')
    <style>
        .profile-image-container {
            transition: transform 0.5s ease-in-out, box-shadow 0.5s ease-in-out;
            position: relative;
            z-index: 10;
            transform-style: preserve-3d;
            perspective: 1000px;
        }

        .profile-image-container:hover {
            transform: scale(1.05) rotate3d(0, 1, 0, 5deg);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .profile-image {
            transition: all 0.5s ease;
            filter: brightness(1) contrast(1);
            object-fit: cover;
            object-position: center;
            width: 100%;
            height: 100%;
            transform-origin: center;
        }

        .profile-image-container:hover .profile-image {
            transform: scale(1.1);
            filter: brightness(1.05) contrast(1.05) saturate(1.05);
        }

        /* 3D Frame effect for profile image */
        .profile-frame {
            position: absolute;
            top: -8px;
            left: -8px;
            right: -8px;
            bottom: -8px;
            border-radius: 9999px;
            border: 2px solid rgba(255, 255, 255, 0.3);
            z-index: 5;
            transform: translateZ(-10px);
            pointer-events: none;
            opacity: 0.7;
        }

        .profile-frame-2 {
            position: absolute;
            top: -16px;
            left: -16px;
            right: -16px;
            bottom: -16px;
            border-radius: 9999px;
            border: 1px solid rgba(255, 255, 255, 0.15);
            z-index: 4;
            transform: translateZ(-20px);
            pointer-events: none;
            opacity: 0.5;
        }

        /* Floating animation for the image */
        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        .floating {
            animation: float 5s ease-in-out infinite;
        }

        @keyframes spin-slow {
            from {
                transform: translate(-50%, -50%) rotate(0deg);
            }

            to {
                transform: translate(-50%, -50%) rotate(360deg);
            }
        }

        @keyframes pulse-slow {
            0% {
                transform: translate(-50%, -50%) scale(1);
                opacity: 0.6;
            }

            50% {
                transform: translate(-50%, -50%) scale(1.1);
                opacity: 0.4;
            }

            100% {
                transform: translate(-50%, -50%) scale(1);
                opacity: 0.6;
            }
        }

        .animate-spin-slow {
            animation: spin-slow 12s linear infinite;
        }

        .animate-pulse-slow {
            animation: pulse-slow 4s ease-in-out infinite;
        }

        /* Enhanced glow effect */
        .enhanced-glow {
            position: relative;
        }

        .enhanced-glow::before {
            content: '';
            position: absolute;
            top: -5px;
            left: -5px;
            right: -5px;
            bottom: -5px;
            background: linear-gradient(45deg, #6366f1, #8b5cf6, #6366f1);
            border-radius: 9999px;
            z-index: -1;
            filter: blur(15px);
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
            animation: pulse-glow 3s ease-in-out infinite;
        }

        @keyframes pulse-glow {
            0% {
                opacity: 0.4;
                transform: scale(1);
            }

            50% {
                opacity: 0.7;
                transform: scale(1.05);
            }

            100% {
                opacity: 0.4;
                transform: scale(1);
            }
        }

        .profile-image-container:hover .enhanced-glow::before {
            opacity: 1;
        }

        /* Sparkle effect elements */
        .sparkle {
            position: absolute;
            background-color: white;
            border-radius: 50%;
            z-index: 20;
            pointer-events: none;
            opacity: 0;
            transform: scale(0);
        }

        @keyframes sparkle-effect {
            0% {
                opacity: 0;
                transform: scale(0) rotate(0deg);
            }

            50% {
                opacity: 1;
                transform: scale(1) rotate(90deg);
            }

            100% {
                opacity: 0;
                transform: scale(0) rotate(180deg);
            }
        }

        .sparkle-1 {
            top: 10%;
            left: 15%;
            width: 8px;
            height: 8px;
            animation: sparkle-effect 4s ease-in-out infinite;
        }

        .sparkle-2 {
            top: 20%;
            right: 10%;
            width: 6px;
            height: 6px;
            animation: sparkle-effect 3s 1s ease-in-out infinite;
        }

        .sparkle-3 {
            bottom: 10%;
            right: 20%;
            width: 10px;
            height: 10px;
            animation: sparkle-effect 5s 2s ease-in-out infinite;
        }

        .sparkle-4 {
            bottom: 20%;
            left: 10%;
            width: 7px;
            height: 7px;
            animation: sparkle-effect 4.5s 1.5s ease-in-out infinite;
        }

        /* New modern hero animations */
        .hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 0;
        }

        .hero-particle {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            pointer-events: none;
            z-index: 1;
        }

        @keyframes float-up {
            0% {
                transform: translateY(100%) translateX(0) scale(1);
                opacity: 0;
            }

            50% {
                opacity: 0.5;
            }

            100% {
                transform: translateY(-100vh) translateX(30px) scale(0);
                opacity: 0;
            }
        }

        .animate-float {
            animation: float-up 12s linear infinite;
        }

        @keyframes fade-in-up {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .hero-title {
            animation: fade-in-up 0.8s ease-out forwards;
        }

        .hero-subtitle {
            animation: fade-in-up 0.8s 0.2s ease-out forwards;
            opacity: 0;
        }

        .hero-text {
            animation: fade-in-up 0.8s 0.4s ease-out forwards;
            opacity: 0;
        }

        .hero-buttons {
            animation: fade-in-up 0.8s 0.6s ease-out forwards;
            opacity: 0;
        }

        .glowing-border {
            position: relative;
        }

        .glowing-border::after {
            content: '';
            position: absolute;
            top: -4px;
            left: -4px;
            right: -4px;
            bottom: -4px;
            background: linear-gradient(45deg, rgba(157, 78, 221, 0.6), rgba(86, 67, 204, 0.6), rgba(80, 99, 225, 0.6));
            border-radius: 9999px;
            z-index: -1;
            filter: blur(10px);
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }

        .glowing-border:hover::after {
            opacity: 1;
        }

        .hero-gradient-text {
            background: linear-gradient(90deg, #fff, #e0e7ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-size: 200% auto;
            animation: shine 5s linear infinite;
        }

        @keyframes shine {
            to {
                background-position: 200% center;
            }
        }

        .animate-float-1 {
            animation-delay: 0s;
        }

        .animate-float-2 {
            animation-delay: 2s;
        }

        .animate-float-3 {
            animation-delay: 4s;
        }

        .animate-float-4 {
            animation-delay: 6s;
        }

        .animate-float-5 {
            animation-delay: 8s;
        }

        .animate-float-6 {
            animation-delay: 10s;
        }

        /* PNG specific enhancements */
        .png-container {
            background: linear-gradient(135deg, rgba(79, 70, 229, 0.2) 0%, rgba(124, 58, 237, 0.2) 100%);
            position: relative;
            z-index: 5;
        }

        /* Image reflection effect */
        .reflection {
            position: absolute;
            bottom: -20%;
            left: -5%;
            right: -5%;
            height: 20%;
            background: linear-gradient(to bottom, rgba(255, 255, 255, 0.3), transparent);
            transform: rotateX(180deg) scaleY(1.5);
            filter: blur(4px);
            opacity: 0.5;
            pointer-events: none;
            border-radius: 50% 50% 0 0;
            z-index: 1;
        }

        /* Enhanced PNG-specific animations */
        @keyframes subtle-pulse {
            0% {
                transform: scale(1);
                box-shadow: 0 0 0 rgba(99, 102, 241, 0.6);
            }

            50% {
                transform: scale(1.01);
                box-shadow: 0 0 20px rgba(99, 102, 241, 0.8);
            }

            100% {
                transform: scale(1);
                box-shadow: 0 0 0 rgba(99, 102, 241, 0.6);
            }
        }

        .png-animation {
            animation: subtle-pulse 4s ease-in-out infinite;
        }

        /* Interactive image effects */
        .interactive-image {
            position: relative;
            overflow: visible;
        }

        .interactive-image::after {
            content: '';
            position: absolute;
            top: -10px;
            left: -10px;
            right: -10px;
            bottom: -10px;
            border: 2px dashed rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            animation: rotate-slow 30s linear infinite;
            pointer-events: none;
        }

        @keyframes rotate-slow {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        /* Mouse follow effect */
        .mouse-follow {
            transition: transform 0.2s ease-out;
        }

        /* Light beam effect for PNG */
        .light-beam {
            position: absolute;
            width: 150%;
            height: 100px;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            top: 0;
            left: -100%;
            transform: rotate(-45deg) translateY(-50%);
            animation: beam-move 5s ease-in-out infinite;
            pointer-events: none;
            z-index: 10;
        }

        @keyframes beam-move {
            0% {
                left: -100%;
                opacity: 0;
            }

            30% {
                opacity: 1;
            }

            70% {
                opacity: 1;
            }

            100% {
                left: 100%;
                opacity: 0;
            }
        }

        /* About section animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-about {
            animation: fadeInUp 0.6s ease-out forwards;
        }

        /* Counter animation */
        .counter {
            display: inline-block;
        }

        /* Section transitions and nav link animations */
        .section-transition {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease-out;
        }

        .section-transition.appear {
            opacity: 1;
            transform: translateY(0);
        }

        /* Logo animation and styling */
        .logo {
            position: relative;
            overflow: hidden;
            display: inline-flex;
            align-items: center;
            transition: transform 0.3s ease;
        }

        .logo:hover {
            transform: scale(1.05);
        }

        .logo-accent {
            background: linear-gradient(90deg, #4f46e5, #7c3aed);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            position: relative;
        }

        .logo-accent::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, #4f46e5, #7c3aed);
            transform: scaleX(0);
            transform-origin: right;
            transition: transform 0.3s ease;
        }

        .logo:hover .logo-accent::after {
            transform: scaleX(1);
            transform-origin: left;
        }

        /* Enhanced nav link animations */
        .nav-link {
            position: relative;
            padding: 0.5rem 0;
            margin: 0 0.5rem;
            font-weight: 500;
            font-size: 1.05rem;
            letter-spacing: 0.2px;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .nav-link::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(79, 70, 229, 0.08);
            border-radius: 6px;
            transform: scaleY(0);
            transform-origin: bottom;
            transition: transform 0.3s ease;
            z-index: -1;
        }

        .nav-link:hover::before {
            transform: scaleY(1);
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 3px;
            background: linear-gradient(90deg, #4f46e5, #7c3aed);
            transition: width 0.3s ease;
            border-radius: 3px;
        }

        .nav-link:hover::after {
            width: 70%;
        }

        .nav-link.active {
            color: #4f46e5;
            font-weight: 600;
        }

        .nav-link.active::after {
            width: 100%;
        }

        /* Menu link icon indicators */
        .nav-link i {
            font-size: 0.85rem;
            opacity: 0;
            margin-right: 4px;
            transform: translateX(-5px);
            transition: all 0.3s ease;
        }

        .nav-link:hover i,
        .nav-link.active i {
            opacity: 1;
            transform: translateX(0);
        }

        /* Mobile menu enhancements */
        .mobile-menu-transition {
            transition: max-height 0.5s ease, opacity 0.5s ease, transform 0.5s ease;
            max-height: 0;
            opacity: 0;
            transform: translateY(-20px);
            overflow: hidden;
        }

        .mobile-menu-transition.open {
            max-height: 300px;
            opacity: 1;
            transform: translateY(0);
        }

        /* Hamburger button animation */
        .hamburger-line {
            width: 24px;
            height: 2px;
            background-color: #4B5563;
            transition: all 0.3s ease;
            position: relative;
        }

        .hamburger-active .hamburger-line:nth-child(1) {
            transform: translateY(8px) rotate(45deg);
        }

        .hamburger-active .hamburger-line:nth-child(2) {
            opacity: 0;
        }

        .hamburger-active .hamburger-line:nth-child(3) {
            transform: translateY(-8px) rotate(-45deg);
        }

        /* Scroll indicator */
        .scroll-indicator {
            position: fixed;
            top: 0;
            left: 0;
            height: 3px;
            background: linear-gradient(to right, #4f46e5, #7c3aed);
            z-index: 9999;
            width: 0%;
            transition: width 0.1s ease-out;
        }

        /* Scroll to top button */
        .scroll-top {
            position: fixed;
            bottom: 25px;
            right: 25px;
            background-color: #4f46e5;
            color: white;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.3s ease;
            z-index: 999;
            box-shadow: 0 4px 10px rgba(79, 70, 229, 0.3);
        }

        .scroll-top.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .scroll-top:hover {
            background-color: #4338ca;
            transform: translateY(-3px);
            box-shadow: 0 6px 15px rgba(79, 70, 229, 0.4);
        }

        /* Section highlight effect when scrolled to */
        @keyframes sectionHighlight {
            0% {
                box-shadow: 0 0 0 rgba(79, 70, 229, 0);
            }

            50% {
                box-shadow: 0 0 20px rgba(79, 70, 229, 0.2);
            }

            100% {
                box-shadow: 0 0 0 rgba(79, 70, 229, 0);
            }
        }

        .section-highlight {
            animation: sectionHighlight 1.5s ease-out;
        }
    </style>
</head>

<body class="bg-gray-50 font-sans text-gray-800 antialiased">
    <!-- Scroll Progress Indicator -->
    <div class="scroll-indicator"></div>

    <!-- Scroll to Top Button -->
    <div class="scroll-top">
        <i class="fas fa-arrow-up"></i>
    </div>

    <!-- Header/Navigation -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="#home" class="logo text-xl font-bold">
                        <span class="logo-accent">Nurul</span><span class="text-gray-800">Amin</span>
                        <span
                            class="absolute -bottom-1 left-0 w-full h-0.5 bg-gradient-to-r from-indigo-600 to-purple-600 transform scale-x-0 transition-transform duration-300 origin-left group-hover:scale-x-100"></span>
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button"
                        class="text-gray-600 hover:text-gray-900 focus:outline-none flex flex-col space-y-2 p-2 rounded-md"
                        aria-label="Toggle menu">
                        <div class="hamburger-line"></div>
                        <div class="hamburger-line"></div>
                        <div class="hamburger-line"></div>
                    </button>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-1">
                    <a href="#home" class="nav-link text-gray-600 hover:text-indigo-600 px-3 active">
                        <i class="fas fa-home"></i> Home
                    </a>
                    <a href="#about" class="nav-link text-gray-600 hover:text-indigo-600 px-3">
                        <i class="fas fa-user"></i> About
                    </a>
                    <a href="#services" class="nav-link text-gray-600 hover:text-indigo-600 px-3">
                        <i class="fas fa-cogs"></i> Services
                    </a>
                    <a href="#skills" class="nav-link text-gray-600 hover:text-indigo-600 px-3">
                        <i class="fas fa-code"></i> Skills
                    </a>
                    <a href="#testimonials" class="nav-link text-gray-600 hover:text-indigo-600 px-3">
                        <i class="fas fa-quote-right"></i> Testimonials
                    </a>
                    <a href="#projects" class="nav-link text-gray-600 hover:text-indigo-600 px-3">
                        <i class="fas fa-project-diagram"></i> Projects
                    </a>
                    <a href="#contact" class="nav-link text-gray-600 hover:text-indigo-600 px-3">
                        <i class="fas fa-envelope"></i> Contact
                    </a>
                </div>
            </div>

            <!-- Mobile Navigation -->
            <div id="mobile-menu" class="md:hidden mobile-menu-transition mt-4 bg-white rounded-lg shadow-lg p-4">
                <div class="flex flex-col space-y-4">
                    <a href="#home"
                        class="nav-link text-gray-600 hover:text-indigo-600 py-2 active flex items-center">
                        <i class="fas fa-home w-6"></i> Home
                    </a>
                    <a href="#about" class="nav-link text-gray-600 hover:text-indigo-600 py-2 flex items-center">
                        <i class="fas fa-user w-6"></i> About
                    </a>
                    <a href="#skills" class="nav-link text-gray-600 hover:text-indigo-600 py-2 flex items-center">
                        <i class="fas fa-code w-6"></i> Skills
                    </a>
                    <a href="#services" class="nav-link text-gray-600 hover:text-indigo-600 py-2 flex items-center">
                        <i class="fas fa-cogs w-6"></i> Services
                    </a>
                    <a href="#projects" class="nav-link text-gray-600 hover:text-indigo-600 py-2 flex items-center">
                        <i class="fas fa-project-diagram w-6"></i> Projects
                    </a>
                    <a href="#testimonials" class="nav-link text-gray-600 hover:text-indigo-600 py-2 flex items-center">
                        <i class="fas fa-quote-right w-6"></i> Testimonials
                    </a>
                    <a href="#contact" class="nav-link text-gray-600 hover:text-indigo-600 py-2 flex items-center">
                        <i class="fas fa-envelope w-6"></i> Contact
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home"
        class="py-20 md:py-28 bg-gradient-to-r from-indigo-600 to-purple-600 text-white relative overflow-hidden section-transition appear">
        <!-- Floating Particles -->
        <div class="hero-bg">
            <div class="hero-particle animate-float animate-float-1"
                style="left: 10%; width: 30px; height: 30px; animation-duration: 15s;"></div>
            <div class="hero-particle animate-float animate-float-2"
                style="left: 25%; width: 20px; height: 20px; animation-duration: 18s;"></div>
            <div class="hero-particle animate-float animate-float-3"
                style="left: 40%; width: 15px; height: 15px; animation-duration: 20s;"></div>
            <div class="hero-particle animate-float animate-float-4"
                style="left: 65%; width: 25px; height: 25px; animation-duration: 22s;"></div>
            <div class="hero-particle animate-float animate-float-5"
                style="left: 80%; width: 18px; height: 18px; animation-duration: 25s;"></div>
            <div class="hero-particle animate-float animate-float-6"
                style="left: 90%; width: 22px; height: 22px; animation-duration: 17s;"></div>
        </div>

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="order-2 md:order-1">
                    <h1 class="text-4xl md:text-5xl font-bold mb-4 hero-title hero-gradient-text">Hi, I'm Nurul Amin
                    </h1>
                    <h2 class="text-2xl md:text-3xl font-semibold mb-6 hero-subtitle">Software Developer</h2>
                    <p class="text-lg mb-8 text-indigo-100 hero-text">Specializing in PHP, Laravel, and WordPress
                        development.
                        Turning ideas into elegant, functional solutions.</p>
                    <div class="flex space-x-4 hero-buttons">
                        <a href="#contact"
                            class="bg-white text-indigo-600 hover:bg-indigo-100 px-6 py-3 rounded-lg font-semibold transition duration-300 transform hover:scale-105 hover:shadow-lg">Hire
                            Me</a>
                        <a href="#projects"
                            class="bg-transparent glowing-border border-2 border-white text-white hover:bg-white hover:text-indigo-600 px-6 py-3 rounded-lg font-semibold transition duration-300">View
                            Projects</a>
                    </div>
                </div>
                <div class="order-1 md:order-2 flex justify-center">
                    <!-- Enhanced profile image with more animations -->
                    <div class="relative floating interactive-image">
                        <div class="enhanced-glow">
                            <div
                                class="w-72 h-72 rounded-full overflow-hidden border-4 border-white shadow-xl profile-image-container transform transition-all duration-500 png-container png-animation mouse-follow">
                                <img src="{{ asset('img/amin.png') }}" alt="Nurul Amin"
                                    class="w-full h-full object-cover profile-image">
                                <!-- PNG specific effects -->
                                <div class="light-beam"></div>
                                <div class="reflection"></div>
                                <!-- 3D frame elements -->
                                <div class="profile-frame"></div>
                                <div class="profile-frame-2"></div>
                                <!-- Sparkle elements -->
                                <div class="sparkle sparkle-1"></div>
                                <div class="sparkle sparkle-2"></div>
                                <div class="sparkle sparkle-3"></div>
                                <div class="sparkle sparkle-4"></div>
                            </div>
                        </div>

                        <!-- Animated background elements with improved effects -->
                        <div
                            class="absolute -z-10 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-indigo-300 rounded-full animate-pulse-slow opacity-60">
                        </div>
                        <div
                            class="absolute -z-20 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-80 h-80 bg-purple-300 rounded-full animate-spin-slow opacity-40">
                        </div>

                        <!-- Orbital accent elements -->
                        <div class="absolute -z-10 w-full h-full top-0 left-0">
                            <div class="absolute -z-10 -bottom-5 -right-5 w-16 h-16 bg-yellow-300 rounded-full animate-pulse-slow opacity-60"
                                style="animation-delay: 1s;"></div>
                            <div class="absolute -z-10 -top-5 -left-5 w-12 h-12 bg-pink-300 rounded-full animate-pulse-slow opacity-70"
                                style="animation-delay: 2s;"></div>
                            <div class="absolute -z-10 top-1/2 -right-8 w-10 h-10 bg-blue-300 rounded-full animate-pulse-slow opacity-60"
                                style="animation-delay: 0.5s;"></div>
                            <div class="absolute -z-10 -bottom-8 left-1/2 w-14 h-14 bg-green-300 rounded-full animate-pulse-slow opacity-50"
                                style="animation-delay: 1.5s;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Decorative wave shape at bottom -->
        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none"
                class="relative block w-full h-12 md:h-16" fill="#ffffff">
                <path
                    d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V0A600.21,600.21,0,0,0,321.39,56.44Z">
                </path>
            </svg>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white relative overflow-hidden section-transition">
        <!-- Background decorative elements -->
        <div class="absolute top-0 right-0 w-64 h-64 bg-indigo-50 rounded-full -mr-32 -mt-32 opacity-70"></div>
        <div class="absolute bottom-0 left-0 w-80 h-80 bg-indigo-50 rounded-full -ml-40 -mb-40 opacity-70"></div>

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16">
                <p class="text-indigo-600 font-semibold mb-2 tracking-wide uppercase text-sm opacity-0 animate-about">
                    Discover My Story</p>
                <h2 class="text-3xl md:text-4xl font-bold mb-4 opacity-0 animate-about"
                    style="animation-delay: 0.1s;">About Me</h2>
                <div class="w-16 h-1 bg-indigo-600 mx-auto opacity-0 animate-about" style="animation-delay: 0.2s;">
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
                <!-- Left column - About me content -->
                <div class="lg:col-span-12 opacity-0 animate-about" style="animation-delay: 0.3s;">
                    <div
                        class="bg-gradient-to-br from-white to-indigo-50 p-8 rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl transition duration-500">
                        <h3 class="text-2xl font-semibold mb-6 text-gray-800 flex items-center">
                            <span
                                class="w-10 h-10 rounded-full bg-indigo-600 flex items-center justify-center text-white mr-3">
                                <i class="fas fa-user-alt text-sm"></i>
                            </span>
                            Professional Software and Website Developer
                        </h3>

                        <div class="space-y-6">
                            <p class="text-gray-600 leading-relaxed">
                                I'm a passionate software developer with expertise in PHP, Laravel, and WordPress.
                                I currently work remotely as a freelance developer. I develop
                                custom web applications and solutions for clients across various industries.
                            </p>

                            <!-- Professional highlights -->
                            <div class="mt-8 space-y-4">
                                <div class="flex items-center">
                                    <div
                                        class="w-8 h-8 rounded-full bg-green-100 flex items-center justify-center text-green-600 mr-3">
                                        <i class="fas fa-check text-sm"></i>
                                    </div>
                                    <p class="text-gray-700">Over 5 years of professional development experience</p>
                                </div>
                                <div class="flex items-center">
                                    <div
                                        class="w-8 h-8 rounded-full bg-green-100 flex items-center justify-center text-green-600 mr-3">
                                        <i class="fas fa-check text-sm"></i>
                                    </div>
                                    <p class="text-gray-700">Completed 100+ projects for clients worldwide</p>
                                </div>
                                <div class="flex items-center">
                                    <div
                                        class="w-8 h-8 rounded-full bg-green-100 flex items-center justify-center text-green-600 mr-3">
                                        <i class="fas fa-check text-sm"></i>
                                    </div>
                                    <p class="text-gray-700">Expertise in building scalable web applications</p>
                                </div>
                            </div>

                            <!-- Personal details grid -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-8 border-t border-gray-100 pt-6">
                                <div class="flex flex-col">
                                    <span class="text-gray-500 text-sm">Name</span>
                                    <span class="text-gray-800 font-medium">Nurul Amin</span>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-gray-500 text-sm">Email</span>
                                    <span class="text-gray-800 font-medium">nurulamin.developer@gmail.com</span>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-gray-500 text-sm">Role</span>
                                    <span class="text-gray-800 font-medium">Software Developer</span>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-gray-500 text-sm">Location</span>
                                    <span class="text-gray-800 font-medium">Bangladesh</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-white section-transition">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <p class="text-indigo-600 font-semibold mb-2 tracking-wide uppercase text-sm">What I Do</p>
                <h2 class="text-3xl md:text-4xl font-bold mb-4">My Services</h2>
                <div class="w-16 h-1 bg-indigo-600 mx-auto"></div>
                <p class="text-gray-600 mt-4 max-w-3xl mx-auto">I provide comprehensive development solutions tailored
                    to meet your specific needs and business goals.</p>
            </div>

            <!-- Services Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                <!-- Service 1 -->
                <div
                    class="bg-gradient-to-br from-white to-indigo-50 rounded-xl p-8 shadow-lg border border-gray-100 transform transition duration-500 hover:-translate-y-2 hover:shadow-xl group">
                    <div
                        class="text-indigo-600 text-3xl mb-6 bg-white w-16 h-16 rounded-xl flex items-center justify-center shadow-md group-hover:bg-indigo-600 group-hover:text-white transition-all duration-300">
                        <i class="fas fa-desktop"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-800">Web Development</h3>
                    <p class="text-gray-600">Custom web applications and websites built from scratch using cutting-edge
                        technologies and best practices for optimal performance.</p>
                </div>

                <!-- Service 2 -->
                <div
                    class="bg-gradient-to-br from-white to-indigo-50 rounded-xl p-8 shadow-lg border border-gray-100 transform transition duration-500 hover:-translate-y-2 hover:shadow-xl group">
                    <div
                        class="text-indigo-600 text-3xl mb-6 bg-white w-16 h-16 rounded-xl flex items-center justify-center shadow-md group-hover:bg-indigo-600 group-hover:text-white transition-all duration-300">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-800">Responsive Design</h3>
                    <p class="text-gray-600">Mobile-first design approach ensuring your website looks and performs
                        flawlessly across all devices and screen sizes.</p>
                </div>

                <!-- Service 3 -->
                <div
                    class="bg-gradient-to-br from-white to-indigo-50 rounded-xl p-8 shadow-lg border border-gray-100 transform transition duration-500 hover:-translate-y-2 hover:shadow-xl group">
                    <div
                        class="text-indigo-600 text-3xl mb-6 bg-white w-16 h-16 rounded-xl flex items-center justify-center shadow-md group-hover:bg-indigo-600 group-hover:text-white transition-all duration-300">
                        <i class="fas fa-database"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-800">Backend Development</h3>
                    <p class="text-gray-600">Robust server-side applications and APIs with Laravel and PHP for
                        scalable, high-performance solutions that grow with your business.</p>
                </div>

                <!-- Service 4 -->
                <div
                    class="bg-gradient-to-br from-white to-indigo-50 rounded-xl p-8 shadow-lg border border-gray-100 transform transition duration-500 hover:-translate-y-2 hover:shadow-xl group">
                    <div
                        class="text-indigo-600 text-3xl mb-6 bg-white w-16 h-16 rounded-xl flex items-center justify-center shadow-md group-hover:bg-indigo-600 group-hover:text-white transition-all duration-300">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-800">E-commerce Solutions</h3>
                    <p class="text-gray-600">Complete online store development with payment integration, inventory
                        management, and user-friendly admin dashboards.</p>
                </div>

                <!-- Service 5 -->
                <div
                    class="bg-gradient-to-br from-white to-indigo-50 rounded-xl p-8 shadow-lg border border-gray-100 transform transition duration-500 hover:-translate-y-2 hover:shadow-xl group">
                    <div
                        class="text-indigo-600 text-3xl mb-6 bg-white w-16 h-16 rounded-xl flex items-center justify-center shadow-md group-hover:bg-indigo-600 group-hover:text-white transition-all duration-300">
                        <i class="fas fa-server"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-800">Server Management</h3>
                    <p class="text-gray-600">Server setup, optimization, and maintenance to ensure your applications
                        run smoothly with optimal performance and security.</p>
                </div>

                <!-- Service 6 -->
                <div
                    class="bg-gradient-to-br from-white to-indigo-50 rounded-xl p-8 shadow-lg border border-gray-100 transform transition duration-500 hover:-translate-y-2 hover:shadow-xl group">
                    <div
                        class="text-indigo-600 text-3xl mb-6 bg-white w-16 h-16 rounded-xl flex items-center justify-center shadow-md group-hover:bg-indigo-600 group-hover:text-white transition-all duration-300">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-800">SEO Optimization</h3>
                    <p class="text-gray-600">Technical SEO implementation to improve your website's search engine
                        visibility and drive more organic traffic to your business.</p>
                </div>
            </div>

            <!-- Achievement counters -->
            <div class="bg-gradient-to-r from-indigo-600 to-purple-600 rounded-2xl p-8 text-white opacity-0 animate-about"
                style="animation-delay: 0.6s;">
                <h3 class="text-xl font-semibold mb-6 flex items-center">
                    <span class="w-8 h-8 rounded-full bg-white flex items-center justify-center text-indigo-600 mr-2">
                        <i class="fas fa-trophy text-sm"></i>
                    </span>
                    Achievements
                </h3>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                    <!-- Counter 1 -->
                    <div class="text-center">
                        <div class="text-3xl font-bold mb-1 counter" data-target="100">0</div>
                        <p class="text-indigo-100 text-sm">Projects Completed</p>
                    </div>

                    <!-- Counter 2 -->
                    <div class="text-center">
                        <div class="text-3xl font-bold mb-1 counter" data-target="50">0</div>
                        <p class="text-indigo-100 text-sm">Happy Clients</p>
                    </div>

                    <!-- Counter 3 -->
                    <div class="text-center">
                        <div class="text-3xl font-bold mb-1 counter" data-target="5">0</div>
                        <p class="text-indigo-100 text-sm">Years Experience</p>
                    </div>

                    <!-- Counter 4 -->
                    <div class="text-center">
                        <div class="text-3xl font-bold mb-1 counter" data-target="12">0</div>
                        <p class="text-indigo-100 text-sm">Awards Received</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-20 bg-gray-50 section-transition">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <p class="text-indigo-600 font-semibold mb-2 tracking-wide uppercase text-sm">My Expertise</p>
                <h2 class="text-3xl font-bold mb-4">My Skills</h2>
                <div class="w-16 h-1 bg-indigo-600 mx-auto"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- PHP -->
                <div
                    class="bg-white p-8 rounded-lg shadow-md transform transition duration-300 hover:-translate-y-2 hover:shadow-xl">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-xl font-semibold">PHP</h3>
                        <span class="text-indigo-600 font-semibold">95%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                        <div class="bg-indigo-600 h-2.5 rounded-full" style="width: 95%"></div>
                    </div>
                </div>

                <!-- Laravel -->
                <div
                    class="bg-white p-8 rounded-lg shadow-md transform transition duration-300 hover:-translate-y-2 hover:shadow-xl">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-xl font-semibold">Laravel</h3>
                        <span class="text-indigo-600 font-semibold">90%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                        <div class="bg-indigo-600 h-2.5 rounded-full" style="width: 90%"></div>
                    </div>
                </div>

                <!-- WordPress -->
                <div
                    class="bg-white p-8 rounded-lg shadow-md transform transition duration-300 hover:-translate-y-2 hover:shadow-xl">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-xl font-semibold">WordPress</h3>
                        <span class="text-indigo-600 font-semibold">92%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                        <div class="bg-indigo-600 h-2.5 rounded-full" style="width: 92%"></div>
                    </div>
                </div>

                <!-- HTML/CSS -->
                <div
                    class="bg-white p-8 rounded-lg shadow-md transform transition duration-300 hover:-translate-y-2 hover:shadow-xl">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-xl font-semibold">HTML/CSS</h3>
                        <span class="text-indigo-600 font-semibold">88%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                        <div class="bg-indigo-600 h-2.5 rounded-full" style="width: 88%"></div>
                    </div>
                </div>

                <!-- JavaScript -->
                <div
                    class="bg-white p-8 rounded-lg shadow-md transform transition duration-300 hover:-translate-y-2 hover:shadow-xl">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-xl font-semibold">JavaScript</h3>
                        <span class="text-indigo-600 font-semibold">80%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                        <div class="bg-indigo-600 h-2.5 rounded-full" style="width: 80%"></div>
                    </div>
                </div>

                <!-- MySQL -->
                <div
                    class="bg-white p-8 rounded-lg shadow-md transform transition duration-300 hover:-translate-y-2 hover:shadow-xl">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-xl font-semibold">MySQL</h3>
                        <span class="text-indigo-600 font-semibold">85%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                        <div class="bg-indigo-600 h-2.5 rounded-full" style="width: 85%"></div>
                    </div>
                </div>
            </div>

            <div class="mt-16 grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-8">
                <div
                    class="bg-white p-6 rounded-lg shadow-sm flex items-center justify-center transform transition duration-300 hover:shadow-md hover:-translate-y-1">
                    <i class="fab fa-php text-4xl text-gray-700"></i>
                </div>
                <div
                    class="bg-white p-6 rounded-lg shadow-sm flex items-center justify-center transform transition duration-300 hover:shadow-md hover:-translate-y-1">
                    <i class="fab fa-laravel text-4xl text-gray-700"></i>
                </div>
                <div
                    class="bg-white p-6 rounded-lg shadow-sm flex items-center justify-center transform transition duration-300 hover:shadow-md hover:-translate-y-1">
                    <i class="fab fa-wordpress text-4xl text-gray-700"></i>
                </div>
                <div
                    class="bg-white p-6 rounded-lg shadow-sm flex items-center justify-center transform transition duration-300 hover:shadow-md hover:-translate-y-1">
                    <i class="fab fa-html5 text-4xl text-gray-700"></i>
                </div>
                <div
                    class="bg-white p-6 rounded-lg shadow-sm flex items-center justify-center transform transition duration-300 hover:shadow-md hover:-translate-y-1">
                    <i class="fab fa-css3-alt text-4xl text-gray-700"></i>
                </div>
                <div
                    class="bg-white p-6 rounded-lg shadow-sm flex items-center justify-center transform transition duration-300 hover:shadow-md hover:-translate-y-1">
                    <i class="fab fa-js text-4xl text-gray-700"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-20 bg-gray-50 section-transition">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <p class="text-indigo-600 font-semibold mb-2 tracking-wide uppercase text-sm">What Clients Say</p>
                <h2 class="text-3xl font-bold mb-4">Client Testimonials</h2>
                <div class="w-16 h-1 bg-indigo-600 mx-auto"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div
                    class="bg-white p-8 rounded-lg shadow-md transform transition duration-300 hover:-translate-y-2 hover:shadow-xl">
                    <div class="flex items-center mb-4">
                        <div class="text-indigo-600 text-2xl mr-4">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <div class="text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6">
                        "Nurul delivered our e-commerce platform ahead of schedule and exceeded our expectations.
                        His attention to detail and problem-solving skills are exceptional."
                    </p>
                    <div class="flex items-center">
                        <div>
                            <h4 class="font-semibold">Abdul Kader</h4>
                            <p class="text-gray-500 text-sm">CEO, MamaEnterprise</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div
                    class="bg-white p-8 rounded-lg shadow-md transform transition duration-300 hover:-translate-y-2 hover:shadow-xl">
                    <div class="flex items-center mb-4">
                        <div class="text-indigo-600 text-2xl mr-4">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <div class="text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6">
                        "Working with Nurul has been a pleasure. He transformed our outdated website into a modern,
                        responsive platform that has significantly increased our conversion rates."
                    </p>
                    <div class="flex items-center">
                        <div>
                            <h4 class="font-semibold">Rafiq Uddin</h4>
                            <p class="text-gray-500 text-sm">CEO at BDdarpan.com</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div
                    class="bg-white p-8 rounded-lg shadow-md transform transition duration-300 hover:-translate-y-2 hover:shadow-xl">
                    <div class="flex items-center mb-4">
                        <div class="text-indigo-600 text-2xl mr-4">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <div class="text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6">
                        "Nurul is a highly skilled developer who understands both technical requirements and business
                        needs.
                        His custom WordPress solutions have helped us streamline our operations."
                    </p>
                    <div class="flex items-center">
                        <div>
                            <h4 class="font-semibold">Saeedul Mostafa</h4>
                            <p class="text-gray-500 text-sm">Founder, IQRA LMS.Co</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-20 bg-gray-50 section-transition">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <p class="text-indigo-600 font-semibold mb-2 tracking-wide uppercase text-sm">My Portfolio</p>
                <h2 class="text-3xl font-bold mb-4">Recent Projects</h2>
                <div class="w-16 h-1 bg-indigo-600 mx-auto"></div>
                <p class="text-gray-600 mt-4 max-w-3xl mx-auto">Here are some of my recent projects. Each project was
                    built with care and attention to detail.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1: Blog Website -->
                <div
                    class="bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-500 hover:-translate-y-2 hover:shadow-xl">
                    <div class="h-48 relative overflow-hidden">
                        <img src="{{ asset('img/blogwebsite.png') }}" alt="Blog Website"
                            class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-70"></div>
                        <div class="absolute bottom-0 left-0 p-4">
                            <h3 class="text-white text-xl font-bold">Blog & Content Management</h3>
                            <p class="text-gray-300 text-sm">WordPress, Custom Plugins</p>
                        </div>
                    </div>
                    <div class="p-5">
                        <p class="text-gray-600">A dynamic blog platform built with WordPress, featuring custom
                            plugins, SEO optimization, and easy content management.</p>
                        <a href="https://bddarpan.com/"
                            class="mt-4 inline-block bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-6 py-2 rounded-lg transition transform hover:scale-105"
                            target="_blank">
                            View Project
                        </a>
                    </div>
                </div>

                <!-- Project 2: E-commerce Website -->
                <div
                    class="bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-500 hover:-translate-y-2 hover:shadow-xl">
                    <div class="h-48 relative overflow-hidden">
                        <img src="{{ asset('img/ecommercewebsite.png') }}" alt="E-commerce Platform"
                            class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-70"></div>
                        <div class="absolute bottom-0 left-0 p-4">
                            <h3 class="text-white text-xl font-bold">E-commerce Platform</h3>
                            <p class="text-gray-300 text-sm">PHP/Laravel, MySQL, JavaScript</p>
                        </div>
                    </div>
                    <div class="p-5">
                        <p class="text-gray-600">A powerful e-commerce website with secure payment gateways, order
                            tracking, and an intuitive admin dashboard.</p>
                        <a href="https://tonatuny.com/"
                            class="mt-4 inline-block bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-6 py-2 rounded-lg transition transform hover:scale-105"
                            target="_blank">
                            View Project
                        </a>
                    </div>
                </div>

                <!-- Project 3: Learning Management System -->
                <div
                    class="bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-500 hover:-translate-y-2 hover:shadow-xl">
                    <div class="h-48 relative overflow-hidden">
                        <img src="{{ asset('img/lmswebsite.png') }}" alt="LMS Platform"
                            class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-70"></div>
                        <div class="absolute bottom-0 left-0 p-4">
                            <h3 class="text-white text-xl font-bold">Learning Management System</h3>
                            <p class="text-gray-300 text-sm">Laravel, Tailwind CSS, Livewire</p>
                        </div>
                    </div>
                    <div class="p-5">
                        <p class="text-gray-600">An interactive LMS platform for online courses, quizzes, progress
                            tracking, and student-teacher collaboration.</p>
                        <a href="https://iqraoa.com/"
                            class="mt-4 inline-block bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-6 py-2 rounded-lg transition transform hover:scale-105"
                            target="_blank">
                            View Project
                        </a>
                    </div>
                </div>
            </div>

            <div class="mt-12 text-center">
                <a href="#contact"
                    class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-8 py-3 rounded-lg transition transform hover:scale-105 inline-flex items-center">
                    <i class="fas fa-envelope mr-2"></i> Discuss Your Project
                </a>
            </div>
        </div>
    </section>


    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white section-transition">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <p class="text-indigo-600 font-semibold mb-2 tracking-wide uppercase text-sm">Let's Connect</p>
                <h2 class="text-3xl font-bold mb-4">Get In Touch</h2>
                <div class="w-16 h-1 bg-indigo-600 mx-auto"></div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div>
                    <h3 class="text-2xl font-semibold mb-6">Contact Information</h3>
                    <p class="text-gray-600 mb-8">
                        Feel free to reach out to me for any project inquiries, collaborations, or just to say hello!
                        I'm always open to discussing new projects and opportunities.
                    </p>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div
                                class="bg-indigo-100 p-3 rounded-full text-indigo-600 mr-4 transform transition hover:scale-110 duration-300">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1">Email</h4>
                                <p class="text-gray-600">nurulamin.developer@gmail.com</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div
                                class="bg-indigo-100 p-3 rounded-full text-indigo-600 mr-4 transform transition hover:scale-110 duration-300">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1">Location</h4>
                                <p class="text-gray-600">Bangladesh - Working Worldwide</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <h4 class="font-semibold mb-4">Follow Me</h4>
                        <div class="flex space-x-4">
                            <a href="#"
                                class="bg-gray-100 hover:bg-indigo-100 p-3 rounded-full text-gray-600 hover:text-indigo-600 transition duration-300 transform hover:scale-110">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#"
                                class="bg-gray-100 hover:bg-indigo-100 p-3 rounded-full text-gray-600 hover:text-indigo-600 transition duration-300 transform hover:scale-110">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#"
                                class="bg-gray-100 hover:bg-indigo-100 p-3 rounded-full text-gray-600 hover:text-indigo-600 transition duration-300 transform hover:scale-110">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#"
                                class="bg-gray-100 hover:bg-indigo-100 p-3 rounded-full text-gray-600 hover:text-indigo-600 transition duration-300 transform hover:scale-110">
                                <i class="fab fa-dribbble"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <form id="contact-form"
                        class="bg-gray-50 p-8 rounded-lg shadow-md transform transition duration-500 hover:shadow-lg">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="name" class="block text-gray-700 font-medium mb-2">Your Name</label>
                                <input type="text" id="name" name="name" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition">
                            </div>
                            <div>
                                <label for="email" class="block text-gray-700 font-medium mb-2">Your Email</label>
                                <input type="email" id="email" name="email" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition">
                            </div>
                        </div>
                        <div class="mb-6">
                            <label for="subject" class="block text-gray-700 font-medium mb-2">Subject</label>
                            <input type="text" id="subject" name="subject" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition">
                        </div>
                        <div class="mb-6">
                            <label for="message" class="block text-gray-700 font-medium mb-2">Message</label>
                            <textarea id="message" name="message" rows="5" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition"></textarea>
                        </div>
                        <button type="submit"
                            class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-300 transform hover:scale-105 hover:shadow-lg">
                            Send Message
                        </button>
                    </form>

                    <!-- Success Message (hidden by default) -->
                    <div id="success-message"
                        class="hidden bg-white p-8 rounded-lg shadow-lg border-l-4 border-green-500 transform transition-all duration-500">
                        <div class="flex items-center mb-4">
                            <div class="bg-green-100 rounded-full p-2 mr-4">
                                <svg class="w-8 h-8 text-green-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800">Message Sent Successfully!</h3>
                        </div>
                        <p class="text-gray-600 mb-6">Thank you for reaching out. I'll get back to you as soon as
                            possible.</p>
                        <button id="send-another"
                            class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-lg transition duration-300 transform hover:scale-105">
                            Send Another Message
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer
        class="relative pt-16 pb-12 bg-gradient-to-br from-gray-900 via-indigo-950 to-gray-900 text-white overflow-hidden">
        <!-- Decorative elements -->
        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-indigo-600 to-purple-600"></div>
        <div
            class="absolute top-0 right-0 w-64 h-64 bg-indigo-600 rounded-full opacity-5 transform translate-x-1/3 -translate-y-1/2">
        </div>
        <div
            class="absolute bottom-0 left-0 w-80 h-80 bg-purple-600 rounded-full opacity-5 transform -translate-x-1/3 translate-y-1/2">
        </div>

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Footer top section with logo and newsletter -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 pb-10 border-b border-gray-800">
                <div>
                    <a href="#home" class="logo inline-flex items-center text-2xl font-bold mb-6">
                        <span class="logo-accent">Nurul</span><span class="text-white ml-1">Amin</span>
                    </a>
                    <p class="text-gray-400 mb-6 text-sm leading-relaxed max-w-md">
                        Professional software developer specializing in PHP, Laravel, and WordPress.
                        Providing high-quality development services for businesses and individuals worldwide.
                    </p>
                    <div class="flex space-x-3">
                        <a href="#"
                            class="flex items-center justify-center w-10 h-10 rounded-lg bg-gray-800 hover:bg-indigo-600 text-gray-400 hover:text-white transition duration-300 transform hover:scale-110 hover:rotate-3">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#"
                            class="flex items-center justify-center w-10 h-10 rounded-lg bg-gray-800 hover:bg-indigo-600 text-gray-400 hover:text-white transition duration-300 transform hover:scale-110 hover:rotate-3">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#"
                            class="flex items-center justify-center w-10 h-10 rounded-lg bg-gray-800 hover:bg-indigo-600 text-gray-400 hover:text-white transition duration-300 transform hover:scale-110 hover:rotate-3">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#"
                            class="flex items-center justify-center w-10 h-10 rounded-lg bg-gray-800 hover:bg-indigo-600 text-gray-400 hover:text-white transition duration-300 transform hover:scale-110 hover:rotate-3">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#"
                            class="flex items-center justify-center w-10 h-10 rounded-lg bg-gray-800 hover:bg-indigo-600 text-gray-400 hover:text-white transition duration-300 transform hover:scale-110 hover:rotate-3">
                            <i class="fab fa-dribbble"></i>
                        </a>
                    </div>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-6">Subscribe to Newsletter</h3>
                    <p class="text-gray-400 mb-4 text-sm">Stay updated with my latest projects and tech articles.</p>
                    <form class="flex flex-col sm:flex-row gap-3">
                        <input type="email" placeholder="Your email address"
                            class="px-4 py-3 bg-gray-800 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 flex-grow">
                        <button type="submit"
                            class="px-6 py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-medium rounded-lg transition duration-300 whitespace-nowrap">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>

            <!-- Footer grid sections -->
            <div class="grid grid-cols-1 md:grid-cols-12 gap-10 py-10">
                <div class="md:col-span-5">
                    <h4 class="text-lg font-semibold mb-5 flex items-center">
                        <span
                            class="w-6 h-6 rounded-full bg-indigo-600 flex items-center justify-center text-white mr-2">
                            <i class="fas fa-map-marker-alt text-xs"></i>
                        </span>
                        Find Me
                    </h4>
                    <ul class="space-y-3">
                        <li class="flex items-center text-gray-400 hover:text-white transition duration-200">
                            <i class="fas fa-envelope mr-3 text-indigo-400"></i>
                            <span>nurulamin.developer@gmail.com</span>
                        </li>
                        <li class="flex items-center text-gray-400 hover:text-white transition duration-200">
                            <i class="fas fa-phone mr-3 text-indigo-400"></i>
                            <span>+880 1829-698483</span>
                        </li>
                        <li class="flex items-center text-gray-400 hover:text-white transition duration-200">
                            <i class="fas fa-map-marker-alt mr-3 text-indigo-400"></i>
                            <span>Bangladesh - Working Worldwide</span>
                        </li>
                        <li class="flex items-center text-gray-400 hover:text-white transition duration-200">
                            <i class="fas fa-clock mr-3 text-indigo-400"></i>
                            <span>Available: 9:00 AM - 6:00 PM BDT (GMT+6)</span>
                        </li>
                    </ul>
                </div>
                <div class="md:col-span-3">
                    <h4 class="text-lg font-semibold mb-5 flex items-center">
                        <span
                            class="w-6 h-6 rounded-full bg-indigo-600 flex items-center justify-center text-white mr-2">
                            <i class="fas fa-link text-xs"></i>
                        </span>
                        Quick Links
                    </h4>
                    <ul class="space-y-2">
                        <li><a href="#home"
                                class="text-gray-400 hover:text-white transition duration-200 flex items-center transform hover:translate-x-1">
                                <i class="fas fa-chevron-right text-xs mr-2 text-indigo-400"></i>Home
                            </a></li>
                        <li><a href="#about"
                                class="text-gray-400 hover:text-white transition duration-200 flex items-center transform hover:translate-x-1">
                                <i class="fas fa-chevron-right text-xs mr-2 text-indigo-400"></i>About
                            </a></li>
                        <li><a href="#skills"
                                class="text-gray-400 hover:text-white transition duration-200 flex items-center transform hover:translate-x-1">
                                <i class="fas fa-chevron-right text-xs mr-2 text-indigo-400"></i>Skills
                            </a></li>
                        <li><a href="#services"
                                class="text-gray-400 hover:text-white transition duration-200 flex items-center transform hover:translate-x-1">
                                <i class="fas fa-chevron-right text-xs mr-2 text-indigo-400"></i>Services
                            </a></li>
                    </ul>
                </div>
                <div class="md:col-span-4">
                    <h4 class="text-lg font-semibold mb-5 flex items-center">
                        <span
                            class="w-6 h-6 rounded-full bg-indigo-600 flex items-center justify-center text-white mr-2">
                            <i class="fas fa-folder-open text-xs"></i>
                        </span>
                        More Links
                    </h4>
                    <ul class="space-y-2">
                        <li><a href="#projects"
                                class="text-gray-400 hover:text-white transition duration-200 flex items-center transform hover:translate-x-1">
                                <i class="fas fa-chevron-right text-xs mr-2 text-indigo-400"></i>Projects
                            </a></li>
                        <li><a href="#testimonials"
                                class="text-gray-400 hover:text-white transition duration-200 flex items-center transform hover:translate-x-1">
                                <i class="fas fa-chevron-right text-xs mr-2 text-indigo-400"></i>Testimonials
                            </a></li>
                        <li><a href="#contact"
                                class="text-gray-400 hover:text-white transition duration-200 flex items-center transform hover:translate-x-1">
                                <i class="fas fa-chevron-right text-xs mr-2 text-indigo-400"></i>Contact
                            </a></li>
                        <li><a href="#"
                                class="text-gray-400 hover:text-white transition duration-200 flex items-center transform hover:translate-x-1">
                                <i class="fas fa-chevron-right text-xs mr-2 text-indigo-400"></i>Privacy Policy
                            </a></li>
                    </ul>
                </div>
            </div>

            <!-- Footer bottom section -->
            <div class="pt-8 border-t border-gray-800 text-center">
                <p class="text-gray-400 text-sm">© 2023 <span class="text-white">Nurul Amin</span>. All rights
                    reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle with animation
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            mobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('open');
                this.classList.toggle('hamburger-active');
            });

            // Get all the sections and navigation links
            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('.nav-link');
            const scrollIndicator = document.querySelector('.scroll-indicator');
            const scrollTopBtn = document.querySelector('.scroll-top');

            // Initial section transitions
            document.querySelector('#home').classList.add('appear');

            // Add transition class to all sections
            sections.forEach(section => {
                if (section.id !== 'home') {
                    section.classList.add('section-transition');
                }
            });

            // Intersection Observer for section animations
            const sectionObserver = new IntersectionObserver(
                (entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('appear');
                            entry.target.classList.add('section-highlight');

                            // Update active nav link
                            navLinks.forEach((link) => {
                                if (link.getAttribute('href') === `#${entry.target.id}`) {
                                    link.classList.add('active');
                                } else {
                                    link.classList.remove('active');
                                }
                            });
                        }
                    });
                }, {
                    threshold: 0.2
                }
            );

            // Observe all sections
            sections.forEach((section) => {
                sectionObserver.observe(section);
            });

            // Smooth scrolling for anchor links with animation timing
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();

                    const targetId = this.getAttribute('href');
                    const targetElement = document.querySelector(targetId);

                    if (targetElement) {
                        // Update active class on nav links
                        navLinks.forEach(link => {
                            if (link.getAttribute('href') === targetId) {
                                link.classList.add('active');
                            } else {
                                link.classList.remove('active');
                            }
                        });

                        // Smooth scroll with custom timing
                        const headerOffset = 80;
                        const elementPosition = targetElement.getBoundingClientRect().top;
                        const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                        // Apply highlight effect
                        setTimeout(() => {
                            targetElement.classList.add('section-highlight');
                            setTimeout(() => {
                                targetElement.classList.remove('section-highlight');
                            }, 1500);
                        }, 800);

                        window.scrollTo({
                            top: offsetPosition,
                            behavior: 'smooth'
                        });

                        // Close mobile menu if open
                        if (mobileMenu.classList.contains('open')) {
                            mobileMenu.classList.remove('open');
                            mobileMenuButton.classList.remove('hamburger-active');
                        }
                    }
                });
            });

            // Scroll progress indicator
            function updateScrollIndicator() {
                const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
                const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
                const scrolled = (winScroll / height) * 100;
                scrollIndicator.style.width = scrolled + "%";

                // Show/hide scroll to top button
                if (winScroll > 300) {
                    scrollTopBtn.classList.add('visible');
                } else {
                    scrollTopBtn.classList.remove('visible');
                }
            }

            window.addEventListener('scroll', updateScrollIndicator);

            // Scroll to top functionality
            scrollTopBtn.addEventListener('click', function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });

            // 3D rotation effect for the profile image
            const mouseFollowElement = document.querySelector('.mouse-follow');

            if (mouseFollowElement) {
                document.addEventListener('mousemove', function(e) {
                    // Only activate on larger screens
                    if (window.innerWidth > 768) {
                        const rect = mouseFollowElement.getBoundingClientRect();
                        const centerX = rect.left + rect.width / 2;
                        const centerY = rect.top + rect.height / 2;

                        // Calculate the distance from the center
                        const distanceX = (e.clientX - centerX) / 20;
                        const distanceY = (e.clientY - centerY) / 20;

                        // Apply a subtle transform based on mouse position
                        mouseFollowElement.style.transform =
                            `perspective(1000px) rotateY(${distanceX}deg) rotateX(${-distanceY}deg)`;
                    }
                });

                // Reset transform when mouse leaves the window
                document.addEventListener('mouseleave', function() {
                    mouseFollowElement.style.transform = 'perspective(1000px) rotateY(0deg) rotateX(0deg)';
                });
            }

            // Counter animation
            const counters = document.querySelectorAll('.counter');
            const speed = 200;

            // Intersection Observer for counters
            const observerOptions = {
                threshold: 0.5
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const counter = entry.target;
                        const target = parseInt(counter.getAttribute('data-target'));
                        let count = 0;
                        const updateCount = () => {
                            const increment = target / speed;
                            if (count < target) {
                                count += increment;
                                counter.innerText = Math.ceil(count);
                                setTimeout(updateCount, 1);
                            } else {
                                counter.innerText = target;
                            }
                        };
                        updateCount();
                        observer.unobserve(counter);
                    }
                });
            }, observerOptions);

            counters.forEach(counter => {
                observer.observe(counter);
            });

            // Add scroll animation to about section elements
            const aboutElements = document.querySelectorAll('.animate-about');
            const aboutObserver = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.animationPlayState = 'running';
                        aboutObserver.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1
            });

            aboutElements.forEach(element => {
                element.style.animationPlayState = 'paused';
                aboutObserver.observe(element);
            });

            // Contact Form Submission
            const contactForm = document.getElementById('contact-form');
            const successMessage = document.getElementById('success-message');
            const sendAnother = document.getElementById('send-another');

            if (contactForm) {
                contactForm.addEventListener('submit', function(e) {
                    e.preventDefault(); // Prevent the default form submission

                    // Get form data
                    const formData = new FormData(contactForm);
                    const formDataObj = {};
                    formData.forEach((value, key) => {
                        formDataObj[key] = value;
                    });

                    // In a real application, you would send this data to a server
                    // using fetch or XMLHttpRequest
                    console.log('Form submitted with data:', formDataObj);

                    // Show success message with animation
                    contactForm.classList.add('opacity-0');
                    contactForm.style.height = contactForm.offsetHeight + 'px';

                    setTimeout(() => {
                        contactForm.classList.add('hidden');
                        successMessage.classList.remove('hidden');

                        // Apply entry animation for success message
                        setTimeout(() => {
                            successMessage.classList.add('scale-105');
                            setTimeout(() => {
                                successMessage.classList.remove('scale-105');
                            }, 200);
                        }, 10);
                    }, 300);
                });

                // Allow sending another message
                if (sendAnother) {
                    sendAnother.addEventListener('click', function() {
                        // Hide success message
                        successMessage.classList.add('opacity-0');

                        setTimeout(() => {
                            successMessage.classList.add('hidden');
                            successMessage.classList.remove('opacity-0');

                            // Show form again
                            contactForm.classList.remove('hidden');
                            setTimeout(() => {
                                contactForm.classList.remove('opacity-0');

                                // Reset form fields
                                contactForm.reset();
                            }, 10);
                        }, 300);
                    });
                }
            }
        });
    </script>
</body>

</html>
