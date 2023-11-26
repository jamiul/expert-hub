
<script type="text/javascript">
    // common js if required

    // Owl Caurasel Start Here
    $(document).ready(function() {
              $('.owl-carouselfour').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                  0: {
                    items: 1,
                    nav: false,
                    dots: false,
                  },

                  600: {
                    items: 2,
                    nav: false,
                    dots: false,
                  },

                  768: {
                    items: 3,
                    nav: false,
                    dots: false,
                  },

                  1000: {
                    items: 3,
                    nav: true,
                    dots: false,
                    loop: false,
                    margin:0,
                    autoWidth:false,
                  },
                  1200: {
                    items: 4,
                    nav: true,
                    dots: false,
                    loop: false,
                    margin:0,
                    autoWidth:false,
                  }
                }
              })
            });



            $(document).ready(function() {
              $('.owl-carouselfive').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                  0: {
                    items: 1,
                    nav: true
                  },
                  600: {
                    items: 3,
                    nav: false
                  },
                  1000: {
                    items: 4,
                    nav: true,
                    dots: false,
                    loop: false,
                    margin:0,
                    autoWidth:false,
                  }
                }
              })
            });

</script>


<script>
      $(document).ready(function () {
      $(".at-title").click(function () {
      $(this).toggleClass("active1").next(".at-tab").slideToggle().parent().siblings().find(".at-tab").slideUp().prev().removeClass("active1");
      });
      
      
      
      $(".carousel-inner .thumb").click(function () {
      if(!$(this).hasClass('active1'))
      {
      $(".carousel-inner .thumb").removeClass("active1");
      $(this).addClass("active1");        
      }
      });
      
      
      });
      
      
    </script>
	<script>
var x, i, j, l, ll, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);
</script>

<!-- Profile setting script -->
<script>
  $('.btn-toggle').click(function() {
    $(this).find('.btn').toggleClass('active');  
    
    if ($(this).find('.btn-primary').length>0) {
    	$(this).find('.btn').toggleClass('btn-primary');
    }
    if ($(this).find('.btn-danger').length>0) {
    	$(this).find('.btn').toggleClass('btn-danger');
    }
    if ($(this).find('.btn-success').length>0) {
    	$(this).find('.btn').toggleClass('btn-success');
    }
    if ($(this).find('.btn-info').length>0) {
    	$(this).find('.btn').toggleClass('btn-info');
    }
    
    $(this).find('.btn').toggleClass('btn-default');
       
});

$('form').submit(function(){
  var radioValue = $("input[name='options']:checked").val();
  if(radioValue){
     alert("You selected - " + radioValue);
   };
    return false;
});
</script>

<!-- Date time Picker js -->
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
<!-- Date time Picker js -->


<!-- Form Validation  -->

<script>
  const form = document.getElementById('form');
const username = document.getElementById('username');
const email = document.getElementById('email');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');

form.addEventListener('submit', e => {
    e.preventDefault();

    validateInputs();
});

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success')
}

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};

const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

const validateInputs = () => {
    const usernameValue = username.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const password2Value = password2.value.trim();

    if(usernameValue === '') {
        setError(username, 'Username is required');
    } else {
        setSuccess(username);
    }

    if(emailValue === '') {
        setError(email, 'Email is required');
    } else if (!isValidEmail(emailValue)) {
        setError(email, 'Provide a valid email address');
    } else {
        setSuccess(email);
    }

    if(passwordValue === '') {
        setError(password, 'Password is required');
    } else if (passwordValue.length < 8 ) {
        setError(password, 'Password must be at least 8 character.')
    } else {
        setSuccess(password);
    }

    if(password2Value === '') {
        setError(password2, 'Please confirm your password');
    } else if (password2Value !== passwordValue) {
        setError(password2, "Passwords doesn't match");
    } else {
        setSuccess(password2);
    }

};

</script>

<!-- Form Validation  -->





@stack('bottom_scripts')
