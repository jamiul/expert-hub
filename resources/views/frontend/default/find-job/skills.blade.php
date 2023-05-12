<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{url('/public/assets/frontend/default/css/custom.css')}}">
  <title>Document</title>
</head>

<body>
  @extends('frontend.default.layouts.app')

  @section('content')
  <section class="py-4 py-lg-5">
    <div class="container">
      <div>
        <h1 class="mt-5  " style="color:#50A907;">Find the best freelance jobs</h1>
        <h6 class="my-4 header">Browse jobs posted on Upwork, or jump right in and create a free profile to find the
          work that
          you love to do.
        </h6>
        <div class="d-flex align-items-center">
          <div> <button class="btn btn  px-4 fs-16" style="background-color:#58B38E; color:white;">Find work
            </button>
          </div>
          <div class="d-flex ml-5">
            <div><img src="{{url('/public/assets/findJob/video.png')}}" alt="Image" "
              class=" mr-3 rounded-2" style=" width:15px; height:15px; color:#4FA808; background-color:#58B38E;">
            </div>
            <div><span class="fs-16" style="color:#4FA808;"> Watch a demo</span></div>

          </div>
        </div>
      </div>
      <!-- Find Freelance Jobs  -->
      <div class=" my-5 fs-16">Find Freelance Jobs / </div>
      <div class="row mt-5">
        <div class="col-lg-3">
          <h3 class="text-left mb-4 ">
            Type of work

          </h3>
          <div class="aiz-radio-list">
            <label class="aiz-radio">
              <input type="radio" name="rating" value="">
              <span class="fs-16 active " style="color:#5E6D55;"> Any type of work</span>
              <span class="aiz-rounded-check"></span>
              <span class="float-right text-secondary fs-16"></span>
            </label>
            <label class="aiz-radio">
              <input type="radio" name="rating" value="4+">
              <span class="fs-16 " style="color:#5E6D55;"> Development & IT</span>

              <span class="aiz-rounded-check"></span>
              <span class="float-right text-secondary fs-12"></span>
            </label>
            <label class="aiz-radio">
              <input type="radio" name="rating" value="3-4">
              <span class=" fs-16 " style=" color:#5E6D55;"> Design & Creative</span>

              <span class="aiz-rounded-check"></span>
              <span class="float-right text-secondary fs-12"></span>
            </label>
            <label class="aiz-radio">
              <input type="radio" name="rating" value="2-3">

              <span class=" fs-16 " style=" color:#5E6D55;"> Finance & Accounting</span>

              <span class="aiz-rounded-check"></span>
              <span class="float-right text-secondary fs-12"></span>
            </label>
            <label class="aiz-radio">
              <input type="radio" name="rating" value="1-2">

              <span class=" fs-16 " style=" color:#5E6D55;"> Admin & Customer Support</span>

              <span class="aiz-rounded-check"></span>
              <span class="float-right text-secondary fs-12"></span>
            </label>
            <label class="aiz-radio">
              <input type="radio" name="rating" value="0-1">
              <span class=" fs-16 " style=" color:#5E6D55;"> Engineering & Architecture</span>

              <span class="aiz-rounded-check"></span>
              <span class="float-right text-secondary fs-12"></span>
            </label>
            <label class="aiz-radio">
              <input type="radio" name="rating" value="0-1">
              <span class=" fs-16 " style=" color:#5E6D55;"> Legal</span>

              <span class="aiz-rounded-check"></span>
              <span class="float-right text-secondary fs-12"></span>
            </label>
            <label class="aiz-radio">
              <input type="radio" name="rating" value="0-1">
              <span class=" fs-16 " style=" color:#5E6D55;"> Sales & Marketing</span>

              <span class="aiz-rounded-check"></span>
              <span class="float-right text-secondary fs-12"></span>
            </label>
            <label class="aiz-radio">
              <input type="radio" name="rating" value="0-1">
              <span class=" fs-16 " style=" color:#5E6D55;"> Writing & Translation</span>

              <span class="aiz-rounded-check"></span>
              <span class="float-right text-secondary fs-12"></span>
            </label>
            <label class="aiz-radio">
              <input type="radio" name="rating" value="0-1">
              <span class=" fs-16 " style=" color:#5E6D55;"> Apply Filter</span>

              <span class="aiz-rounded-check"></span>
              <span class="float-right text-secondary fs-12"></span>
            </label>

          </div>
        </div>

        <!-- Explore remote jobs -->

        <div class="col-lg-9">
          <h3 class="mb-4">Explore remote jobs</h3>
          <div class=" input-group position-relative">
            <input id="search-input" type="search" class="form-control " placeholder="Try skill like PHP  JAVASCRIPT,">
            <button type="button" class="btn btn-primary">
              Search
            </button>
          </div>


          <!-- <div class="container-fluid position-relative">
            <div class="row p-2 pt-3 pb-3 d-flex align-items-center">

              <div class="col-md-8">
                <div class="d-flex form-inputs">
                  <input class="form-control" type="text" placeholder="Search any product...">
                  <img src=" {{url('/public/assets/findJob/00.png')}}" alt="Image"
                    class=" position-absolute bottom-0 start-0 d-flex align-items-center"
                    style="width:14px; justify:center; align-items:center;  " />
                </div>
              </div>
            </div>
          </div> -->

          <div class=" mt-5 mb-3 fs-20"> 0-9
          </div>

          <div class=" row">
            <div class=" col-lg-4  fs-16  " style=" color:#5E6D55; ">
              <p class="skills cursor-pointer">
                3D Visualizations Freelancer</p>
              <p class="skills">3D Printing Expert</p>

            </div>
            <div class=" col-lg-4 fs-16 " style=" color:#5E6D55;">
              <p class="skills hover-underline style=" text-decoration:underline;">
                2D Game Art Freelancer</p>
              <p class="skills">
                3D Rendering Artist</p>


            </div>
            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">
                3D Modeler
              </p>
              <p class="skills">
                3D Designers & Artist</p>

            </div>

          </div>
          <div class="mt-5 mb-3 fs-20"> A</div>
          <div class=" row">

            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">
                Amazon FBA Specialist</p>
              <p class="skills">
                Arts Freelancer</p>
              <p class="skills">Anime Freelancer</p>
              <p class="skills">
                Album Cover Designer</p>
              <p class="skills">Adobe Acrobat Expert</p>
              <p class="skills">Audio Production Specialist</p>
              <p class="skills">Ad Creative Freelancer</p>
              <p class="skills">Android Studio Freelancer</p>
              <p class="skills">ASP.NET Developer</p>
              <p class="skills">ArcGIS Developer</p>
              <p class="skills">App Store Specialist</p>
            </div>
            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">
                Amazon Seller Central Consultant</p>
              <p class="skills">
                Adobe After Effects Specialist</p>
              <p class="skills">Adobe Premiere Pro Specialist</p>
              <p class="skills">
                Actor</p>
              <p class="skills">Adobe Photoshop Expert</p>
              <p class="skills">
                Acrylic Painter</p>
              <p class="skills">
                Audio Mixer</p>
              <p class="skills">Apple Xcode Specialist</p>
              <p class="skills">Apache Spark Specialist</p>
              <p class="skills">AWS Developer</p>
              <p class="skills">AutoCAD Civil 3D Freelancer</p>
            </div>
            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">Administrative Assistant</p>
              <p class="skills">Adobe InDesign Expert</p>
              <p class="skills">Animator</p>
              <p class="skills">Adobe Illustrator Expert</p>
              <p class="skills">Adobe Photoshop Lightroom Speciali</p>
              <p class="skills">Audio Editor</p>
              <p class="skills">Android App Developer</p>
              <p class="skills">Amazon EC2 Specialist</p>
              <p class="skills">API Developer</p>
              <p class="skills">Alexa Skill Kit Specialist</p>
              <p class="skills">Artificial Intelligence Engineer</p>

            </div>

          </div>
          <div class="mt-5 mb-3 fs-20"> B</div>
          <div class=" row">

            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">
                Book Designer</p>
              <p class="skills">
                Branding Freelancer</p>
              <p class="skills">Blockchain Developer</p>
              <p class="skills">
                Bot Developer</p>
              <p class="skills">Business Process Modeling Specialist</p>
              <p class="skills">Bahasa Indonesia Freelancer</p>

            </div>
            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">

                Business Presentation Freelancer</p>
              <p class="skills">
                Blender3D Specialist</p>
              <p class="skills">Babylon.js Freelancer</p>
              <p class="skills">
                Bookkeeper</p>
              <p class="skills">Business Law Freelancer</p>
              <p class="skills">
                Bulgarian Translators & Writer
              </p>
              <p class="skills">

            </div>
            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">Brochure Designer</p>
              <p class="skills">
                Book Cover Designer</p>
              <p class="skills">BigQuery Developer</p>
              <p class="skills">Business Coache</p>
              <p class="skills">Buying Freelancer</p>
              <p class="skills">Blog Writer</p>

            </div>

          </div>
          <div class="mt-5 mb-3 fs-20"> C</div>
          <div class=" row">

            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">
                Contact lists Freelancer</p>
              <p class="skills">
                Computer Engineer</p>
              <p class="skills">Cartographer</p>
              <p class="skills">Character Designer</p>
              <p class="skills">CSS Developer</p>
              <p class="skills">CodeIgniter Developer</p>
              <p class="skills">C++ Programmers & Developer</p>
              <p class="skills">Consultant</p>
              <p class="skills">Contract Drafter</p>
              <p class="skills">Constant Contact Specialist</p>
              <p class="skills">CAD Freelancer</p>



            </div>
            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">

                Chat Support Specialist</p>
              <p class="skills">

                Catalog Freelancer</p>
              <p class="skills">CorelDRAW Specialist</p>
              <p class="skills">
                Comic Artist</p>
              <p class="skills">Cloud Computing Specialist</p>
              <p class="skills">
                CRM Specialist</p>
              <p class="skills">
                Computer Vision Engineer</p>
              <p class="skills">Contract Law Lawyers & Legal Profe</p>
              <p class="skills">Criminal Law Lawyers & Legal Profes</p>
              <p class="skills">Content Marketer</p>

            </div>
            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">Chemist</p>
              <p class="skills">Calendar Management Specialist</p>
              <p class="skills">Children's Book Illustrator</p>
              <p class="skills">Compositing Specialist</p>
              <p class="skills">Chatbot Developer</p>
              <p class="skills">Chrome Extension Developer</p>
              <p class="skills">C# Developers & Programmer</p>
              <p class="skills">C2 Specialist</p>
              <p class="skills">CPA Developer</p>
              <p class="skills">C Kit Specialist</p>
              <p class="skills">Cad Engineer</p>

            </div>

          </div>
          <div class="mt-5 mb-3 fs-20"> D</div>
          <div class=" row">

            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">
                Dropshipper</p>
              <p class="skills">
                Data Entry Specialist</p>
              <p class="skills">Data Scraper</p>
              <p class="skills">
                Digital Artist</p>
              <p class="skills">
                Data Extraction Specialist</p>
              <p class="skills">
                Data Visualization Specialist</p>
              <p class="skills">Database Designer</p>
              <p class="skills">Digital Signal Processing Specialist</p>
              <p class="skills">Dietitian</p>

            </div>
            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">
                Desktop Publishing Specialist</p>
              <p class="skills">
                Drawer</p>
              <p class="skills">Digital Design Freelancer</p>
              <p class="skills">
                ActDatabase Design and Construction Freelanceror</p>
              <p class="skills">Django Freelancer</p>

              <p class="skills">Data Miner</p>
              <p class="skills">Deep Learning Expert</p>
              <p class="skills">Data Analyst</p>
            </div>
            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">Data Scientist</p>
              <p class="skills">d3.js Developer</p>
              <p class="skills">DevOps Engineer</p>
              <p class="skills">Docker Specialist</p>
              <p class="skills">Delphi Developer</p>
              <p class="skills">Data Cleansing Analyst</p>
              <p class="skills">Data analytics Freelancer</p>
              <p class="skills">Digital Marketer</p>
              <p class="skills">Drafting Specialist</p>


            </div>

          </div>
          <div class="mt-5 mb-3 fs-20"> E</div>
          <div class=" row">

            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">
                Excel Freelancer</p>
              <p class="skills">
                eBay Listing Writer</p>
              <p class="skills">Anime Freelancer</p>
              <p class="skills">
                Error Detection Freelancer</p>
              <p class="skills">Email Handler</p>
              <p class="skills">Etsy Administration Specialist</p>
              <p class="skills">Excel Expert</p>
              <p class="skills">ePub Specialist</p>
              <p class="skills">ESP32 Freelancer</p>
              <p class="skills">Elementor Freelancer</p>
              <p class="skills">ERPNext Specialist</p>
            </div>
            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">
                Erlang Developers & Programmer</p>
              <p class="skills">
                Employment Law Lawyers & Legal Professional</p>
              <p class="skills">Event Planner</p>
              <p class="skills">

                Electronics Specialist</p>
              <p class="skills">Engineering Drawing Specialist</p>
              <p class="skills">
                Electrical Drawing Specialist</p>
              <p class="skills">
                Estimating Freelancer</p>
              <p class="skills">Electrical Engineer</p>
              <p class="skills">Estimator Specialist</p>
              <p class="skills">English - India Freelancer</p>
              <p class="skills">Estonian Freelancer</p>
            </div>
            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">English to Dutch Translator</p>
              <p class="skills">English to Italian Translator</p>
              <p class="skills">Essay Writer</p>
              <p class="skills">English to Portuguese Translator</p>
              <p class="skills">English to Korean Translator</p>
              <p class="skills">English to Spanish Translator</p>
              <p class="skills">Ebook Writer</p>
              <p class="skills">Amazon EC2 Specialist</p>
              <p class="skills">English Proofreader</p>
              <p class="skills">English to Malay Translator</p>
              <p class="skills">English to Polish Translator</p>

            </div>

          </div>
          <div class="mt-5 mb-3 fs-20"> F</div>
          <div class=" row">

            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">
                Fashion Illustrator</p>
              <p class="skills">
                Flyer Designer</p>
              <p class="skills">FFmpeg Specialist</p>
              <p class="skills">Financial Modeler</p>
              <p class="skills"> Fusion 360 Specialist</p>


            </div>
            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">
                Fashion Designer</p>
              <p class="skills">
                Flutter Developer</p>
              <p class="skills">Figma Freelancer</p>
              <p class="skills">
                Front-End Developer</p>

              <p class="skills">
                Financial Analyst</p>
            </div>
            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">Family Law Lawyers & Legal Professional</p>
              <p class="skills">Facebook Ads Manager Freelancer</p>
              <p class="skills">Fusion 360 Specialist</p>
              <p class="skills">French Specialist</p>
              <p class="skills">Financial Writer</p>
              <p class="skills">Filipino Translators & Writer</p>


            </div>

          </div>
          <div class="mt-5 mb-3 fs-20"> G</div>
          <div class=" row">

            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">
                Graphic Designer</p>
              <p class="skills">
                Genesis Framework Freelancer</p>
              <p class="skills">Google Apps Script Freelancer</p>
              <p class="skills">
                Google Sheets Freelancer</p>
              <p class="skills">Game Designer</p>

            </div>
            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">
                Geographic Information System (GIS) Developer</p>
              <p class="skills">
                Google Cloud Platform Developer</p>
              <p class="skills">Google Data Studio Specialist</p>
              <p class="skills">
                Google AdWords Expert</p>
              <p class="skills">Google Analytics Expert</p>

            </div>
            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">German - Germany Freelancer</p>
              <p class="skills">Grammar Freelancer</p>
              <p class="skills">Ghostwriter</p>
              <p class="skills">German Specialist</p>
              <p class="skills">Grant Writer</p>

            </div>

          </div>
          <div class="mt-5 mb-3 fs-20"> H</div>
          <div class=" row">

            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">
                HTML Developer</p>
              <p class="skills">HubSpot Specialist</p>

            </div>
            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">
                Haskell Developers & Programmer</p>

            </div>
            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">


              <p class="skills">High-Ticket Closing Freelancer</p>


            </div>

          </div>
          <div class="mt-5 mb-3 fs-20"> I</div>
          <div class=" row">

            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">
                Illustrator</p>
              <p class="skills">
                Image/Object Recognition Freelancer</p>
              <p class="skills">iOS Developer</p>
              <p class="skills">
                Information Security Analyst</p>
              <p class="skills">IBM SPSS Specialist</p>
              <p class="skills">Interior Architecture Specialist</p>
              <p class="skills">Italian Specialist</p>

            </div>
            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">
                iPhone App Developer</p>
              <p class="skills">
                IT Outsourcing Freelancer</p>
              <p class="skills">Instructional Designer</p>
              <p class="skills">
                Immigration Law Lawyers & Legal Professional</p>
              <p class="skills">International Law Lawyers & Legal Professional</p>

            </div>
            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">Intellectual Property Law Lawyers & Legal Professional</p>
              <p class="skills">Instagram Freelancer</p>
              <p class="skills">Industrial Designer</p>
              <p class="skills">Injection Mold Design Freelancer</p>
              <p class="skills">Interior Designer</p>


            </div>

          </div>
          <div class="mt-5 mb-3 fs-20"> J</div>
          <div class=" row">

            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">
                Jewelry Designer</p>
              <p class="skills">
                JavaScript Developer</p>

            </div>
            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">
                Job Description Writer</p>
              <p class="skills">
                Japanese Translators & Writer</p>

            </div>
            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">Japanese to English Translator</p>


            </div>

          </div>
          <div class="mt-5 mb-3 fs-20"> K</div>
          <div class=" row">

            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">
                Kindle Direct Publishing Freelancer</p>

            </div>
            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">
                Korean to English Translator</p>

            </div>
            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">Korean Translators & Writer</p>


            </div>

          </div>
          <div class="mt-5 mb-3 fs-20"> L</div>
          <div class=" row">

            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">
              <p class="skills">Logo Freelancer</p>
              <p class="skills">Logo Designer</p>
              <p class="skills">Lyrics Video Freelancer</p>
              <p class="skills">Logo Animation Freelancer</p>
              <p class="skills">Legal Consultant</p>
              <p class="skills">Legal Researcher</p>
              <p class="skills">Legal Writer</p>
            </div>
            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">
              <p class="skills">Legal Researcher</p>
              <p class="skills">Legal Transcriptionist</p>
              <p class="skills">Legal Assistance Specialist</p>
              <p class="skills">Lead lists Freelancer</p>
              <p class="skills">Link Builder</p>
              <p class="skills">LinkedIn Specialist</p>
              <p class="skills">Lead Generation Specialist</p>

            </div>
            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">Landscape Designer</p>
              <p class="skills">LabVIEW Specialist</p>
              <p class="skills">Line Editing Freelancer</p>
              <p class="skills">Latvian Translators & Writer</p>
              <p class="skills">Lyrics Writer</p>
              <p class="skills">LaTeX Editor</p>
              <p class="skills">Literature Reviewer</p>
            </div>

          </div>
          <div class="mt-5 mb-3 fs-20"> M</div>
          <div class=" row">

            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">Microsoft Project Specialist</p>

              <p class="skills">Medical Freelancer</p>
              <p class="skills">Microsoft Word Expert</p>
              <p class="skills">Medical Coders, Biller</p>
              <p class="skills">Medical Transcriptionist</p>
              <p class="skills">Marketing Presentation Freelancer</p>
              <p class="skills">Male Voice Over Artist</p>
              <p class="skills">Music Producer</p>
              <p class="skills">Mathematics Teachers & Tutor</p>
            </div>
            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">Musical Composition Specialist</p>

              <p class="skills">Medical Illustrator</p>
              <p class="skills">Mobile App Design Freelancer</p>
              <p class="skills">Microsoft Excel PowerPivot Specialist</p>
              <p class="skills">Microsoft Power BI Specialist</p>
              <p class="skills">Mobile App Developer</p>
              <p class="skills">Microsoft SQL Server Developer</p>
              <p class="skills">Microsoft Teams Freelancer</p>

            </div>
            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">


              <p class="skills">Microsoft Dynamics 365 Freelancer</p>

              <p class="skills">MQL 4 Specialist</p>
              <p class="skills">Magento Developer</p>
              <p class="skills">MS Office 365 Specialist</p>
              <p class="skills">Microsoft Visio Specialist</p>
              <p class="skills">Management Consultant</p>
              <p class="skills">Marketing Freelancer</p>
              <p class="skills">MATLAB Developer</p>
              <p class="skills">Mechanical Engineer</p>


            </div>

          </div>
          <div class="mt-5 mb-3 fs-20"> N</div>
          <div class=" row">

            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">
                Narrator</p>

            </div>
            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">
                NopCommerce Developer</p>

            </div>
            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">Non-Fiction Writer</p>

            </div>

          </div>
          <div class="mt-5 mb-3 fs-20"> O</div>
          <div class=" row">

            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">
              <p class="skills">Oberlo Freelancer</p>
              <p class="skills">OCR Tesseract Specialist</p>
              <p class="skills">Odoo Specialist</p>


            </div>
            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">
              <p class="skills">Ontologist</p>
              <p class="skills">Online Freelancer</p>
              <p class="skills">On-Page Optimization Expert</p>

            </div>
            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">Outbound Sales Specialist</p>
              <p class="skills">Online Writer</p>


            </div>

          </div>
          <div class="mt-5 mb-3 fs-20"> P</div>
          <div class=" row">

            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">


              <p class="skills">Project Manager</p>

              <p class="skills">PowerPoint Expert</p>
              <p class="skills">Podcasting Specialist</p>
              <p class="skills">Packaging Designer</p>
              <p class="skills">Piano Composition Specialist</p>
              <p class="skills">Photo Editor</p>
              <p class="skills">Product Photography Freelancer</p>
              <p class="skills">PowerPoint Freelancer</p>


            </div>
            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">Pitch Deck Writer</p>

              <p class="skills">Portrait Painter</p>
              <p class="skills">Performance Tuner</p>
              <p class="skills">PyTorch Freelancer</p>
              <p class="skills">Page Speed Optimization Freelancer</p>
              <p class="skills">PHP Developer</p>
              <p class="skills">Presentation Designer</p>
              <p class="skills">Photo Retoucher</p>




            </div>
            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">PPC Advertising Specialist</p>
              <p class="skills">Photographer</p>
              <p class="skills">PostgreSQL Developers & DBA</p>
              <p class="skills">Python Script Freelancer</p>

              <p class="skills">Product Upload Freelancer</p>
              <p class="skills">Paralegals Professional</p>
              <p class="skills">PPC Advertising Specialist</p>

            </div>

          </div>
          <div class="mt-5 mb-3 fs-20"> Q</div>
          <div class=" row">

            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">
                Quality Control Freelancer</p>

            </div>
            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">
                Qt Developer</p>

            </div>
            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">QuickBooks Consultant</p>


            </div>

          </div>
          <div class="mt-5 mb-3 fs-20"> R</div>
          <div class=" row">

            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">Real Estate Freelancer</p>
              <p class="skills">Reaper Freelancer</p>
              <p class="skills">Resume Design Freelancer</p>
              <p class="skills">Ruby on Rails Developer</p>
              <p class="skills">React.js Developer</p>
              <p class="skills">React Native Developer</p>
              <p class="skills">Responsive Web Designer</p>
            </div>
            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">
              <p class="skills">R Developers & Programmer</p>
              <p class="skills">Raspberry Pi Developer</p>
              <p class="skills">Real Estate Acquisition FreelancerRecruiters & Recruitment Consultant</p>
              <p class="skills">Recruiters & Recruitment Consultant</p>
              <p class="skills">Reverse Engineer</p>
              <p class="skills">Romance Freelancer</p>
              <p class="skills">Recipe Writer</p>
            </div>
            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">
                Research Paper Writer</p>
              <p class="skills">Resume Writer</p>
              <p class="skills">Romanian Translators & Writer</p>
              <p class="skills">Resume Freelancer</p>
              <p class="skills">Research Specialist</p>
              <p class="skills">Resume Writer</p>
              <p class="skills">Reaper Freelancer</p>


            </div>

          </div>
          <div class="mt-5 mb-3 fs-20"> S</div>
          <div class=" row">

            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">Spreadsheets Specialist</p>
              <p class="skills">Survey Freelancer</p>
              <p class="skills">Selenium Developer</p>
              <p class="skills">Selenium WebDriver Specialist</p>
              <p class="skills">Smart Contracts Freelancer</p>
              <p class="skills">Salesforce Expert</p>
              <p class="skills">Sewing Freelancer</p>
              <p class="skills">Signage Freelancer</p>
              <p class="skills">Scriptwriting Freelancer</p>
              <p class="skills">Storyboard Freelance</p>
            </div>
            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">
              <p class="skills">SQL Developer</p>
              <p class="skills">SAS Specialist</p>
              <p class="skills">Shopify Developer</p>
              <p class="skills">Software QA Tester</p>
              <p class="skills">SquareSpace Developer</p>
              <p class="skills">SSL Specialist</p>
              <p class="skills">Stata Specialist</p>
              <p class="skills">Statistics Specialist</p>
              <p class="skills">Shopware Specialist</p>
              <p class="skills">Stock Management Specialist</p>
            </div>
            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">
              <p class="skills">Startup Consultant</p>
              <p class="skills">SEO Backlinking Specialist</p>
              <p class="skills">SEO Expert</p>
              <p class="skills">SEO Keyword Researcher</p>
              <p class="skills">SEO Keyword Researcher</p>
              <p class="skills">Social Media Marketer</p>
              <p class="skills">Social Media Manager</p>
              <p class="skills">SolidWorks Designer</p>
              <p class="skills">SketchUp Specialist</p>
              <p class="skills">Scientific Researcher</p>

            </div>

          </div>
          <div class="mt-5 mb-3 fs-20"> T</div>
          <div class=" row">

            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">Task Coordination Freelancer</p>
              <p class="skills">Technical Support Specialist</p>
              <p class="skills">Transcriptionist</p>
              <p class="skills">Time Management Specialist</p>
              <p class="skills">Typesetter</p>
            </div>
            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">Textile Design Freelancer</p>
              <p class="skills">TradeStation Specialist</p>
              <p class="skills">Tableau Consultant</p>
              <p class="skills">Tax Preparer</p>
              <p class="skills">Trademarks Freelancer</p>

            </div>
            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">Tax Law Lawyers & Legal Professional</p>
              <p class="skills">Tutoring Freelancer</p>
              <p class="skills">Technical Writer</p>
              <p class="skills">Thai Translators & Writer</p>
              <p class="skills">Translator</p>


            </div>

          </div>
          <div class="mt-5 mb-3 fs-20"> U</div>
          <div class=" row">

            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">
                Unity3D Freelancer</p>
              <p class="skills">
                UX Designer</p>

            </div>
            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">
                UI Designer</p>
              <p class="skills">
                Unity Developerist</p>

            </div>
            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">Ukrainian Translators & Writer</p>


            </div>

          </div>
          <div class="mt-5 mb-3 fs-20"> V</div>
          <div class=" row">

            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">
                Virtual Assistant</p>
              <p class="skills">
                Visual Design Freelancer</p>
              <p class="skills">Video Editor</p>
              <p class="skills">
                Videographer</p>
              <p class="skills">Adobe Acrobat Expert</p>
              <p class="skills">Vector Art Freelancer</p>
              <p class="skills">Voice Acting Freelancer</p>

            </div>
            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">
                Voice Over American Accent Specialist</p>
              <p class="skills">
                Vector Illustration Freelancer</p>
              <p class="skills">VFX Animation Specialist</p>
              <p class="skills">
                Actor</p>
              <p class="skills">Voice Over Actor</p>
              <p class="skills">
                Voice Talent</p>
              <p class="skills">
                Vector Tracing Freelancer</p>

            </div>
            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">Video Producer</p>
              <p class="skills">Voice Recording Freelancer</p>
              <p class="skills">Vulnerability Assessment Specialist</p>
              <p class="skills">VB.NET Developer</p>
              <p class="skills">Vue.js Developer</p>
              <p class="skills">VBA Developer</p>
              <p class="skills">Verilog / VHDL Specialist</p>

            </div>

          </div>
          <div class="mt-5 mb-3 fs-20"> W</div>
          <div class=" row">

            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">Whiteboard Animator</p>
              <p class="skills">
                Website Freelancer</p>
              <p class="skills">WordPress Developer</p>
              <p class="skills">Website redesign Freelancer</p>
              <p class="skills">Windows PowerShell Developer</p>
              <p class="skills">Web Designer</p>

            </div>
            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">
                WebGL Developer</p>
              <p class="skills">
                Woocommerce Developer</p>
              <p class="skills">Wordpress Theme Freelancer</p>
              <p class="skills">
                Webflow Developer</p>
              <p class="skills">WebRTC Developer</p>
              <p class="skills">
                Web Scraper</p>
              <p class="skills">
                Website Developer</p>
              <p class="skills">Web Testing Specialist</p>

            </div>
            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">Web Application Freelancer</p>
              <p class="skills">Web Crawler Developer</p>
              <p class="skills">Web Services Specialist</p>
              <p class="skills">WiX Specialist</p>
              <p class="skills">Website Content Manager</p>
              <p class="skills">Web Content Freelancer</p>
              <p class="skills">Website Copywriting Freelancer</p>
              <p class="skills">Writer</p>


            </div>

          </div>
          <div class="mt-5 mb-3 fs-20"> X</div>
          <div class=" row">

            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">
                Xamarin Specialist</p>

            </div>
            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">
                Xero Specialist</p>

            </div>
            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">Xactimate Specialist</p>


            </div>

          </div>
          <div class="mt-5 mb-3 fs-20"> Y</div>
          <div class=" row">

            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">
                ouTube Freelancer</p>
            </div>
            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">
                YouTube API Developer</p>

            </div>


          </div>
          <div class="mt-5 mb-3 fs-20"> Z</div>
          <div class=" row">

            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">

                Zoom Video Conferencing Specialist</p>

            </div>
            <div class=" col-lg-4  fs-16 cursor-pointer " style=" color:#5E6D55;">

              <p class="skills">
                Zapier Developer</p>

            </div>


          </div>
        </div>


      </div>

    </div>

    </div>

  </section>

  @endsection
</body>

</html>