@extends('layouts.app')

@section('title', 'Welcome to MUST Design Studio')

@section('content')
<div x-data="landingPageData()" class="min-h-screen bg-white dark:bg-gray-900 transition-colors duration-300">
    
    {{-- Hero Section --}}
    <x-welcomePage.hero-section 
        title="Innovation"
        subtitle="Transforming ideas into exceptional digital experiences"
        description="At MUST Design Studio, we believe in the power of innovation to solve complex problems and create meaningful impact. Our multidisciplinary approach combines cutting-edge technology with human-centered design."
        primaryButtonText="Explore Innovation"
        primaryButtonAction="scrollToSection('innovation')"
        secondaryButtonText="Get In Touch"
        secondaryButtonAction="scrollToSection('contact')" />

    {{-- Innovation Focus Section --}}
    <x-welcomePage.innovation-focus 
        title="Innovation at Scale"
        description="We're not just creating digital products; we're pioneering the future of human-computer interaction. Our innovation lab combines cutting-edge research with practical application to solve real-world problems."
        :features="[
            [
                'title' => 'Research-Driven Design',
                'description' => 'Every project begins with deep research into user needs, market trends, and technological possibilities.'
            ],
            [
                'title' => 'Emerging Technologies',
                'description' => 'We experiment with AI, AR/VR, and other emerging technologies to create breakthrough experiences.'
            ],
            [
                'title' => 'Sustainable Innovation',
                'description' => 'Our solutions are designed for long-term impact, considering environmental and social sustainability.'
            ]
        ]"
        imageTitle="Innovation Lab"
        imageDescription="Where ideas become reality" />

    {{-- Research Areas Section --}}
    <x-welcomePage.research-areas 
        title="Research Areas"
        description="Our multidisciplinary research spans across cutting-edge domains, pushing the boundaries of what's possible in digital innovation."
        :areas="[
            [
                'title' => 'Artificial Intelligence',
                'description' => 'Exploring the intersection of AI and human creativity to develop intelligent systems that enhance rather than replace human capabilities.',
                'icon' => 'M9.663 17h4.673M12 3v1m6.364-.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z',
                'color' => 'accent-1',
                'linkText' => 'Learn More'
            ],
            [
                'title' => 'Extended Reality',
                'description' => 'Creating immersive experiences that blend physical and digital worlds, from AR interfaces to VR collaboration spaces.',
                'icon' => 'M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z',
                'color' => 'accent-3',
                'linkText' => 'Learn More'
            ],
            [
                'title' => 'Sustainable Design',
                'description' => 'Developing eco-friendly digital solutions that minimize environmental impact while maximizing user value and accessibility.',
                'icon' => 'M13 10V3L4 14h7v7l9-11h-7z',
                'color' => 'accent-1',
                'linkText' => 'Learn More'
            ]
        ]" />

    {{-- Historical Innovations Section --}}
    <x-welcomePage.historical-innovations 
        title="Historical Innovations"
        description="Pioneering breakthroughs that have shaped the future of design and technology, creating lasting impact across industries."
        :innovations="[
            [
                'year' => '2010',
                'title' => 'The first responsive design framework',
                'description' => 'Our team pioneered the first comprehensive responsive design framework that automatically adapted to different screen sizes. This breakthrough revolutionized how websites were built, making them accessible across all devices and establishing the foundation for modern web development practices.',
                'linkText' => 'Explore this landmark moment',
                'imageOrder' => 'first'
            ],
            [
                'year' => '2023',
                'title' => 'The first AI-powered design system',
                'description' => 'We developed the world\'s first artificial intelligence-powered design system that could automatically generate consistent, accessible, and beautiful user interfaces. This breakthrough enabled designers to focus on creativity while AI handled the technical implementation, transforming the entire design industry.',
                'linkText' => 'Learn more about the breakthrough',
                'imageOrder' => 'second'
            ],
            [
                'year' => '2018',
                'title' => 'The first sustainable design methodology',
                'description' => 'We created the world\'s first comprehensive sustainable design methodology that integrated environmental impact assessment into every design decision. This framework has been adopted by over 1,000 companies worldwide, helping them reduce their carbon footprint while maintaining design excellence.',
                'linkText' => 'Learn more about this history',
                'imageOrder' => 'first'
            ]
        ]" />

    {{-- Impact Stories Section --}}
    <x-welcomePage.impact-stories 
        title="Impact Stories"
        description="Real-world applications of our research and innovation, creating meaningful change across industries and communities."
        :stories="[
            [
                'title' => 'Healthcare Accessibility',
                'description' => 'Developed an AI-powered diagnostic tool that increased early disease detection rates by 40% in underserved communities.',
                'icon' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z',
                'color' => 'accent-1',
                'linkText' => 'Read Case Study'
            ],
            [
                'title' => 'Climate Action Platform',
                'description' => 'Created a carbon tracking system that helped 500+ companies reduce their environmental footprint by an average of 30%.',
                'icon' => 'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z',
                'color' => 'accent-1',
                'linkText' => 'Read Case Study'
            ],
            [
                'title' => 'Educational Equity',
                'description' => 'Built an adaptive learning platform that improved student outcomes by 60% in rural schools with limited resources.',
                'icon' => 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253',
                'color' => 'accent-3',
                'linkText' => 'Read Case Study'
            ]
        ]"
        imageTitle="Making Impact"
        imageDescription="Real solutions for real problems" />

    {{-- CTA Section --}}
    <x-welcomePage.cta-section 
        title="Join the Innovation"
        description="Be part of the future we're building. Whether you're a researcher, entrepreneur, or organization looking to make an impact, we'd love to collaborate with you."
        primaryButtonText="Start Collaborating"
        secondaryButtonText="Learn More"
        :stats="[
            [
                'value' => 150,
                'label' => 'Projects Completed'
            ],
            [
                'value' => 50,
                'label' => 'Research Partners'
            ],
            [
                'value' => 5,
                'label' => 'Years Experience'
            ],
            [
                'value' => 24,
                'label' => 'Awards Won'
            ]
        ]" />

