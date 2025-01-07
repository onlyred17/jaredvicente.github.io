<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>
    <div class="background-animation"></div>
    <!-- Header Section -->
    <header>
    <div class="logo-container">
        <div class="logo">Jared Vicente</div>
    </div>
    <nav>
        <ul class="nav-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>
</header>


<!-- Hero Section -->
<section id="home" class="hero fade-in">
    <div class="hero-content">
        <img src="./assets/my_profile.jpg" alt="Jared Vicente" class="hero-image">
        <div class="hero-text">
            <h1>Hello, I'm <span>Jared Vicente</span></h1>
            <p>Backend Developer specializing in PHP and web systems.</p>
            <a href="#about" class="btn-primary">Know About Me</a>
            <div class="social-icons">
                <a href="https://www.facebook.com/jaredson.vicente" target="_blank" class="social-icon">
                    <i class="fab fa-facebook"></i>
                </a>
                <a href="https://www.instagram.com/jawerd_/" target="_blank" class="social-icon">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://github.com/yourgithubusername" target="_blank" class="social-icon">
                    <i class="fab fa-github"></i>
                </a>
            </div>
        </div>
    </div>
</section>



   <!-- About Section -->
<section id="about" class="about hidden">
    <h2>About Me</h2>
    <div class="about-content">
        <div class="about-image">
            <img src="./assets/my_profile.jpg" alt="Jared Vicente">
        </div>
        <div class="about-text">
        <p><strong>I'm Jared Vicente,</strong> a passionate backend developer specializing in PHP, MySQL, and Laravel. I believe in creating efficient, scalable web systems that meet the needs of users. I'm also a gamer, a leader, and an advocate for problem-solving and innovation in every project I undertake.</p>
        <p>I'm currently a 4th-year student pursuing a Bachelor's degree in IT, and I am dedicated to honing my skills and applying my knowledge to real-world challenges.</p>            
        </div>
    </div>
    <div class="icon-container">
    <div class="icon-item">
        <i class="fas fa-gamepad"></i> <!-- Gamer icon -->
        <p>Gamer</p> <!-- Text below the icon -->
    </div>
    <div class="icon-item">
        <i class="fas fa-users"></i> <!-- Leadership icon -->
        <p>Leader</p> <!-- Text below the icon -->
    </div>
    <div class="icon-item">
        <i class="fas fa-lightbulb"></i> <!-- Innovation icon -->
        <p>Innovator</p> <!-- Text below the icon -->
    </div>
</div>


</section>



<!-- Projects Section -->
<section id="projects" class="projects hidden">
    <h2>My Projects</h2>

    <!-- Category Section -->
    <div class="categories">
        <span class="arrow-icon left-arrow" id="left-arrow">
            <i class="fas fa-chevron-left"></i> <!-- Left arrow icon -->
        </span>
        <span class="category-label active" id="web-category">Web</span>
        
        <span class="arrow-icon right-arrow" id="right-arrow">
            <i class="fas fa-chevron-right"></i> <!-- Right arrow icon -->
        </span>
    
    </div>

    <!-- Project Cards Container -->
    <div class="project-cards-container">
        <!-- Web Project Card 1 -->
        <div class="project-card web-project">
            <div class="project-video">
                <video controls>
                    <source src="./assets/project_demo1.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="project-info">
                <h3>Management System using PHP, MySQL, HTML, CSS, JavaScript</h3>
                <p>This project includes user authentication with login and signup, CRUD operations, and report generation functionalities.</p>
                <a href="https://github.com/onlyred17/Management-System" target="_blank" class="btn-primary">View Project</a>
            </div>
        </div>
       
</div>

        <!-- Additional Project Cards (for Web, Python, or other categories) can be added here -->
    </div>

    <!-- Navigation Buttons -->
    <div class="project-navigation">
        <button id="prev-btn" class="btn-secondary">
            <i class="fas fa-chevron-left"></i> <!-- Previous Arrow -->
        </button>
        <button id="next-btn" class="btn-secondary">
            <i class="fas fa-chevron-right"></i> <!-- Next Arrow -->
        </button>
    </div>
</section>


       
    </div>
