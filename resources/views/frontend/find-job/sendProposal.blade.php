<! Doctype html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Boostrap4 accordion Example </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    body {
      background-color: lightgrey;
    }

    a {
      color: red;
    }

    .mb-0>a {
      display: block;
      position: relative;
    }

    h2 {
      font-style: italic;
      font-family: "Playfair Display? , serif;  
color: black;
      letter-spacing: -0.005em;
      word-spacing: 1px;
      font-size: 1.75em;
      font-weight: bold;
      margin-top: 20px;
      text-align: center;
    }

    .mb-0>a:after {
      content: "\f078";
      /* fa-chevron-down */
      font-family: 'FontAwesome';
      position: absolute;
      right: 0;
    }

    .mb-0>a[aria-expanded="true"]:after {
      content: "\f077";
      /* fa-chevron-up */
    }
    </style>

  <body>
    <h2> Boostrap4 Accordion Example </h2>
    <div id="accordion">
      <div class="card">
        <div class="card-header" id="heading-1">
          <h5 class="mb-0">
            <a role="button" data-toggle="collapse" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
              Accordion 1
            </a>
          </h5>
        </div>
        <div id="collapse-1" class="collapse show" data-parent="#accordion" aria-labelledby="heading-1">
          <div class="card-body">
            <div id="accordion-1">
              <div class="card">
                <div class="card-header" id="heading-1-1">
                  <h5 class="mb-0">
                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-1-1" aria-expanded="false"
                      aria-controls="collapse-1-1">
                      Accordion 1 > 1
                    </a>
                  </h5>
                </div>
                <div id="collapse-1-1" class="collapse" data-parent="#accordion-1" aria-labelledby="heading-1-1">
                  <div class="card-body">
                    <div id="accordion-1-1">
                      <div class="card">
                        <div class="card-header" id="heading-1-1-1">
                          <h5 class="mb-0">
                            <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-1-1-1"
                              aria-expanded="false" aria-controls="collapse-1-1-1">
                              Accordion 1 > 1 > 1
                            </a>
                          </h5>
                        </div>
                        <div id="collapse-1-1-1" class="collapse" data-parent="#accordion-1-1"
                          aria-labelledby="heading-1-1-1">
                          <div class="card-body">
                            Accordion 1 > 1 > 1
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="heading-1-1-2">
                          <h5 class="mb-0">
                            <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-1-1-2"
                              aria-expanded="false" aria-controls="collapse-1-1-2">
                              Accordion 1 > 1 > 2
                            </a>
                          </h5>
                        </div>
                        <div id="collapse-1-1-2" class="collapse" data-parent="#accordion-1-1"
                          aria-labelledby="heading-1-1-2">
                          <div class="card-body">
                            Accordion 1 > 1 > 2
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="heading-1-1-3">
                          <h5 class="mb-0">
                            <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-1-1-3"
                              aria-expanded="false" aria-controls="collapse-1-1-3">
                              Accordian1 > 1 > 3
                            </a>
                          </h5>
                        </div>
                        <div id="collapse-1-1-3" class="collapse" data-parent="#accordion-1-1"
                          aria-labelledby="heading-1-1-3">
                          <div class="card-body">
                            Accordion 1 > 1 > 3
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="heading-1-2">
                  <h5 class="mb-0">
                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-1-2" aria-expanded="false"
                      aria-controls="collapse-1-2">
                      Accordion 1 > 2
                    </a>
                  </h5>
                </div>
                <div id="collapse-1-2" class="collapse" data-parent="#accordion-1" aria-labelledby="heading-1-2">
                  <div class="card-body">
                    Accordion 1 > 2
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="heading-2">
          <h5 class="mb-0">
            <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-2" aria-expanded="false"
              aria-controls="collapse-2">
              Accordion 2
            </a>
          </h5>
        </div>
        <div id="collapse-2" class="collapse" data-parent="#accordion" aria-labelledby="heading-2">
          <div class="card-body">
            Accordion 2
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="heading-3">
          <h5 class="mb-0">
            <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-3" aria-expanded="false"
              aria-controls="collapse-3">
              Accordion 3
            </a>
          </h5>
        </div>
        <div id="collapse-3" class="collapse" data-parent="#accordion" aria-labelledby="heading-3">
          <div class="card-body">
            Accordion 3
          </div>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"> </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"> </script>
    <script>
    $("#accordion").on("hide.bs.collapse show.bs.collapse", e => {
      $(e.target)
        .prev()
        .find("i:last-child")
        .toggleClass("fa-minus fa-plus");
    });
    </script>
  </body>

  </html>