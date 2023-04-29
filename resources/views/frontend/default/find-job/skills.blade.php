@extends('frontend.default.layouts.app')

@section('content')
<section class="py-4 py-lg-5">
  <div class="container">
    <div>
      <h1 class="mt-5  " style="color:#50A907;">Find the best freelance jobs</h1>
      <h6 class="my-4">Browse jobs posted on Upwork, or jump right in and create a free profile to find the work that
        you love to do.
      </h6>
      <div class="d-flex align-items-center">
        <div> <button class="btn btn rounded-pill px-4 fs-16" style="background-color:#50A907; color:white;">Find work
          </button>
        </div>
        <div class="d-flex ml-5">
          <div><img src="{{url('/public/assets/findJob/video.png')}}" alt="Image" "
              class=" mr-3 rounded-2" style=" width:15px; height:15px; color:#4FA808; background-color:#4FA808;">
          </div>
          <div><span class="fs-16" style="color:#4FA808;"> Watch a demo</span></div>

        </div>
      </div>
    </div>
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


      <div class="col-lg-9">
        <h3 class="mb-4">Explore remote jobs</h3>
        <div class=" input-group">
          <input id="search-input" type="search" class="form-control rounded-pill"
            placeholder="Try skill like PHP  JAVASCRIPT,">
          <button id="search-button" type="button" class=" rounded-2  ">
            <img src="{{url('/public/assets/findJob/search.png')}}" alt="Image" class=" " />
          </button>
        </div>

        <div class=" mt-5 mb-3 fs-20"> 0-9
        </div>

        <div class=" row">
          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">
            <p>
              3D Visualizations Freelancer</p>
            <p>3D Printing Expert</p>

          </div>
          <div class=" col-lg-4 fs-16 " style=" color:#5E6D55;">
            <p>
              2D Game Art Freelancer</p>
            <p>
              3D Rendering Artist</p>


          </div>
          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>
              3D Modeler
            </p>
            <p>
              3D Designers & Artist</p>

          </div>

        </div>
        <div class="mt-5 mb-3 fs-20"> A</div>
        <div class=" row">

          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>
              Amazon FBA Specialist</p>
            <p>
              Arts Freelancer</p>
            <p>Anime Freelancer</p>
            <p>
              Album Cover Designer</p>
            <p>Adobe Acrobat Expert</p>
            <p>Audio Production Specialist</p>
            <p>Ad Creative Freelancer</p>
            <p>Android Studio Freelancer</p>
            <p>ASP.NET Developer</p>
            <p>ArcGIS Developer</p>
            <p>App Store Specialist</p>
          </div>
          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>
              Amazon Seller Central Consultant</p>
            <p>
              Adobe After Effects Specialist</p>
            <p>Adobe Premiere Pro Specialist</p>
            <p>
              Actor</p>
            <p>Adobe Photoshop Expert</p>
            <p>
              Acrylic Painter</p>
            <p>
              Audio Mixer</p>
            <p>Apple Xcode Specialist</p>
            <p>Apache Spark Specialist</p>
            <p>AWS Developer</p>
            <p>AutoCAD Civil 3D Freelancer</p>
          </div>
          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>Administrative Assistant</p>
            <p>Adobe InDesign Expert</p>
            <p>Animator</p>
            <p>Adobe Illustrator Expert</p>
            <p>Adobe Photoshop Lightroom Speciali</p>
            <p>Audio Editor</p>
            <p>Android App Developer</p>
            <p>Amazon EC2 Specialist</p>
            <p>API Developer</p>
            <p>Alexa Skill Kit Specialist</p>
            <p>Artificial Intelligence Engineer</p>

          </div>

        </div>
        <div class="mt-5 mb-3 fs-20"> B</div>
        <div class=" row">

          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>
              Book Designer</p>
            <p>
              Branding Freelancer</p>
            <p>Blockchain Developer</p>
            <p>
              Bot Developer</p>
            <p>Business Process Modeling Specialist</p>
            <p>Bahasa Indonesia Freelancer</p>

          </div>
          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>

              Business Presentation Freelancer</p>
            <p>
              Blender3D Specialist</p>
            <p>Babylon.js Freelancer</p>
            <p>
              Bookkeeper</p>
            <p>Business Law Freelancer</p>
            <p>
              Bulgarian Translators & Writer
            </p>
            <p>

          </div>
          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>Brochure Designer</p>
            <p>
              Book Cover Designer</p>
            <p>BigQuery Developer</p>
            <p>Business Coache</p>
            <p>Buying Freelancer</p>
            <p>Blog Writer</p>

          </div>

        </div>
        <div class="mt-5 mb-3 fs-20"> C</div>
        <div class=" row">

          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>
              Contact lists Freelancer</p>
            <p>
              Computer Engineer</p>
            <p>Cartographer</p>
            <p>Character Designer</p>
            <p>CSS Developer</p>
            <p>CodeIgniter Developer</p>
            <p>C++ Programmers & Developer</p>
            <p>Consultant</p>
            <p>Contract Drafter</p>
            <p>Constant Contact Specialist</p>
            <p>CAD Freelancer</p>



          </div>
          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>

              Chat Support Specialist</p>
            <p>

              Catalog Freelancer</p>
            <p>CorelDRAW Specialist</p>
            <p>
              Comic Artist</p>
            <p>Cloud Computing Specialist</p>
            <p>
              CRM Specialist</p>
            <p>
              Computer Vision Engineer</p>
            <p>Contract Law Lawyers & Legal Profe</p>
            <p>Criminal Law Lawyers & Legal Profes</p>
            <p>Content Marketer</p>

          </div>
          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>Chemist</p>
            <p>Calendar Management Specialist</p>
            <p>Children's Book Illustrator</p>
            <p>Compositing Specialist</p>
            <p>Chatbot Developer</p>
            <p>Chrome Extension Developer</p>
            <p>C# Developers & Programmer</p>
            <p>C2 Specialist</p>
            <p>CPA Developer</p>
            <p>C Kit Specialist</p>
            <p>Cad Engineer</p>

          </div>

        </div>
        <div class="mt-5 mb-3 fs-20"> D</div>
        <div class=" row">

          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>
              Dropshipper</p>
            <p>
              Data Entry Specialist</p>
            <p>Data Scraper</p>
            <p>
              Digital Artist</p>
            <p>
              Data Extraction Specialist</p>
            <p>
              Data Visualization Specialist</p>
            <p>Database Designer</p>
            <p>Digital Signal Processing Specialist</p>
            <p>Dietitian</p>

          </div>
          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>
              Desktop Publishing Specialist</p>
            <p>
              Drawer</p>
            <p>Digital Design Freelancer</p>
            <p>
              ActDatabase Design and Construction Freelanceror</p>
            <p>Django Freelancer</p>

            <p>Data Miner</p>
            <p>Deep Learning Expert</p>
            <p>Data Analyst</p>
          </div>
          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>Data Scientist</p>
            <p>d3.js Developer</p>
            <p>DevOps Engineer</p>
            <p>Docker Specialist</p>
            <p>Delphi Developer</p>
            <p>Data Cleansing Analyst</p>
            <p>Data analytics Freelancer</p>
            <p>Digital Marketer</p>
            <p>Drafting Specialist</p>


          </div>

        </div>
        <div class="mt-5 mb-3 fs-20"> E</div>
        <div class=" row">

          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>
              Excel Freelancer</p>
            <p>
              eBay Listing Writer</p>
            <p>Anime Freelancer</p>
            <p>
              Error Detection Freelancer</p>
            <p>Email Handler</p>
            <p>Etsy Administration Specialist</p>
            <p>Excel Expert</p>
            <p>ePub Specialist</p>
            <p>ESP32 Freelancer</p>
            <p>Elementor Freelancer</p>
            <p>ERPNext Specialist</p>
          </div>
          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>
              Erlang Developers & Programmer</p>
            <p>
              Employment Law Lawyers & Legal Professional</p>
            <p>Event Planner</p>
            <p>

              Electronics Specialist</p>
            <p>Engineering Drawing Specialist</p>
            <p>
              Electrical Drawing Specialist</p>
            <p>
              Estimating Freelancer</p>
            <p>Electrical Engineer</p>
            <p>Estimator Specialist</p>
            <p>English - India Freelancer</p>
            <p>Estonian Freelancer</p>
          </div>
          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>English to Dutch Translator</p>
            <p>English to Italian Translator</p>
            <p>Essay Writer</p>
            <p>English to Portuguese Translator</p>
            <p>English to Korean Translator</p>
            <p>English to Spanish Translator</p>
            <p>Ebook Writer</p>
            <p>Amazon EC2 Specialist</p>
            <p>English Proofreader</p>
            <p>English to Malay Translator</p>
            <p>English to Polish Translator</p>

          </div>

        </div>
        <div class="mt-5 mb-3 fs-20"> F</div>
        <div class=" row">

          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>
              Fashion Illustrator</p>
            <p>
              Flyer Designer</p>
            <p>FFmpeg Specialist</p>
            <p>Financial Modeler</p>
            <p> Fusion 360 Specialist</p>


          </div>
          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>
              Fashion Designer</p>
            <p>
              Flutter Developer</p>
            <p>Figma Freelancer</p>
            <p>
              Front-End Developer</p>

            <p>
              Financial Analyst</p>
          </div>
          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>Family Law Lawyers & Legal Professional</p>
            <p>Facebook Ads Manager Freelancer</p>
            <p>Fusion 360 Specialist</p>
            <p>French Specialist</p>
            <p>Financial Writer</p>
            <p>Filipino Translators & Writer</p>


          </div>

        </div>
        <div class="mt-5 mb-3 fs-20"> G</div>
        <div class=" row">

          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>
              Graphic Designer</p>
            <p>
              Genesis Framework Freelancer</p>
            <p>Google Apps Script Freelancer</p>
            <p>
              Google Sheets Freelancer</p>
            <p>Game Designer</p>

          </div>
          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>
              Geographic Information System (GIS) Developer</p>
            <p>
              Google Cloud Platform Developer</p>
            <p>Google Data Studio Specialist</p>
            <p>
              Google AdWords Expert</p>
            <p>Google Analytics Expert</p>

          </div>
          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>German - Germany Freelancer</p>
            <p>Grammar Freelancer</p>
            <p>Ghostwriter</p>
            <p>German Specialist</p>
            <p>Grant Writer</p>

          </div>

        </div>
        <div class="mt-5 mb-3 fs-20"> H</div>
        <div class=" row">

          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>
              HTML Developer</p>
            <p>HubSpot Specialist</p>

          </div>
          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>
              Haskell Developers & Programmer</p>

          </div>
          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">


            <p>High-Ticket Closing Freelancer</p>


          </div>

        </div>
        <div class="mt-5 mb-3 fs-20"> I</div>
        <div class=" row">

          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>
              Illustrator</p>
            <p>
              Image/Object Recognition Freelancer</p>
            <p>iOS Developer</p>
            <p>
              Information Security Analyst</p>
            <p>IBM SPSS Specialist</p>
            <p>Interior Architecture Specialist</p>
            <p>Italian Specialist</p>

          </div>
          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>
              iPhone App Developer</p>
            <p>
              IT Outsourcing Freelancer</p>
            <p>Instructional Designer</p>
            <p>
              Immigration Law Lawyers & Legal Professional</p>
            <p>International Law Lawyers & Legal Professional</p>

          </div>
          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>Intellectual Property Law Lawyers & Legal Professional</p>
            <p>Instagram Freelancer</p>
            <p>Industrial Designer</p>
            <p>Injection Mold Design Freelancer</p>
            <p>Interior Designer</p>


          </div>

        </div>
        <div class="mt-5 mb-3 fs-20"> J</div>
        <div class=" row">

          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>
              Jewelry Designer</p>
            <p>
              JavaScript Developer</p>

          </div>
          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>
              Job Description Writer</p>
            <p>
              Japanese Translators & Writer</p>

          </div>
          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>Japanese to English Translator</p>


          </div>

        </div>
        <div class="mt-5 mb-3 fs-20"> K</div>
        <div class=" row">

          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>
              Kindle Direct Publishing Freelancer</p>

          </div>
          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>
              Korean to English Translator</p>

          </div>
          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>Korean Translators & Writer</p>


          </div>

        </div>
        <div class="mt-5 mb-3 fs-20"> L</div>
        <div class=" row">

          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">
            <p>Logo Freelancer</p>
            <p>Logo Designer</p>
            <p>Lyrics Video Freelancer</p>
            <p>Logo Animation Freelancer</p>
            <p>Legal Consultant</p>
            <p>Legal Researcher</p>
            <p>Legal Writer</p>
          </div>
          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">
            <p>Legal Researcher</p>
            <p>Legal Transcriptionist</p>
            <p>Legal Assistance Specialist</p>
            <p>Lead lists Freelancer</p>
            <p>Link Builder</p>
            <p>LinkedIn Specialist</p>
            <p>Lead Generation Specialist</p>

          </div>
          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>Landscape Designer</p>
            <p>LabVIEW Specialist</p>
            <p>Line Editing Freelancer</p>
            <p>Latvian Translators & Writer</p>
            <p>Lyrics Writer</p>
            <p>LaTeX Editor</p>
            <p>Literature Reviewer</p>
          </div>

        </div>
        <div class="mt-5 mb-3 fs-20"> M</div>
        <div class=" row">

          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>Microsoft Project Specialist</p>

            <p>Medical Freelancer</p>
            <p>Microsoft Word Expert</p>
            <p>Medical Coders, Biller</p>
            <p>Medical Transcriptionist</p>
            <p>Marketing Presentation Freelancer</p>
            <p>Male Voice Over Artist</p>
            <p>Music Producer</p>
            <p>Mathematics Teachers & Tutor</p>
          </div>
          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>Musical Composition Specialist</p>

            <p>Medical Illustrator</p>
            <p>Mobile App Design Freelancer</p>
            <p>Microsoft Excel PowerPivot Specialist</p>
            <p>Microsoft Power BI Specialist</p>
            <p>Mobile App Developer</p>
            <p>Microsoft SQL Server Developer</p>
            <p>Microsoft Teams Freelancer</p>

          </div>
          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">


            <p>Microsoft Dynamics 365 Freelancer</p>

            <p>MQL 4 Specialist</p>
            <p>Magento Developer</p>
            <p>MS Office 365 Specialist</p>
            <p>Microsoft Visio Specialist</p>
            <p>Management Consultant</p>
            <p>Marketing Freelancer</p>
            <p>MATLAB Developer</p>
            <p>Mechanical Engineer</p>


          </div>

        </div>
        <div class="mt-5 mb-3 fs-20"> N</div>
        <div class=" row">

          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>
              Narrator</p>

          </div>
          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>
              NopCommerce Developer</p>

          </div>
          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>Non-Fiction Writer</p>

          </div>

        </div>
        <div class="mt-5 mb-3 fs-20"> O</div>
        <div class=" row">

          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">
            <p>Oberlo Freelancer</p>
            <p>OCR Tesseract Specialist</p>
            <p>Odoo Specialist</p>


          </div>
          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">
            <p>Ontologist</p>
            <p>Online Freelancer</p>
            <p>On-Page Optimization Expert</p>

          </div>
          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>Outbound Sales Specialist</p>
            <p>Online Writer</p>


          </div>

        </div>
        <div class="mt-5 mb-3 fs-20"> P</div>
        <div class=" row">

          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">


            <p>Project Manager</p>

            <p>PowerPoint Expert</p>
            <p>Podcasting Specialist</p>
            <p>Packaging Designer</p>
            <p>Piano Composition Specialist</p>
            <p>Photo Editor</p>
            <p>Product Photography Freelancer</p>
            <p>PowerPoint Freelancer</p>


          </div>
          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>Pitch Deck Writer</p>

            <p>Portrait Painter</p>
            <p>Performance Tuner</p>
            <p>PyTorch Freelancer</p>
            <p>Page Speed Optimization Freelancer</p>
            <p>PHP Developer</p>
            <p>Presentation Designer</p>
            <p>Photo Retoucher</p>




          </div>
          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>PPC Advertising Specialist</p>
            <p>Photographer</p>
            <p>PostgreSQL Developers & DBA</p>
            <p>Python Script Freelancer</p>

            <p>Product Upload Freelancer</p>
            <p>Paralegals Professional</p>
            <p>PPC Advertising Specialist</p>

          </div>

        </div>
        <div class="mt-5 mb-3 fs-20"> Q</div>
        <div class=" row">

          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>
              Quality Control Freelancer</p>

          </div>
          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>
              Qt Developer</p>

          </div>
          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>QuickBooks Consultant</p>


          </div>

        </div>
        <div class="mt-5 mb-3 fs-20"> R</div>
        <div class=" row">

          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>Real Estate Freelancer</p>
            <p>Reaper Freelancer</p>
            <p>Resume Design Freelancer</p>
            <p>Ruby on Rails Developer</p>
            <p>React.js Developer</p>
            <p>React Native Developer</p>
            <p>Responsive Web Designer</p>
          </div>
          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">
            <p>R Developers & Programmer</p>
            <p>Raspberry Pi Developer</p>
            <p>Real Estate Acquisition FreelancerRecruiters & Recruitment Consultant</p>
            <p>Recruiters & Recruitment Consultant</p>
            <p>Reverse Engineer</p>
            <p>Romance Freelancer</p>
            <p>Recipe Writer</p>
          </div>
          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>
              Research Paper Writer</p>
            <p>Resume Writer</p>
            <p>Romanian Translators & Writer</p>
            <p>Resume Freelancer</p>
            <p>Research Specialist</p>
            <p>Resume Writer</p>
            <p>Reaper Freelancer</p>


          </div>

        </div>
        <div class="mt-5 mb-3 fs-20"> S</div>
        <div class=" row">

          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>Spreadsheets Specialist</p>
            <p>Survey Freelancer</p>
            <p>Selenium Developer</p>
            <p>Selenium WebDriver Specialist</p>
            <p>Smart Contracts Freelancer</p>
            <p>Salesforce Expert</p>
            <p>Sewing Freelancer</p>
            <p>Signage Freelancer</p>
            <p>Scriptwriting Freelancer</p>
            <p>Storyboard Freelance</p>
          </div>
          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">
            <p>SQL Developer</p>
            <p>SAS Specialist</p>
            <p>Shopify Developer</p>
            <p>Software QA Tester</p>
            <p>SquareSpace Developer</p>
            <p>SSL Specialist</p>
            <p>Stata Specialist</p>
            <p>Statistics Specialist</p>
            <p>Shopware Specialist</p>
            <p>Stock Management Specialist</p>
          </div>
          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">
            <p>Startup Consultant</p>
            <p>SEO Backlinking Specialist</p>
            <p>SEO Expert</p>
            <p>SEO Keyword Researcher</p>
            <p>SEO Keyword Researcher</p>
            <p>Social Media Marketer</p>
            <p>Social Media Manager</p>
            <p>SolidWorks Designer</p>
            <p>SketchUp Specialist</p>
            <p>Scientific Researcher</p>

          </div>

        </div>
        <div class="mt-5 mb-3 fs-20"> T</div>
        <div class=" row">

          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>Task Coordination Freelancer</p>
            <p>Technical Support Specialist</p>
            <p>Transcriptionist</p>
            <p>Time Management Specialist</p>
            <p>Typesetter</p>
          </div>
          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>Textile Design Freelancer</p>
            <p>TradeStation Specialist</p>
            <p>Tableau Consultant</p>
            <p>Tax Preparer</p>
            <p>Trademarks Freelancer</p>

          </div>
          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>Tax Law Lawyers & Legal Professional</p>
            <p>Tutoring Freelancer</p>
            <p>Technical Writer</p>
            <p>Thai Translators & Writer</p>
            <p>Translator</p>


          </div>

        </div>
        <div class="mt-5 mb-3 fs-20"> U</div>
        <div class=" row">

          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>
              Unity3D Freelancer</p>
            <p>
              UX Designer</p>

          </div>
          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>
              UI Designer</p>
            <p>
              Unity Developerist</p>

          </div>
          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>Ukrainian Translators & Writer</p>


          </div>

        </div>
        <div class="mt-5 mb-3 fs-20"> V</div>
        <div class=" row">

          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>
              Virtual Assistant</p>
            <p>
              Visual Design Freelancer</p>
            <p>Video Editor</p>
            <p>
              Videographer</p>
            <p>Adobe Acrobat Expert</p>
            <p>Vector Art Freelancer</p>
            <p>Voice Acting Freelancer</p>

          </div>
          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>
              Voice Over American Accent Specialist</p>
            <p>
              Vector Illustration Freelancer</p>
            <p>VFX Animation Specialist</p>
            <p>
              Actor</p>
            <p>Voice Over Actor</p>
            <p>
              Voice Talent</p>
            <p>
              Vector Tracing Freelancer</p>

          </div>
          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>Video Producer</p>
            <p>Voice Recording Freelancer</p>
            <p>Vulnerability Assessment Specialist</p>
            <p>VB.NET Developer</p>
            <p>Vue.js Developer</p>
            <p>VBA Developer</p>
            <p>Verilog / VHDL Specialist</p>

          </div>

        </div>
        <div class="mt-5 mb-3 fs-20"> W</div>
        <div class=" row">

          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>Whiteboard Animator</p>
            <p>
              Website Freelancer</p>
            <p>WordPress Developer</p>
            <p>Website redesign Freelancer</p>
            <p>Windows PowerShell Developer</p>
            <p>Web Designer</p>

          </div>
          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>
              WebGL Developer</p>
            <p>
              Woocommerce Developer</p>
            <p>Wordpress Theme Freelancer</p>
            <p>
              Webflow Developer</p>
            <p>WebRTC Developer</p>
            <p>
              Web Scraper</p>
            <p>
              Website Developer</p>
            <p>Web Testing Specialist</p>

          </div>
          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>Web Application Freelancer</p>
            <p>Web Crawler Developer</p>
            <p>Web Services Specialist</p>
            <p>WiX Specialist</p>
            <p>Website Content Manager</p>
            <p>Web Content Freelancer</p>
            <p>Website Copywriting Freelancer</p>
            <p>Writer</p>


          </div>

        </div>
        <div class="mt-5 mb-3 fs-20"> X</div>
        <div class=" row">

          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>
              Xamarin Specialist</p>

          </div>
          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>
              Xero Specialist</p>

          </div>
          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>Xactimate Specialist</p>


          </div>

        </div>
        <div class="mt-5 mb-3 fs-20"> Y</div>
        <div class=" row">

          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>
              ouTube Freelancer</p>
          </div>
          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>
              YouTube API Developer</p>

          </div>


        </div>
        <div class="mt-5 mb-3 fs-20"> Z</div>
        <div class=" row">

          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>

              Zoom Video Conferencing Specialist</p>

          </div>
          <div class=" col-lg-4  fs-16 " style=" color:#5E6D55;">

            <p>
              Zapier Developer</p>

          </div>


        </div>
      </div>


    </div>

  </div>

  </div>

</section>

@endsection