<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="A Web Front End Developer based in Mexico."
    />

    <meta
      name="keywords"
      content="A Web Front End Developer based in Mexico."
    />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="shortcut icon" type="image/png" href="./favicon.ico" />
    <link rel="stylesheet" href="./style.css" />
    <title>
      Michael | A Front-End Developer based in Mexico.
    </title>
  </head>

  <body>
    <!-- ***** Header ***** -->

    <header class="header" role="banner" id="top">
      <div class="row">
        <nav class="nav" role="navigation">
          <ul class="nav__items">
            <li class="nav__item">
              <a href="#about" class="nav__link">About</a>
            </li>
            <li class="nav__item">
              <a href="#work" class="nav__link">Work</a>
            </li>
            <li class="nav__item">
              <a href="#contact" class="nav__link">Contact</a>
            </li>
          </ul>
        </nav>
      </div>
      <div class="header__text-box row">
        <div class="header__text">
          <h1 class="heading-primary">Michael</h1>
          <p>A Front-End Developer based in Mexico.</p>
          <a href="#contact" class="btn btn--pink">Contact Me</a>
        </div>
      </div>
    </header>

    <main role="main">
      <!-- ***** About ***** -->

      <section class="about" id="about">
        <div class="row">
          <h2>About Me</h2>
          <div class="about__content">
            <div class="about__text">
              <p>
                I am a Software Engineer based in Mexico. I am
                proficient in Front-End development. I have extensive knowledge
                in HTML, CSS, Javascript, React, TypeScript, Web3.js Node.Js, MongoDB, and Express. As a
                software engineer, I help businesses create an online presence
                through fully responsive websites, email marketing, social
                media marketing and search optimization.
              </p>
              <a href="./Michael-resume.pdf" target="_blank" class="btn"
                >My Resume</a
              >
            </div>

            <div class="about__photo-container">
              <img class="about__photo" src="./images/michael.jpg" alt="" />
            </div>
          </div>
        </div>
      </section>

      <!-- ***** Work ***** -->

      <section class="work" id="work">
        <div class="row">
          <h2>My Work</h2>
          <div class="work__boxes">
            <div class="work__box">
              <div class="work__text">
                <h3>Loruki Hosting Website</h3>
                <p>
                  A Cloud Hosting platform website built with HTML, CSS, CSS
                  Grid and Flex Box
                </p>
                <ul class="work__list">
                  <li>HTML5, CSS3</li>
                  <li>Responsive</li>
                  <li>Animations</li>
                </ul>

                <div class="work__links">
                  <a
                    href="https://github.com/consumer-tasks/responsive-website"
                    target="_blank"
                    class="link__text"
                  >
                    Visit Site <span>&rarr;</span>
                  </a>
                  <a href="https://github.com/consumer-tasks/responsive-website" title="View Source Code" class="social-github-link">
                    <i class="fab fa-github-alt fa-2x"></i>
                  </a>
                </div>
              </div>
              <div class="work__image-box">
                <img
                  src="./images/Loruki-Website.png"
                  class="work__image"
                  alt="Loruki Website pic"
                />
              </div>
            </div>

            <div class="work__box">
              <div class="work__text">
                <h3>MovieBuster App</h3>
                <p>Browse movies and see details about it.</p>
                <ul class="work__list">
                  <li>HTML5, CSS3</li>
                  <li>JavaScript</li>
                  <li>API</li>
                </ul>

                <div class="work__links">
                  <a
                    href="https://moviebuster.netlify.app/"
                    target="_blank"
                    class="link__text"
                  >
                    Visit Site <span>&rarr;</span>
                  </a>
                  <a href="https://github.com/consumer-tasks/MovieBuster" title="View Source Code" class="social-github-link">
                    <i class="fab fa-github-alt fa-2x"></i>
                  </a>
                </div>
              </div>
              <div class="work__image-box">
                <img
                  src="./images/moviebuster.jpg"
                  class="work__image"
                  alt="Project 1"
                />
              </div>
            </div>

            <div class="work__box">
              <div class="work__text">
                <h3>TMDb Movie Search</h3>
                <p>
                  TMDb Movie Search is a responsive React app 
                  that utilises Twitter's typeahead.js and Bloodhound suggestion engine, 
                  loading data via The Movie Database (TMDb) API
                </p>
                <ul class="work__list">
                  <li>React</li>
                  <li>Typeahead</li>
                  <li>BootStrap</li>
                  <li>Broserify</li>
                  <li>Gulp</li>
                </ul>

                <div class="work__links">
                  <!-- <a
                    href="https://thebarncoffeeshop.com/"
                    target="_blank"
                    class="link__text"
                  > -->
                    Visit Site <span>&rarr;</span>
                  </a>
                  <a href="https://github.com/consumer-tasks/reactjs-tmdb-app/" title="View Source Code" class="social-github-link">
                    <i class="fab fa-github-alt fa-2x"></i>
                  </a>
                </div>
              </div>
              <div class="work__image-box">
                <img
                  src="./images/facebook_graph.jpg"
                  class="work__image"
                  alt="Project 1"
                />
              </div>
            </div>

            <div class="work__box">
              <div class="work__text">
                <h3>Netflix Clone</h3>
                <p>
                  A Netflix Clone built as part of the complete frontend learning part on Scrimba
                </p>
                <ul class="work__list">
                  <li>React</li>
                  <li>Hook</li>
                  <li>FlexBox & Grid</li>
                  <li>Responsive</li>
                </ul>

                <div class="work__links">
                  <a
                    href=" https://scrimba.com/"
                    target="_blank"
                    class="link__text"
                  >
                    Visit Site <span>&rarr;</span>
                  </a>
                  <a href="https://github.com/consumer-tasks/netflix-clone-main" title="View Source Code" class="social-github-link">
                    <i class="fab fa-github-alt fa-2x"></i>
                  </a>
                </div>
              </div>
              <div class="work__image-box">
                <img
                  src="./images/hair-salon.png"
                  class="work__image"
                  alt="Hair Salon Screenshot"
                />
              </div>
            </div>

            <div class="work__box">
              <div class="work__text">
                <h3>Mighty Plants</h3>
                <p>
                  A 🍽 website design made with Vue, BootStrap and a bit of
                  JavaScript with JQuery.
                </p>
                <ul class="work__list">
                  <li>Vue</li>
                  <li>AWS</li>
                  <li>JavaScript</li>
                  <li>Docker</li>
                </ul>

                <div class="work__links">
                  <a
                    href="https://kiuki.com"
                    target="_blank"
                    class="link__text"
                  >
                    Visit Site <span>&rarr;</span>
                  </a>
                  <a href="https://github.com/consumer-tasks/kiuki" title="View Source Code" class="social-github-link">
                    <i class="fab fa-github-alt fa-2x"></i>
                  </a>
                </div>
              </div>
              <div class="work__image-box">
                <img
                  src="./images/image2.png"
                  class="work__image"
                  alt="Project 1"
                />
              </div>
            </div>

            <div class="work__box">
              <div class="work__text">
                <h3>React GraphQL App</h3>
                <p>
                  This is a social media app that uses React as Front end and GraphQL as Backend and MongoDB as database
                </p>
                <ul class="work__list">
                  <li>React</li>
                  <li>GraphQL</li>
                  <li>Responsive</li>
                  <li>MongoDB</li>
                </ul>

                <div class="work__links">
                  <a
                    href="https://github.com/consumer-tasks/React-GraphQL-App/"
                    target="_blank"
                    class="link__text"
                  >
                    Visit Site <span>&rarr;</span>
                  </a>
                  <a href="https://github.com/consumer-tasks/React-GraphQL-App" title="View Source Code" class="social-github-link">
                    <i class="fab fa-github-alt fa-2x"></i>
                  </a>
                </div>
              </div>
              <div class="work__image-box">
                <img
                  src="./images/Homeg.png"
                  class="work__image"
                  alt="Cuisine Restaurant Screenshot"
                />
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <div class="contact-container" id="contact">

      <div class="row">
        <h2>Contact Me</h2>
        <div class="contact__info">
          <p>
            Are you looking for a fast-performing and user-friendly website to
            represent your product or business? In need of a consultation? Do you have feedback or just want to say Hi👋 ? Please
            feel free to contact me.
          </p>
        </div>
      </div>

    <form method="POST"
        data-netlify="true"
        name="contact"
        id="contactForm"
        onsubmit="return confirm('Thanks for contacting me!');">

      <div class="row input-container">
          <div class="col-xs-12">
            <div class="styled-input wide">
              <input name="name" type="text" id="contactName" required />
              <label>Name</label>
            </div>
          </div>
          <div class="col-md-6 col-sm-12">
            <div class="styled-input">
              <input name="email" type="email" id="contactEmail" required />
              <label>Email</label>
            </div>
          </div>
          <div class="col-md-6 col-sm-12">
            <div class="styled-input" style="float:right;">
              <input name="phone" type="tel" id="phoneNumber" required />
              <label>Phone Number</label>
            </div>
          </div>
          <div class="col-xs-12">
            <div class="styled-input wide">
              <textarea name="message" id="contactMessage" required></textarea>
              <label>Message</label>
            </div>
          </div>
          <div class="col-xs-12">
            <button type="submit" class="btn-lrg submit-btn submitform">Submit</button>
          </div>
      </div>
    </form>
    </div>

    <!-- ***** Footer ***** -->

    <footer role="contentinfo" class="footer">
      <div class="row">
        <ul class="footer__social-links">
          <li class="footer__social-link-item">
            <a href="https://github.com/consumer-tasks" title="Link to Github Profile" class="social-link">
              <i class="fab fa-github-alt fa-2x"></i>
            </a>
          </li>
          <li class="footer__social-link-item">
            <a href="https://www.linkedin.com/in/michaelwen628" title="Link to Linkedin Profile" class="social-link">
              <i class="fab fa-linkedin-in fa-2x"></i>
            </a>
          </li>
        </ul>

        <p>&copy; <script>document.write(new Date().getFullYear())</script>- Michael.</p>
      </div>
    </footer>

    <a href="#top" class="back-to-top" title="Back to Top">
      <img
        src="./images/arrow-up.svg"
        alt="Back to Top"
        class="back-to-top__image"
      />
    </a>
    <script src="./main.js"></script>
  </body>
</html>
