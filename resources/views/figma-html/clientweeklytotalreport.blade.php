@extends('frontend.layouts.front-client-dashboard-layout')

@section('content')
<section class="client-dashboard mx-auto my-5">
  <div class="container">
    <div class="row">
      <div class="all-job-area d-flex justify-content-between">
        <div class="all-project">
          <h2>Weekly summary</h2>
        </div>
        <div class="post-job d-none">
          <button class="btn btn-postjob">Post a Job</button>
        </div>
      </div>
    </div>
    <!-- short area start Here -->
    <div class="row all-padding-bottom ">
      <div class="short-by-area">
        <div class="select-date-report">
          <div class="date-item">
            <p class="d-none">Sort By</p>
            <div class="study-level">
                <div class="calendar-box">
                  <input type="text" id="dateInput" placeholder="Start Date">
                  <div class="calendar" id="calendar">
                    <div class="header">
                      <button id="prevBtn"><i class="fa fa-angle-left"></i></button>
                      <h2 id="monthYear">Month Year</h2>
                      <button id="nextBtn"><i class="fa fa-angle-right"></i></button>
                    </div>
                    <div class="days" id="daysContainer"></div>
                  </div>
                </div>
              </div>

          </div>
          <div class="short-by-select short-report">
            <select class="form-select according-select" aria-label="Default select example">
              <option selected>All teams</option>
              <option value="1">All teams</option>
              <option value="2">All teams</option>
              <option value="3">All teams</option>
            </select>
          </div>
        </div>
        <div class="divided d-none"></div>
        <div class="search-by d-none">
          <form class="example search-form">
            <input type="text" placeholder="Search by contract, client, or company" name="search">
            <button type="submit">
              <i class="fa fa-search"></i>
            </button>
          </form>
        </div>
      </div>
    </div>
    <!-- short area start Here -->
    <!-- edit draft area start Here -->



    <div class="row">
      <div class="col-md-12">
        <div class="activity-area d-flex flex-column">
          <div class="activity-title d-flex">
            <h5>Hourly</h5>
          </div>
          <div class="activity-content d-flex flex-column">
              <h5>Top 5 Activities</h5>
              <p>There is no data for the selected week</p>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="activity-area-fixed d-flex flex-column">
          <div class="activity-title d-flex">
            <h5>Fixed</h5>
          </div>
          <div class="activity-content d-flex flex-column">
              <h5>Top 5 Activities</h5>
              <p>There is no data for the selected week</p>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- edit draft area end Here -->
  </div>
</section>


<script>
      const daysContainer = document.getElementById("daysContainer");
      const prevBtn = document.getElementById("prevBtn");
      const nextBtn = document.getElementById("nextBtn");
      const monthYear = document.getElementById("monthYear");
      const dateInput = document.getElementById("dateInput");
      const calendar = document.getElementById("calendar");
      
      let currentDate = new Date();
      let selectedDate = null;
      
      function handleDayClick(day) {
        selectedDate = new Date(
          currentDate.getFullYear(),
          currentDate.getMonth(),
          day
        );
        dateInput.value = selectedDate.toLocaleDateString("en-US");
        calendar.style.display = "none";
        renderCalendar();
      }
      
      function createDayElement(day) {
        const date = new Date(currentDate.getFullYear(), currentDate.getMonth(), day);
        const dayElement = document.createElement("div");
        dayElement.classList.add("day");
      
        if (date.toDateString() === new Date().toDateString()) {
          dayElement.classList.add("current");
        }
        if (selectedDate && date.toDateString() === selectedDate.toDateString()) {
          dayElement.classList.add("selected");
        }
      
        dayElement.textContent = day;
        dayElement.addEventListener("click", () => {
          handleDayClick(day);
        });
        daysContainer.appendChild(dayElement);
      }
      
      function renderCalendar() {
        daysContainer.innerHTML = "";
        const firstDay = new Date(
          currentDate.getFullYear(),
          currentDate.getMonth(),
          1
        );
        const lastDay = new Date(
          currentDate.getFullYear(),
          currentDate.getMonth() + 1,
          0
        );
      
        monthYear.textContent = `${currentDate.toLocaleString("default", {
          month: "long"
        })} ${currentDate.getFullYear()}`;
      
        for (let day = 1; day <= lastDay.getDate(); day++) {
          createDayElement(day);
        }
      }
      
      prevBtn.addEventListener("click", () => {
        currentDate.setMonth(currentDate.getMonth() - 1);
        renderCalendar();
      });
      
      nextBtn.addEventListener("click", () => {
        currentDate.setMonth(currentDate.getMonth() + 1);
        renderCalendar();
      });
      
      dateInput.addEventListener("click", () => {
        calendar.style.display = "block";
        positionCalendar();
      });
      
      document.addEventListener("click", (event) => {
        if (!dateInput.contains(event.target) && !calendar.contains(event.target)) {
          calendar.style.display = "none";
        }
      });
      
      function positionCalendar() {
        const inputRect = dateInput.getBoundingClientRect();
        calendar.style.top = inputRect.bottom + "px";
        calendar.style.left = inputRect.left + "px";
      }
      
      window.addEventListener("resize", positionCalendar);
      
      renderCalendar();
          
    </script>
	

@endsection
