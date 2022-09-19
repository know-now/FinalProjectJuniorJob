@extends('layouts.template')

@section('content')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home Page</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
    />

    <link rel="stylesheet" href="/css/style_content.css" />
  </head>
  <body>
    <!-- landing page content -->
    <!-- box for junior -->
    <section class="">
      <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
          <div class="candidate col-md-6 text-center text-light p-5">
            <h4>I'm a junior</h4>

            <h3>GET A JOB</h3>
            <button
              type="button"
              class="btn btn-transparent btn-lg btn-Iam text-light mb-3"
            >
              CANDIDATE
            </button>
            <p>From resume building to interview</p>

            <a
              href="#how-it-works-candidate"
              id="link-how-candidate"
              class="link-light"
              >How it works</a
            >
          </div>

          <!-- box for company -->
          <div class="col-md-6 company text-center text-light p-5">
            <h4>I'm a company</h4>
            <h3>LOOKING FOR <span class="text-danger">A JUNIOR?</span></h3>
            <button
              type="button"
              class="btn btn-transparent btn-lg btn-Iam text-light mb-3"
            >
              COMPANY
            </button>
            <p>Discover new talants</p>

            <a
              href="#how-it-works-company"
              id="link-how-company"
              class="link-light"
              >How it works</a
            >
          </div>
        </div>
      </div>
    </section>
    <!-- about us  -->
    <section class="bg-light text-dark p-5 text-center">
      <div class="container">
        <div class="row align-items-center justyfy-content-between g-6">
          <div class="col-md-6 img-buildings">
            <img
              class="img-fluid d-none d-sm-block"
              src="/assets/home_img.png"
              alt="building with people"
            />
          </div>
          <div class="col-md-6">
            <h1>I love <span class="text-danger">berries</span></h1>
            <p class="lead">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae,
              error. Libero commodi repellat adipisci consequuntur voluptatibus
              facilis aliquid praesentium, exercitationem incidunt tempora
              corporis maxime, dicta sequi provident cumque possimus accusamus!
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- card how it works for company-->
    <section class="bg-light pb-5">
      <div class="container" id="how-it-works-company">
        <div class="row mb-4"><h3>HOW IT WORKS</h3></div>
        <div class="row text-center g-4">
          <div class="col-md">
            <div class="card bg-light text-dark h-100">
              <div class="card-body text-center">
                <div class="h1 mb-3">
                  <i class="bi bi-check-square"></i>
                </div>
                <h3 class="card-title mb-3">CREATE ACCOUNT</h3>
                <p class="card-text">
                  Set up your free dedicated company page in a few minutes.
                </p>
            
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="card bg-light text-dark h-100">
              <div class="card-body text-center">
                <div class="h1 mb-3">
                  <i class="bi bi-laptop"></i>
                </div>
                <h3 class="card-title mb-3">PUBLISH YOUR JOBS</h3>
                <p class="card-text">
                  Post all positions you need to fill. Be as specific as
                  possible.
                </p>
           
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="card bg-light text-dark h-100">
              <div class="card-body text-center">
                <div class="h1 mb-3">
                  <i class="bi bi-envelope-open-heart"></i>
                </div>
                <h3 class="card-title mb-3">GET BEST MATCHES</h3>
                <p class="card-text">
                  We will suggest top candidates matching your requirements.
                </p>

              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="card bg-light text-dark h-100">
              <div class="card-body text-center">
                <div class="h1 mb-3">
                  <i class="bi bi-telephone-outbound-fill"></i>
                </div>
                <h3 class="card-title mb-3">CONTACT AND HIRE</h3>
                <p class="card-text">
                  Start conversations with the best candidates. Hire better and
                  faster!
                </p>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- how it works candidate -->
    <section class="bg-light pb-5">
      <div class="container" id="how-it-works-candidate">
        <div class="row mb-4"><h3>HOW IT WORKS</h3></div>
        <div class="row text-center g-4">
          <div class="col-md">
            <div class="card bg-light text-dark h-100">
              <div class="card-body text-center">
                <div class="h1 mb-3">
                  <i class="bi bi-check-square"></i>
                </div>
                <h3 class="card-title mb-3">FILL YOUR PROFIL</h3>
                <p class="card-text">
                  Set up your free dedicated company page in a few minutes.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="card bg-light text-dark h-100">
              <div class="card-body text-center">
                <div class="h1 mb-3">
                  <i class="bi bi-laptop"></i>
                </div>
                <h3 class="card-title mb-3">GET PERFECT MATCHES</h3>
                <p class="card-text">
                  Post all positions you need to fill. Be as specific as
                  possible.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="card bg-light text-dark h-100">
              <div class="card-body text-center">
                <div class="h1 mb-3">
                  <i class="bi bi-envelope-open-heart"></i>
                </div>
                <h3 class="card-title mb-3">ACCEPT REQUEST</h3>
                <p class="card-text">
                  We will suggest top candidates matching your requirements.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="card bg-light text-dark h-100">
              <div class="card-body text-center">
                <div class="h1 mb-3">
                  <i class="bi bi-telephone-outbound-fill"></i>
                </div>
                <h3 class="card-title mb-3">GET A JOB</h3>
                <p class="card-text">
                  Start conversations with the best candidates. Hire better and
                  faster!
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- our teem -->
    <section class="team p-5">
      <div class="conatiner">
        <h2 class="text-center text-white">our TEAM</h2>
        <p class="lead text-center text-white mb-5">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod,
          ducimus.
        </p>
        <div class="row g-4">
          <div class="col-md-6 col-lg-3">
            <div class="card bd-light">
              <div class="card-body text-center">
                <img
                  src="https://randomuser.me/api/portraits/men/11.jpg"
                  class="rounded-circle mb-3"
                  alt=""
                />
                <h3 class="card-title mb-3">Denis</h3>
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Veritatis earum pariatur impedit sit culpa mollitia. Nostrum
                  amet cupiditate nemo!
                </p>

                <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-github text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="card bd-light">
              <div class="card-body text-center">
                <img
                  src="https://randomuser.me/api/portraits/women/12.jpg"
                  class="rounded-circle mb-3"
                  alt=""
                />
                <h3 class="card-title mb-3">Margo</h3>
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Veritatis earum pariatur impedit sit culpa mollitia. Nostrum
                  amet cupiditate nemo!
                </p>

                <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-github text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="card bd-light">
              <div class="card-body text-center">
                <img
                  src="https://randomuser.me/api/portraits/women/15.jpg"
                  class="rounded-circle mb-3"
                  alt=""
                />
                <h3 class="card-title mb-3">Bricia</h3>
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Veritatis earum pariatur impedit sit culpa mollitia. Nostrum
                  amet cupiditate nemo!
                </p>

                <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-github text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="card bd-light">
              <div class="card-body text-center">
                <img
                  src="https://randomuser.me/api/portraits/women/33.jpg"
                  class="rounded-circle mb-3"
                  alt=""
                />
                <h3 class="card-title mb-3">Kusuma</h3>
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Veritatis earum pariatur impedit sit culpa mollitia. Nostrum
                  amet cupiditate nemo!
                </p>

                <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-github text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="card bd-light">
              <div class="card-body text-center">
                <img
                  src="https://randomuser.me/api/portraits/women/13.jpg"
                  class="rounded-circle mb-3"
                  alt=""
                />
                <h3 class="card-title mb-3">Iveta</h3>
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Veritatis earum pariatur impedit sit culpa mollitia. Nostrum
                  amet cupiditate nemo!
                </p>

                <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-github text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
      crossorigin="anonymous"
    ></script>
    <script src="/js/script_content.js"></script>
  </body>
</html>

@endsection