<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bryan's Portfolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&family=Poppins:wght@600&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="Pictures/icon.png">

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background: url('https://img.freepik.com/premium-vector/red-cyber-circuit-future-technology-concept-background_42077-3872.jpg') no-repeat center center fixed;
            background-size: cover;
            color: white;
            min-height: 100vh;
            overflow: hidden;
        }

        #particles-js {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: -1;
            background-color: rgba(0, 0, 0, 0.5);
        }

        h1 {
            font-family: 'Poppins', sans-serif;
            font-size: 3em;
            color: #ac2d07;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }

        .scroll-fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 1s ease, transform 1s ease;
        }

        .scroll-fade-in.show {
            opacity: 1;
            transform: translateY(0);
        }

        .profile-container {
            text-align: center;
            margin-top: 100px;
        }

        .profile-img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            animation: fadeIn 2s ease;
        }

        .name {
            font-size: 2em;
            margin-top: 20px;
            color: #ac2d07;
            animation: fadeIn 3s ease;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        
    </style>
</head>

<body>

    <div id="particles-js"></div>
    <div class="overlay"></div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark w-100">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">BRY4N-CODER</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#projectsModal">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#contactModal">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="profile-container">
        <img src="Pictures/Profile.jpg" alt="Bryan's Profile" class="profile-img">
        <div class="name">Jamiel Bryan T. Reaño</div>
    </section>

    <section id="aboutSection" class="introduction text-center mt-5 scroll-fade-in">
        <h1>Hello <span id="typing-text"></span>!</h1>
        <div class="about-text-container">
            <p class="about-text">Welcome to my portfolio! I am Jamiel Bryan T. Reaño, a passionate web developer
                currently studying at the Polytechnic University of the Philippines. I specialize in creating
                innovative, user-friendly websites and applications that solve real-world problems.</p>
            <p class="about-text">I have a keen interest in technology and coding, and I'm always learning new
                frameworks and tools to keep on top of the field. I work to create dynamic, useful websites that provide
                a smooth experience for visitors.</p>
            <p class="about-text">If you want to know more about my journey and projects, feel free to check out the
                projects section!</p>
        </div>
    </section>

    <style>
        .about-text-container {
            background: linear-gradient(135deg, rgba(255, 0, 0, 0.2), rgba(0, 0, 0, 0.5));
            padding: 30px;
            border-radius: 8px;
            max-width: 800px;
            margin: 20px auto;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .about-text {
            font-size: 1.1em;
            line-height: 1.6;
            color: #fff;
            font-family: 'Roboto', sans-serif;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
        }

        .about-text:nth-child(1) {
            color: #f3a847;
        }

        .about-text:nth-child(2) {
            color: #f3a847;
        }

        .about-text:nth-child(3) {
            color: #f3a847;
        }

        .scroll-fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 1s ease, transform 1s ease;
        }

        .scroll-fade-in.show {
            opacity: 1;
            transform: translateY(0);
        }

        nav {
            background-color: #ac2d07; /* Reddish color */
        }
        .about-text::before {
            content: "🌱";
            margin-right: 10px;
            font-size: 1.5em;
        }
    </style>

    <div class="modal fade" id="projectsModal" tabindex="-1" aria-labelledby="projectsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-dark">
                <div class="modal-header" style="background-color: #343a40; color: white;">
                    <h5 class="modal-title" id="projectsModalLabel">My Projects</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="background: linear-gradient(135deg, #1c1c1c, #343a40); color: white;">
                    <div class="projects text-center">
                        <p style="font-size: 1.2em; margin-bottom: 20px;">Explore my projects below:</p>
                        <div class="project-links d-flex flex-wrap justify-content-center gap-3">
                            <a href="A08/index.php" class="project-btn">Project 1</a>
                            <a href="#" class="project-btn">Project 2</a>
                            <a href="#" class="project-btn">Project 3</a>
                            <a href="#" class="project-btn">Project 4</a>
                            <a href="#" class="project-btn">Project 5</a>
                            <a href="#" class="project-btn">Project 6</a>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="background-color: #343a40;">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <style>
        .project-btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 5px;
            text-decoration: none;
            font-size: 1.1em;
            color: #ffffff;
            background: linear-gradient(135deg, #f39c12, #e74c3c);
            border-radius: 5px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .project-btn:hover {
            background: linear-gradient(135deg, #e74c3c, #f39c12);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
            transform: translateY(-2px);
        }

        .modal-body p {
            font-family: 'Poppins', sans-serif;
            color: #f3f3f3;
        }
    </style>


    <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-dark">
                <div class="modal-header">
                    <h5 class="modal-title" id="contactModalLabel">Contact</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img src="Pictures/Reaño_calling card.jpg" alt="Bryan's Calling Card" class="img-fluid">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>

        particlesJS("particles-js", {
            particles: {
                number: {
                    value: 100,
                    density: {
                        enable: true,
                        value_area: 800
                    }
                },
                color: {
                    value: "#ffffff"
                },
                shape: {
                    type: "circle",
                    stroke: {
                        width: 0,
                        color: "#000000"
                    }
                },
                opacity: {
                    value: 0.5,
                    random: true,
                    anim: {
                        enable: true,
                        speed: 1,
                        opacity_min: 0.1,
                        sync: false
                    }
                },
                size: {
                    value: 5,
                    random: true,
                    anim: {
                        enable: false,
                        speed: 40,
                        size_min: 0.1,
                        sync: false
                    }
                },
                line_linked: {
                    enable: true,
                    distance: 150,
                    color: "#ffffff",
                    opacity: 0.4,
                    width: 1
                },
                move: {
                    enable: true,
                    speed: 6,
                    direction: "none",
                    random: false,
                    straight: false,
                    out_mode: "out",
                    attract: {
                        enable: false,
                        rotateX: 600,
                        rotateY: 1200
                    }
                }
            },
            interactivity: {
                detect_on: "canvas",
                events: {
                    onhover: {
                        enable: true,
                        mode: "repulse"
                    },
                    onclick: {
                        enable: true,
                        mode: "push"
                    }
                }
            }
        });

        const fadeInElements = document.querySelectorAll('.scroll-fade-in');

        window.addEventListener('scroll', function () {
            fadeInElements.forEach(function (element) {
                if (element.getBoundingClientRect().top < window.innerHeight) {
                    element.classList.add('show');
                }
            });
        });

        window.onload = function () {
            document.getElementById("aboutSection").classList.add('show');
            setTimeout(typeText, 500);
        };

        let typedText1 = "Studying in PUPSTC";
        let typedText2 = "Web Developer";
        let index = 0;
        let currentText = typedText1;

        function typeText() {
            let text = currentText;
            if (index < text.length) {
                document.getElementById("typing-text").innerHTML += text.charAt(index);
                index++;
                setTimeout(typeText, 100);
            } else {
                setTimeout(function () {
                    currentText = typedText2;
                    index = 0;
                    document.getElementById("typing-text").innerHTML = "I'm ";
                    setTimeout(typeText, 100);
                }, 1500);
            }
        }
    </script>
</body>

</html>