</div>

<script>
    function landingPageData() {
        return {
            animateNumber(start, end, duration) {
                return end; // For demo purposes, returning end value directly
            },
            
            scrollToSection(sectionId) {
                const element = document.getElementById(sectionId);
                if (element) {
                    element.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            },
            
            init() {
                // Add intersection observer for animations
                this.setupScrollAnimations();
                this.setupParallaxEffects();
            },
            
            setupScrollAnimations() {
                const observerOptions = {
                    threshold: 0.1,
                    rootMargin: '0px 0px -50px 0px'
                };
                
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('animate-fade-in-up');
                        }
                    });
                }, observerOptions);
                
                // Observe all sections
                document.querySelectorAll('section').forEach(section => {
                    observer.observe(section);
                });
            },
            
            setupParallaxEffects() {
                // Add subtle parallax effect to hero section
                window.addEventListener('scroll', () => {
                    const scrolled = window.pageYOffset;
                    const hero = document.querySelector('section:first-child');
                    if (hero) {
                        hero.style.transform = `translateY(${scrolled * 0.5}px)`;
                    }
                });
            }
        }
    }
</script>

<style>
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .animate-fade-in-up {
        animation: fadeInUp 0.8s ease-out forwards;
    }
    
    /* Smooth scrolling for the entire page */
    html {
        scroll-behavior: smooth;
    }
    
    /* Tech and engineering typography */
    h1, h2, h3, h4, h5, h6 {
        font-family: 'JetBrains Mono', 'Fira Code', 'Consolas', 'Monaco', 'Courier New', monospace;
        font-weight: 600;
        letter-spacing: -0.01em;
    }
    
    /* Custom scrollbar */
    ::-webkit-scrollbar {
        width: 8px;
    }
    
    ::-webkit-scrollbar-track {
        background: #f1f1f1;
    }
    
    ::-webkit-scrollbar-thumb {
        background: #888;
        border-radius: 0;
    }
    
    ::-webkit-scrollbar-thumb:hover {
        background: #555;
    }
    
    /* Dark mode scrollbar */
    .dark ::-webkit-scrollbar-track {
        background: #374151;
    }
    
    .dark ::-webkit-scrollbar-thumb {
        background: #6b7280;
    }
    
    .dark ::-webkit-scrollbar-thumb:hover {
        background: #9ca3af;
    }
    
    /* Harvard-inspired button styles */
    button {
        font-family: 'Arial', sans-serif;
        font-weight: 600;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        font-size: 0.875rem;
    }
    
    /* Subtle hover effects */
    .group:hover .group-hover\:scale-110 {
        transform: scale(1.1);
    }
    
    .group:hover .group-hover\:translate-x-1 {
        transform: translateX(0.25rem);
    }
    
    /* Enhanced focus states */
    button:focus {
        outline: 2px solid #3b82f6;
        outline-offset: 2px;
    }
    
    /* Improved spacing and layout */
    section {
        position: relative;
    }
    
    /* Harvard-style grid patterns */
    .grid-pattern {
        background-image: 
            linear-gradient(rgba(0,0,0,0.1) 1px, transparent 1px),
            linear-gradient(90deg, rgba(0,0,0,0.1) 1px, transparent 1px);
        background-size: 20px 20px;
    }
</style>
@endsection