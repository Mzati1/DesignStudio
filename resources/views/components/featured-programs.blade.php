<div class="bg-white border border-[hsl(var(--color-border))] rounded-xl overflow-hidden h-[500px]">
    <div class="flex items-center justify-between border-b border-[hsl(var(--color-border))] px-6 py-4">
        <h2 class="text-base font-semibold text-[hsl(var(--color-text-primary))]">Featured Programs</h2>
        <div class="inline-flex items-center rounded-md bg-[hsl(var(--color-border))] p-1">
            <button type="button" data-section="workshops" class="js-toggle inline-flex items-center rounded px-3 py-1.5 text-xs font-medium transition-all duration-200 bg-white text-[hsl(var(--color-text-primary))] shadow">Workshops</button>
            <button type="button" data-section="robotics" class="js-toggle ml-1 inline-flex items-center rounded px-3 py-1.5 text-xs font-medium text-[hsl(var(--color-text-muted))] transition-all duration-200">Robotics</button>
        </div>
    </div>
    <div class="relative h-[calc(100%-64px)] overflow-hidden">
        <div id="workshops-section" class="h-full">
            <div class="js-workshop-slide absolute inset-0 opacity-100 transition-opacity duration-500 flex">
                <div class="w-1/2 bg-gradient-to-br from-[#667eea] to-[#764ba2]"></div>
                <div class="w-1/2 p-8 flex flex-col justify-center">
                    <span class="self-start mb-3 inline-block rounded-full bg-[hsl(var(--color-accent-1))] px-3 py-1 text-[10px] font-medium text-white">Next Workshop</span>
                    <h3 class="mb-3 text-2xl font-bold leading-tight text-[hsl(var(--color-text-primary))]">Advanced Prototyping Techniques</h3>
                    <p class="mb-4 text-sm leading-6 text-[hsl(var(--color-text-secondary))]">Master rapid prototyping with industry tools and modern methods.</p>
                    <ul class="mb-4 list-none">
                        <li class="mb-1 flex items-center text-xs text-[hsl(var(--color-text-muted))]"><span class="mr-2 text-[hsl(var(--color-accent-1))] font-bold">✓</span>3D Modeling & CAD</li>
                        <li class="mb-1 flex items-center text-xs text-[hsl(var(--color-text-muted))]"><span class="mr-2 text-[hsl(var(--color-accent-1))] font-bold">✓</span>Laser Cutting & CNC</li>
                        <li class="mb-1 flex items-center text-xs text-[hsl(var(--color-text-muted))]"><span class="mr-2 text-[hsl(var(--color-accent-1))] font-bold">✓</span>Electronics Integration</li>
                    </ul>
                    <div class="flex gap-3">
                        <button class="rounded bg-[hsl(var(--color-accent-1))] px-4 py-2 text-xs font-medium text-white transition-colors duration-200 hover:bg-[hsl(var(--color-accent-3))]">Register Now</button>
                        <button class="rounded border border-[hsl(var(--color-accent-1))] px-4 py-2 text-xs font-medium text-[hsl(var(--color-accent-1))] transition-colors duration-200 hover:bg-[hsl(var(--color-accent-1))] hover:text-white">Learn More</button>
                    </div>
                </div>
            </div>
            <div class="js-workshop-slide absolute inset-0 opacity-0 transition-opacity duration-500 flex">
                <div class="w-1/2 bg-gradient-to-br from-[#f093fb] to-[#f5576c]"></div>
                <div class="w-1/2 p-8 flex flex-col justify-center">
                    <span class="self-start mb-3 inline-block rounded-full bg-[hsl(var(--color-accent-1))] px-3 py-1 text-[10px] font-medium text-white">Popular</span>
                    <h3 class="mb-3 text-2xl font-bold leading-tight text-[hsl(var(--color-text-primary))]">UI/UX Design Masterclass</h3>
                    <p class="mb-4 text-sm leading-6 text-[hsl(var(--color-text-secondary))]">Create intuitive interfaces and engaging user experiences.</p>
                    <ul class="mb-4 list-none">
                        <li class="mb-1 flex items-center text-xs text-[hsl(var(--color-text-muted))]"><span class="mr-2 text-[hsl(var(--color-accent-1))] font-bold">✓</span>Design Thinking</li>
                        <li class="mb-1 flex items-center text-xs text-[hsl(var(--color-text-muted))]"><span class="mr-2 text-[hsl(var(--color-accent-1))] font-bold">✓</span>Prototyping</li>
                        <li class="mb-1 flex items-center text-xs text-[hsl(var(--color-text-muted))]"><span class="mr-2 text-[hsl(var(--color-accent-1))] font-bold">✓</span>User Research</li>
                    </ul>
                    <div class="flex gap-3">
                        <button class="rounded bg-[hsl(var(--color-accent-1))] px-4 py-2 text-xs font-medium text-white transition-colors duration-200 hover:bg-[hsl(var(--color-accent-3))]">Join Waitlist</button>
                        <button class="rounded border border-[hsl(var(--color-accent-1))] px-4 py-2 text-xs font-medium text-[hsl(var(--color-accent-1))] transition-colors duration-200 hover:bg-[hsl(var(--color-accent-1))] hover:text-white">View Curriculum</button>
                    </div>
                </div>
            </div>
            <div class="absolute bottom-3 left-1/2 -translate-x-1/2 transform">
                <div class="flex items-center gap-2">
                    <button type="button" class="js-workshop-dot h-3 w-3 rounded-full bg-[hsl(var(--color-border))]"></button>
                    <button type="button" class="js-workshop-dot h-3 w-3 rounded-full bg-[hsl(var(--color-border))]"></button>
                </div>
            </div>
        </div>
        <div id="robotics-section" class="hidden h-full">
            <div class="js-robotics-slide absolute inset-0 opacity-100 transition-opacity duration-500 flex">
                <div class="w-1/2 bg-gradient-to-br from-[#fa709a] to-[#fee140]"></div>
                <div class="w-1/2 p-8 flex flex-col justify-center">
                    <span class="self-start mb-3 inline-block rounded-full bg-[hsl(var(--color-accent-1))] px-3 py-1 text-[10px] font-medium text-white">Current Project</span>
                    <h3 class="mb-3 text-2xl font-bold leading-tight text-[hsl(var(--color-text-primary))]">Line Following Robot Challenge</h3>
                    <p class="mb-4 text-sm leading-6 text-[hsl(var(--color-text-secondary))]">Team of 24 building an autonomous line follower.</p>
                    <div class="flex gap-3">
                        <button class="rounded bg-[hsl(var(--color-accent-1))] px-4 py-2 text-xs font-medium text-white transition-colors duration-200 hover:bg-[hsl(var(--color-accent-3))]">Join Team</button>
                        <button class="rounded border border-[hsl(var(--color-accent-1))] px-4 py-2 text-xs font-medium text-[hsl(var(--color-accent-1))] transition-colors duration-200 hover:bg-[hsl(var(--color-accent-1))] hover:text-white">View Progress</button>
                    </div>
                </div>
            </div>
            <div class="js-robotics-slide absolute inset-0 opacity-0 transition-opacity duration-500 flex">
                <div class="w-1/2 bg-gradient-to-br from-[#a8edea] to-[#fed6e3]"></div>
                <div class="w-1/2 p-8 flex flex-col justify-center">
                    <span class="self-start mb-3 inline-block rounded-full bg-[hsl(var(--color-accent-1))] px-3 py-1 text-[10px] font-medium text-white">Upcoming</span>
                    <h3 class="mb-3 text-2xl font-bold leading-tight text-[hsl(var(--color-text-primary))]">Regional Competition</h3>
                    <p class="mb-4 text-sm leading-6 text-[hsl(var(--color-text-secondary))]">Preparing innovative solutions for the annual championship.</p>
                    <ul class="mb-4 list-none">
                        <li class="mb-1 flex items-center text-xs text-[hsl(var(--color-text-muted))]"><span class="mr-2 text-[hsl(var(--color-accent-1))] font-bold">✓</span>Strategy Sessions</li>
                        <li class="mb-1 flex items-center text-xs text-[hsl(var(--color-text-muted))]"><span class="mr-2 text-[hsl(var(--color-accent-1))] font-bold">✓</span>Public Demos</li>
                    </ul>
                    <div class="flex gap-3">
                        <button class="rounded bg-[hsl(var(--color-accent-1))] px-4 py-2 text-xs font-medium text-white transition-colors duration-200 hover:bg-[hsl(var(--color-accent-3))]">Support Team</button>
                        <button class="rounded border border-[hsl(var(--color-accent-1))] px-4 py-2 text-xs font-medium text-[hsl(var(--color-accent-1))] transition-colors duration-200 hover:bg-[hsl(var(--color-accent-1))] hover:text-white">Competition Info</button>
                    </div>
                </div>
            </div>
            <div class="absolute bottom-3 left-1/2 -translate-x-1/2 transform">
                <div class="flex items-center gap-2">
                    <button type="button" class="js-robotics-dot h-3 w-3 rounded-full bg-[hsl(var(--color-border))]"></button>
                    <button type="button" class="js-robotics-dot h-3 w-3 rounded-full bg-[hsl(var(--color-border))]"></button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    (() => {
        let activeSection = 'workshops';
        let currentWorkshop = 0;
        let currentRobotics = 0;
        const toggleButtons = document.querySelectorAll('.js-toggle');
        const workshopsSection = document.getElementById('workshops-section');
        const roboticsSection = document.getElementById('robotics-section');
        const workshopSlides = Array.from(document.querySelectorAll('.js-workshop-slide'));
        const workshopDots = Array.from(document.querySelectorAll('.js-workshop-dot'));
        const roboticsSlides = Array.from(document.querySelectorAll('.js-robotics-slide'));
        const roboticsDots = Array.from(document.querySelectorAll('.js-robotics-dot'));
        function setActive(section) {
            toggleButtons.forEach(b => {
                const isActive = b.getAttribute('data-section') === section;
                b.classList.toggle('bg-white', isActive);
                b.classList.toggle('shadow', isActive);
                b.classList.toggle('text-[hsl(var(--color-text-primary))]', isActive);
                b.classList.toggle('text-[hsl(var(--color-text-muted))]', !isActive);
            });
        }
        function showWorkshopSlide(index) {
            if (index < 0) index = workshopSlides.length - 1;
            if (index >= workshopSlides.length) index = 0;
            workshopSlides.forEach((el, i) => {
                el.classList.toggle('opacity-100', i === index);
                el.classList.toggle('opacity-0', i !== index);
            });
            workshopDots.forEach((d, i) => {
                d.style.background = i === index ? 'hsl(var(--color-accent-1))' : 'hsl(var(--color-border))';
            });
            currentWorkshop = index;
        }
        function showRoboticsSlide(index) {
            if (index < 0) index = roboticsSlides.length - 1;
            if (index >= roboticsSlides.length) index = 0;
            roboticsSlides.forEach((el, i) => {
                el.classList.toggle('opacity-100', i === index);
                el.classList.toggle('opacity-0', i !== index);
            });
            roboticsDots.forEach((d, i) => {
                d.style.background = i === index ? 'hsl(var(--color-accent-1))' : 'hsl(var(--color-border))';
            });
            currentRobotics = index;
        }
        toggleButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                const section = btn.getAttribute('data-section');
                activeSection = section;
                setActive(section);
                if (section === 'workshops') {
                    roboticsSection.classList.add('hidden');
                    workshopsSection.classList.remove('hidden');
                    showWorkshopSlide(currentWorkshop);
                } else {
                    workshopsSection.classList.add('hidden');
                    roboticsSection.classList.remove('hidden');
                    showRoboticsSlide(currentRobotics);
                }
            });
        });
        workshopDots.forEach((dot, i) => dot.addEventListener('click', () => showWorkshopSlide(i)));
        roboticsDots.forEach((dot, i) => dot.addEventListener('click', () => showRoboticsSlide(i)));
        function autoSlide() {
            if (activeSection === 'workshops') {
                showWorkshopSlide(currentWorkshop + 1);
            } else {
                showRoboticsSlide(currentRobotics + 1);
            }
        }
        showWorkshopSlide(0);
        setActive('workshops');
        setInterval(autoSlide, 8000);
    })();
</script>