</section>


    <!-- Skills Section -->
    <section id="skills" class="skills hidden">
        <h2>Technical Skills</h2>
        <ul>
            <li>Problem Solving</li>
            <li>Leadership</li>
            <li>Critical Thinking</li>
        </ul>
        <h3>Tech Stack</h3>
        <div class="tech-icons">
            <img src="./assets/mysql-logo.png" alt="MySQL">
            <img src="./assets/php-logo.png" alt="PHP">
            <img src="./assets/html-logo.png" alt="HTML">
            <img src="./assets/css-logo.png" alt="CSS">
            <img src="./assets/javascript-logo.png" alt="JavaScript">
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact hidden">
        <h2>Contact Me</h2>
        <p>Email: <a href="mailto:youremail@example.com">youremail@example.com</a></p>
        <p>Connect on <a href="#">LinkedIn</a> | <a href="#">GitHub</a></p>
    </section>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Jared Vicente. All rights reserved.</p>
    </footer>

    <script>
        // Smooth Scroll on Navigation Click
document.querySelectorAll('nav a').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const targetId = this.getAttribute('href').substring(1);
        const targetSection = document.getElementById(targetId);

        targetSection.scrollIntoView({
            behavior: 'smooth',
            block: 'start',
        });

        const allSections = document.querySelectorAll('section');
        allSections.forEach(section => section.classList.remove('visible'));
        targetSection.classList.add('visible');
    });
});

// Check if Element is in Viewport
function isInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

// Handle Scroll Animations
function handleScroll() {
    const sections = document.querySelectorAll('.about, .projects, .skills, .contact');
    sections.forEach(section => {
        if (isInViewport(section)) {
            section.classList.add('fade-in');
            section.classList.remove('hidden');
        } else {
            section.classList.remove('fade-in');
            section.classList.add('hidden');
        }
    });
}

window.addEventListener('scroll', handleScroll);
document.addEventListener('DOMContentLoaded', handleScroll);

// Category Navigation Logic
const leftArrow = document.getElementById('left-arrow');
const rightArrow = document.getElementById('right-arrow');
const categoryLabels = document.querySelectorAll('.category-label');
const projectCards = document.querySelectorAll('.project-card');
const prevBtn = document.getElementById('prev-btn');
const nextBtn = document.getElementById('next-btn');

// Define Projects by Category
const allProjects = {
    "web": document.querySelectorAll('.web-project'),
    "csharp": document.querySelectorAll('.csharp-project'),
    "python": document.querySelectorAll('.python-project')
};

let currentCategoryIndex = 0; // Track current category
let currentProjectIndex = 0; // Track current project in category

// Update Active Category and Display Projects
function updateActiveCategory(index) {
    currentCategoryIndex = index;
    currentProjectIndex = 0;

    // Update active class for categories
    categoryLabels.forEach((label, i) => {
        label.classList.toggle('active', i === index);
    });

    // Hide all projects and show only the selected category's projects
    Object.keys(allProjects).forEach((category, i) => {
        allProjects[category].forEach(project => {
            project.style.display = (i === index) ? 'block' : 'none';
        });
    });

    showProject(currentProjectIndex);
}

// Show Selected Project in the Current Category
function showProject(index) {
    const currentCategory = Object.keys(allProjects)[currentCategoryIndex];
    const projects = allProjects[currentCategory];

    projects.forEach((project, i) => {
        project.style.display = i === index ? 'block' : 'none';
    });
}

// Left Arrow Navigation for Categories
leftArrow.addEventListener('click', () => {
    currentCategoryIndex = (currentCategoryIndex > 0) ? currentCategoryIndex - 1 : categoryLabels.length - 1;
    updateActiveCategory(currentCategoryIndex);
});

// Right Arrow Navigation for Categories
rightArrow.addEventListener('click', () => {
    currentCategoryIndex = (currentCategoryIndex < categoryLabels.length - 1) ? currentCategoryIndex + 1 : 0;
    updateActiveCategory(currentCategoryIndex);
});

// Project Navigation (Previous/Next Buttons)
prevBtn.addEventListener('click', () => {
    const currentCategory = Object.keys(allProjects)[currentCategoryIndex];
    const projects = allProjects[currentCategory];

    currentProjectIndex = (currentProjectIndex > 0) ? currentProjectIndex - 1 : projects.length - 1;
    showProject(currentProjectIndex);
});

nextBtn.addEventListener('click', () => {
    const currentCategory = Object.keys(allProjects)[currentCategoryIndex];
    const projects = allProjects[currentCategory];

    currentProjectIndex = (currentProjectIndex < projects.length - 1) ? currentProjectIndex + 1 : 0;
    showProject(currentProjectIndex);
});

// Initialize Default Category and Project on Page Load
document.addEventListener('DOMContentLoaded', () => {
    updateActiveCategory(currentCategoryIndex);
    showProject(currentProjectIndex);

    const firstSection = document.querySelector('section');
    if (firstSection) {
        firstSection.classList.add('visible');
    }
});

    </script>
</body>
</html>
