@extends('frontend.layouts.front-client-dashboard-layout')

@section('content')
<section class="client-dashboard mx-auto my-5">
  <div class="container">
    <div class="row">
      <div class="all-project-area d-flex justify-content-between">
        <div class="all-project">
          <h2>Budgets</h2>
        </div>

      </div>
    </div>



    
    <!-- short area start Here -->
    <div class="row">
          <div class="select-report-budget">
            <select class="form-select" aria-label="Default select example">
              <option selected>Dr Mohammad Riyadh</option>
              <option value="1">Dr Mohammad Riyadh</option>
              <option value="2">Dr Mohammad Riyadh</option>
              <option value="3">Dr Mohammad Riyadh</option>
            </select>
          </div>
    </div>
    <!-- short area start Here -->

    <div class="row">
      <div class="col-12">
        <div class="balance-table-area d-flex flex-column">
            <table class="table table-hover transaction-all">
              <thead class="t-history">
                  <tr>
                    <th scope="col">Budget Name</th>
                    <th scope="col">Est</th>
                    <th scope="col">Used</th>
                    <th scope="col">Balance</th>
                  </tr>
              </thead>
              <tbody class="">
                <tr>
                  <td class="health-budget">Developing curriculum for Postgraduate public health unit</td>
                  <td>1500</td>
                  
                  <td>$400</td>
                  <td>$1100
                  in Budget</td>
                </tr>

                <tr>
                  <td>Developing curriculum for Postgraduate public health unit</td>
                  <td>1500</td>
                  
                  <td>$400</td>
                  <td>$1100
                  in Budget</td>
                </tr>

                <tr>
                  <td>Developing curriculum for Postgraduate public health unit</td>
                  <td>1500</td>
                  
                  <td>$400</td>
                  <td>$1100
                  in Budget</td>
                </tr>

                <tr>
                  <td>Developing curriculum for Postgraduate public health unit</td>
                  <td>1500</td>
                  
                  <td>$400</td>
                  <td>$1100
                  in Budget</td>
                </tr>

                <tr>
                  <td>Developing curriculum for Postgraduate public health unit</td>
                  <td>1500</td>
                  
                  <td>$400</td>
                  <td>$1100
                  in Budget</td>
                </tr>

                <tr>
                  <td>Developing curriculum for Postgraduate public health unit</td>
                  <td>1500</td>
                  
                  <td>$400</td>
                  <td>$1100
                  in Budget</td>
                </tr>

                <tr>
                  <td>Developing curriculum for Postgraduate public health unit</td>
                  <td>1500</td>
                  
                  <td>$400</td>
                  <td>$1100
                  in Budget</td>
                </tr>

                <tr>
                  <td>Developing curriculum for Postgraduate public health unit</td>
                  <td>1500</td>
                  
                  <td>$400</td>
                  <td>$1100
                  in Budget</td>
                </tr>

                <tr>
                  <td>Developing curriculum for Postgraduate public health unit</td>
                  <td>1500</td>
                  
                  <td>$400</td>
                  <td>$1100
                  in Budget</td>
                </tr>

                <tr>
                  <td>Developing curriculum for Postgraduate public health unit</td>
                  <td>1500</td>
                  
                  <td>$400</td>
                  <td>$1100
                  in Budget</td>
                </tr>

                <tr>
                  <td>Developing curriculum for Postgraduate public health unit</td>
                  <td>1500</td>
                  
                  <td>$400</td>
                  <td>$1100
                  in Budget</td>
                </tr>

                <tr>
                  <td>Developing curriculum for Postgraduate public health unit</td>
                  <td>1500</td>
                  
                  <td>$400</td>
                  <td>$1100
                  in Budget</td>
                </tr>

                
              </tbody>
            </table>

        </div>
      </div>
    </div>


    <!-- edit draft area start Here -->
    




    <!-- Pagination start Here -->
    <div class="row pagination-padding">
      <div class="pagination-area">
        <div class="pagination-left">
          <p>Showing 1 to 8 of 100 entries</p>
        </div>
        <div class="pagination-right">
          <div class="pagination-count">
            <div class="row g-3 align-items-center">
              <div class="col-auto">
                <label for="inputPassword6" class="col-form-label result-perpage">Results per page</label>
              </div>
              <div class="col-auto">
                <select class="form-select" aria-label="Default select example">
                  <option selected>5</option>
                  <option value="1">4</option>
                  <option value="2">3</option>
                  <option value="3">2</option>
                  <option value="3">1</option>
                </select>
              </div>
            </div>
          </div>
          <div class="pagination-next-prev">
            <ul class="pagination">
              <li class="page-item ">
                <a class="page-link">
                  <span class="material-symbols-outlined"> skip_previous </span>
                </a>
              </li>
              <li class="page-item ">
                <a class="page-link">
                  <span class="material-symbols-outlined"> arrow_left </span>
                </a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item " aria-current="page">
                <a class="page-link">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">
                  <span class="material-symbols-outlined"> arrow_right </span>
                </a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">
                  <span class="material-symbols-outlined"> skip_next </span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Pagination start Here -->
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
